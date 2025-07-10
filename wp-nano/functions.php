<?php
add_filter( 'show_admin_bar', '__return_false' );

// アイキャッチ画像の有効化
add_theme_support( 'post-thumbnails' );

// スマホ判定
function is_mobile() {
  $useragents = array(
      'iPhone', // iPhone
      'iPod', // iPod touch
      'Android.*Mobile', // 1.5+ Android *** Only mobile
      'Windows.*Phone', // *** Windows Phone
      'dream', // Pre 1.5 Android
      'CUPCAKE', // 1.5+ Android
      'blackberry9500', // Storm
      'blackberry9530', // Storm
      'blackberry9520', // Storm v2
      'blackberry9550', // Storm v2
      'blackberry9800', // Torch
      'webOS', // Palm Pre Experimental
      'incognito', // Other iPhone browser
      'webmate' // Other iPhone browser

  );
  $pattern = '/'.implode('|', $useragents).'/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

// 投稿記事用。所属カテゴリに応じてクラス名を返す。
function get_class_name_by_category($slug) {
    switch ($slug) {
        case 'test':
            echo 'ctg01';
            break;
        case 'activity':
            echo 'ctg02';
            break;
        case 'news':
            echo 'ctg03';
            break;
        case 'event':
            echo 'ctg04';
            break;
        case 'publicity':
            echo 'ctg05';
            break;
        case 'works':
            echo 'ctg06';
            break;
    }
}

// 英語/日本語ページ切り替え
// 英語版ページがあるものだけスラッグ名をリンク先URLに付与する
function switch_lang($slug) {
    $target_slugs = array('curriculum','fuculty-member','support');
    if ( in_array($slug, $target_slugs) ) {
        echo $slug;
    }
}

//本体の更新通知を非表示
add_filter("pre_site_transient_update_core", "__return_null");
//プラグインの更新通知を非表示
add_filter("pre_site_transient_update_plugins", "__return_null");
//テーマの更新通知を非表示
add_filter("pre_site_transient_update_themes", "__return_null");

//ACFのプレビュー表示　↓ブロックエディターのプレビュー安定化
function fix_post_id_on_preview($null, $post_id) {
    if ( is_preview() && $post_id !== 'options' && substr( $null, 0, 6 ) != 'block_' ) {
        return get_the_ID();
    }
    else {
        $acf_post_id = isset($post_id->ID) ? $post_id->ID : $post_id;

        if (!empty($acf_post_id)) {
            return $acf_post_id;
        }
        else {
            return $null;
        }
    }
}
add_filter( 'acf/pre_load_post_id', 'fix_post_id_on_preview', 10, 2 );
//ACFのプレビュー表示　↓クラシックエディターでプレビュー可能
function get_preview_id($postId) {
    global $post;
    $previewId = 0;
    if ( isset($_GET['preview'])
            && ($post->ID == $postId)
                && $_GET['preview'] == true
                    &&  ($postId == url_to_postid($_SERVER['REQUEST_URI']))
        ) {
        $preview = wp_get_post_autosave($postId);
        if ($preview != false) { $previewId = $preview->ID; }
    }
    return $previewId;
}
 
add_filter('get_post_metadata', function($meta_value, $post_id, $meta_key, $single) {
    if ($preview_id = get_preview_id($post_id)) {
        if ($post_id != $preview_id) {
            $meta_value = get_post_meta($preview_id, $meta_key, $single);
        }
    }
    return $meta_value;
}, 10, 4);
 
add_action('wp_insert_post', function ($postId) {
    global $wpdb;
    if (wp_is_post_revision($postId)) {
        if (isset($_POST['fields']) and count($_POST['fields']) != 0) {
            foreach ($_POST['fields'] as $key => $value) {
                $field = get_field($key);
                if ( !isset($field['name']) || !isset($field['key']) ) continue;
                if (count(get_metadata('post', $postId, $field['name'], $value)) != 0) {
                    update_metadata('post', $postId, $field['name'], $value);
                    update_metadata('post', $postId, "_" . $field['name'], $field['key']);
                } else {
                    add_metadata('post', $postId, $field['name'], $value);
                    add_metadata('post', $postId, "_" . $field['name'], $field['key']);
                }
            }
        }
        do_action('save_preview_postmeta', $postId);
    }
});
?>
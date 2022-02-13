<?php
// アイキャッチ設定
add_theme_support('post-thumbnails');

// 固定ページ一覧
function get_page_list()
{
    $args = array('order'=>'desc','post_type'=>'page');
    $page_list = get_posts($args);
    return $page_list;
}

// カテゴリー一覧
function get_category_list()
{
    $args = array('orderby' => 'id','order' => 'desc','hide_empty' => 0);
    $categories = get_categories($args);
    return $categories;
}

// アーカイブページURL
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'articles';
    }
    return $args;
}

add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// JS・CSSファイルを読み込む
function add_files() {
	// WordPress提供のjquery.jsを読み込まない
	if (!is_admin()) {
        wp_deregister_script('jquery');
    }
	// infinitie JS
	wp_enqueue_script( 'infinite-scroll', get_template_directory_uri() . '/assets/js/plugin/infinite-scroll.pkgd.min.js', array(), false, false );
	// サイト共通JS
	wp_enqueue_script( 'smart-script', get_template_directory_uri() . '/lib/bundle.js', array(), false, true );

	// サイト共通のCSSの読み込み
	wp_enqueue_style( 'main', get_template_directory_uri() . '/lib/style.css', "", '' );
}
add_action('wp_enqueue_scripts', 'add_files');

remove_filter('pre_user_description', 'wp_filter_kses');

//１ページ目と2ページ目で表示する記事数を変える
define('PAGE_1ST', 4);  //１ページ目の記事数
define('PAGE_2ND', get_option( 'posts_per_page' )); //２ページ目の記事数
function change_posts_paging( $query ) {
  if ( is_admin() || !is_front_page() ){
    return; //フロントページでのみ動作
  }
  //現在のページを取得
  $paged = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
  if ($paged >= 2){ //２ページ目以降の時
    $query->set('offset', PAGE_1ST + PAGE_2ND*($paged-2));
    $query->set( 'posts_per_page', PAGE_2ND);
  }else {   //１ページ目の時
    $query->set( 'posts_per_page', PAGE_1ST );
  }
}
add_action( 'pre_get_posts', 'change_posts_paging' );

//next_pages_link()を正しく動かす
function found_offset( $found_posts, $query ) {

    $offset = PAGE_1ST;

    if( !is_admin() && $query->is_main_query() ) {
        $found_posts = $found_posts + $offset;
    }
    return $found_posts;
}
add_action( 'found_posts', 'found_offset', 10, 2 );
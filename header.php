<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-190761671-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-190761671-1');
</script>

<title><?php bloginfo(); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name=”description” content="マジメ人の自由研究所＿私にとって、「良い」ものをあなたに。">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta property="og:type" content="blog">
<?php
$image_src = esc_url( get_home_url() );

// if (is_single()){//単一記事ページの場合
// if(have_posts()): while(have_posts()): the_post();
// echo '<meta property="og:description" content="'.get_post_meta($post->ID, _aioseop_description, true).'">';echo "\n";//抜粋を表示
// endwhile; endif;
// echo '<meta property="og:title" content="'; the_title(); echo '">';echo "\n";//単一記事タイトルを表示
// echo '<meta property="og:url" content="'; the_permalink(); echo '">';echo "\n";//単一記事URLを表示
// } else {//単一記事ページページ以外の場合（アーカイブページやホームなど）
// echo '<meta property="og:description" content="'; bloginfo('description'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログの説明文を表示
// echo '<meta property="og:title" content="'; bloginfo('name'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログのタイトルを表示
// echo '<meta property="og:url" content="'; bloginfo('url'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログのURLを表示
// }
// $str = $post->post_content;
// $searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';//投稿にイメージがあるか調べる
// if (is_single()){//単一記事ページの場合
// if (has_post_thumbnail()){
// //投稿にサムネイルがある場合の処理
// $image_id = get_post_thumbnail_id();
// $image = wp_get_attachment_image_src( $image_id, 'full');

// echo '<meta property="og:image" content="'.$image_src.$image[0].'">';echo "\n";
// } else {
// //投稿にサムネイルも画像も無い場合の処理
// echo '<meta property="og:image" content="'.$image_src.'/assets/img/no-image.png">';echo "\n";
// }
// }

?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">

<!-- Zenone -->
<link rel="stylesheet" href="https://use.typekit.net/cqt1cim.css">
<?php wp_head(); ?>
<!-- Swiper -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</head>
<body <?php body_class(); ?>>
<header role="banner" class="header">
<div class="header-inner">
<div class="header-menu">
<div class="header-menu-humburger">
<span></span>
<span></span>
<span></span>
</div>
</div>
<h1 class="header-logo">
<a href="<?php echo $home; ?>">
<img src="<?php echo $wp_url; ?>/assets/img/logo_typo2.png" alt="majime-zine">
</a>
</h1>
<div class="header-social">
</div>
</div>

<nav class="p-nav">
<div class="p-nav-list">
<ul>
<li><a href="<?php echo $home; ?>">Top</a></li> 
<li><a href="<?php echo $home; ?>/articles">ARTICLES</a></li> 
<li><a href="<?php echo $home; ?>/concept">CONCEPT</a></li> 
<li><a href="<?php echo $home; ?>/about">ABOUT US</a></li>
<li><a href="<?php echo $home; ?>/contact">CONTACT</a></li> 
<div class="p-nav-sns">
<a class="p-nav-sns__item" href="https://www.instagram.com/majime_zine"><img src="<?php echo $wp_url; ?>/assets/img/Instagram.svg" alt="instagram"></a>
<a class="p-nav-sns__item" href="https://twitter.com/MAJIMEZINE"><img src="<?php echo $wp_url; ?>/assets/img/Twitter.svg" alt="twitter"></a>
<a class="p-nav-sns__item" href="https://www.facebook.com/pages/category/Website/Majime-Zine-344253066664577/"><img src="<?php echo $wp_url; ?>/assets/img/Facebook.svg" alt="facebook"></a>
</div>
</ul>
</div>
</nav>

</header>
<main role="main">

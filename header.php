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
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Zenone -->
<link rel="stylesheet" href="https://use.typekit.net/cqt1cim.css">
<?php wp_head(); ?>
<!-- Swiper -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- Muuri -->
<!-- <script src="https://cdn.jsdelivr.net/npm/muuri@0.9.5/dist/muuri.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script> -->
<!-- infinity scroll -->
<!-- <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.js"></script> -->
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

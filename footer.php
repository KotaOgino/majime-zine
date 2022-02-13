<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
</main>
<footer class="footer">
<div class="footer-inner">
<div class="footer-logo u-mb-48">
<a href="<?php echo $home; ?>">
<img src="<?php echo $wp_url; ?>/assets/img/logo_svg.svg" alt="majime-zine" width="100" height="100">
</a>
</div>
<div class="footer-menu u-mb-48">
<ul class="footer-menu-nav">
<li class="footer-menu-nav__item"><a href="<?php echo $home; ?>/articles">ARTICLES</a></li>
<li class="footer-menu-nav__item"><a href="<?php echo $home; ?>/concept">CONCEPT</a></li>
<li class="footer-menu-nav__item"><a href="<?php echo $home; ?>/about">ABOUT US</a></li>
<li class="footer-menu-nav__item"><a href="<?php echo $home; ?>/contact">CONTACT</a></li>
</ul>
<ul class="footer-menu-sns">
<li class="footer-menu-sns__item"><a href="https://www.instagram.com/majime_zine/"><img src="<?php echo $wp_url; ?>/assets/img/Instagram.svg" alt="instagram"></a></li>
<li class="footer-menu-sns__item"><a href="https://twitter.com/MAJIMEZINE"><img src="<?php echo $wp_url; ?>/assets/img/Twitter.svg" alt="twitter"></a></li>
<li class="footer-menu-sns__item"><a href="https://www.facebook.com/pages/category/Website/Majime-Zine-344253066664577/"><img src="<?php echo $wp_url; ?>/assets/img/Facebook.svg" alt="facebook"></a></li>
</ul>
</div>
<div class="footer-copyright">
<p class="u-mb-8">MAIL：majimezine@gmail.com</p>
<p>©︎MAJIME ZINE. All rights reserved.</p>
</div>
</div>
<?php wp_footer(); ?>
</footer>
</body>
</html>

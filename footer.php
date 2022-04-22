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
<script>
jQuery(function($){
	let postId = '<?=get_the_ID()?>'
	if($.cookie(postId) == 'good') {
		$(document).ready(function(){
			let icon = $('.c-button-heart__icon');
			icon.addClass('on');
			icon.addClass('c-button-heart__animation');
		});
	}

	$(document).on('click','.good_button',function(){
		let $target = $(this);
		let icon = $('.c-button-heart__icon');
		let text = $('.good_icon');
		let count = Number($target.find('.good_counter').html())+1;
		let targetId = $target.data('id');
		if($.cookie(targetId) != 'good') {
			if(icon.hasClass('on')) {
				icon.removeClass('on');
				text.removeClass('off');
				icon.removeClass("c-button-heart__animation");
				icon.css("background-position","left");
			} else {
				icon.addClass('on');
				text.addClass('on');
				icon.addClass('c-button-heart__animation');
			}
			jQuery.ajax({
				url: '<?=admin_url('admin-ajax.php')?>',
				type: 'POST',
				data: {
				'action' : 'count_up',
				'postID' : targetId
			},
			success: function(data) {
				$('.good_counter').html(count);
				$.cookie(targetId, 'good');
				console.log('thanks!');
			}
			});
			return false;
		} else {
			console.log('You already touched button! thanks!');
		}
	});
});
</script>
</body>
</html>

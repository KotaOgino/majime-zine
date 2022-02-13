<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>
<section class="p-contact c-section">
<div class="c-section-title u-mb-48">
<p>CONTACT</p>
</div>
<?php echo do_shortcode('[contact-form-7 id="114" title="contact"]'); ?>
</section>
<?php get_footer(); ?>
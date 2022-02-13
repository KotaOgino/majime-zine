<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
<div class="c-profile u-mt-32 u-mb-32">
<div class="c-profile-avator">
<?php echo get_avatar( get_the_author_id(), 150 ); ?>
</div>
<div class="c-profile-contents">
<div class="c-profile-contents__name">
<p><?php the_author_nickname(); ?></p>
</div>
<div class="c-profile-contents__text">
<p><?php the_author_meta('user_description'); ?></p>
</div>
</div>
</div>

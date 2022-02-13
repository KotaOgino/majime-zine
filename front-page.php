<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>
<section class="p-mv u-mb-48">
<div class="swiper-container">
<div class="swiper-wrapper">
<?php
$args = array(
'posts_per_page' => 3,
'tag' => 'editors-pick'
);
$posts = get_posts($args);
if($posts):
foreach($posts as $post):
$id = get_the_ID();
$title = get_the_title();
$permalink = get_the_permalink();
$cat = get_the_category();
$cat_name = $cat[0]->name;
$tags = get_the_tags();
$img = '';
if (has_post_thumbnail()) {
$img = get_the_post_thumbnail_url($id, 'medium');
} else {
$img = $wp_url.'/assets/img/no-image.png';
}
$thumbnail = '<img src='.$img.' alt="'.$title.'">';
?>
<a class="swiper-slide" href="<?php echo $permalink; ?>">
<div class="p-mv-thumbnail">
<?php echo $thumbnail; ?>
<div class="p-mv-thumbnail__info">
<p><?php echo $title; ?></p>
<?php if($tags): ?>
<ul>
<?php foreach($tags as $tag): ?>
<li>#<?php echo $tag->name; ?></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
</div>
</div>
<?php
endforeach;
endif;
?>
</div>
</a>

<div class="swiper-pagination"></div>
</div>
</section>
<section class="c-section u-mb-48">
<p class="c-section-title u-mb-32">LATEST ARTICLES</p>
<?php get_template_part('template/loop', 'latest'); ?>
</section>
<section class="c-section u-mb-48">
<p class="c-section-title u-mb-32">EDITOR'S PICKS</p>
<?php get_template_part('template/loop', 'editor'); ?>
</section>
<section class="c-section u-mb-48">
<?php get_template_part('template/loop', 'news'); ?>
</section>
<?php get_footer(); ?>
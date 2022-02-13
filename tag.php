<?php
/*
Template Name: Tag Archive
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$tags = get_tags();
$now_tag = get_queried_object();
$tag_slug = $now_tag->slug;
get_header();
?>
<section class="c-section">
<ul class="p-tags u-mb-48">
<li id="all" class="p-tags-item u-mr-8"><a href="<?php echo $home; ?>/articles">ALL</a></li>
<?php
foreach($tags as $tag):
$tag_link = get_tag_link($tag->term_id.'');
?>
<?php if($tag_slug == $tag->slug): ?>
<li id="<?php echo $tag->slug; ?>" class="p-tags-item u-mr-8 active">
<?php else: ?>
<li id="<?php echo $tag->slug; ?>" class="p-tags-item u-mr-8">
<?php endif; ?>
<a href="<?php echo $tag_link; ?>">
#<?php echo $tag->name; ?>
</a>
</li>
<?php endforeach; ?>
</ul>
<?php get_template_part('template/loop', 'tags'); ?>
</section>
<?php get_footer(); ?>
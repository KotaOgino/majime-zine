<?php
/*
Template Name: Archive
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$tags = get_tags();
get_header();
?>

<section class="c-section">
<ul class="p-tags u-mb-48">
<li id="all" class="p-tags-item u-mr-8 active"><a href="<?php echo $home; ?>/articles">ALL</a></li>
<?php
foreach($tags as $tag):
$tag_link = get_tag_link($tag->term_id.'');
?>
<li id="<?php echo $tag->slug; ?>" class="p-tags-item u-mr-8">
<a href="<?php echo $tag_link; ?>">
#<?php echo $tag->name; ?>
</a>
</li>
<?php endforeach; ?>
</ul>
<?php get_template_part('template/loop'); ?>
</section>

<?php get_footer(); ?>
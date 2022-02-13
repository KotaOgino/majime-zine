<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
if ( have_posts() ) :
while( have_posts() ) : the_post();
$post_id = get_the_ID();
$title = get_the_title();
$permalink = get_the_permalink();
$cat = get_the_category();
$cat = $cat[0];
$tags = get_the_tags();
if($tags):
foreach($tags as $tag):
$current_tag[] = $tag->term_id;
endforeach; 
endif;
$cat_id = $cat->term_id;
$cat_name = $cat->name;
$cat_link = get_category_link($cat_id);
$img = '';
if (has_post_thumbnail()) {
$img = get_the_post_thumbnail_url($post_id);
}
?>

<section class="c-section">
<article class="p-single">

<!-- <?php if($cat): ?>
<div class="p-single-category">
<a href='<?php echo esc_url( $cat_link ); ?>'>
<?php echo $cat_name; ?>
</a>
</div>
<?php endif; ?> -->

<div class="p-single-title u-mb-16">
<h1 class=""><?php echo $title; ?></h1>
</div>

<?php if($tags): ?>
<ul class="p-single-tags u-mb-16">
<?php foreach($tags as $tag): ?>
<a href="<?php echo get_tag_link($tag->term_id); ?>">
<li class="p-single-tag">#<?php echo $tag->name; ?></li>
</a>
<?php endforeach; ?>
</ul>
<?php endif; ?>

<div class="p-single-time u-mb-48">
<time class="uk-margin-right" datetime="<?php the_time('Y-m-d'); ?>"><span class="uk-margin-small-right" uk-icon="history"></span><?php the_time('Y.m.d'); ?></time>
</div>

<?php if ($img != ''): ?>
<div class="p-single-thumbnail u-mb-48">
<img src="<?php echo $img; ?>" alt="<?php echo $title; ?>">
</div>
<?php endif; ?>

<div class="p-single-content">
<?php the_content(); ?>
</div>
<?php get_template_part('template/profile'); ?>
</article>
<?php 
endwhile;
endif;
?>

<?php if(get_post_type() != 'news'): ?>
<div class="u-ta-c">
<p class="c-section-title u-mt-32 u-mb-32">RELATED ARTICLES</p>
</div>

<div id="majimeZineLatest" class="c-section-grid3 u-mb-48">
<?php
$relatedArgs = array(
    'post__not_in' => array($post_id),
    'posts_per_page'=> 3,
    'tag__in' => $current_tag,
    'orderby' => 'rand',
);
$relatedQuery = new WP_Query($relatedArgs); 
if( $relatedQuery -> have_posts() ): while ($relatedQuery -> have_posts()): $relatedQuery -> the_post();
$relatedId = get_the_ID();
$relatedTitle = get_the_title();
$relatedPermalink = get_the_permalink();
$relatedTags = get_the_tags();
$relatedImg = '';
if (has_post_thumbnail()) {
$relatedImg = get_the_post_thumbnail_url($relatedId);
} else {
$relatedImg = $wp_url.'/assets/img/no-image.png';
}
$relatedThumbnail = '<img src='.$relatedImg.' alt="'.$relatedTitle.'">';
?>
<article class="c-section-grid3__item c-section-grid__news">
<a href="<?php the_permalink(); ?>">
<div class="c-section-grid3__item-thumbnail u-mb-16">
<?php echo $relatedThumbnail; ?>
</div>
<?php if($tags): ?>
<div class="c-section-grid3__item-tag u-mb-16">
<ul class="u-flex">
<?php foreach($tags as $tag): ?>
<li class="u-mr-8">#<?php echo $tag->name; ?></li>
<?php endforeach; ?>
</ul>
</div>
<?php endif; ?>
<div class="c-section-grid3__item-title u-ta-l u-mb-16">
<p><?php echo $relatedTitle; ?></p>
</div>
<div class="c-section-grid3__item-date u-ta-r">
<p><?php the_modified_time('Y.m.d'); ?></p>
</div>
</a>
</article>
<?php endwhile; else:?>
<p>関連記事はありませんでした。</p>
<?php endif; ?>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</section>
<?php get_footer(); ?>
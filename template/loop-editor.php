<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$args = [
'posts_per_page' => 9, // 表示する件数
'orderby' => 'date', // 日付でソート
'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
'tag' => 'editors-pick'
];
$the_query = new WP_Query( $args );
?>
<div id="majimeZineEditor" class="c-section-grid3 u-mb-48">
<?php
if( $the_query->have_posts() ):
while($the_query->have_posts()) : $the_query->the_post();
$id = get_the_ID();
$title = get_the_title();
$permalink = get_the_permalink();
$cat = get_the_category();
$cat_name = $cat[0]->name;
$tags = get_the_tags();
$img = '';
if (has_post_thumbnail()) {
$img = get_the_post_thumbnail_url($id);
} else {
$img = $wp_url.'/assets/img/no-image.png';
}
$thumbnail = '<img src='.$img.' alt="'.$title.'">';
?>
<article class="c-section-grid3__item u-fadeIn">
<a href="<?php echo $permalink; ?>">

<div class="c-section-grid3__item-thumbnail u-mb-16">
<?php echo $thumbnail; ?>
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
<p><?php echo $title; ?></p>
</div>

<div class="c-section-grid3__item-date u-ta-r">
<time datetime="<?php the_time('Y-m-d'); ?>"><span class="uk-margin-small-right" uk-icon="history"></span><?php the_time('Y.m.d'); ?></time>
</div>

</a>
</article>
<?php
endwhile;
endif;
?>
<?php wp_reset_postdata(); ?>

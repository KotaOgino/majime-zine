<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$args = [
'posts_per_page' => 4,
'paged' => $paged,
'orderby' => 'date',
'order' => 'DESC',
'post_type' => array(
'post',
)
];
$the_query = new WP_Query( $args );
?>
<div id="majimeZineLatest" class="c-section-grid u-mb-48">
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
<article class="c-section-grid__item">
<a href="<?php echo $permalink; ?>">

<div class="c-section-grid__item-thumbnail u-mb-24">
<?php echo $thumbnail; ?>
</div>

<?php if($tags): ?>
<div class="c-section-grid__item-tag u-mb-16">
<ul class="u-flex">
<?php foreach($tags as $tag): ?>
<li class="u-mr-8">#<?php echo $tag->name; ?></li>
<?php endforeach; ?>
</ul>
</div>
<?php endif; ?>

<div class="c-section-grid__item-title u-ta-l u-mb-16">
<p><?php echo $title; ?></p>
</div>

<div class="c-section-grid__item-date u-ta-r">
<time datetime="<?php the_time('Y-m-d'); ?>"><span class="uk-margin-small-right" uk-icon="history"></span><?php the_time('Y.m.d'); ?></time>
</div>

</a>
</article>
<?php
endwhile;
endif;
?>
</div>
<?php
// 現在のページ数
global $paged;
if ( empty( $paged ) || $paged == 0 ) $paged = 1;
// 総ページ数
$pages = $the_query -> max_num_pages;
if ( ! $pages ) {
$pages = 1;
}
// ページが1ページしかない場合は出力しない・最後のページでも出力しない
if ( $pages != 1 && $paged < $pages ):
?>
<span class="next_posts_link-latest">
<?php next_posts_link( 'Older Entries', $the_query->max_num_pages );?>
</span>

<div class="c-button-more c-button-more__latest c-moveY">
<img class="u-mr-8" src="<?php echo $wp_url; ?>/assets/img/down-arrow.svg" alt="">
<a>LOAD MORE</a>
</div>
<div class="page-load-status-latest" style="display:none;">
<div class="infinite-scroll-request">ロード中</div>
<p class="infinite-scroll-last">これ以上は記事がありません</p>
<p class="infinite-scroll-error">読み込むページがありません</p>
</div>
<?php endif; ?>
</div>
<?php wp_reset_postdata(); ?>

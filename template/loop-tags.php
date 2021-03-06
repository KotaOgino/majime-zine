<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$now_tag = get_queried_object();
$tag_slug = $now_tag->slug;
$args = array(
'posts_per_page' => 9,
'paged' => $paged,
'tag' => $tag_slug
);
$posts = get_posts($args);
?>
<ul id="majimeZineArchive" class="c-section-grid3">
<?php
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
<?php if($tags): ?>
<li class="c-section-grid3__item u-fadeIn">
<?php else: ?>
<li class="c-section-grid3__item">
<?php endif; ?>
<a href="<?php echo $permalink; ?>">
<div class="c-section-grid3__item-thumbnail u-mb-16">
<?php echo $thumbnail; ?>
</div>
<?php if($tags): ?>
<div class="c-section-grid3__item-tag u-mb-8">
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
</li>
<?php endforeach; ?>
<?php else: ?>
<p class="uk-padding uk-text-lead">投稿がありません。</p>
<?php endif; ?>
</ul>
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
<span class="next_posts_link">
<?php next_posts_link( 'Older Entries', $the_query->max_num_pages );?>
</span>

<div class="c-button-more c-moveY">
<img class="u-mr-8" src="<?php echo $wp_url; ?>/assets/img/down-arrow.svg" alt="">
<a>LOAD MORE</a>
</div>

<div class="page-load-status" style="display:none;">
<div class="infinite-scroll-request">ロード中</div>
<p class="infinite-scroll-last">これ以上は記事がありません</p>
<p class="infinite-scroll-error">読み込むページがありません</p>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>


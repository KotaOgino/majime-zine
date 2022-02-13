<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
$args = array(
'post_type' => 'news',// 投稿タイプを指定
'posts_per_page' => -1,// 表示する記事数
);
$myposts = new WP_Query( $args );
?>
<section class="c-section u-mb-48">
<div class="p-news u-mb-32">
<div class="p-news-title">
<p>NEWS</p>
</div>
<div class="p-news-divider"></div>
<div class="p-news-lists">
<ul>
<?php
if ($myposts->have_posts()): while ($myposts->have_posts()): $myposts->the_post();
$id = get_the_ID();
?>
<li class="p-news-lists__item">
<a href="<?php the_permalink(); ?>">
<time><?php the_modified_time('Y.m.d'); ?></time>
<p><?php the_title(); ?></p>
</a>
</li>
<?php
endwhile;
endif;
wp_reset_postdata();
?>
</ul>
</div>
</div>
</section>

<?php get_footer(); ?>
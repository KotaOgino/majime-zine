<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$newsArgs = array(
'post_type' => 'news',  //カスタム投稿タイプ名
'posts_per_page' => 3 // 表示件数
);
$myposts = new WP_Query($newsArgs);
$myposts->post_count = 3; 
?>
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
<div class="c-button-more c-moveY">
<img class="u-mr-8" src="<?php echo $wp_url; ?>/assets/img/down-arrow.svg" alt="">
<a href="<?php echo $home; ?>/archives/news/">LOAD MORE</a>
</div>
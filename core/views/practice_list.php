<?php
$data = get_queried_object();

$args = [
	 'post_type' => 'practice',
	 'posts_per_page' => -1,
];
$query = new WP_Query($args);

if ($query->have_posts()):
	while ($query->have_posts()):
		$query->the_post();
		$is_current =  get_the_ID() == $data->ID ? 'menu-left__item_active' : '';
		?>
		<li class="menu-left__item <?= $is_current?>">
			<a href="<?= get_permalink(get_the_ID())?>"><?= get_the_title();?></a>
		</li>
	<?php
	endwhile;
endif;
wp_reset_postdata();
<?php
$partner_list = [];
$prevPartner = '';
$nextPartner = '';
$query_object = get_queried_object();

$args = [
	 'post_type' => 'partner',
	 'posts_per_page' => '-1',
	 'orderby' => 'date archive_order',
	 'meta_key' => 'archive_order',
	 'order' => 'ASC'
];

$query = new WP_Query($args);
while ($query->have_posts()) {
	$query->the_post();
	$partner_list[] = [
		 'id' => get_the_ID(),
	];
}
wp_reset_postdata();

if (count($partner_list) > 2) {
	for ($i = 0; $i < count($partner_list); $i++) {
		if ($partner_list[$i]['id'] != $query_object->ID)
			continue;
		if ($i == 0) {
			$prevPartner = $partner_list[count($partner_list) - 1];
			$nextPartner = $partner_list[$i + 1];
		} elseif ($i == count($partner_list) - 1) {
			$prevPartner = $partner_list[$i - 1];
			$nextPartner = $partner_list[0];
		} else {
			$prevPartner = $partner_list[$i - 1];
			$nextPartner = $partner_list[$i + 1];
		}
	}
}
if (count($partner_list) == 2) {
	foreach ($partner_list as $item) {
		if ($query_object->ID != $item['id']) {
			$prevPartner = $item;
			$nextPartner = $item;
		}
	}
}

if (count($partner_list) >= 2):
	?>
	<div class="partner-card__buttons">
		<a class="partner-card__button-left" href="<?= get_permalink($prevPartner['id']); ?>"></a>
		<a class="partner-card__button-right" href="<?= get_permalink($nextPartner['id']); ?>"></a>
	</div>
<?php
endif;
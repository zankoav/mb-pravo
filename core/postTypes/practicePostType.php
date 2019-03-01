<?php
add_action('init', 'practice_init');
function practice_init(){
	register_post_type('practice', array(
		 'labels'             => array(
				'name'               => 'Практики', // Основное название типа записи
				'singular_name'      => 'Практика', // отдельное название записи типа Book
				'add_new'            => 'Добавить практику',
				'add_new_item'       => 'Добавить нового практику',
				'edit_item'          => 'Редактировать практику',
				'new_item'           => 'Новый практика',
				'view_item'          => 'Посмотреть практику',
				'search_items'       => 'Найти практику',
				'not_found'          =>  'Практика не найдено',
				'not_found_in_trash' => 'В корзине практики не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Практики'

		 ),
		 'public'             => true,
		 'publicly_queryable' => true,
		 'show_ui'            => true,
		 'show_in_menu'       => true,
		 'query_var'          => true,
		 'rewrite'            => true,
		 'capability_type'    => 'post',
		 'has_archive'        => false,
		 'hierarchical'       => false,
		 'menu_position'      => null,
		 'supports'           => array('title')
	) );
}
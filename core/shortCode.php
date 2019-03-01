<?php

add_shortcode('our_mission', 'mission_func');

function mission_func($atts, $content){
	$our_mission = $atts['mission'];

	$result = "<div class=\"our-mission\"><span class=\"our-mission__text_big\">";
	$result .= $our_mission;
	$result .= "</span><span class=\"our-mission__text_little\">";
	$result .= $content;
	$result .= "</span></div>";

	return $result;
}
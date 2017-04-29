<?php

function switch_to_relative_url($html, $id, $caption, $title, $align, $url, $size, $alt){
	$imageurl = wp_get_attachment_image_src($id, $size);
	$relativeurl = wp_make_link_relative($imageurl[0]);
	$html = str_replace($imageurl[0],$relativeurl,$html);
	return $html;
}
add_filter('image_send_to_editor','switch_to_relative_url',10,8);

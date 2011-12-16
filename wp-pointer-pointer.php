<?php
/*
 Plugin Name: WP Pointer pointer
 Plugin URI: http://tomjn.com
 Description: Adds pointers to your pointers to point out a new feature called pointers
 Version: 1.0.0
 Author: Interconnect IT, Tom J Nowell
 Author URI: http://tomjn.com
*/

add_action('admin_head','meta_pointer');
function meta_pointer(){
	?>
	<script>
	jQuery(document).ready( function($) {
	setTimeout(function (){

		if($.pointer){

			$('.wp-pointer').pointer({
				content: '<h3>New Feature: Pointers</h3><p>We have added a new feature called Pointers to point out new features in your admin dashboard.</p>',
				position: {
					my: 'left top',
					at: 'center bottom',
					offset: '-25 0'
				},
				close: function() {
					setUserSetting( 'p1', '1' );
				}
			}).pointer('open');
		}
	},300);

	});</script><?php
}
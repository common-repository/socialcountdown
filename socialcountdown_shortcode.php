<?php

/*  
	Plugin Name: SocialCountdown
	Plugin URI: https://www.socialcountdown.com/h/wordpressplugin
	Description: Provides a very easy way to integrate a SocialCountdown.com countdown into a wordpress website, complete with the custom background created for the countdown timer.
	Version: 1.2
	Author: Olusola Abiodun
	Author URI: https://www.socialcountdown.com
	License: GPL2
*/

/*
	Copyright 2013  Sola Abiodun  (email : support@intulon.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
class SocialCountdown {
	function parse_shortcode($atts)  {
		extract( shortcode_atts( array(
			'timerid' => ''
		), $atts ) );

		$timerid = str_replace('&#8221;','',$timerid);
		$timerid = preg_replace('/[^A-Za-z0-9\-]/i', '', $timerid); 
		
		return '<div class="socialcountdown-widget" data-timerid="' . $timerid . '"></div><script type="text/javascript" src="https://www.socialcountdown.com/bundles/widget?v=' . MD5(microtime()) . '"></script>';
	}
	
	function pre_process_shortcode($content) {
		global $shortcode_tags;

		// Backup current registered shortcodes and clear them all out
		$orig_shortcode_tags = $shortcode_tags;
		$shortcode_tags = array();

		add_shortcode('sc_widget', array('SocialCountdown', 'parse_shortcode') );
		
		// Do the shortcode (only the one above is registered)
		$content = do_shortcode($content);

		// Put the original shortcodes back
		$shortcode_tags = $orig_shortcode_tags;

		return $content;
	}

}

add_filter( 'the_content', array('SocialCountdown', 'pre_process_shortcode') );
?>
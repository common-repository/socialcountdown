=== SocialCountdown Plugin ===
Plugin Name: SocialCountdown
Contributors: intulon
Donate link: http://socialcountdown.com/h/wordpressplugin
Requires at least: 2.7
Tested up to: 4.7.2
Stable tag: 1.2
Tags: countdown, timer, countdown widget, timer widget, clock, clock widget
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Provides a very easy way to integrate a SocialCountdown.com countdown timer into a wordpress website
	
== Description ==

SocialCountdown Wordpress plugin provides an easy way to integrate an existing SocialCountdown timer into a Wordpress webpage. 

To create a free SocialCountdown timer, navigate to https://socialcountdown.com

The plugin provides the short code: [sc_widget]

To include a SocialCountdown timer on a Wordpress post, simply include the following short code:

[sc_widget timerid="abc-123-0000000"] 

where "abc-123-0000000" is the id of the countdown you are embedding. The short code will render a widget of the referenced countdown timer complete with the background image that was defined.


== Installation ==

1. Upload 'socialcountdown_shortcode.php' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use the shortcode [sc_widget timerid="<countdown unique id>"] in your Wordpress posts

== Frequently Asked Questions ==

Q. Why does my rendered widget have a hidden number with a slight shadow to the right?

A. Because you did not provide enough space for the widget to render its entire width. The widget needs 723 pixels.

== Screenshots ==

1. This shows a rendered countdown timer on a Wordpress blog.

== Changelog ==

Version 1.2

Bug fixes.

== Upgrade Notice ==

None.

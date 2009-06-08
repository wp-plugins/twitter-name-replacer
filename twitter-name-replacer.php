<?php
/*
Plugin Name: Twitter Name Replacer
Plugin URI: http://www.spitblog.de/twitter-name-replacer
Description: Replaces @something with https://twitter.com/something
Version: 0.1
Author: Lars Reineke
Author URI: http://www.spitblog.de
*/
 
function twitter_name($content) {
	$text = preg_replace("/(?!\!)(\W)\@(\w+)/i",
                     "$1<a href=\"https://twitter.com/$2\">@$2</a>", $content);
	$text = preg_replace("/(\W)\!\@(\w+)/i",
                     "$1@$2", $text);
	return ($text);
}
 
 
add_filter('the_content', 'twitter_name');
?>

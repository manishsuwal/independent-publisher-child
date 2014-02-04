<?php

/**
 * You can add your own functions here. You can also override functions that are
 * called from within the parent theme functions.php. See below for an example.
 *
 */

// Uncomment this line to hide the post word count:
// function independent_publisher_get_post_word_count() { return false; }

// Uncomment this line to enable multi-author mode:
//function independent_publisher_is_multi_author_mode() { return true; }


 /*
  * Add Twitter handle to end of tweet text when sharing via Twitter
  */
 function indiepub_sharing_buttons_tweet_text($tweet_text) {
     return $tweet_text . '%20via%20@manishsuwal'; // Adds " via @manishsuwal" to end of post title
 }
 add_filter('indiepub_sharing_buttons_tweet_text', 'indiepub_sharing_buttons_tweet_text');


/*
  * Add Efficient Related Posts to the bottom of posts in 'Further Reading Section'
  */
  function independent_publisher_show_further_reading() {
      if ( is_single() && function_exists( 'wp_related_posts' ) ) :
          echo '<div id="further-reading">';
          do_action( 'erp-show-related-posts', array( 'title' => 'Further Reading', 'num_to_display' => 5, 'no_rp_text' => 'No Related Posts Found' ) );
          echo '</div>';
      endif;
  }
  add_action( 'independent_publisher_before_post_bottom_tag_list', 'independent_publisher_show_further_reading', 10 );
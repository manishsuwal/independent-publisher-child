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


  /*
    * Add Favicon
    */
  function blog_favicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/images/favicon.ico" />' . "\n";
  }
  add_action('wp_head', 'blog_favicon');


  /*
    * Add Mailchimp Signup form below Single post page after the content.
    */

  function independent_publisher_signup_form(){ ?>

  <!-- Begin MailChimp Signup Form -->

  <style type='text/css'>
      /*
      Copy Paste code from https://github.com/raamdev/independent-publisher#how-do-i-make-mailchimp-signup-forms-look-better to make my MailChimp form look better. Note that I've added 'single_post' in front of 'mc_embed'. This code is just for single post mailchimp form.
      */
      #single_post_mc_embed_signup .button {
          padding-left: 15px !important;
          padding-right: 15px !important;
          padding-top: 2px !important;
          padding-bottom: 3px !important;
          line-height: 1.45 !important;
          height: 36px !important;
          font-weight: normal !important;
          width: 100% !important;
      }

      .entry-content #single_post_mc_embed_signup h2 {
          font-size: 1.8em !important;
      }
      .entry-content #single_post_mc_embed_signup input.email {
          width: 100% !important;
      }
      .entry-content #single_post_mc_embed_signup label {
          padding-bottom: 0 !important;
      }
      .entry-content #single_post_mc_embed_signup .single_post_mc-field-group {
          width: 99% !important;
      }

      .widget #single_post_mc_embed_signup form {
          text-align: center !important;
          font-family: "Myriad Pro", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Geneva, Verdana, sans-serif;
      }
      .widget #single_post_mc_embed_signup input.email {
          width: 100% !important;
          text-align: center;
      }
      .widget #single_post_mc_embed_signup input.button {
          width: 100% !important;
      }

      /*
        * Custom CSS code to make MailChimp forms look better
      */
      #single_post_mc_embed_signup{
      border: 2px solid #57ad68;
      border-radius: 12px;
      margin-bottom: 3.5em;
      }

      #single_post_mc_embed_signup form{
        padding: 10px 10% !important;
      }

      #single_post_mc_embed_signup input.email{
        width: 97%;
        margin-bottom: 10px;
      }
  }
  </style>

  <div id="single_post_mc_embed_signup" align="center"><h2>If You Enjoyed This Article, Get Similar Article Updates (Free)</h2><form id="single_post_mc-embedded-subscribe-form" class="validate" action="http://enwil.us5.list-manage.com/subscribe/post?u=6c585976bdd1dbcb1b4b98187&amp;id=a74617b31c" method="post" name="single_post_mc-embedded-subscribe-form" target="_blank"><input id="single_post_mce-EMAIL" class="email" name="EMAIL" type="email" value="" /><input id="SIGNUP" name="SIGNUP" type="hidden" value="After Content in Single Post Page" />
  <div class="clear"><input id="single_post_mc-embedded-subscribe" class="button" name="subscribe" type="submit" value="Get Email Updates!" /></div>
  </form></div>
  <!--End single_post_mc_embed_signup-->
  <?php }

  // Action Hook to add Mailchimp Signup form function below Single post page after the content.
  add_action('independent_publisher_entry_meta_top', 'independent_publisher_signup_form');

<?php
/**
 * A clean one-column page template without the navigation bar or site info for Willingness
 *
 * Template Name: Willingness Custom Page
 *
 * @package Independent Publisher
 * @since   Independent Publisher 1.0
 */

get_header(); ?>

 <style type="text/css">
   #masthead {
     display: none;
   }
   /* Mailchimp Signup Form Style Start */
   #mc_embed_signup input.email {
   display: block;
   padding: 10px 10px !important;
   margin: 0 4% 10px 18% !important;

   width: 58%;
   min-width: 130px;
 }

 /* Mailchimp Signup Form Style End */


   /* Button Green Start */
   .button-green {
      border-top: 1px solid #319671;
      background: #319671;
      background: -webkit-gradient(linear, left top, left bottom, from(#319671), to(#319671));
      background: -webkit-linear-gradient(top, #319671, #319671);
      background: -moz-linear-gradient(top, #319671, #319671);
      background: -ms-linear-gradient(top, #319671, #319671);
      background: -o-linear-gradient(top, #319671, #319671);
      padding: 18.5px 37px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
      -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
      box-shadow: rgba(0,0,0,1) 0 1px 0;
      text-shadow: rgba(0,0,0,.4) 0 1px 0;
      color: white;
      font-size: 20px;
      font-family: Georgia, Serif;
      text-decoration: none;
      vertical-align: middle;
      display: inline-block;

      }
   .button-green:hover {
      border-top-color: #2e8765;
      background: #2e8765;
      color: #ffffff;
      text-decoration: none;
      }
   .button-green:active {
      border-top-color: #319671;
      background: #319671;
      }
   .button-green:visited{
     color: white;
    }
   /* Button Green End */


   /* Button Blue Start */
   .button-blue {
      border-top: 1px solid #3c88ba;
      background: #3c88ba;
      background: -webkit-gradient(linear, left top, left bottom, from(#3c88ba), to(#3c88ba));
      background: -webkit-linear-gradient(top, #3c88ba, #3c88ba);
      background: -moz-linear-gradient(top, #3c88ba, #3c88ba);
      background: -ms-linear-gradient(top, #3c88ba, #3c88ba);
      background: -o-linear-gradient(top, #3c88ba, #3c88ba);
      padding: 18.5px 37px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
      -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
      box-shadow: rgba(0,0,0,1) 0 1px 0;
      text-shadow: rgba(0,0,0,.4) 0 1px 0;
      color: white;
      font-size: 20px;
      font-family: Georgia, Serif;
      text-decoration: none;
      vertical-align: middle;
      display: inline-block;

      }
   .button-blue:hover {
      border-top-color: #367ca8;
      background: #367ca8;
      color: #ffffff;
      text-decoration: none;
      }
   .button-blue:active {
      border-top-color: #3383ab;
      background: #3383ab;
      }

   .button-blue:visited{
       color: white;
      }

   /* Button Blue End */

   /* Button Red Start */
   .button-red {
      border-top: 1px solid #b83d3d;
      background: #b83d3d;
      background: -webkit-gradient(linear, left top, left bottom, from(#b83d3d), to(#b83d3d));
      background: -webkit-linear-gradient(top, #b83d3d, #b83d3d);
      background: -moz-linear-gradient(top, #b83d3d, #b83d3d);
      background: -ms-linear-gradient(top, #b83d3d, #b83d3d);
      background: -o-linear-gradient(top, #b83d3d, #b83d3d);
      padding: 18.5px 37px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
      -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
      box-shadow: rgba(0,0,0,1) 0 1px 0;
      text-shadow: rgba(0,0,0,.4) 0 1px 0;
      color: white;
      font-size: 20px;
      font-family: Georgia, Serif;
      text-decoration: none;
      vertical-align: middle;
      display: inline-block;

      }
   .button-red:hover {
      border-top-color: #a63737;
      background: #a63737;
      color: #ffffff;
      text-decoration: none;
      }
   .button-red:active {
      border-top-color: #b83d3d;
      background: #b83d3d;
      }

   .button-red:visited{
     color: #fff;
     }

   /* Button Red End */

   /* Button Orange Start */
   .button-orange {
     border-top: 1px solid #d77423;
     background: #d77423;
     background: -webkit-gradient(linear, left top, left bottom, from(#d77423), to(#d77423));
     background: -webkit-linear-gradient(top, #d77423, #d77423);
     background: -moz-linear-gradient(top, #d77423, #d77423);
     background: -ms-linear-gradient(top, #d77423, #d77423);
     background: -o-linear-gradient(top, #d77423, #d77423);
     padding: 18.5px 37px;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
     -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
     -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
     box-shadow: rgba(0,0,0,1) 0 1px 0;
     text-shadow: rgba(0,0,0,.4) 0 1px 0;
     color: white;
     font-size: 20px;
     font-family: Georgia, Serif;
     text-decoration: none;
     vertical-align: middle;
     display: inline-block;
     }
   .button-orange:hover {
     border-top-color: #cf6425;
     background: #cf6425;
     color: #ffffff;
     text-decoration: none;
     }
   .button-orange:active {
     border-top-color: #d77423;
     background: #d77423;
     }

   .button-orange:visited{
    color: #fff;
   }
   /* Button Orange End */


   /* Website Design Customization Start */
   .site{
     max-width: 1000px;
   }

   img.size-full{
     margin-top:-13%;
   }

   .entry-content h1 {
   font-size: 3.1em;
   }

   .entry-content p {
     font-size: 21px;
   }
   /* Website Design Customization End */

   </style>


     <?php while ( have_posts() ) : the_post(); ?>

       <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
         <?php if ( has_post_thumbnail() ) : ?>
           <?php the_post_thumbnail( array( 700, 700 ) ); ?>
         <?php endif; ?>

         <!-- .entry-header -->

         <div class="entry-content">
           <?php the_content(); ?>
           <?php wp_link_pages( array( 'before' => '<div class="page-links-next-prev">', 'after' => '</div>', 'nextpagelink' => __( '<button class="next-page-nav">Next page &rarr;</button>', 'independent_publisher' ), 'previouspagelink' => __( '<button class="previous-page-nav">&larr; Previous page</button>', 'independent_publisher' ), 'next_or_number' => 'next' ) ); ?>
           <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'independent_publisher' ), 'after' => '</div>' ) ); ?>
         </div>
         <!-- .entry-content -->

         <?php edit_post_link( __( 'Edit', 'independent_publisher' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
       </article><!-- #post-<?php the_ID(); ?> -->

       <?php comments_template( '', true ); ?>

     <?php endwhile; // end of the loop. ?>



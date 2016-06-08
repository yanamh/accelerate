
<?php
/**
 * Template Name: About Page
 *The template for displaying the About page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

$size = "full";
get_header(); ?>
   
 <div id="primary" class="content-area">
     
         <div class="four-oh-four">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404-map.jpg"/>
         </div> <!--.four-oh-four-->

         <div class="oh-snap">  
             <h1>404!
             <br>
             OH SNAP.
             <br>Took a Wrong Turn...</h1>
          
             <p>We can't seem to find the page you were looking for. <br>This page no longer exists, never existed or has been moved.</p>
            <p>Feel free to check out our <a href="http://localhost:63961/blog/">blog</a> or some of our featured <a href="http://localhost:63961/case-studies/">work.</a></p>
    
         </div> <!--.oh-snap-->
</div> <!--#primary-->

<?php get_footer(); ?>
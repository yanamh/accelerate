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

<section class="home-page">
	<div class="about-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="about-hero">
				<?php the_content(); ?>				
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

     

    <div class="site-content">

        <!--section with text and icons from the services custom post type-->
        
        <section class="services-section">
     
             <div class="services-intro">
                  <?php 
                    $our_services = get_field('our_services');
                    $about_services = get_field('about_services');
                                                              ?>

                    <h4><?php echo $our_services; ?></h4>
                 <p><?php echo $about_services; ?></p>
             </div>


 
            <?php query_posts("post_type=services&order=asc"); ?>     
             <?php while ( have_posts() ) : the_post();
                 
                 $service_icon = get_field('service_icon');
                 $size = "medium";
                 $service_description = get_field('service_description')
                                                                     ?>               

             <article class="individual-service">
                 <div class="services-icons">
                     <?php if($service_icon) {
                        echo wp_get_attachment_image( $service_icon, $size ); } ?>
                 </div>
                 
                 <div class="service-description">
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo $service_description; ?></p>
                          
                 </div>                 
            </article>

                <?php endwhile; // end of the loop.
                 wp_reset_query(); ?>

         </section> <!--end of service section-->
        
      <div class="line-separator">
        <section class="work-with-us">
            
            <div class="interested">
                <h3>Interested in working with us?</h3>
            </div>

            <div class="button">
                <a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
            </div>
       
        </section>
      </div>
    </div><!--site content-->

<?php get_footer(); ?>
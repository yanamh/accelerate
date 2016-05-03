<?php
/**
 * The template for displaying the About page
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

 
get_header(); ?>

<!--Hero image with text overlay-->
    <section class="hero-about">
       
         <?php while ( have_posts() ): the_post(); ?>
            <div class="hero-text">
                 <h3><?php the_content(); ?></h3>
            </div>
        <?php endwhile; //end of the loop. ?>

     

   </section><!--.home-page-->

    <div class="site-content">

        <!--section with text and icons from the services custom post type-->
        <section class="our-services">
             <?php query_posts("post_type=services&order=asc"); ?>
             <?php while (have_posts() ) : the_post();

                 $about_services = get_field('service_description');
                 $service_icon = get_field('service_icon');
                 $about_contact_us = get_field('about_contact_us');
                 $contact_link = get_field('contact_link'); ?>

            <h2><?php the_title(); ?></h2>
            <p><?php echo $service_description; ?></p>

            <div class="services-icons">
                <?php if($service_icon) {
                    echo wp_get_attachment_image( $service_icon, $size );
                                                                      } ?>
            </div>

                <?php endwhile; // end of the loop.
                     wp_reset_query(); ?>
                </section> <!--end of service section-->


        <section class="work-with-us">
            <div class="interested">
                <h3>Interested in working with us?</h3>
            </div>

            <div class="button">
                <a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
            </div>

        </section>

    </div><!--site content-->

<?php get_footer(); ?>
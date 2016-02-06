<?php 

/**
 * Template Name: Front Page
 *
 * @package WordPress
 * @subpackage searchchamps
 * @since searchchamps 1.0
 */

?>

<section class="" id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <h1>Don't get lost at sea</h1>
  				<h2>Are the right people finding your website?</h2>
            </div><!--//overview-->
                                                      
        </div><!--//row-->
        <div class="row">
            <div class="col-xs-12 text-center">
                <a href="#contact" class="btn btn-lg">Request Consultation</a>
            </div>
        </div>
    </div><!--//container-->
</section>

<section id="info">
	<div class="container">
		<div class="row">

         <div class="col-sm-4">
                <div class="box">
                    <div class="img-wrap">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/icons/SEO-min.png" alt="Reputation">
                    </div>
                    <h3>SEO</h3>
                    <p>Improve your organic search engine rankings, so your customers can easily find your business</p>
                </div>
            </div>  

            <div class="col-sm-4">
                <div class="box">
                    <div class="img-wrap off-center">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/icons/reputation-min.png" alt="Reputation">
                    </div>
                    <h3>Reputation Management</h3>
                    <p>Build your brand and protect your image on the internet</p>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="box">
                    <div class="img-wrap">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/icons/local-min.png" alt="Reputation">
                    </div>
                    <h3>Local Search</h3>
                    <p>Local SEO services that help small businesses target local areas</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="box">
                    <div class="img-wrap">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/icons/ppc-ads-min.png" alt="Pay-per-click Ads">
                    </div>
                    <h3>PPC and Social Media Advertising</h3>
                    <p>Utilize paid ads to reach your target audience faster</p>
                </div>
            </div>

             


            <div class="col-sm-4">
                <div class="box">
                    <div class="img-wrap">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/icons/web-dev-min.png" alt="Reputation">
                    </div>
                    <h3>Website Development</h3>
                    <p>Make your website more SEO and mobile friendly</p>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="box">
                    <div class="img-wrap">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/icons/social-min.png" alt="Reputation">
                    </div>
                    <h3>Social Media Marketing </h3>
                    <p>Nurture relationships with your current clients and drive new business</p>
                </div>
            </div>



		</div>
	</div>
</section>


<section id="contact">
    <div class="container">
        <div class="row">

            <div class="col-sm-6">
                <div id="info-wrap">
                <h2>Contact us</h2>
                <div class="icon-block">
                  <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 516.473.4024
                </div>
                <div class="icon-block">
                  <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> contact@searchchampions.com
                </div>  
                <p>We’ll work with you to find the right 
                strategy for your business, so you can 
                see real results. </p>
                </div>
            </div>

            <div class="col-sm-6 text-center">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>
 

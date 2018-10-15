<?php
	/*
Template Name: Home page
*/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yan_Designs_Base
 */

get_header();
?>

<div id="primary" class="content-area">
<main id="main" class="site-main">
	
	<div class="home-hero light-head">
		<div class="container hero-content">
			<?php $heroContent = get_field('hero_content');
			if( $heroContent ): ?>
				<h1 class="huge-title rellax" data-rellax-speed="-1" data-rellax-percentage="0.5">
					We build <span>extraordinary</span><br> digital products.
				</h1>
			<?php endif; ?>
		</div>
	</div><!-- home-hero -->
	
	
	<div class="all-products-wrapper">
		
		<?php $product1 = get_field('product_row_1');
		if( $product1 ): ?>
		<div id="healthio" class="product-row has-curve-bottom ">
			<div class="product-inner">
			<div class="container">
				<div class="row d-sm-flex align-items-center reverse-wrap-mobile">
					<div class="col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/TT/project-1-mockup.png">
		            </div>            
		            <div class="col-md-6 hide pl-md-0 rellax" data-rellax-speed=".75"  data-rellax-percentage="0.5">
		                <h2>Healthio</h2>
		                <div class="product-tags">
			                <div>Mobile App</div>
			                <div>Development</div>
		                </div>
		                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. 						Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
		                <a href="<?php echo $product1['learn_more_link']; ?>" class="btn btn-outline btn-primary"><span class="filler"></span>View Project</a>
		            </div>
				</div>
			</div>
			</div><!-- product-inner -->
		</div><!-- healthio -->
		<?php endif; ?>
		
		<?php $product2 = get_field('product_row_2');
		if( $product2 ): ?>
		<div id="wicis-sports" class="product-row">
			<div class="product-inner">
			<div class="container">
				<div class="row d-sm-flex align-items-center">        
		            <div class="col-md-6 hide pr-md-0 rellax" data-rellax-speed=".75"  data-rellax-percentage="0.5">
		                <h2>WiCis Sports</h2>
		                <div class="product-tags">
			                <div>Mobile App</div>
		                </div>
		                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. 						Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
		                <a href="<?php echo $product2['learn_more_link']; ?>" class="btn btn-outline btn-primary"><span class="filler"></span>View Project</a>
		            </div>
		            <div class="col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/TT/project-2-mockup.png">
						</div>
		            </div>    
				</div>
			</div>
			</div><!-- product-inner -->
		</div><!-- wicis -->
		<?php endif; ?>
		
		<?php $product3 = get_field('product_row_3');
		if( $product3 ): ?>
		<div id="luminaid" class="product-row pt-0">
			<div class="product-inner ">
			<div class="container">
				<div class="row d-sm-flex align-items-center reverse-wrap-mobile">
					<div class="col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/TT/project-3-mockup.png">

		            </div>            
		            <div class="col-md-6 hide pl-md-0 rellax" data-rellax-speed=".75" data-rellax-percentage="0.5">
		                <h2>Luminaid</h2>
		                <div class="product-tags">
			                <div>Mobile App</div>
			                <div>UI/UX Design</div>
		                </div>
		                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. 						Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
		                <a href="<?php echo $product3['learn_more_link']; ?>" class="btn btn-outline btn-primary"><span class="filler"></span>View Project</a>
		            </div>
				</div>
			</div>
			</div><!-- product-inner -->
		</div><!-- luminaid -->
		<?php endif; ?>
		
		<?php $product4 = get_field('product_row_4');
		if( $product4 ): ?>
		<div id="pica" class="product-row">
			<div class="product-inner">
			<div class="container">
				<div class="row d-sm-flex align-items-center">           
		            <div class="col-md-6 hide pr-md-0 rellax" data-rellax-speed=".75" data-rellax-percentage="0.5">
		                <h2>Pica</h2>
		                <div class="product-tags">
			                <div>Mobile App</div>
			                <div>UI/UX Design</div>
		                </div>
		                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. 						Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
		                <a href="<?php echo $product4['learn_more_link']; ?>" class="btn btn-outline btn-primary"><span class="filler"></span>View Project</a>
		            </div>
		            <div class="col-md-6">
			            <img src="<?php echo get_template_directory_uri(); ?>/img/TT/project-4-mockup.png">
		            </div> 
				</div>
			</div>
			</div><!-- product-inner -->
		</div><!-- pica-->
		<?php endif; ?>
				
	</div><!-- all-products-wrapper -->
	
	<?php 
		$service1 = get_field('service_1');
		$service2 = get_field('service_2');
		$service3 = get_field('service_3');
		$service4 = get_field('service_4');
		$service5 = get_field('service_5');
	?>
	
	
	<div id="our-services" class="services position-relative py-standard-separator ">
		<div class="container rellax" data-rellax-speed=".75"  data-rellax-percentage="0.5">
			<h3 class="white section-title">Services</h3>
			<div class="services-content">
						<div class="row active-services-wrapper">
				<div class="content-slide">
					<div class="row mx-0">
			            <div class="col-lg-9 col-sm-9">
			                <h4>Mobile Design</h4>
			                <p>Anyone can make an app but it takes hard work and ingenuity to make an app have a lasting impression. We’re here to do exactly that. Build the best to keep your customers engaged and wanting more. Pulling from an experienced team of iOS and Android developers we will make sure to deliver a mobile app that is sure to dominate the App Store.</p>
			            </div>
					</div>
				</div>
				<div class="content-slide">
					<div class="row mx-0">
			            <div class="col-lg-9 col-sm-9">
				            <h4>Web Development</h4>
			                <p>Sed posuere consectetur est at lobortis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper. Cras mattis consectetur purus sit amet fermentum.</p>
			            </div>
					</div>
				</div>
				<div class="content-slide">
					<div class="row mx-0">
			            <div class="col-lg-9 col-sm-9">
				            <h4>UI Design</h4>
			                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
			            </div>
					</div>
				</div>
				<div class="content-slide">
					<div class="row mx-0">
			            <div class="col-lg-9 col-sm-9">
				            <h4>Bluetooth</h4>
			                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec id elit non mi porta gravida at eget metus.</p>
			            </div>
					</div>
				</div>
				<div class="content-slide">
					<div class="row mx-0">
			            <div class="col-lg-9 col-sm-9">
				            <h4>Internet of Things</h4>
			                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
			            </div>
					</div>
				</div>
			</div>
			
			<div id="services-content">
			<div class="row services-nav-wrapper">
                <div class="col-sm nav-item active">
                    <h5>Mobile Design</h5>
                </div>
                <div class="col-sm nav-item">
                    <h5>Web Development</h5>
	            </div>
                <div class="col-sm nav-item">
                    <h5>UI Design</h5>
                    </div>
                <div class="col-sm nav-item">
                    <h5>Bluetooth</h5>
                </div>
                <div class="col-sm nav-item">
                    <h5>Internet of Things</h5>
                </div>
	        </div><!-- row services-nav-wrapper -->

			</div><!-- row -->
			</div>
	    </div><!-- container -->
	</div><!-- our-services -->
	
	<div id="our-clients" class="our-clients-wrapper py-standard-separator pt-separator-above position-relative ">
	    <div class="container">
	     <h3 class="text-center section-title">Our Happy Clients</h3>
<!--
	        <div class="d-flex flex-wrap flex-row rellax" data-rellax-speed=".75"  data-rellax-percentage="0.5">
		        
		        <?php

				// check if the repeater field has rows of data
				$counter = 0;
				if( have_rows('clients') ):
				
				 	// loop through the rows of data
				    while ( have_rows('clients') ) : the_row();
				    
				    	$counter++;
				    	$image = get_sub_field('logo');
				
				        if( !empty($image) ): 
				
							// vars
							$url = $image['url'];
							$title = $image['title'];
							$alt = $image['alt'];
						
							// thumbnail
							$size = 'thumbnail';
							$thumb = $image['sizes'][ $size ];
							$width = $image['sizes'][ $size . '-width' ] / 2;
							$height = $image['sizes'][ $size . '-height' ] / 2; ?>
							
							<div class="px-4 my-flex-item php">
								<img src="<?php echo $thumb; ?>" title="<?php echo $title; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
							</div>
						
						<?php endif; 
					        
				    endwhile;
				   
				    if( !$counter % 5 == 0):
					
						for ($x = $counter; $x % 5 != 0; $x++) {
						    echo '<div class="px-4 my-flex-item filler-col"></div>';
						} 
						
					endif;
				
				endif;?>
				
	        </div>
-->


		<div id="logos-container">
			<img src="wp-content/themes/yan-base/img/TT/healthio.png">
			<img src="wp-content/themes/yan-base/img/TT/wicis-sports.png">
			<img src="wp-content/themes/yan-base/img/TT/luminaid.png">
			<img src="wp-content/themes/yan-base/img/TT/sky-networks.png">
			<img src="wp-content/themes/yan-base/img/TT/repz.png">
			<img src="wp-content/themes/yan-base/img/TT/synq3.png">
			<img src="wp-content/themes/yan-base/img/TT/Voiptel-Logo.png">
			<img src="wp-content/themes/yan-base/img/TT/kidcase.jpg">
			<img src="wp-content/themes/yan-base/img/TT/pica-logo.png">
			<img src="wp-content/themes/yan-base/img/TT/fliptask.png">
			<img src="wp-content/themes/yan-base/img/TT/rage-unlimited.png">
			<img src="wp-content/themes/yan-base/img/TT/coman-publishing.png">
			<img src="wp-content/themes/yan-base/img/TT/fliptask.png">
			<img src="wp-content/themes/yan-base/img/TT/Center_Integrative_Medicine.png">
			<img src="wp-content/themes/yan-base/img/TT/irrived.png">
			<img src="wp-content/themes/yan-base/img/TT/enso.png">
			<img src="wp-content/themes/yan-base/img/TT/aci.png">
			<img src="wp-content/themes/yan-base/img/TT/nusura.jpg">

		</div>
		</div>
	</div><!-- our-clients -->
	
	
	<div id="about-us" class="about-us py-standard-separator pt-separator-above pb-0 ">
	    <div class="container">
	    <h3 class="text-center section-title">About Us</h3>
			<div class="row d-sm-flex align-items-center">          
	            <div class="col-md-7 hide pl-md-0 rellax" data-rellax-speed=".75"  data-rellax-percentage="0.5">
		            <?php if( get_field('paragraph_1') ): ?>
						<?php the_field('paragraph_1'); ?>
					<?php endif; ?>
	            </div>
	            <div class="col-md-5">
					<div class="img-simple hide">
						<img width="249" height="242" class="ml-sm-5" src="<?php echo get_template_directory_uri(); ?>/img/year.png">
					</div>
	            </div>
			</div>
			<div class="row d-sm-flex align-items-center mt-3 mt-sm-5">
				<div class="col-md-5 px-0">
					<div class="offset-double-img hide">
			        	<img width="499" height="334" class="rellax" data-rellax-speed="0.5" data-rellax-percentage="0.3"
			        		src="<?php echo get_template_directory_uri(); ?>/img/sky-networks-1.jpg"/>
						<img width="499" height="334" class="rellax" data-rellax-speed="-0.5" data-rellax-percentage="0.3"
							src="<?php echo get_template_directory_uri(); ?>/img/sky-networks-2.jpg"/>
		        	</div>
	            </div>      
	            <div class="col-md-7 hide pl-sm-5">
	                <?php if( get_field('paragraph_2') ): ?>
						<?php the_field('paragraph_2'); ?>
					<?php endif; ?>
	                <a href="#contact" class="btn btn-outline btn-primary"><span class="filler"></span>Contact Us</a>
	            </div>
			</div>
		</div>
		<div class="bottom-bg bg-white"></div>
	</div><!-- about-us -->
	
	<div class="contact-us-wrapper">
	    <div class="container">
	        <div class="row mt-5">
	            <div class="col-md-12 col-lg-4 text-left contact-left rellax" data-rellax-speed="-1.5" data-rellax-percentage="0">
	                <h3 class="section-title">Contact Us</h3>
	                <div class="contact-info-list">
		                <?php if( get_field('contact_info') ): ?>
							<?php the_field('contact_info'); ?>
						<?php endif; ?>
	                </div>
	            </div>
				<div id="contact" class="col-md-12 col-lg-5 contact-form pull-right offset-lg-3">
					<div class="form-wrap">
						<?php echo do_shortcode( '[contact-form-7 id="14" title="Contact"]' ); ?>
					</div>
				</div>
			</div>
	    </div>
	    <div class="bg-wrapper rellax" data-rellax-speed="0.75" data-rellax-percentage="0.5"></div>
	</div><!-- contact-us -->

<?php
while ( have_posts() ) :
	the_post();

// 	get_template_part( 'template-parts/content', 'page' );

endwhile; // End of the loop.
?>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

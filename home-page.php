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
					<?php echo $heroContent['main_heading']; ?>
				</h1>
				<h3 class="mx-lg-5 px-lg-5 rellax" data-rellax-speed="-.25"  data-rellax-percentage="0.5">
					<?php echo $heroContent['sub_heading']; ?>
				</h3>
			<?php endif; ?>
		</div>
		<div class="bg-img">
				<img src="/thinktree/wp-content/themes/yan-base/img/TT/hero-placeholder.jpg">
			</video>
		</div>
		<div class="separator-bottom">
			<svg class="seperator seperator-white" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 2800 109"><path d="M2800,0V109H0V0C0,59.5,626.81,107.73,1400,107.73S2800,59.5,2800,0Z" style="fill:#fff"/>
</svg>
		</div>
	</div><!-- home-hero -->
	
	
	<div class="all-products-wrapper">
		
		<?php $product1 = get_field('product_row_1');
		if( $product1 ): ?>
		<div id="sky-dance" class="product-row has-curve-bottom ">
			<div class="product-inner">
			<div class="container">
				<div class="row d-sm-flex align-items-center reverse-wrap-mobile">
					<div class="col-md-6">
						<div class="img-circle-group hide">
							<div class="circle-element"></div>
							<img width="384" height="384" class="spin rellax" data-rellax-speed="-1"  data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/img/sky-dance-web.png">
						</div>
		            </div>            
		            <div class="col-md-6 hide pl-md-0 rellax" data-rellax-speed=".75"  data-rellax-percentage="0.5">
		                <p class="h6"><?php echo $product1['subtitle']; ?></p>
		                <span class="span-line"></span>
		                <h2 class="rellax" data-rellax-speed="-.25"  data-rellax-percentage="0.2"><?php echo $product1['title']; ?></h2>
		                <p><?php echo $product1['short_description']; ?></p>
		                <a href="<?php echo $product1['learn_more_link']; ?>" class="btn btn-outline btn-primary"><span class="filler"></span>Learn More</a>
		            </div>
				</div>
			</div>
			</div><!-- product-inner -->
			<div class="separator-bottom separator-curve">
				<svg class="seperator" viewBox="0 0 2957 1420.11" preserveAspectRatio="none">
					<path d="M0,1282.11s521,401,1415-462,1248-857,1542-797v1397H0Z" style="fill:#f4f7fc"/>
				</svg>
			</div>
		</div><!-- skydance -->
		<?php endif; ?>
		
		<?php $product2 = get_field('product_row_2');
		if( $product2 ): ?>
		<div id="skyphone-softphone" class="product-row grey-blue-bg">
			<div class="product-inner">
			<div class="container">
				<div class="row d-sm-flex align-items-center">        
		            <div class="col-md-6 hide text-right pr-md-0 rellax" data-rellax-speed=".75"  data-rellax-percentage="0.5">
		                <p class="h6"><?php echo $product2['subtitle']; ?></p>
		                <span class="span-line float-right"></span>
		                <h2 class="rellax" data-rellax-speed="-.25"  data-rellax-percentage="0.2"><?php echo $product2['title']; ?></h2>
		                <p><?php echo $product2['short_description']; ?></p>
		                <a href="<?php echo $product2['learn_more_link']; ?>" class="btn btn-outline btn-primary"><span class="filler"></span>Learn More</a>
		            </div>
		            <div class="col-md-6">
						<div class="img-phone hide">
							<div class="info-popup">
								<div class="popup-content">
									<?php echo $product2['popup_text']; ?>
								</div>
								<svg xmlns="http://www.w3.org/2000/svg" width="7.07" height="17" viewBox="0 0 7.07 17"><path d="M2.46,7.37a2,2,0,0,0,.14-.64c0-.3-.14-.43-.37-.43-.53,0-.94.47-1.39,1.7L.41,9.1H0L.59,7.45a3,3,0,0,1,3-2.21C5,5.24,5.49,6,5.49,7a4.06,4.06,0,0,1-.23,1.26L3,14.86a1.9,1.9,0,0,0-.14.63.39.39,0,0,0,.43.44c.39,0,.83-.31,1.36-1.7l.39-1h.41L4.9,14.78A2.94,2.94,0,0,1,2,17c-1.33,0-2-.65-2-1.78a5.38,5.38,0,0,1,.33-1.65ZM5.48,0c1,0,1.59.52,1.59,1.35a2.09,2.09,0,0,1-2.23,2c-1,0-1.57-.51-1.57-1.31A2,2,0,0,1,5.48,0Z" style="fill:#fbfcff"/>
								</svg>
							</div>
							<img width="587" height="978" class="phone-full" src="<?php echo get_template_directory_uri(); ?>/img/phone-app-selective.png">
<!--
							<img width="242" height="652" class="phone-left" src="<?php echo get_template_directory_uri(); ?>/img/phone-app-left.png">
							<img width="566" height="845" class="phone-right" src="<?php echo get_template_directory_uri(); ?>/img/phone-app-right.png">
-->
						</div>
		            </div>    
				</div>
			</div>
			</div><!-- product-inner -->
		</div><!-- skyphone -->
		<?php endif; ?>
		
		<?php $product3 = get_field('product_row_3');
		if( $product3 ): ?>
		<div id="sky-ss7-gateways" class="product-row has-curve-bottom grey-blue-bg pt-0">
			<div class="product-inner ">
			<div class="container">
				<div class="row d-sm-flex align-items-center reverse-wrap-mobile">
					<div class="col-md-6">
						<div class="img-simple hide">
							<div class="info-popup">
								<div class="popup-content">
									<?php echo $product3['popup_text']; ?>
								</div>
								<svg xmlns="http://www.w3.org/2000/svg" width="7.07" height="17" viewBox="0 0 7.07 17"><path d="M2.46,7.37a2,2,0,0,0,.14-.64c0-.3-.14-.43-.37-.43-.53,0-.94.47-1.39,1.7L.41,9.1H0L.59,7.45a3,3,0,0,1,3-2.21C5,5.24,5.49,6,5.49,7a4.06,4.06,0,0,1-.23,1.26L3,14.86a1.9,1.9,0,0,0-.14.63.39.39,0,0,0,.43.44c.39,0,.83-.31,1.36-1.7l.39-1h.41L4.9,14.78A2.94,2.94,0,0,1,2,17c-1.33,0-2-.65-2-1.78a5.38,5.38,0,0,1,.33-1.65ZM5.48,0c1,0,1.59.52,1.59,1.35a2.09,2.09,0,0,1-2.23,2c-1,0-1.57-.51-1.57-1.31A2,2,0,0,1,5.48,0Z" style="fill:#fbfcff"/>
								</svg>
							</div>
							<img width="484" height="364" class="" src="<?php echo get_template_directory_uri(); ?>/img/sky-ss7-gateway.jpg">
						</div>
		            </div>            
		            <div class="col-md-6 hide pl-md-0 rellax" data-rellax-speed=".75" data-rellax-percentage="0.5">
			            <p class="h6"><?php echo $product3['subtitle']; ?></p>
		                <span class="span-line"></span>
		                <h2 class="rellax" data-rellax-speed="-.25"  data-rellax-percentage="0.2"><?php echo $product3['title']; ?></h2>
		                <p><?php echo $product3['short_description']; ?></p>
		                <a href="<?php echo $product3['learn_more_link']; ?>" class="btn btn-outline btn-primary"><span class="filler"></span>Learn More</a>
		            </div>
				</div>
			</div>
			</div><!-- product-inner -->
			<div class="separator-bottom separator-curve">
				<svg class="seperator" viewBox="0 0 2957 1420.11" preserveAspectRatio="none">
					<path d="M0,1282.11s521,401,1415-462,1248-857,1542-797v1397H0Z" style="fill:#ffffff"/>
				</svg>
			</div>
		</div><!-- skydance -->
		<?php endif; ?>
		
		<?php $product4 = get_field('product_row_4');
		if( $product4 ): ?>
		<div id="sky-session-controller" class="product-row">
			<div class="product-inner">
			<div class="container">
				<div class="row d-sm-flex align-items-center">           
		            <div class="col-md-6 hide text-right pr-md-0 rellax" data-rellax-speed=".75" data-rellax-percentage="0.5">
			            <p class="h6"><?php echo $product4['subtitle']; ?></p>
		                <span class="span-line float-right"></span>
		                <h2 class="rellax" data-rellax-speed="-.25"  data-rellax-percentage="0.2"><?php echo $product4['title']; ?></h2>
		                <p><?php echo $product4['short_description']; ?></p>
		                <a href="<?php echo $product4['learn_more_link']; ?>" class="btn btn-outline btn-primary"><span class="filler"></span>Learn More</a>
		            </div>
		            <div class="col-md-6 text-right">
						<div class="img-simple hide">
							<div class="info-popup">
								<div class="popup-content">
									<?php echo $product4['popup_text']; ?>
								</div>
								<svg xmlns="http://www.w3.org/2000/svg" width="7.07" height="17" viewBox="0 0 7.07 17"><path d="M2.46,7.37a2,2,0,0,0,.14-.64c0-.3-.14-.43-.37-.43-.53,0-.94.47-1.39,1.7L.41,9.1H0L.59,7.45a3,3,0,0,1,3-2.21C5,5.24,5.49,6,5.49,7a4.06,4.06,0,0,1-.23,1.26L3,14.86a1.9,1.9,0,0,0-.14.63.39.39,0,0,0,.43.44c.39,0,.83-.31,1.36-1.7l.39-1h.41L4.9,14.78A2.94,2.94,0,0,1,2,17c-1.33,0-2-.65-2-1.78a5.38,5.38,0,0,1,.33-1.65ZM5.48,0c1,0,1.59.52,1.59,1.35a2.09,2.09,0,0,1-2.23,2c-1,0-1.57-.51-1.57-1.31A2,2,0,0,1,5.48,0Z" style="fill:#fbfcff"/>
								</svg>
							</div>
							<img width="460" height="412" class="" src="<?php echo get_template_directory_uri(); ?>/img/session-controller.jpg">
						</div>
		            </div> 
				</div>
			</div>
			</div><!-- product-inner -->
		</div><!-- session controller -->
		<?php endif; ?>
		
		<?php $product5 = get_field('product_row_5');
		if( $product5 ): ?>
		<div id="sky-pbx" class="product-row pt-lg-0 ">
			<div class="product-inner">
			<div class="container">
				<div class="row d-sm-flex align-items-center reverse-wrap-mobile">
					<div class="col-md-6">
						<div class="img-pbx hide">
							<div class="sky-dance-globe">
								<span>Sky DANCE</span>
								<img width="162" height="162" class="spin" src="<?php echo get_template_directory_uri(); ?>/img/sky-dance-globe-sm8.png">
							</div>
							<img width="461" height="449" class="" src="<?php echo get_template_directory_uri(); ?>/img/sky-pbx-img.jpg">
						</div>
		            </div>      
		            <div class="col-md-6 hide pr-md-0 rellax" data-rellax-speed=".75" data-rellax-percentage="0.5">
		                <p class="h6"><?php echo $product5['subtitle']; ?></p>
		                <span class="span-line"></span>
		                <h2 class="rellax" data-rellax-speed="-.25" data-rellax-percentage="0.2"><?php echo $product5['title']; ?></h2>
		                <p><?php echo $product5['short_description']; ?></p>
		                <a href="<?php echo $product5['learn_more_link']; ?>" class="btn btn-outline btn-primary"><span class="filler"></span>Learn More</a>
		            </div>
				</div>
			</div>
			</div><!-- product-inner -->
		</div><!-- sky pbx -->
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
		<div class="separator-top">
			<svg class="seperator seperator-white" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 2800 109">
				<path class="st0" d="M0,109V0h2800v109c0-59.5-626.8-107.7-1400-107.7S0,49.5,0,109z" style="fill:#fff"//>
			</svg>
		</div>
		<div class="container rellax" data-rellax-speed=".75"  data-rellax-percentage="0.5">
			<h3 class="text-center white section-title">Our Services</h3>
			<div class="row services-nav-wrapper">
                <div class="col-sm nav-item active">
                    <img src="<?php echo $service1['thumbnail1']['sizes'][ 'thumbnail' ]; ?>"/>
                    <p class="h4"><?php echo $service1['title']; ?></p>
                </div>
                <div class="col-sm nav-item">
	                <img src="<?php echo $service2['thumbnail']['sizes'][ 'thumbnail' ]; ?>"/>
                    <p class="h4"><?php echo $service2['title']; ?></p>
	            </div>
                <div class="col-sm nav-item">
	                <img src="<?php echo $service3['thumby']['sizes'][ 'thumbnail' ]; ?>"/>
                    <p class="h4"><?php echo $service3['title']; ?></p>
                    </div>
                <div class="col-sm nav-item">
                    <img width="66" height="74" src="<?php echo get_template_directory_uri(); ?>/img/general-service.png">
                	<p class="h4">General<br>Service</p>
                </div>
                <div class="col-sm nav-item">
                    <img width="74" height="74" src="<?php echo get_template_directory_uri(); ?>/img/consulting-support.png">
                    <p class="h4">Consulting<br>Support</p>
                </div>
	        </div><!-- row services-nav-wrapper -->
			<div class="row active-services-wrapper">
				<div class="content-slide">
					<div class="row mx-0">
			            <div class="col-lg-3 text-center pt-sm-5 col-sm-3 img-col">
				            <img class="mx-auto" src="<?php echo $service1['description_image1']['sizes'][ 'thumbnail' ]; ?>"/>
			            </div>
			            <div class="col-lg-9 col-sm-9">
			                <p class="h4"><?php echo $service1['title']; ?></p>
			                <?php echo $service1['description']; ?>
			            </div>
					</div>
				</div>
				<div class="content-slide">
					<div class="row mx-0">
			            <div class="col-lg-3 text-center pt-sm-5 col-sm-3 img-col">
				            <img class="mx-auto" src="<?php echo $service2['description_image']['sizes'][ 'thumbnail' ]; ?>"/>
			            </div>
			            <div class="col-lg-9 col-sm-9">
				            <p class="h4"><?php echo $service2['title']; ?></p>
			                <?php echo $service2['description']; ?>
			            </div>
					</div>
				</div>
				<div class="content-slide">
					<div class="row mx-0">
			            <div class="col-lg-3 text-center pt-sm-5 col-sm-3 img-col">
				            <img class="mx-auto" src="<?php echo $service3['description_image2']['sizes'][ 'thumbnail' ]; ?>"/>
			            </div>
			            <div class="col-lg-9 col-sm-9">
				            <p class="h4"><?php echo $service3['title']; ?></p>
			                <?php echo $service3['description']; ?>
			            </div>
					</div>
				</div>
				<div class="content-slide">
					<div class="row mx-0">
			            <div class="col-lg-3 text-center pt-sm-5 col-sm-3 img-col">
				            <img class="mx-auto" src="<?php echo $service4['desc_image']['sizes'][ 'thumbnail' ]; ?>"/>
			            </div>
			            <div class="col-lg-9 col-sm-9">
				            <p class="h4"><?php echo $service4['title']; ?></p>
			                <?php echo $service4['description']; ?>
			            </div>
					</div>
				</div>
				<div class="content-slide">
					<div class="row mx-0">
			            <div class="col-lg-3 text-center pt-sm-5 col-sm-3 img-col">
				            <img class="mx-auto" src="<?php echo $service5['description_image']['sizes'][ 'thumbnail' ]; ?>"/>
			            </div>
			            <div class="col-lg-9 col-sm-9">
				            <p class="h4"><?php echo $service5['title']; ?></p>
			                <?php echo $service5['description']; ?>
			            </div>
					</div>
				</div>
			</div><!-- row -->
	    </div><!-- container -->
	    <div class="separator-bottom">
			<svg class="seperator seperator-white" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 2800 108.8">
				<path class="st1" d="M2800,104.1v4.8H0v-4.8C195.9,43.6,748.7,0,1400,0S2604.1,43.6,2800,104.1z"/>
			</svg>
		</div>
	</div><!-- our-services -->
	
	<div id="our-clients" class="our-clients-wrapper py-standard-separator pt-separator-above position-relative ">
	    <div class="container">
	     <h3 class="text-center section-title">Our Happy Clients</h3>
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
		</div>
		<div class="separator-bottom">
			<svg class="seperator seperator-white" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 2800 108.8">
				<path class="st1" d="M2800,104.1v4.8H0v-4.8C195.9,43.6,748.7,0,1400,0S2604.1,43.6,2800,104.1z" style="fill:#f4f7fc;"/>
			</svg>
		</div>
	</div><!-- our-clients -->
	
	<div id="about-us" class="about-us py-standard-separator pt-separator-above grey-blue-bg pb-0 ">
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
	    <div class="separator-top separator-curve">
			<svg class="seperator" viewBox="0 0 2957 1420.11" preserveAspectRatio="none">
				<path class="st0" d="M2957,138c0,0-521-401-1415,462S294,1457,0,1397L0,0l2957,0V138z" style="fill:#ffffff"/>
			</svg>

		</div>
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

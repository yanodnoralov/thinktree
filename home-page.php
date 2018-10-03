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
					We build <span>extraordinary</span> digital products.
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
		<div id="luminaid" class="product-row has-curve-bottom pt-0">
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

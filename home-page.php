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
		<video id="top-video" playsinline="" autoplay muted="" loop poster="<?php echo get_stylesheet_directory_uri(); ?>/img/tt/tr-poster-min.jpg" class="bgvid">
        	<source data-src="https://fishermenlabs.com/wp-content/themes/fl/dist/images/fl.webm" type="video/webm" src="<?php echo get_stylesheet_directory_uri(); ?>/img/tt/tr-hero-min.webm">
			<source data-src="https://fishermenlabs.com/wp-content/themes/fl/dist/images/fl.mp4" type="video/mp4" src="<?php echo get_stylesheet_directory_uri(); ?>/img/tt/tr-hero-min.mp4">
    	</video>
    	<div class="bg-overlay"></div>
		<div class="container hero-content">
			<?php if ($heroContent = get_field('hero_content')): ?>
				<h1 class="huge-title rellax" data-rellax-speed="-1" data-rellax-percentage="0.5">
					<?php echo $heroContent; ?>
				</h1>
			<?php endif; ?>
		</div>
	</div><!-- home-hero -->
	
	
	<div id="our-portfolio" class="all-products-wrapper">
        
        <?php
	    
	    
        
        if (have_rows('products')):

            $count = 1;

            while (have_rows('products')): the_row();
            
            	$random_class = 'id-'.mt_rand();

                $product_background = get_sub_field('product_background');

                $rellax_speed = ($count == 1) ? '-1.5' : '-1';
                
                $invert_order = '';

                if (get_sub_field('invert_order')) {
	                $invert_order = " invert-columns";
                }

                ?>
                
                <?php if (get_sub_field('project_image_width_mobile') || get_sub_field('project_image_width')):?>
                <style>
	                <?php if (get_sub_field('project_image_width')):?>
					@media (min-width:768px) {
					.<?php echo $random_class;?> .project-img {
						max-width: <?php the_sub_field('project_image_width'); ?>;
					}
					}
					<?php endif; if (get_sub_field('project_image_width_mobile')):?>
					@media (max-width:767px) {
					.<?php echo $random_class;?> .project-img {
						max-width: <?php the_sub_field('project_image_width_mobile'); ?>;
					}
					}
					<?php endif;?>
				</style>
				<?php endif;?>

                <div class="product-row <?php echo $random_class; echo $invert_order;?>">
                    <div class="product-inner">
                    <div class="parallax-bg rellax" style="background-image: url(<?php echo $product_background; ?>);" data-rellax-speed=".75"  data-rellax-percentage="0.5"></div>
                    <div class="container">
                        <div class="row d-sm-flex align-items-center reverse-wrap-mobile">
                            <div class="col-md-6 img-wrapper rellax" data-rellax-speed="<?php echo $rellax_speed; ?>"  data-rellax-percentage="0.5">
                                <?php if ($product_image = get_sub_field('product_image')): ?>
                                <img class="project-img" src="<?php echo $product_image['url']; ?>" alt="<?php echo $product_image['alt'] ?>" />
                                <?php endif; ?>
                            </div>            
                            <div class="col-md-6 hide pl-md-0 p-right txt-col">

                                <?php if ($product_title = get_sub_field('product_title')): ?>

                                <h2><?php echo $product_title; ?></h2>

                                <?php

                                endif;

                                if( have_rows('product_tags') ):

                                    echo '<div class="product-tags">';

                                    // loop through the rows of data
                                    while ( have_rows('product_tags') ) : the_row();

                                        $product_tag = get_sub_field('product_tag');
                                        echo '<div>'.get_sub_field('product_tag').'</div>';

                                    endwhile;

                                    echo '</div>';

                                endif;

                                if ($product_description = get_sub_field('product_description')): ?>

                                <p><?php echo $product_description; ?></p>

                                <?php endif; ?>

                                <?php if ($product_link = get_sub_field('product_link')): ?>

                                <a href="<?php echo $product_link['url'];?>" class="btn btn-outline btn-primary"><span class="filler"></span><?php echo $product_link['title'];?></a>

                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    </div><!-- product-inner -->
                </div><!-- product-row -->




				<?php
                $count++;

            endwhile;
        
        endif;
        
        ?>
		
        <div id="services" class="section-padding">
            
            <div class="container">
	            
	            <div class="row">
		            <div class="col-12">
						<h2 class="white section-title mb-3 mb-md-5">Services</h2>
		            </div>
	            </div>
                
                <div id="services-inner" class="row">

                    <div class="services-content col-lg-8 col-md-8 col-sm-12">

                        <?php

                        if (have_rows('services')):

                            $count = 0;

                            while (have_rows('services')): the_row();

                                $active = ($count == 0) ? 'active' : 'inactive';

                                $service_title = get_sub_field('service_title');
                                $service_text = get_sub_field('service_text');

                                ?>

                                <div class="<?php echo $active; ?>">

                                    <h4><?php echo $service_title; ?></h4>

                                    <p><?php echo $service_text; ?></p>
                                </div>

                                <?php

                                $service_links .= '
                                <div class="service-nav-item '.$active.'">
                                    <h5>'.$service_title.'</h5>
                                </div>';

                                $count++;

                            endwhile;

                        endif;

                        ?>

                    </div>

                    <div class="services-titles col-lg-4 col-md-3 col-sm-12">
                        
                        <?php echo $service_links; ?>
                        
                    </div><!-- row -->
                    
                </div>
                
            </div><!-- container -->
            
        </div><!-- our-services -->

        <div id="our-clients" class="our-clients-wrapper section-padding position-relative">

            <div class="container">

            	<h3 class="text-center section-title green_border">Customers + Partners</h3>

            <?php if (have_rows('customers_partners')): ?>

	            <div id="logos-container">
	
	                <?php
	
		                while (have_rows('customers_partners')): the_row();
		                
		                	echo '<div class="logo-wrap">';
		
		                    $logo_link = get_sub_field('logo_link');
		                    
		                    $size = 'thumbnail';
		
		                    if ($logo_link): ?>
		
		                    	<a href="<?php echo $logo_link['url'];?>" alt="<?php echo $logo_link['title']; ?>">
		
		                    <?php endif; ?>
		
		                        <?php if ($logo = get_sub_field('logo')): ?>
		                        
		                        	<?php echo wp_get_attachment_image( $logo, $size );?>
		
		                        <?php endif; ?>
		
		                    <?php if ($logo_link): ?>
		
		                    	</a>
		
		                    <?php endif;
		                    
		                    echo '</div>';
		
		                endwhile;
	
	                ?>
	                
	            </div>
            </div>
			<?php endif;?>
    	</div><!-- our-clients -->
            
        <?php if (have_rows('accolades')):
            
        ?>

        <div id="accolades" class="section-padding">

            <div class="container">
				
				<div class="row">
					<div class="col-12">
						<h3 class="green_border">Accolades</h3>
					</div>
				</div>

                <div class="accolades-container row">

                    <?php

                    while (have_rows('accolades')): the_row();

                        if ($accolade = get_sub_field('accolade')): ?>

                        <div class="col-md-3 col-sm-6"><div class="accolade-wrap"><img src="<?php echo $accolade['url']; ?>" alt="<?php echo $accolade['alt'] ?>" /></div></div>

                        <?php

                        endif;

                    endwhile;

                    ?>

                </div>

            </div>

        </div>

        <?php

        endif;
            
        if (have_rows('processes')):

            $process_content = $process_links = '';

            $count = 1;

            while (have_rows('processes')): the_row();

                $process_title = get_sub_field('process_title');

                $active = ($count == 1) ? ' active' : 'inactive';
                $active_process = ($count == 1) ? ' active-process' : 'inactive-process';

                $process_links .= '<div id="process-'.$count.'-title" class="process-nav-item '.$active.'"><span class="num">'.sprintf('%02d',$count).'</span><h5>'.$process_title.'</h5></div>';

                $process_content .= '
                <div id="process-'.$count.'-content" class="process-content-single '.$active_process.'">';

                    if ($process_img = get_sub_field('process_img')):

                    $process_content .= '<img src="'.$process_img['url'].'" alt="'.$process_img['alt'].'" />';

                    endif;

                    $process_content .= '<div>';

                    if ($process_title):

                        $process_content .= '<h4>'.$process_title.'</h4>';

                    endif;

                    if ($process_text = get_sub_field('process_text')):

                        $process_content .= '<p>'.$process_text.'</p>';

                    endif;

                $process_content .= '
                    </div>

                </div>';

                $count++;

            endwhile;

            ?>

        <div id="process" class="section-padding">
            <div class="container">
                <div id="process-titles">
                    <h2>Process</h2>
                    <div class="process-titles-slider">
                    	<?php echo $process_links; ?>
                    </div>
                </div>
                <div id="process-content">
                    <?php echo $process_content; ?>
                </div>
            </div>
        </div>
            
        <?php endif; ?>
	
        <div id="blog" class="section-padding">

            <div class="container">

                <h2 class="green_border">Blog</h2>

                <div class="blog-container row">

                    <?php

                    $query = new WP_Query(
                        array(
                            'post_type' => 'post',
                            'posts_per_page' => '3',
                            'orderby' => 'date',
                           'order' => 'DESC',
                        )
                    );

                    $posts = $query->posts;

                    $count = 1;

                    foreach($posts as $post):

                        $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                        $permlink = get_permalink($post->ID);

                        if ($count == 1):

                            echo '
                            <div class="blog-left col-lg-9">

                                <a class="blog-wrap" href="'.$permlink.'"><div class="blog-wrap-inner" id="blog-'.$count.'" style="background-image: url('.$featured_img_url.');"><p class="h4">'.$post->post_title.'</p></div></a>

                            </div>
                            <div class="blog-right col-lg-3">';

                        else:

                            echo '<a class="blog-wrap" href="'.$permlink.'"><div class="blog-wrap-inner" id="blog-'.$count.'" style="background-image: url('.$featured_img_url.');"><p>'.$post->post_title.'</p></div></a>';

                        endif;

                        $count++;

                    endforeach;

                    wp_reset_query();

                    ?>

                    </div>

                </div>

            </div>

        </div>
	
        <div class="contact-us-wrapper section-padding" id="contact">

            <div class="container">

                <div class="row mt-5">

                    <div class="col-lg-12" data-rellax-speed="-1.5" data-rellax-percentage="0">

                        <h2 class="section-title green_border">Contact</h2>

                    </div>

                    <div class="form-wrap col-lg-9">

                        <?php echo do_shortcode( '[contact-form-7 id="14" title="Contact"]' ); ?>

                    </div>

                </div>

            </div>

            <div class="bg-wrapper rellax" data-rellax-speed="0.75" data-rellax-percentage="0.5"></div>

        </div><!-- contact-us -->

    </main><!-- #main -->
        
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

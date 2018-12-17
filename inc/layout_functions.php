<?php
	
/////////////FUNCTIONS

//Columns count
function columns_class($sub_field, $col_count) {
    if ( $col_count == 1 ) {
        $column_class = " col-md-12";
    } else if ( $col_count == 2 ) {
        $column_class = " col-md-6";
    } else if ( $col_count == 3 ) {
        $column_class = " col-md-4";
    }
    echo $column_class;
}


/////////////LAYOUT
function get_template_by_layout($layout){
    ob_start();
    $current_page =  get_the_ID();
    $random_class = 'id-'.mt_rand();
    switch ( $layout ) {
        
        // Flexible Columns
        case 'flexible_columns':
        	$section_classes = "";
        	if (get_sub_field('bg_color')) {
        	} else {
	        	$section_classes = $section_classes . ' no-bg-color';
        	}
        	if (get_sub_field('white_text')) {
	        	$section_classes = $section_classes . ' white-text';
        	}
        	if (get_sub_field('narrow_width')) {
	        	$section_classes = $section_classes . ' narrow_width';
        	}
        	if (get_sub_field('center_title')) {
	        	$section_classes = $section_classes . ' center-title';
        	}
        	if (get_sub_field('center_all')) {
	        	$section_classes = $section_classes . ' center-all';
        	}
        	if (get_sub_field('v_align_center_center')) {
	        	$section_classes = $section_classes . ' v-center-content';
        	}
        	if (get_sub_field('disable_img_shadow')) {
	        	$section_classes = $section_classes . ' disable-img-shadow';
        	}
        	
        	$wide_gutter = "";
        	if (get_sub_field('large_column_gutters')) {
	        	$wide_gutter = " wide-gutter-lg";
	        }
        	
        	$section_classes = $section_classes . ' '.get_sub_field('section_top_padding');
        	$section_classes = $section_classes . ' '.get_sub_field('section_bottom_padding');
        	
            ?>
            <?php if (get_sub_field('bg_image') || get_sub_field('bg_image_mobile') || get_sub_field('bg_color')):?>
            <style>
	            <?php if (get_sub_field('bg_image')):?>
		            @media (min-width:768px){
				        .<?php echo $random_class; ?> {
					        background-image:url(<?php echo get_sub_field('bg_image');?>);
					        background-position: <?php echo get_sub_field('bg_position');?>;
					    }
				    }
			    <?php endif; ?>
			    <?php if (get_sub_field('bg_image_mobile')):?>
		            @media (max-width:767px){
				        .<?php echo $random_class; ?> {
					        background-image:url(<?php echo get_sub_field('bg_image_mobile');?>);
					        background-position: <?php echo get_sub_field('bg_position');?>;
					    }
				    }
			    <?php endif; ?>
			    <?php if (get_sub_field('bg_color')):?>
			    	.<?php echo $random_class; ?> {
				    	background-color: <?php echo get_sub_field('bg_color');?>
				    }
			    <?php endif; ?>
		    </style>
		    <?php endif; ?>
            <div class="section <?php echo $no_bg_color; echo $section_classes; echo ' '.$random_class;?>">
                <div class="container">
	                <?php if ( get_sub_field('title')):?>
                    <div class="row mb-5">
                        <div class="col-md-12">
	                        <?php if ( get_sub_field('title') ):?>
                            	<h2 class="section-title mb-0"><?php the_sub_field('title');?></h2>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                        <?php
	                    $column_count = count( get_sub_field('boxes') );
                        if ( have_rows('boxes') ) :?>
	                        <div class="row boxes-row <?php echo $wide_gutter;?>">
		                        <?php
			                    $counter = 0;
	                            while ( have_rows('boxes') ) : the_row();
	                            	$counter++;
	                            	$product = get_sub_field('product', $post->ID);
	                            	$add_right_border = "";
	                            	if (get_sub_field('add_right_border')) {
		                            	$add_right_border = " border-right";
	                            	}
	                            	?>
	                            	<div class="boxes-col <?php columns_class(get_sub_field('boxes'), $column_count); echo $add_right_border;?>">
		                            	<?php 
			                              	
			                              	// check if the flexible content field has rows of data
											if( have_rows('column_content') ):
											
											     // loop through the rows of data
											    while ( have_rows('column_content') ) : the_row();
											    
											        if( get_row_layout() == 'html_field' ) {
											
											        	the_sub_field('html_field');
											        
											        }
											
											        if( get_row_layout() == 'image' ) {?>
											        	
											        	<img <?php ar_responsive_image(get_sub_field('image'),'full','280px'); ?> />
													<?php
											        }
											        
											        if( get_row_layout() == 'button' ) {
												        $button = get_sub_field('button');
											        	?>
											        	
											        	<a class="btn btn-outline btn-primary" href="<?php echo $button["url"]?>" title="<?php echo $button["title"]?>"><?php echo $button["title"]?></a>
													<?php
											        }
											
											    endwhile;
											    
											endif;
			                              	
			                            ?>
	                            	</div>
	                            <?php
	                            endwhile;?>
	                        </div>
                        <?php endif;?>
                </div>
            </div>
            <?php
            break;
            
            
        // About Deliverables
        case 'about_deliverables':
        	$section_classes = "";
        	if (get_sub_field('bg_color')) {
        	} else {
	        	$section_classes = $section_classes . ' no-bg-color';
        	}
        	if (get_sub_field('white_text')) {
	        	$section_classes = $section_classes . ' white-text';
        	}
        	if (get_sub_field('narrow_width')) {
	        	$section_classes = $section_classes . ' narrow_width';
        	}
        	if (get_sub_field('center_title')) {
	        	$section_classes = $section_classes . ' center-title';
        	}
        	if (get_sub_field('center_all')) {
	        	$section_classes = $section_classes . ' center-all';
        	}
        	if (get_sub_field('v_align_center_center')) {
	        	$section_classes = $section_classes . ' v-center-content';
        	}
        	$section_classes = $section_classes . ' '.get_sub_field('section_top_padding');
        	$section_classes = $section_classes . ' '.get_sub_field('section_bottom_padding');
        	
            ?>
            <?php if (get_sub_field('bg_image') || get_sub_field('bg_image_mobile') || get_sub_field('bg_color')):?>
            <style>
	            <?php if (get_sub_field('bg_image')):?>
		            @media (min-width:768px){
				        .<?php echo $random_class; ?> {
					        background-image:url(<?php echo get_sub_field('bg_image');?>);
					        background-position: <?php echo get_sub_field('bg_position');?>;
					    }
				    }
			    <?php endif; ?>
			    <?php if (get_sub_field('bg_image_mobile')):?>
		            @media (max-width:767px){
				        .<?php echo $random_class; ?> {
					        background-image:url(<?php echo get_sub_field('bg_image_mobile');?>);
					        background-position: <?php echo get_sub_field('bg_position');?>;
					    }
				    }
			    <?php endif; ?>
			    <?php if (get_sub_field('bg_color')):?>
			    	.<?php echo $random_class; ?> {
				    	background-color: <?php echo get_sub_field('bg_color');?>
				    }
			    <?php endif; ?>
		    </style>
		    <?php endif; ?>
            <div class="section about-deliverables <?php echo $no_bg_color; echo $section_classes; echo ' '.$random_class;?>">
                <div class="container">
	                <div class="row wide-gutter">
		                <div class="col-md-6 col-lg-7 border-right">
			                <?php if ( get_sub_field('about_title')):?>
		                    	<h2><?php echo get_sub_field('about_title');?></h2>
		                    <?php endif; ?>
		                    <?php if ( get_sub_field('about_text')):?>
		                    	<?php echo get_sub_field('about_text');?>
		                    <?php endif; ?>
		                </div>
		                
		                <div class="col-md-6 col-lg-5">
			                <?php if ( get_sub_field('deliverables_title')):?>
		                    	<h2><?php echo get_sub_field('deliverables_title');?></h2>
		                    <?php endif; ?>
	                        <?php
	                        if ( have_rows('deliverables') ) :?>
		                        <ul class="deliverables-container list-no-format">
			                        <?php
		                            while ( have_rows('deliverables') ) : the_row();
		                            ?>
		                            	<li class="h5"><?php the_sub_field('deliverable');?></li>
		                            <?php
		                            endwhile;?>
		                        </ul>
	                        <?php endif;?>
		                </div>
	                </div>
                </div>
            </div>
            <?php
            break;
            
            
        // Customer Reviews
        case 'customer_reviews':
        	$section_classes = "";
        	if (get_sub_field('bg_color')) {
        	} else {
	        	$section_classes = $section_classes . ' no-bg-color';
        	}
        	if (get_sub_field('white_text')) {
	        	$section_classes = $section_classes . ' white-text';
        	}
        	if (get_sub_field('narrow_width')) {
	        	$section_classes = $section_classes . ' narrow_width';
        	}
        	if (get_sub_field('center_title')) {
	        	$section_classes = $section_classes . ' center-title';
        	}
        	if (get_sub_field('center_all')) {
	        	$section_classes = $section_classes . ' center-all';
        	}
        	if (get_sub_field('v_align_center_center')) {
	        	$section_classes = $section_classes . ' v-center-content';
        	}
        	$section_classes = $section_classes . ' '.get_sub_field('section_top_padding');
        	$section_classes = $section_classes . ' '.get_sub_field('section_bottom_padding');
        	
            ?>
            <?php if (get_sub_field('bg_image') || get_sub_field('bg_image_mobile') || get_sub_field('bg_color')):?>
            <style>
	            <?php if (get_sub_field('bg_image')):?>
		            @media (min-width:768px){
				        .<?php echo $random_class; ?> {
					        background-image:url(<?php echo get_sub_field('bg_image');?>);
					        background-position: <?php echo get_sub_field('bg_position');?>;
					    }
				    }
			    <?php endif; ?>
			    <?php if (get_sub_field('bg_image_mobile')):?>
		            @media (max-width:767px){
				        .<?php echo $random_class; ?> {
					        background-image:url(<?php echo get_sub_field('bg_image_mobile');?>);
					        background-position: <?php echo get_sub_field('bg_position');?>;
					    }
				    }
			    <?php endif; ?>
			    <?php if (get_sub_field('bg_color')):?>
			    	.<?php echo $random_class; ?> {
				    	background-color: <?php echo get_sub_field('bg_color');?>
				    }
			    <?php endif; ?>
		    </style>
		    <?php endif; ?>
            <div class="section customer-reviews <?php echo $no_bg_color; echo $section_classes; echo ' '.$random_class;?>">
                <div class="container">
	                <div class="row wide-gutter">
		                <div class="col-md-6 col-lg-5 mb-md-0 mb-5">
			                <?php if ( get_sub_field('left_image')):?>
			                	<img class="parallax-img hide" <?php ar_responsive_image(get_sub_field('left_image'),'full','900px'); ?> />
		                    <?php endif; ?>
		                </div>
		                
		                <div class="col-md-6 col-offset-lg-1">
			                <?php if ( get_sub_field('customer_title')):?>
		                    	<h2 class="mb-4 mb-md-5"><?php echo get_sub_field('customer_title');?></h2>
		                    <?php endif; ?>
	                        <?php
	                        if ( have_rows('reviews') ) :?>
		                        <div class="reviews-container mb-5">
			                        <?php
		                            while ( have_rows('reviews') ) : the_row();
		                            ?>
		                            	<div class="review mb-4">
			                            	<?php if ( get_sub_field('stars_rating')):
			                            		$stars_rating = '';
							                	if (get_sub_field('stars_rating') == '3-stars') {
								                	$stars_rating = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>';
							                	}
							                	if (get_sub_field('stars_rating') == '3-5-stars') {
								                	$stars_rating = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>';
							                	}
							                	if (get_sub_field('stars_rating') == '4-stars') {
								                	$stars_rating = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>';
							                	}
							                	if (get_sub_field('stars_rating') == '4-5-stars') {
								                	$stars_rating = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>';
							                	}
							                	if (get_sub_field('stars_rating') == '5-stars') {
								                	$stars_rating = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>';
							                	}
						                    endif; ?>
						                    <div class="review-header mb-2">
							                    <?php echo $stars_rating;?><span class=" ml-2 h5"><?php the_sub_field('title');?></span>
						                    </div>
			                            	<?php the_sub_field('review');?>
			                            </div>
		                            <?php
		                            endwhile;?>
		                        </div>
	                        <?php endif;?>
							<?php if ( get_sub_field('ios_link') || get_sub_field('android_link')):?>
								<p class="h4">Available for <?php if ( get_sub_field('ios_link')){ echo 'iOS';} if ( get_sub_field('ios_link') && get_sub_field('android_link')) { echo ' and ';} if ( get_sub_field('android_link')){ echo 'Android';}?></p>
		                        <?php if ( get_sub_field('ios_link')):?>
			                    	<a href="<?php echo get_sub_field('ios_link');?>" class="ios-link"><img width="140" height="45" src="<?php echo get_stylesheet_directory_uri();?>/img/app-store.png"/></a>
			                    <?php endif; ?>
			                    <?php if ( get_sub_field('android_link')):?>
			                    	<a href="<?php echo get_sub_field('android_link');?>" class="ios-link"><img width="156" height="45" src="<?php echo get_stylesheet_directory_uri();?>/img/google-play.png"/></a>
			                    <?php endif; ?>
			                <?php endif; ?>
		                </div>
	                </div>
                </div>
            </div>
            <?php
            break;

            
            
            
        // Parallax hero
        case 'parallax_hero':
        	$section_classes = "";
        	
            ?>
            <?php if (get_sub_field('bg_img') || get_sub_field('bg_img_mobile')):?>
            <style>
	            <?php if (get_sub_field('bg_img')):?>
		            @media (min-width:768px){
				        .<?php echo $random_class; ?> .p-bg {
					        background-image:url(<?php echo get_sub_field('bg_img');?>);
					    }
				    }
			    <?php endif; ?>
			    <?php if (get_sub_field('bg_img_mobile')):?>
		            @media (max-width:767px){
				        .<?php echo $random_class; ?> .p-bg {
					        background-image:url(<?php echo get_sub_field('bg_img_mobile');?>);
					    }
				    }
			    <?php endif; ?>
		    </style>
		    <?php endif; ?>
            <div class="section prallax_hero <?php echo ' '.$random_class;?>">
                <div class="container">
	                <div class="row">
		                <div class="col-12">
			                <?php if ( get_sub_field('img')):?>
			                	<div class="parallax-overlay rellax text-center" data-rellax-speed="-.5" data-rellax-percentage="0.5">
				                	<img class="parallax-img hide" <?php ar_responsive_image(get_sub_field('img'),'full','900px'); ?> />
								</div>
		                    <?php endif; ?>
		                </div>
	                </div>
                </div>
                	<?php if ( get_sub_field('bg_img')):?>
	                	<div class="p-bg parallax-overlay rellax text-center" data-rellax-speed=".5" data-rellax-percentage="0.5">
		                	<div class="p-img">
		                	</div>
						</div>
                    <?php endif; ?>
            </div>
            <?php
            break;
            
		
		
		// wysiwyg Editor
        case 'wysiwyg_editor':
        	if (get_sub_field('bg_color')) {
        	} else {
	        	$section_classes = 'no-bg-color';
        	}
        	if (get_sub_field('narrow_width')) {
	        	$section_classes = $section_classes . " narrow_width";
        	}
        	$section_classes = $section_classes . ' '.get_sub_field('section_top_padding');
        	$section_classes = $section_classes . ' '.get_sub_field('section_bottom_padding');
            ?>
            <div class="wysiwyg-editor section <?php echo $section_classes;?>" style="background: url(<?php the_sub_field('bg_color');?>);">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-12">
				            <?php if (get_sub_field('content')):?>
				                <?php the_sub_field('content');?>
			                <?php endif;?>
			            </div>
			        </div>
			    </div>
			</div>
            <?php
            break;
            
            
        // Product Call to Action
        case 'product_call_to_action':
        	if (get_sub_field('bg_color')) {
        	} else {
	        	$section_classes = 'no-bg-color';
        	}
        	if (get_sub_field('narrow_width')) {
	        	$section_classes = $section_classes . " narrow_width";
        	}
            ?>
            <div class="section <?php echo $section_classes;?>" style="background: url(<?php the_sub_field('bg_color');?>);">
			    <!-- call-to-action -->
	            <?php include (get_template_directory().'/page-templates/sections/call-to-action.php'); ?>
			</div>
            <?php
            break;
            
            
    }
    $template = ob_get_clean();

    return $template;
}
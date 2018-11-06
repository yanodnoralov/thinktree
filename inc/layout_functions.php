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
                <div class="container my-5">
	                <?php if ( get_sub_field('title')):?>
                    <div class="row mb-5">
                        <div class="col-md-12">
	                        <?php if ( get_sub_field('title') ):?>
                            	<h2 class="section-title"><?php the_sub_field('title');?></h2>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                        <?php
	                    $column_count = count( get_sub_field('boxes') );
                        if ( have_rows('boxes') ) :?>
	                        <div class="row boxes-row">
		                        <?php
			                    $counter = 0;
	                            while ( have_rows('boxes') ) : the_row();
	                            	$counter++;
	                            	$product = get_sub_field('product', $post->ID);
	                            	?>
	                            	<div class="boxes-col <?php columns_class(get_sub_field('boxes'), $column_count); ?>">
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
											        	
											        	<a class="btn btn-outline btn-white" href="<?php echo $button["url"]?>" title="<?php echo $button["title"]?>"><?php echo $button["title"]?></a>
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
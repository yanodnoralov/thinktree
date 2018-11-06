<div class="container call-to-action">
    <?php if ( get_sub_field('title') || get_sub_field('subtitle') ):?>
        <div class="row">
            <div class="col-md-12 title">
                <?php if ( get_sub_field('title') ):?>
                	<h2 class="section-title"><?php the_sub_field('title');?></h2>
                <?php endif; ?>
                <?php if ( get_sub_field('subtitle') ):?>
                	<p class="sub-title-section">
                    <?php the_sub_field('subtitle');?>
                	</p>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-12">
            <?php
	        $product = get_sub_field('product_id', $post->ID);
	        $product_name_pre = get_sub_field('prepend_product_title');?>
	        <div class="cta-box-wrapper box-shadow <?php if (get_sub_field('banner_highlight')) { echo 'has-banner';}?>">
		        <?php if (get_sub_field('banner_highlight')):?>
		        	<div class="banner-highlight"><span><?php the_sub_field('banner_highlight');?></span></div>
                <?php endif;?>
		        <div class="box-header">
			        <span class="d-block h2 text-white"><?php echo $product_name_pre.' '; echo get_field('product_name', $product);?></span>
		        </div>
		        <div class="box-body p-4">
			        <div class="row">
			        <div class="col-md-6 text-center cta-col">
<!-- 				        <?php overall_rating($product, 'p');?> -->
				        <div class="product-logo-wrap mb-3 mt-3">
					        <a rel="nofollow noopener" title="<?php echo get_field('product_name', $product);?>" target="_blank" href="<?php echo get_product_cta_link($product)?>">
								<?php product_logo($product, 'medium', '200px');?>
							</a>
						</div>
				        
			       		<?php product_cta_link($product, 'btn btn-secondary');?>
			       		<?php if (get_product_cta_phone($product) ):?>
				       		<div class="mt-4 d-block phone-wrap">
				       			<i class="fas fa-phone mr-2"></i>
					   			<?php product_cta_phone($product, 'mt-2');?>
				       		</div>
			       		<?php endif;?>
			        </div>
			        <div class="col-md-6 text-center">
				        <?php if (has_product_highlights_list($product)):?>
			        		<p class="h4">Product Highlights</p>
			        	<?php endif;?>
			        	<?php product_highlights_list($product);?>
			        </div>
		        </div>
	        </div>
        </div>
    </div>
</div>
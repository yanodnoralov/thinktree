<?php
	if ( 'post' == get_post_type() && !get_field('page_hero_background_image')) {
		$defaultHero = 'default-hero';
	}
	if ( get_field('page_hero_background_image')) {
		$titleWidth = 'col-md-12 col-lg-8';
	} else {
		$titleWidth = 'col-12';
	}
	$headerHasNotClass = "";
	if (!get_field('page_subtitle')) {
		$headerHasNotClass = $headerHasNotClass . " no-sub-title";
	}
	if (!get_field('enable_button')) {
		$headerHasNotClass = $headerHasNotClass . " no-button";
	}
	if (!get_field('page_hero_background_image')) {
		$headerHasNotClass = $headerHasNotClass . " no-hero-img";
	}
	if (get_the_modified_date() != null || get_the_modified_date() != '') {
		$headerHasNotClass = $headerHasNotClass . " has-modified-date";
	}
	
    if (get_field('page_hero_title')){
        $position = get_field('background_position') ? get_field('background_position') : 'center center';
    ?>
        <div class="d-flex page-hero <?php echo $defaultHero; echo $headerHasNotClass;?>">
            <div class="container rellax" data-rellax-speed=".5" data-rellax-percentage="0.5">
	            <div class="article-updated-date">Last Updated On: <strong><?php the_modified_date(); ?></strong></div>
                <div class="row justify-content-center">
                    <div class="<?php echo $titleWidth;?> border-green-left">
                        <?php if(get_field('page_hero_title')):?>
                        	<h1 class="page-hero-title mt-0"><?php echo get_field('page_hero_title');?></h1>
                        <?php else:?>
                        	<h1 class="page-hero-title mt-0"><?php echo get_the_title();?></h1>
                        <?php endif;?>
                        <?php if(get_field('page_subtitle')):?>
                        	<p><?php echo get_field('page_subtitle');?></p>
                        <?php endif;?>
                    </div>
                    <?php
					if (get_field('enable_button')) {?>
	                    <div class="col-md-12 head-action mt-3 mt-lg-4" style="clear:both;">
	                        <?php
		                        $heroLink = get_field('hero_cta');
	                        ?>
	                        <div class="header-action">
	                            <a class="btn btn-primary" title="<?php echo $heroLink["title"];?>" href="<?php echo $heroLink["url"];?>"><?php if (get_field('button_play_icon')) { echo '<i class="fas fa-play-circle mr-2"></i>';} echo $heroLink["title"];?></a>
	                        </div>
	                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="page-hero-img rellax" data-rellax-speed="-2" style="
	        <?php if ( 'post' == get_post_type() && !get_field('page_hero_background_image')) {} else {?>
                background-image:url( <?php echo get_field('page_hero_background_image');?>);
                background-position: <?php echo $position;?>;
                background-size: cover;
	        <?php } ?>">
            </div>
        </div>
	<?php
	}
?>
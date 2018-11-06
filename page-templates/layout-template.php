<?php
/*
Template Name: Layout template
*/
get_header();
?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <?php
        // get layout from acf and print it out
        if ( have_rows('sections') ) {
            while ( have_rows('sections') ) {
                the_row();
                echo get_template_by_layout( get_row_layout() );
            }
        }
    ?>
    
    <div class="section native-comments-wrapper">
	    <div class="container">
		    <div class="row">
			    <div class="col-12">
				    <?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
			    </div>
		    </div>
	    </div>
    </div>


<?php endwhile; endif; ?>
<?php
get_footer();
?>

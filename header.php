<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yan_Designs_Base
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<script>
  (function(d) {
    var config = {
      kitId: 'hri4fyy',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

	<?php wp_head(); ?>
	<style>
	.wf-loading h1, .wf-loading .h2, .wf-loading h2, .wf-loading h3, .wf-loading .h3, .wf-loading p, .wf-loading a {
	    visibility: hidden;
	    opacity: 0;
	    transition: all .5s ease-in-out;
	}
	.wf-active h1, .wf-active .h2, .wf-active h2, .wf-active h3, .wf-active .h3, .wf-active p, .wf-loading a {
	    transition: opacity 1s ease-in-out;
	    opacity: 1;
	}
	body.hide-elements .hide {
		opacity: 0;
	}
	body.hide-elements .hide.now-in-view  {
		opacity: 1;
		transition: all .5s cubic-bezier(0.5, 1, 0.3, 1);
	}
	</style>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'yan-base' ); ?></a>
	
	<div class="pre-menu-container">
		<div class="pre-menu-background">
			<div class="pre-menu-slide"></div>
		</div>
	</div>
	
	<header id="masthead" class="site-header light">
		<div class="container-wide">
			<div class="d-flex header-inner justify-content-between">
				<div class="site-branding align-self-start">
					<div class="logo">
							<a href="<?php echo get_home_url(); ?>">
						</a>
					</div>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php $yan_base_description = get_bloginfo( 'description', 'display' );
					if ( $yan_base_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $yan_base_description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				
						
				<nav id="site-navigation" class="main-navigation">
<!-- 					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'yan-base' ); ?></button> -->
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
				
				<nav id="right-menu">
					<a class="btn btn-header" id="header-contact" href="
						<?php if ( is_front_page() ) {	
							echo '#contact';
						} else {
							echo '' . esc_url( home_url( '/' ) ) . '#contact';
						}?>
					">
					Contact Us</a>
					
					<div id="nav-toggle">
					<svg xmlns="http://www.w3.org/2000/svg" width="53" height="24.05" viewBox="0 0 43 24.05"><rect id="bar2" x="5.63" y="11" width="32.25" height="2.05"/><rect id="bar3" x="5.63" y="18" width="32.25" height="2.05"/><rect id="dot2" x="40.95" y="18" width="2.05" height="2.05"/><rect id="bar1" x="5.63" y="4" width="32.25" height="2.05"/><rect id="dot1" y="4" width="2.05" height="2.05"/></svg>
					
<!-- 					<svg xmlns="http://www.w3.org/2000/svg" width="53" height="24.05" viewBox="0 0 43 24.05"><rect id="bar2" x="5.63" y="7" width="32.25" height="2.05"/><rect id="bar3" x="5.63" y="14" width="32.25" height="2.05"/><rect id="dot2" x="40.95" y="14" width="2.05" height="2.05"/><rect id="bar1" x="5.63" width="32.25" height="2.05"/><rect id="dot1" width="2.05" height="2.05"/></svg> -->
				</div>

				</nav>
			</div>
		</div>
	</header><!-- #masthead -->
	
	<?php if ( is_front_page() ) { ?>
		<div id="portfolio" class="hide">
			<div id="portfolioline"></div>
			<a href="#our-portfolio">PORTFOLIO</a>
		</div>
	<?php }?>

	<div id="content" class="site-content">

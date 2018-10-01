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
<!-- 	<link rel="stylesheet" href="https://use.typekit.net/xyx4pqv.css"> -->

	<script>
	  (function(d) {
	    var config = {
	      kitId: 'xyx4pqv',
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
								<svg xmlns="http://www.w3.org/2000/svg" width="76" height="55.68" viewBox="0 0 76 55.68"><path d="M65,27.5H54.5c-.57,0-.57,0-.57-.55q0-1.95,0-3.9c0-.55,0-.56.56-.56h7.3c.64,0,.67,0,.7-.65a7.64,7.64,0,0,0-1.72-5.42,7.82,7.82,0,0,0-6.91-3,8,8,0,0,0-7.23,7c-.09.94.11.84-.91.85-1.23,0-2.46,0-3.69,0-.36,0-.48-.12-.47-.47a12.76,12.76,0,0,1,3.73-8.55.42.42,0,0,0,.07-.58,12.08,12.08,0,0,0-4.42-4.62A12.53,12.53,0,0,0,25.82,8.73a12,12,0,0,0-3.46,6,.41.41,0,0,0,.26.57A10.8,10.8,0,0,1,27.5,20a14.91,14.91,0,0,1,.82,2.09.47.47,0,0,0,.52.39h5.36c.5,0,.52,0,.52.52q0,2,0,4c0,.49,0,.51-.49.51h-10c-.47,0-.51,0-.52-.5a27.51,27.51,0,0,0-.1-3,6,6,0,0,0-10-3.13,5.64,5.64,0,0,0-1.76,4c0,.74,0,1.47,0,2.21,0,.32-.09.46-.44.46H1.18c-.32,0-.43-.12-.43-.43q0-2.08,0-4.16c0-.33.13-.43.44-.42,1.8,0,3.6,0,5.4,0a.51.51,0,0,0,.6-.44A10.41,10.41,0,0,1,10,17.35a10.75,10.75,0,0,1,6.47-3.11c.89-.1.89-.09,1.11-.94A17.36,17.36,0,0,1,32.6.44,17.33,17.33,0,0,1,44.9,3.77,16.45,16.45,0,0,1,49.58,9c.16.28.31.3.59.2a13,13,0,0,1,17.16,10A19.7,19.7,0,0,1,67.5,22c0,.46,0,.48.49.48h7.45c.56,0,.56,0,.56.55q0,2,0,4c0,.45,0,.48-.49.48Z" class="color-fill"/><path d="M48.55,42.58H71.89a.34.34,0,0,0,.37-.37c0-.44,0-.88,0-1.32,0-.1-.16-.21-.27-.26a1,1,0,0,0-.37,0H53.18a3.89,3.89,0,0,1-3.9-3.19,3.7,3.7,0,0,1,0-.66c0-1.2,0-2.4,0-3.61v-.49L35,38.94V39l17.05,7v.1a1.75,1.75,0,0,1-.29,0c-2.64,0-5.29,0-7.93,0a2,2,0,0,1-.71-.18L32.76,41.75c-.41-.17-.8-.38-1.27-.6,0,.18,0,.32,0,.46,0,1.32,0,2.65,0,4,0,.34-.1.48-.46.48-.91,0-1.81,0-2.72,0-.32,0-.43-.11-.43-.43q0-6.88,0-13.76c0-.3.11-.41.41-.41.92,0,1.84,0,2.76,0,.35,0,.45.13.45.46,0,1.5,0,3,0,4.49,0,.13,0,.26,0,.38l6.14-2.61,6.05-2.57a1.73,1.73,0,0,1,.65-.13h8c.47,0,.49,0,.49.51q0,2.21,0,4.41c0,.57.09.66.67.66H71.76c.5,0,.51,0,.51-.52q0-2.28,0-4.56c0-.48,0-.5.5-.5.89,0,1.79,0,2.68,0,.34,0,.49.09.48.46,0,3.46,0,6.92,0,10.37a3.92,3.92,0,0,1-4,3.9c-4.87,0-9.73,0-14.6,0a1.48,1.48,0,0,1-.54-.09l-8.08-3.32a1.09,1.09,0,0,1-.15-.09Z" class="white-fill"/><path d="M11.74,46.2H1.31c-.56,0-.57,0-.57-.55q0-1.27,0-2.54c0-.52,0-.53.55-.53H22.15c.34,0,.51-.14.5-.48s0-.69,0-1a.4.4,0,0,0-.45-.46H4.09a3.91,3.91,0,0,1-4.09-4,12.09,12.09,0,0,1,.06-1.72,3.89,3.89,0,0,1,4-3.39H24.88c.53,0,.54,0,.54.54q0,1.27,0,2.54c0,.53,0,.54-.54.54H4.28c-.56,0-.61.06-.62.61,0,.31,0,.61,0,.92s.15.43.43.43H22.31a3.85,3.85,0,0,1,3.94,3.89c0,.48,0,1,0,1.43a3.84,3.84,0,0,1-3.41,3.76,9.45,9.45,0,0,1-1,.06Z" class="white-fill"/><path d="M15.32,55.26H12a1.56,1.56,0,0,1-1.66-1.63c0-.91,0-1.82,0-2.72A1.6,1.6,0,0,1,12,49.21c2.31,0,4.62,0,6.93,0,.26,0,.35.12.34.36a6.5,6.5,0,0,0,0,.74c0,.36-.13.46-.48.46H12.39c-.26,0-.47,0-.46.36s.1.38.37.37h6.44c.46,0,.49,0,.49.47,0,1.2.15,1-1,1H12.41c-.45,0-.5.06-.47.48,0,.22.11.3.32.3H18.7c.52,0,.54,0,.53.51,0,1.16.14,1-1,1Z" class="white-fill"/><path d="M66.18,53.79l.49,0h7.07c.33,0,.47-.1.46-.44S74,53,73.76,53H68.55a1.61,1.61,0,0,1-1.81-1.8c0-1.37.61-2,2-2H75c.47,0,.49,0,.49.47,0,.21,0,.42,0,.62,0,.36-.13.47-.48.46H68.79c-.23,0-.46,0-.46.32s.08.41.38.41h5.36a1.65,1.65,0,0,1,1.71,1.26A2,2,0,0,1,75,55a1.85,1.85,0,0,1-.81.22c-1.8,0-3.6,0-5.4,0a1.06,1.06,0,0,1-.5-.12c-.67-.38-1.33-.77-2-1.16A1.26,1.26,0,0,1,66.18,53.79Z" class="white-fill"/><path d="M35.12,55.26H31.8a1.62,1.62,0,0,1-1.71-1.68c0-1.31,0-2.62,0-3.93,0-.34.12-.47.46-.44a4.31,4.31,0,0,0,.67,0c.35,0,.48.11.48.46,0,1.19,0,2.38,0,3.57,0,.52,0,.53.55.54s1.09,0,1.64,0c.35,0,.48-.1.47-.46,0-1.21,0-2.43,0-3.64,0-.34.1-.5.46-.47a4.66,4.66,0,0,0,.71,0c.33,0,.43.12.43.43,0,1.21,0,2.43,0,3.64,0,.48,0,.49.5.49H38c.47,0,.49,0,.49-.47,0-1.19,0-2.38,0-3.57,0-.51,0-.52.52-.52,1.13,0,1.13,0,1.13,1.1s0,2.06,0,3.09a1.68,1.68,0,0,1-1,1.73,1.88,1.88,0,0,1-.68.14C37.35,55.27,36.23,55.26,35.12,55.26Z" class="white-fill"/><path d="M45.67,55.26H42.73A1.61,1.61,0,0,1,41,53.59c0-.89,0-1.79,0-2.68a1.64,1.64,0,0,1,1.64-1.7q3,0,6,0a1.63,1.63,0,0,1,1.62,1.67q0,1.36,0,2.72a1.59,1.59,0,0,1-1.69,1.65Zm0-1.5h2.64c.28,0,.4-.1.4-.39,0-.74,0-1.47,0-2.21,0-.3-.12-.41-.42-.41H43.05c-.3,0-.42.11-.42.41,0,.72,0,1.45,0,2.17,0,.32.12.44.44.43C43.94,53.75,44.8,53.76,45.67,53.76Z" class="white-fill"/><path d="M2.32,50.86q0,.36,0,.73,0,1.54,0,3.09c0,.58,0,.58-.57.58-.22,0-.45,0-.67,0s-.41-.12-.41-.41c0-1.18,0-2.35,0-3.53,0-.22,0-.44,0-.66a1.42,1.42,0,0,1,.78-1.4,1.64,1.64,0,0,1,1.76.15,4.1,4.1,0,0,1,.54.45l3.68,3.54c.09.09.2.16.37.3,0-.22,0-.35,0-.48,0-1.19,0-2.38,0-3.57,0-.33.11-.47.45-.45s.55,0,.82,0,.32.08.32.31c0,1.54,0,3.09,0,4.63a1.16,1.16,0,0,1-.81,1.06A1.69,1.69,0,0,1,6.89,55a5.87,5.87,0,0,1-.62-.53L2.7,51c-.08-.08-.18-.15-.27-.22Z" class="white-fill"/><path d="M60.66,51.26l3.26-1.91a.91.91,0,0,1,.41-.14c.78,0,1.56,0,2.34,0,0,0,.09,0,.19.13l-5,3,4.86,2.87a1.76,1.76,0,0,1-.3.07c-.32,0-.65,0-1,0a4,4,0,0,1-2.89-.79c-.57-.41-1.2-.73-1.86-1.13,0,.48,0,.94,0,1.4s0,.51-.53.51c-.21,0-.42,0-.63,0s-.44-.11-.43-.43c0-1.47,0-2.94,0-4.41,0-.26,0-.52,0-.77s.09-.47.44-.46c1.37,0,1.13-.18,1.15,1.11C60.66,50.61,60.66,50.92,60.66,51.26Z" class="white-fill"/><path d="M25.5,53c0,.61,0,1.23,0,1.84,0,.28-.09.41-.39.39a6.42,6.42,0,0,0-.78,0c-.32,0-.44-.11-.43-.43,0-1.19,0-2.38,0-3.57,0-.51,0-.51-.52-.51-.94,0-1.89,0-2.83,0-.33,0-.49-.1-.46-.44a5.33,5.33,0,0,0,0-.73c0-.29.12-.38.4-.38h8.37c.3,0,.43.11.42.41a5.64,5.64,0,0,0,0,.73c0,.33-.13.42-.44.42-1,0-1.94,0-2.9,0-.33,0-.47.09-.45.44C25.52,51.8,25.5,52.42,25.5,53Z" class="white-fill"/><path d="M55.4,49.2c.82,0,1.64,0,2.46,0,.31,0,.43.11.41.41a5.91,5.91,0,0,0,0,.73c0,.33-.13.42-.44.42h-4.5c-.48,0-.5,0-.5.5q0,1.67,0,3.34c0,.65,0,.66-.68.66h-.63c-.21,0-.33-.08-.33-.3,0-1.41,0-2.82,0-4.22a1.64,1.64,0,0,1,1.73-1.53H55.4Z" class="white-fill"/></svg>
						</a>
					</div>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php $yan_base_description = get_bloginfo( 'description', 'display' );
					if ( $yan_base_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $yan_base_description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				
				<div id="nav-toggle">
					<svg xmlns="http://www.w3.org/2000/svg" width="53" height="24.05" viewBox="0 0 43 24.05"><rect id="bar2" x="5.63" y="11" width="32.25" height="2.05"/><rect id="bar3" x="5.63" y="18" width="32.25" height="2.05"/><rect id="dot2" x="40.95" y="18" width="2.05" height="2.05"/><rect id="bar1" x="5.63" y="4" width="32.25" height="2.05"/><rect id="dot1" y="4" width="2.05" height="2.05"/></svg>
					
<!-- 					<svg xmlns="http://www.w3.org/2000/svg" width="53" height="24.05" viewBox="0 0 43 24.05"><rect id="bar2" x="5.63" y="7" width="32.25" height="2.05"/><rect id="bar3" x="5.63" y="14" width="32.25" height="2.05"/><rect id="dot2" x="40.95" y="14" width="2.05" height="2.05"/><rect id="bar1" x="5.63" width="32.25" height="2.05"/><rect id="dot1" width="2.05" height="2.05"/></svg> -->
				</div>
		
				<nav id="site-navigation" class="main-navigation">
<!-- 					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'yan-base' ); ?></button> -->
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
				
				<nav id="right-menu" class="justify-self-end">
					<a class="btn btn-header" href="
						<?php if ( is_front_page() ) {	
							echo '#contact';
						} else {
							echo '' . esc_url( home_url( '/' ) ) . '#contact';
						}?>
					">
					<span class="filler"></span>Contact Us</a>
				</nav>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

/*
$(".dark-head").waypoint(function(direction) {
  if (direction === 'up') {
    makeHeaderDark();
    console.log("makeHeaderDark up");
  }
}, {
  offset: 'bottom-in-view'
});
*/
function makeHeaderDark(){mastHead.removeClass("light").addClass("dark")}function makeHeaderLight(){mastHead.removeClass("dark").addClass("light")}
//navigation stuff
function openMenuFunction(){preMenuContainer.css("display","block"),bod.addClass("open-menu"),setTimeout(function(){menuBtn.addClass("close-language"),menuOpenFlag=!0},1e3),menuIn.play().timeScale(1)}function closeMenuFunction(){preMenuContainer.css("display","block"),bod.removeClass("open-menu"),setTimeout(function(){menuBtn.removeClass("close-language"),menuOpenFlag=!1},1e3),menuIn.play().reverse().timeScale(2.5)}function hidePreMenu(){preMenuContainer.css("display","none"),preMenuContainer.removeClass("open-menu")}var $=jQuery,bod=$("body"),menuItemWithSub=$(".menu-item.menu-item-has-children > a"),mastHead=$("#masthead"),vid=document.getElementById("hero_vid");$(document).ready(function(){bod.addClass("hide-elements")}),inView(".hide").on("enter",function(e){setTimeout(function(){$(e).addClass("now-in-view")},200)});var rellax=new Rellax(".rellax",{center:!1,round:!0,vertical:!0,horizontal:!1});$(window).width()<576&&rellax.destroy(),
// home hero waypoint 
$(".home-hero").waypoint(function(e){"up"===e&&(
// 	vid.play(); 
makeHeaderLight(),console.log("makeHeaderLight up"))},{offset:function(){return-this.element.clientHeight}}),
//all productions waypoint
$(".all-products-wrapper").waypoint(function(e){"down"===e&&(makeHeaderDark(),
//vid.pause(); 
console.log("makeHeaderDark down"))},{offset:0}),$(".all-products-wrapper").waypoint(function(e){"up"===e&&(makeHeaderDark(),console.log("makeHeaderDark up"))},{offset:function(){return 80-this.element.clientHeight}}),
//our services
$("#our-services").waypoint(function(e){"down"===e&&(makeHeaderLight(),console.log("makeHeaderLight down"))},{offset:0}),$("#our-services").waypoint(function(e){"up"===e&&(makeHeaderLight(),console.log("makeHeaderLight up"))},{offset:function(){return 80-this.element.clientHeight}}),
//our happy clients
$(".our-clients-wrapper").waypoint(function(e){"down"===e&&(makeHeaderDark(),console.log("makeHeaderDark down"))},{offset:0}),$(".our-clients-wrapper").waypoint(function(e){"up"===e&&(makeHeaderDark(),console.log("makeHeaderDark up"))},{offset:function(){return 80-this.element.clientHeight}}),
//primary (inside pgs)
$("body:not(.home) .content-area").waypoint(function(e){"down"===e&&(makeHeaderDark(),console.log("makeHeaderDark down"))},{offset:0}),$("body:not(.home) .hero").waypoint(function(e){"up"===e&&(makeHeaderLight(),console.log("makeHeaderLight up"))},{offset:function(){return-this.element.clientHeight}});var menuBtn=$("#nav-toggle"),
//menuBtnClose = $(".menu-close-button"),
collapsingMenu=$("#site-navigation"),menuOpenFlag=!1;subMenuOpenFlag=!1;
//timeline for menu coming in and out
var menuIn=new TimelineLite({paused:!0}),
//preMenu		 = $(".pre-menu-slide"),
preMenuBG=$(".pre-menu-background"),menuPanel=$("#site-navigation"),menuAs=$("#site-navigation #primary-menu > li"),
//menuTopStuff = $(".navbar-collapse-top-links"),
preMenuContainer=$(".pre-menu-container"),streamer=$(".navbar-streamer"),resizeTimer;menuIn.to(preMenuBG,.5,{scaleY:1,ease:Power3.easeOut,onReverseComplete:hidePreMenu}).to(collapsingMenu,0,{css:{display:"block"}},"-=0.5").from(collapsingMenu,.3,{autoAlpha:0,ease:Power4.easeIn},"-=0.4").staggerFrom(menuAs,.3,{autoAlpha:0,ease:Power2.easeIn},.15,"-=.2").from(streamer,.3,{right:-80,ease:Power3.easeOut},"-=0.3"),menuBtn.on("click touchstart",function(){0==menuOpenFlag?openMenuFunction():closeMenuFunction()}),menuItemWithSub.on("click touchstart",function(e){e.preventDefault(),$(this).parent(".menu-item").toggleClass("show-sub"),$(this).siblings(".sub-menu").slideToggle(200),console.log("item with children clicked")}),
// info popup
/*
$(".info-popup").each(function(){
	popOpen = false;
	if (popOpen == false) {
		$(this).on('click touchstart', function(e) {
			$(this).find(".popup-content").fadeIn();
			popOpen = true;
		});
		console.log("opened = " + popOpen);
		return
	}
	if (popOpen == true) {
		$(this).on('click touchstart', function(e) {
			$(this).find(".popup-content").fadeOut();
			popOpen = true;
		});
		console.log("close");
		return
	}
});
*/
$(".info-popup").each(function(){$(this).on("click",function(e){$(this).find(".popup-content").fadeToggle()})}),
//our services slider
$(document).ready(function(){$(".active-services-wrapper").slick({adaptiveHeight:!1,arrows:!1,draggable:!1,lazyLoad:!0,fade:!0,responsive:[{breakpoint:769,settings:{infinite:!0,draggable:!0,asNavFor:".services-nav-wrapper"}},{breakpoint:480,settings:{arrows:!1}}]}),$(".services-nav-wrapper").slick({arrows:!1,asNavFor:".active-services-wrapper",slidesPerRow:5,slidesToShow:5,infinite:!0,focusOnSelect:!0,adaptiveHeight:!1,responsive:[{breakpoint:769,settings:{centerMode:!0,centerPadding:"80px",slidesPerRow:3,slidesToShow:3}},{breakpoint:767,settings:{centerMode:!0,centerPadding:"100px",slidesPerRow:1,slidesToShow:1,adaptiveHeight:!0}}]})}),$(window).on("resize",function(e){clearTimeout(resizeTimer),resizeTimer=setTimeout(function(){$(".services-nav-wrapper").slick("setPosition"),$(".active-services-wrapper").slick("setPosition"),console.log("sliders resized")},250)}),
//load hero video
$(document).ready(function(){$("#hero_vid source").each(function(){var e=$(this).attr("data-src");$(this).attr("src",e);var n=this.parentElement;n.load(),n.play()})}),
//all hash links smooth scroll
$(document).on("click",'.site-main a[href^="#"], .home .btn-header',function(e){e.preventDefault(),$("html, body").animate({scrollTop:$($.attr(this,"href")).offset().top},500)}),
//navigation anchors links
$hashnavlinks=$('.main-navigation li:not(.menu-item-has-children) a[href*="#"]'),$hashnavlinks.click(function(){closeMenuFunction()}),
/*
$(document).on('click', $hashnavlinks, function (event) {
	closeMenuFunction();
});
*/
//footer widget spacing
$(document).ready(function(){$(".footer-widgets-wrap .foot-widget").each(function(){$(this).has("h3").length||$(this).addClass("no-title-widget")}),$(".product-content-row ul").each(function(){$thisLI=$(this).find("li"),$thisLI.has("img").length&&($thisLI.addClass("li-with-img"),$thisLI.contents().filter(function(){return 1!==this.nodeType}).wrap("<div class='li-content'></div>"),$(this).addClass("ul-w-images"))})});
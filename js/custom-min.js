var $=jQuery,bod=$("body"),menuItemWithSub=$(".menu-item.menu-item-has-children > a"),mastHead=$("#masthead"),vid=document.getElementById("hero_vid"),headerContact=$("#header-contact");if($(document).ready(function(){bod.addClass("hide-elements"),headerContact.on("click touchstart",function(){$("body.open-menu").length&&setTimeout(function(){closeMenuFunction()},50)})}),$(".hide").length&&inView(".hide").on("enter",function(e){setTimeout(function(){$(e).addClass("now-in-view")},200)}),$(".rellax").length){var rellax=new Rellax(".rellax",{center:!1,round:!0,vertical:!0,horizontal:!1});$(window).width()<576&&rellax.destroy()}function makeHeaderDark(){mastHead.removeClass("light").addClass("dark")}function makeHeaderLight(){mastHead.removeClass("dark").addClass("light")}$(".home-hero").waypoint(function(e){"up"===e&&(makeHeaderLight(),console.log("makeHeaderLight up"))},{offset:function(){return-this.element.clientHeight}}),$(".all-products-wrapper").waypoint(function(e){"down"===e&&(makeHeaderDark(),console.log("makeHeaderDark down"))},{offset:0}),$(".all-products-wrapper").waypoint(function(e){"up"===e&&(makeHeaderDark(),console.log("makeHeaderDark up"))},{offset:function(){return 80-this.element.clientHeight}}),$("#our-services").waypoint(function(e){"down"===e&&(makeHeaderLight(),console.log("makeHeaderLight down"))},{offset:0}),$("#our-services").waypoint(function(e){"up"===e&&(makeHeaderLight(),console.log("makeHeaderLight up"))},{offset:function(){return 80-this.element.clientHeight}}),$("#services").waypoint(function(e){"down"===e&&(makeHeaderDark(),console.log("makeHeaderDark down"))},{offset:0}),$("#services").waypoint(function(e){"up"===e&&(makeHeaderDark(),console.log("makeHeaderDark up"))},{offset:function(){return 80-this.element.clientHeight}}),$("body:not(.home) .content-area").waypoint(function(e){"down"===e&&(makeHeaderDark(),console.log("makeHeaderDark down"))},{offset:0}),$("body:not(.home) .hero").waypoint(function(e){"up"===e&&(makeHeaderLight(),console.log("makeHeaderLight up"))},{offset:function(){return-this.element.clientHeight}});var menuBtn=$("#nav-toggle"),collapsingMenu=$("#site-navigation"),menuOpenFlag=!1;subMenuOpenFlag=!1;var menuIn=new TimelineLite({paused:!0}),preMenuBG=$(".pre-menu-background"),menuPanel=$("#site-navigation"),menuAs=$("#site-navigation #primary-menu > li"),preMenuContainer=$(".pre-menu-container"),streamer=$(".navbar-streamer");function openMenuFunction(){preMenuContainer.css("display","block"),bod.addClass("open-menu"),setTimeout(function(){menuBtn.addClass("close-language"),menuOpenFlag=!0},1e3),menuIn.play().timeScale(1)}function closeMenuFunction(){preMenuContainer.css("display","block"),bod.removeClass("open-menu"),setTimeout(function(){menuBtn.removeClass("close-language"),menuOpenFlag=!1},1e3),menuIn.play().reverse().timeScale(2.5)}function hidePreMenu(){preMenuContainer.css("display","none"),preMenuContainer.removeClass("open-menu")}menuIn.to(preMenuBG,.5,{scaleY:1,ease:Power3.easeOut,onReverseComplete:hidePreMenu}).to(collapsingMenu,0,{css:{display:"block"}},"-=0.5").from(collapsingMenu,.3,{autoAlpha:0,ease:Power4.easeIn},"-=0.4").staggerFrom(menuAs,.3,{autoAlpha:0,ease:Power2.easeIn},.15,"-=.2").from(streamer,.3,{right:-80,ease:Power3.easeOut},"-=0.3"),menuBtn.on("click touchstart",function(){0==menuOpenFlag?openMenuFunction():closeMenuFunction()}),menuItemWithSub.on("click touchstart",function(e){e.preventDefault(),$(this).parent(".menu-item").toggleClass("show-sub"),$(this).siblings(".sub-menu").slideToggle(200),console.log("item with children clicked")}),$(".info-popup").each(function(){$(this).on("click",function(e){$(this).find(".popup-content").fadeToggle()})}),$(document).ready(function(){function n(){$(".service-nav-item").on("click touchstart mouseover",function(e){e.preventDefault(),slideIndex=$(this).index(),$(".services-content").slick("slickGoTo",parseInt(slideIndex)),$(".service-nav-item.active").removeClass("active"),$(this).removeClass("inactive").addClass("active")}),$(".services-titles.slick-initialized").slick("unslick")}function t(){$(".process-nav-item").on("click touchstart mouseover",function(e){e.preventDefault(),slideIndex=$(this).index(),$("#process-content").slick("slickGoTo",parseInt(slideIndex)),$(".process-nav-item.active").removeClass("active"),$(this).removeClass("inactive").addClass("active")}),$(".process-titles.slick-initialized").slick("unslick")}function i(){$(".services-titles").not(".slick-initialized").slick({arrows:!1,asNavFor:".services-content",slidesPerRow:1,slidesToShow:3,variableWidth:!0,centerMode:!0,infinite:!0,focusOnSelect:!0,adaptiveHeight:!1}),$(".services-titles").on("beforeChange",function(){$(".service-nav-item.active").removeClass("active")}),$(".services-titles").on("afterChange",function(){$(".slick-current").find(".service-nav-item").addClass("active")})}function o(){$(".process-titles-slider").not(".slick-initialized").slick({arrows:!1,asNavFor:"#process-content",slidesPerRow:1,slidesToShow:1,variableWidth:!0,centerMode:!0,infinite:!0,focusOnSelect:!0,adaptiveHeight:!1}),$(".process-titles-slider").on("beforeChange",function(){$(".process-nav-item.active").removeClass("active")}),$(".process-titles-slider").on("afterChange",function(){$(".process-titles-slider .slick-current").find(".process-nav-item").addClass("active")})}var a;$(".services-content").slick({adaptiveHeight:!1,arrows:!1,draggable:!1,lazyLoad:!0,fade:!0,responsive:[{breakpoint:769,settings:{infinite:!0,draggable:!0}},{breakpoint:480,settings:{arrows:!1}}]}),$("#process-content").slick({adaptiveHeight:!1,arrows:!1,draggable:!1,lazyLoad:!0,slidesPerRow:1,slidesToShow:1,fade:!0,responsive:[{breakpoint:769,settings:{infinite:!0,draggable:!0}},{breakpoint:480,settings:{arrows:!1}}]}),768<=$(window).width()&&(n(),t()),$(window).width()<768&&(i(),o()),$(window).on("resize",function(e){clearTimeout(a),a=setTimeout(function(){$(".services-nav-wrapper").slick("setPosition"),$(".active-services-wrapper").slick("setPosition"),768<=$(window).width()&&(n(),t()),$(window).width()<768&&(i(),o())},250)})}),$(document).ready(function(){$("#hero_vid source").each(function(){var e=$(this).attr("data-src");$(this).attr("src",e);var n=this.parentElement;n.load(),n.play()})}),$(document).on("click",'.site-main a[href^="#"], .home .btn-header',function(e){e.preventDefault(),$("html, body").animate({scrollTop:$($.attr(this,"href")).offset().top},500)}),$hashnavlinks=$('.main-navigation li:not(.menu-item-has-children) a[href*="#"]'),$hashnavlinks.click(function(){closeMenuFunction()}),$(document).ready(function(){$(".footer-widgets-wrap .foot-widget").each(function(){$(this).has("h3").length||$(this).addClass("no-title-widget")}),$(".product-content-row ul").each(function(){$thisLI=$(this).find("li"),$thisLI.has("img").length&&($thisLI.addClass("li-with-img"),$thisLI.contents().filter(function(){return 1!==this.nodeType}).wrap("<div class='li-content'></div>"),$(this).addClass("ul-w-images"))})});
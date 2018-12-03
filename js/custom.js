var $ = jQuery;
var bod = $("body");
var menuItemWithSub = $(".menu-item.menu-item-has-children > a");
var mastHead = $("#masthead");
var vid = document.getElementById("hero_vid"); 

$(document).ready(function(){
	bod.addClass("hide-elements")
})

inView('.hide').on('enter', function(t) {
	setTimeout(function(){
			$(t).addClass("now-in-view");
		}, 200);
});

var rellax = new Rellax('.rellax', {
    center: false,
    round: true,
    vertical: true,
    horizontal: false
});
if ($(window).width() < 576) {
	rellax.destroy();
}

// home hero waypoint 
$(".home-hero").waypoint(function(direction) {
  if (direction === 'up') {
// 	vid.play(); 
    makeHeaderLight();
    console.log("makeHeaderLight up");
  }
}, {
  offset: function() {
    return -this.element.clientHeight
  }
});

//all productions waypoint
$(".all-products-wrapper").waypoint(function(direction) {
  if (direction === 'down') {
    makeHeaderDark();
	//vid.pause(); 
    console.log("makeHeaderDark down");
  }
}, {
  offset: 0
});
$(".all-products-wrapper").waypoint(function(direction) {
  if (direction === 'up') {
    makeHeaderDark();
    console.log("makeHeaderDark up");
  }
}, {
  offset: function() {
    return -this.element.clientHeight + 80
  }
});

//our services
$("#our-services").waypoint(function(direction) {
  if (direction === 'down') {
    makeHeaderLight();
    console.log("makeHeaderLight down");
  }
}, {
  offset: 0
});
$("#our-services").waypoint(function(direction) {
  if (direction === 'up') {
    makeHeaderLight();
    console.log("makeHeaderLight up");
  }
}, {
  offset: function() {
    return -this.element.clientHeight + 80
  }
});


//our happy clients
$("#services").waypoint(function(direction) {
  if (direction === 'down') {
    makeHeaderDark();
    console.log("makeHeaderDark down");
  }
}, {
  offset: 0
});
$("#services").waypoint(function(direction) {
  if (direction === 'up') {
    makeHeaderDark();
    console.log("makeHeaderDark up");
  }
}, {
  offset: function() {
    return -this.element.clientHeight + 80
  }
});


//primary (inside pgs)
$("body:not(.home) .content-area").waypoint(function(direction) {
  if (direction === 'down') {
    makeHeaderDark();
    console.log("makeHeaderDark down");
  }
}, {
  offset: 0
});
$("body:not(.home) .hero").waypoint(function(direction) {
  if (direction === 'up') {
    makeHeaderLight();
    console.log("makeHeaderLight up");
  }
}, {
  offset: function() {
    return -this.element.clientHeight
  }
});


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

function makeHeaderDark(){
	mastHead.removeClass("light").addClass("dark");
}
function makeHeaderLight(){
	mastHead.removeClass("dark").addClass("light");
}

//navigation stuff
var menuBtn = $("#nav-toggle"),
	//menuBtnClose = $(".menu-close-button"),
	collapsingMenu = $("#site-navigation"),
	menuOpenFlag = false;
	subMenuOpenFlag = false;

//timeline for menu coming in and out
	var menuIn       = new TimelineLite({paused:true}),
		//preMenu		 = $(".pre-menu-slide"),
		preMenuBG    = $(".pre-menu-background"),
		menuPanel    = $("#site-navigation"),
		menuAs		 = $("#site-navigation #primary-menu > li"),
		//menuTopStuff = $(".navbar-collapse-top-links"),
		preMenuContainer = $(".pre-menu-container"),
		streamer	 = $(".navbar-streamer");
		
	menuIn.to(preMenuBG, 0.5, {scaleY:1, ease:Power3. easeOut, onReverseComplete:hidePreMenu})
		  .to(collapsingMenu, 0, {css:{display:"block"}}, "-=0.5")
		  .from(collapsingMenu, 0.3, {autoAlpha: 0, ease:  Power4. easeIn}, "-=0.4")
		  .staggerFrom(menuAs, 0.3, {autoAlpha: 0,  ease:Power2. easeIn}, 0.15, "-=.2")
		  .from(streamer, 0.3, {right:-80, ease:Power3. easeOut}, "-=0.3");


menuBtn.on('click touchstart', function() {
	if (menuOpenFlag == false) {
		openMenuFunction();
	}
	else {
		closeMenuFunction();
	}
});

function openMenuFunction() {
	preMenuContainer.css("display", "block");
	bod.addClass("open-menu");
	setTimeout(function(){
		menuBtn.addClass("close-language");
		menuOpenFlag = true;
	}, 1000)
    menuIn.play().timeScale(1);
    //console.log("open success");
}

function closeMenuFunction() {
	preMenuContainer.css("display", "block");
	bod.removeClass("open-menu");
	setTimeout(function(){
		menuBtn.removeClass("close-language");
		menuOpenFlag = false;
	}, 1000)
	menuIn.play().reverse().timeScale(2.5);
	//console.log("close success");
}

function hidePreMenu() {
  preMenuContainer.css("display", "none");
  preMenuContainer.removeClass("open-menu");
}

menuItemWithSub.on('click touchstart', function(e) {
	e.preventDefault();
	$(this).parent(".menu-item").toggleClass("show-sub");
	$(this).siblings(".sub-menu").slideToggle(200);
	console.log("item with children clicked");
});



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
$(".info-popup").each(function(){
	$(this).on('click', function(e) {
		$(this).find(".popup-content").fadeToggle();
}	);
})



//our services slider
$(document).ready(function(){
  $('.services-content').slick({
    adaptiveHeight: false,
    arrows: false,
    draggable: false,
    lazyLoad: true,
    fade: true,
    responsive: [
    {
      breakpoint: 769,
      settings: {
        infinite: true,
        draggable: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false
      }
    }
	]
  });
  
  $('#process-content').slick({
    adaptiveHeight: false,
    arrows: false,
    draggable: false,
    lazyLoad: true,
    slidesPerRow: 1,
	slidesToShow: 1,
    fade: true,
    responsive: [
    {
      breakpoint: 769,
      settings: {
        infinite: true,
        draggable: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false
      }
    }
	]
  });
  	
  	function service_titles_desktop() {
	  	$(".service-nav-item").on('click touchstart', function(e) {
	        e.preventDefault();
	        slideIndex = $(this).index();
	        $( '.services-content' ).slick( 'slickGoTo', parseInt(slideIndex) );
	        $('.service-nav-item.active').removeClass('active');
	        $(this).removeClass("inactive").addClass("active");
		});
		$('.services-titles.slick-initialized').slick('unslick');
	}
	
	function process_titles_desktop() {
	  	$(".process-nav-item").on('click touchstart', function(e) {
	        e.preventDefault();
	        slideIndex = $(this).index();
	        $( '#process-content' ).slick( 'slickGoTo', parseInt(slideIndex) );
	        $('.process-nav-item.active').removeClass('active');
	        $(this).removeClass("inactive").addClass("active");
		});
		$('.process-titles.slick-initialized').slick('unslick');
	}
	
	function service_titles_sliders() {
		$('.services-titles').not('.slick-initialized').slick({
		    arrows: false,
		    asNavFor: ".services-content",
		    slidesPerRow: 1,
		    slidesToShow: 3,
		    variableWidth: true,
		    centerMode: true,
		    infinite: true,
		    focusOnSelect: true,
		    adaptiveHeight: false,
		});
		$('.services-titles').on("beforeChange", function (){
		    $(".service-nav-item.active").removeClass("active");
		})
		$('.services-titles').on("afterChange", function (){
			$('.slick-current').find(".service-nav-item").addClass("active");
		})
	}
	
	function process_titles_sliders() {
		$('.process-titles-slider').not('.slick-initialized').slick({
		    arrows: false,
		    asNavFor: "#process-content",
		    slidesPerRow: 1,
		    slidesToShow: 1,
		    variableWidth: true,
		    centerMode: true,
		    infinite: true,
		    focusOnSelect: true,
		    adaptiveHeight: false,
		});
		$('.process-titles-slider').on("beforeChange", function (){
		    $(".process-nav-item.active").removeClass("active");
		})
		$('.process-titles-slider').on("afterChange", function (){
			$('.process-titles-slider .slick-current').find(".process-nav-item").addClass("active");
		})
	}
	
	if ($(window).width() >= 768) {
		service_titles_desktop();
		process_titles_desktop();
	}
	if ($(window).width() < 768) {
		service_titles_sliders();
		process_titles_sliders();
	}
	
	
	//window resize, refresh sliders
	var resizeTimer;
	$(window).on('resize', function(e) {
	
	  clearTimeout(resizeTimer);
	  resizeTimer = setTimeout(function() {
	
	    $('.services-nav-wrapper').slick('setPosition');
	    $('.active-services-wrapper').slick('setPosition');
	    
	    if ($(window).width() >= 768) {
			service_titles_desktop();
			process_titles_desktop();
		}
		if ($(window).width() < 768) {
			service_titles_sliders();
			process_titles_sliders();
		}
	            
	  }, 250);
	
	});
	
});




//load hero video
$(document).ready(function(){
	  $("#hero_vid source").each(function() {
	    var sourceFile = $(this).attr("data-src");
	    $(this).attr("src", sourceFile);
	    var video = this.parentElement;
	    video.load();
	    video.play();
	  });
});


//all hash links smooth scroll
$(document).on('click', '.site-main a[href^="#"], .home .btn-header', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});

//navigation anchors links
$hashnavlinks = $('.main-navigation li:not(.menu-item-has-children) a[href*="#"]');
$hashnavlinks.click(function(){
	closeMenuFunction();
});
/*
$(document).on('click', $hashnavlinks, function (event) {
	closeMenuFunction();
});
*/

//footer widget spacing
$(document).ready(function(){
	$(".footer-widgets-wrap .foot-widget").each(function(){
		if( ! $(this).has('h3').length) {
			$(this).addClass("no-title-widget");
		}
		else {
			return
		}
	})
	$(".product-content-row ul").each(function(){
		$thisLI = $(this).find("li");
		if( $thisLI.has('img').length) {
			$thisLI.addClass("li-with-img");
			$thisLI.contents()
			  .filter(function(){
			    return this.nodeType !== 1;
			  })
			.wrap( "<div class='li-content'></div>" );
			$(this).addClass("ul-w-images");
		}
	})
});
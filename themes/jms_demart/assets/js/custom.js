closeSidebar = () => {
    $("#header-sidebar .btn-close").click(function(e){
        e.preventDefault();
        e.stopPropagation();
        $("body").removeClass("sidebar-right-open");
        $("body").removeClass("sidebar-left-open");
    });
}

changeShopGrid = () => {
    if (jQuery(window).width() < 1200) {
        $('#product_list').removeClass('grid-1 grid-2 grid-3 grid-4 grid-5 grid-6');
    } else{
        $('#product_list.1-grid').addClass('grid-1');
        $('#product_list.2-grid').addClass('grid-2');
        $('#product_list.3-grid').addClass('grid-3');
        $('#product_list.4-grid').addClass('grid-4');
        $('#product_list.5-grid').addClass('grid-5');
        $('#product_list.6-grid').addClass('grid-6');
    }
}

stickySidebar = () => {
    if($('#wrapper #content-wrapper.col-lg-9').length){
        let sidebar = new StickySidebar('#wrapper .sidebar-column', {
            containerSelector: '#wrapper > .row',
            innerWrapperSelector: '#wrapper .sidebar-column .sidebar-inner',
            topSpacing: 100
        });
    }
}

jsPromoBar = () => {
    var promobarHeight = $("#promobar").innerHeight();
    if(promobarHeight > 0){
        $("body").css("margin-top", promobarHeight)
    }
    $("#promobar .close").click(function(){
        $("body").css({"margin-top": "0", "transition": "all .4s"})
    });
}

collapsePanel = () => {
    $('.h7-col-sidebar .level-1').on('show.bs.collapse', function (e) {
        $('.h7-col-sidebar .level-1 .collapse').not(e.target).collapse('hide');
    });
}

showMoreCategory = () => {
    var txt = "<li class='js-more-category'><a href='#'>+ More categories</a></li>";
    $(".header-3 #ver-menu .jms-megamenu > ul").append(txt); 
    $(".vermegamenu  .jms-megamenu > ul").append(txt); 

    $('.header-3 #ver-menu .jms-megamenu > ul li.js-more-category a').click(function(e){
        e.preventDefault();
        $(".vermegamenu ").toggleClass("limit-sub");
        $("#ver-menu").toggleClass("limit-sub");

        var showMore = $('.header-3 #ver-menu .jms-megamenu > ul li.js-more-category a');
       (showMore.text() == "+ More categories") ? showMore.text("- Less categories") : showMore.text("+ More categories");
    });
    
    $('.vermegamenu .jms-megamenu > ul li.js-more-category a').click(function(e){
        e.preventDefault();
        $(".vermegamenu ").toggleClass("limit-sub");
        $("#ver-menu").toggleClass("limit-sub");

        var showMore = $('.vermegamenu .jms-megamenu > ul li.js-more-category a');
       (showMore.text() == "+ More categories") ? showMore.text("- Less categories") : showMore.text("+ More categories");
    })
}

backToTop = () => {   
    $('#back-to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 500);
        return false;
    })
}

customCarousel = () => {
    $('.our-category-carousel .container > .row').addClass('sub-category-carousel');
    if($(".sub-category-carousel").length) {
        var subCategoryCarousel = $('.sub-category-carousel');			
        var rtl = false;
        if ($("body").hasClass("rtl")) rtl = true;	
        subCategoryCarousel.owlCarousel({
            responsiveClass:true,
            responsive:{
                320: {
                    items: 2
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            },
            rtl: rtl,
            margin: 20,
            nav: true,
            dots: false,
            loop: true,
            navigationText: ["", ""],
            slideSpeed: 800
        });
    }
    
    if($(".h2-category-carousel").length) {
        var h2CategoryCarousel = $('.h2-category-carousel');			
        var rtl = false;
        if ($("body").hasClass("rtl")) rtl = true;	
        h2CategoryCarousel.owlCarousel({
            responsiveClass:true,
            responsive:{
                320: {
                    items: 2
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            },
            rtl: rtl,
            margin: 20,
            nav: true,
            dots: false,
            loop: true,
            navigationText: ["", ""],
            slideSpeed: 800
        });
    }

    if($(".customs-carousel-product").length) {
        var relatedProductCarousel = $('.customs-carousel-product');			
        var rtl = false;
        if ($("body").hasClass("rtl")) rtl = true;	
            relatedProductCarousel.owlCarousel({
            responsiveClass:true,
            responsive:{
                0: {
                    items: 2
                },
                576: {
                    items: 2
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            },
            rtl: rtl,
            margin: 0,
            nav: false,
            dots: false,
            loop: true,
            navigationText: ["", ""],
            slideSpeed: 800
        });
    }

    if($(".hotdeal-carousel").length) {
		var hotdealCarousel = $(".hotdeal-carousel");
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;
		hotdealCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{
				1199:{
					items:h_itemsDesktop
				},
				991:{
					items:h_itemsDesktopSmall
				},
				768:{
					items:h_itemsTablet
				},
				481:{
					items:h_itemsMobile,
				},
				0:{
					items:1,
				}
			},
			rtl: rtl,
			margin: 0,
			nav: h_nav,
			dots: h_pag,
			loop:true,
			autoplay: h_auto_play_carousel,
			slideSpeed: 800,
		});
	}

    if($(".h1-topseller .product-carousel").length) {
        var rtl = false;
        var customProductCarousel = $('.h1-topseller .product-carousel');
        customProductCarousel.owlCarousel({
            rtl: rtl,
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            autoplay: false,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: customProductCarousel.attr("data-sm")
                },
                768: {
                    items: customProductCarousel.attr("data-md")
                },
                992: {
                    items: customProductCarousel.attr("data-lg")
                }
            }
        });
    }

    if($(".h2-products .product-carousel").length) {
        var rtl = false;
        var customProductCarousel_2 = $('.h2-products .product-carousel');
        customProductCarousel_2.owlCarousel({
            rtl: rtl,
            loop: true,
            margin: 1,
            nav: false,
            dots: false,
            autoplay: false,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: customProductCarousel_2.attr("data-sm")
                },
                768: {
                    items: customProductCarousel_2.attr("data-md")
                },
                992: {
                    items: customProductCarousel_2.attr("data-lg")
                }
            }
        });
    }

    if($(".blog-carousel").length) {
        var rtl = false;
        var blogCarousel = $('.blog-carousel');
        blogCarousel.owlCarousel({
            rtl: rtl,
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: false,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: blogCarousel.attr("data-sm")
                },
                768: {
                    items: blogCarousel.attr("data-md")
                },
                992: {
                    items: blogCarousel.attr("data-lg")
                }
            }
        });
    }

    if($(".flashsales-carousel").length) {
        var flashsaleCarousel = $('.flashsales-carousel');			
        var rtl = false;
        if ($("body").hasClass("rtl")) rtl = true;	
            flashsaleCarousel.owlCarousel({
            responsiveClass:true,
            responsive:{
                0: {
                    items: 2
                },
                576: {
                    items: 2
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            },
            rtl: rtl,
            margin: 20,
            nav: false,
            dots: false,
            loop: true,
            navigationText: ["", ""],
            slideSpeed: 800
        });
    }

    if($(".product-carousel-mr-30").length) {
		var productCarouselMr30 = $(".product-carousel-mr-30");
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;
		productCarouselMr30.owlCarousel({
            responsiveClass:true,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: productCarouselMr30.attr("data-sm")
                },
                768: {
                    items: productCarouselMr30.attr("data-md")
                },
                992: {
                    items: productCarouselMr30.attr("data-lg")
                }
            },
			rtl: rtl,
			margin: 20,
			nav: true,
			dots: false,
			autoplay: false,
			loop: true,
			slideSpeed: 800,
		});
	}
}

hoverShowSublink = () => {
    $(".our-category-carousel .layout-column").hover(function(){
        $(this).addClass("open-sublink");
        }, function(){
        $(this).removeClass("open-sublink");
    });
}

$(document).ready(function(){
    collapsePanel();
    jsPromoBar();
    customCarousel();
    stickySidebar();
    changeShopGrid();
    closeSidebar();
    showMoreCategory();
    hoverShowSublink();
    backToTop();

    setTimeout(() => {
        $('.preloader').fadeOut();
    }, 3000);	

    $("#header-sidebar, #sidebar-btn").on("click", function(e) {
        e.preventDefault();
    });
    $("#header-sidebar .block-newsletter").on("click", function(e) {
        e.stopPropagation();
    });
    $(".product-miniature .product-btn.disabled").on("click", function(e) {
        e.preventDefault();
    });
    $(".email_subscription .block-title span").on("click", function() {
        $(this).parent().parent().parent().find(".block-content").toggleClass("collapse");
        if($(this).parent().parent().parent().find(".block-content").hasClass("collapse")){
            $(this).removeClass("fa-minus");
            $(this).addClass("fa-plus");
        }else{
            $(this).removeClass("fa-plus");
            $(this).addClass("fa-minus");
        }  
    });
    $(".owl-theme .owl-item").hover(function(){
        $(this).css("z-index", "9");
        }, function(){
        $(this).css("z-index", "1");
    });
    $(".megatab-carousel .product-miniature").hover(function(){
        $(".megatab-carousel").css("z-index", "9");
        }, function(){
        $(".megatab-carousel").css("z-index", "1");
    });

    $(window).resize(function(){
        jsPromoBar();
        stickySidebar();
        changeShopGrid();
    });

    $(window).load(function () {     
        $('.carousel').carousel('pause');
    });

    $(window).scroll(function () {
		if ($(window).scrollTop() >= 50) {
            $("#back-to-top").addClass('show');
		} else {
			$("#back-to-top").removeClass('show');
        }
        if ($(window).scrollTop()) {
            $(".alertbox-fixed").css("visibility", "hidden");
        } else {
            $(".alertbox-fixed").css("visibility", "visible");
        }
    });
});

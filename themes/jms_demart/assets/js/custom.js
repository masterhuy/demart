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
    if ($(window).width() > 1200){
        if($('#wrapper #content-wrapper.col-lg-9').length){
            let sidebar = new StickySidebar('#wrapper .sidebar-column', {
                containerSelector: '#wrapper > .row',
                innerWrapperSelector: '#wrapper .sidebar-column .sidebar-inner',
                topSpacing: 100
            });
        }
    
        if($('.product-layout-3columns .pb-right-column').length){
            let sidebar = new StickySidebar('.product-layout-3columns .pb-right-column', {
                containerSelector: '.product-layout-3columns',
                innerWrapperSelector: '.product-layout-3columns .pb-right-column .pb-right-content',
                topSpacing: 100
            });
        }    
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

showMoreCategory = () => {
    var txt = "<li class='js-more-category'><a href='#'>+ More categories</a></li>";
    $(".header-3 #ver-menu .jms-megamenu > ul").append(txt); 
    $(".h2-slider .vermegamenu  .jms-megamenu > ul").append(txt); 

    $('.header-3 #ver-menu .jms-megamenu > ul li.js-more-category a').click(function(e){
        e.preventDefault();
        $(".vermegamenu ").toggleClass("limit-sub");
        $("#ver-menu").toggleClass("limit-sub");

        var showMore = $('.header-3 #ver-menu .jms-megamenu > ul li.js-more-category a');
       (showMore.text() == "+ More categories") ? showMore.text("- Less categories") : showMore.text("+ More categories");
    });
    
    $('.h2-slider .vermegamenu .jms-megamenu > ul li.js-more-category a').click(function(e){
        e.preventDefault();
        $(".vermegamenu ").toggleClass("limit-sub");
        $("#ver-menu").toggleClass("limit-sub");

        var showMore = $('.h2-slider .vermegamenu .jms-megamenu > ul li.js-more-category a');
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
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            },
            rtl: rtl,
            margin: 20,
            nav: false,
            dots: false,
            loop: true,
            navigationText: ["", ""],
            slideSpeed: 200
        });
    }

    if($(".flashsales-tab-carousel").length) {
        var flashsaleTabCarousel = $('.flashsales-tab-carousel');			
        var rtl = false;
        if ($("body").hasClass("rtl")) rtl = true;	
            flashsaleTabCarousel.owlCarousel({
            responsiveClass:true,
            responsive:{
                0: {
                    items: 1
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
                    items: 3
                }
            },
            rtl: rtl,
            margin: 20,
            nav: true,
            dots: false,
            loop: true,
            navigationText: ["", ""],
            slideSpeed: 200
        });
    }

    if($(".flashsales-tab-carousel2").length) {
        var flashsaleTabCarousel2 = $('.flashsales-tab-carousel2');			
        var rtl = false;
        if ($("body").hasClass("rtl")) rtl = true;	
            flashsaleTabCarousel2.owlCarousel({
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
            slideSpeed: 200
        });
    }

    $('.h1-our-category .container > .row').addClass('sub-category-carousel');
    if($(".sub-category-carousel").length) {
        var subCategoryCarousel = $('.sub-category-carousel');			
        var rtl = false;
        if ($("body").hasClass("rtl")) rtl = true;	
            subCategoryCarousel.owlCarousel({
            responsiveClass:true,
            responsive:{
                320: {
                    items: 1
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
            slideSpeed: 200
        });
    }

    $('.h2-top-categories .container > .row').addClass('h2-category-carousel');
    if($(".h2-category-carousel").length) {
        var h2CategoryCarousel = $('.h2-category-carousel');			
        var rtl = false;
        if ($("body").hasClass("rtl")) rtl = true;	
            h2CategoryCarousel.owlCarousel({
            responsiveClass:true,
            responsive:{
                0: {
                    items: 1
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
            slideSpeed: 200
        });
    }

    if($(".h4-category-carousel").length) {
        var h2CategoryCarousel = $('.h4-category-carousel');			
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
                    items: 4
                },
                1200: {
                    items: 4
                }
            },
            rtl: rtl,
            margin: 0,
            nav: true,
            dots: false,
            loop: true,
            navigationText: ["", ""],
            slideSpeed: 200
        });
    }

    if($(".customs-carousel-product").length) {
        var relatedProductCarousel = $('.customs-carousel-product');			
        var rtl = false;
        if ($("body").hasClass("rtl")) rtl = true;	
        if($("#product #content-wrapper").hasClass("col-lg-9")){
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
                nav: true,
                dots: false,
                loop: true,
                navigationText: ["", ""],
                slideSpeed: 200
            });
        }
        else{
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
                        items: 3
                    },
                    992: {
                        items: 4
                    },
                    1200: {
                        items: 5
                    }
                },
                rtl: rtl,
                margin: 0,
                nav: true,
                dots: false,
                loop: true,
                navigationText: ["", ""],
                slideSpeed: 200
            });
        }
            
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
					items: 1,
				}
			},
			rtl: rtl,
			margin: 0,
			nav: h_nav,
			dots: h_pag,
			loop:true,
			autoplay: h_auto_play_carousel,
			slideSpeed: 200,
		});
    }
    
    if($(".product-carousel-flex").length) {
        var rtl = false;
        var productCarouselFlex = $('.product-carousel-flex');
        (productCarouselFlex.attr("data-nav") == "true") ? nav = 1 : nav = 0;
        (productCarouselFlex.attr("data-dots") == "true") ? dots = 1 : dots = 0;
        (productCarouselFlex.attr("data-auto") == "true") ? autoplay = 1 : autoplay = 0;

        if ($("body").hasClass("rtl")) rtl = true;
            productCarouselFlex.owlCarousel({
            rtl: rtl,
            loop: true,
            margin: 20,
            nav: nav,
            dots: dots,
            autoplay: autoplay,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: productCarouselFlex.attr("data-sm")
                },
                768: {
                    items: productCarouselFlex.attr("data-md")
                },
                992: {
                    items: productCarouselFlex.attr("data-lg")
                }
            }
        });
    }

    if($(".h1-topseller .product-carousel").length) {
        var rtl = false;
        var customProductCarousel = $('.h1-topseller .product-carousel');
        (customProductCarousel.attr("data-nav") == "true") ? nav = 1 : nav = 0;
        (customProductCarousel.attr("data-dots") == "true") ? dots = 1 : dots = 0;
        (customProductCarousel.attr("data-auto") == "true") ? autoplay = 1 : autoplay = 0;

        if ($("body").hasClass("rtl")) rtl = true;
            customProductCarousel.owlCarousel({
            rtl: rtl,
            loop: true,
            margin: 10,
            nav: nav,
            dots: dots,
            autoplay: autoplay,
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

    if($(".h5-banner-product .product-carousel").length) {
        var rtl = false;
        var h5customProductCarousel = $('.h5-banner-product .product-carousel');
        (h5customProductCarousel.attr("data-nav") == "true") ? nav = 1 : nav = 0;
        (h5customProductCarousel.attr("data-dots") == "true") ? dots = 1 : dots = 0;
        (h5customProductCarousel.attr("data-auto") == "true") ? autoplay = 1 : autoplay = 0;

        if ($("body").hasClass("rtl")) rtl = true;
            h5customProductCarousel.owlCarousel({
            rtl: rtl,
            loop: true,
            margin: 10,
            nav: nav,
            dots: dots,
            autoplay: autoplay,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: h5customProductCarousel.attr("data-sm")
                },
                768: {
                    items: h5customProductCarousel.attr("data-md")
                },
                992: {
                    items: h5customProductCarousel.attr("data-lg")
                }
            }
        });
    }

    if($(".content-carousel").length) {
        var rtl = false;
        var contentCarousel = $('.content-carousel');
        (contentCarousel.attr("data-nav") == "true") ? nav = 1 : nav = 0;
        (contentCarousel.attr("data-dots") == "true") ? dots = 1 : dots = 0;
        (contentCarousel.attr("data-auto") == "true") ? autoplay = 1 : autoplay = 0;

        if ($("body").hasClass("rtl")) rtl = true;
        contentCarousel.owlCarousel({
            rtl: rtl,
            loop: true,
            margin: 20,
            nav: nav,
            dots: dots,
            autoplay: autoplay,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: contentCarousel.attr("data-sm")
                },
                768: {
                    items: contentCarousel.attr("data-md")
                },
                992: {
                    items: contentCarousel.attr("data-lg")
                }
            }
        });
    }

    if($(".content-carousel-2").length) {
        var rtl = false;
        var contentCarousel2 = $('.content-carousel-2');
        (contentCarousel2.attr("data-nav") == "true") ? nav = 1 : nav = 0;
        (contentCarousel2.attr("data-dots") == "true") ? dots = 1 : dots = 0;
        (contentCarousel2.attr("data-auto") == "true") ? autoplay = 1 : autoplay = 0;

        if ($("body").hasClass("rtl")) rtl = true;
        contentCarousel2.owlCarousel({
            rtl: rtl,
            loop: true,
            margin: 20,
            nav: nav,
            dots: dots,
            autoplay: autoplay,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: contentCarousel2.attr("data-sm")
                },
                768: {
                    items: contentCarousel2.attr("data-md")
                },
                992: {
                    items: contentCarousel2.attr("data-lg")
                }
            }
        });
    }

    if($(".h2-products .product-carousel").length) {
        var rtl = false;
        var customProductCarousel_2 = $('.h2-products .product-carousel');
        (customProductCarousel_2.attr("data-nav") == "true") ? nav = 1 : nav = 0;
        (customProductCarousel_2.attr("data-dots") == "true") ? dots = 1 : dots = 0;
        (customProductCarousel_2.attr("data-auto") == "true") ? autoplay = 1 : autoplay = 0;

        if ($("body").hasClass("rtl")) rtl = true;	
            customProductCarousel_2.owlCarousel({
            rtl: rtl,
            loop: true,
            margin: 1,
            nav: nav,
            dots: dots,
            autoplay: autoplay,
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

    
    if($(".h6-banner-product .product-carousel").length) {
        var rtl = false;
        var h6customProductCarousel = $('.h6-banner-product .product-carousel');
        (h6customProductCarousel.attr("data-nav") == "true") ? nav = 1 : nav = 0;
        (h6customProductCarousel.attr("data-dots") == "true") ? dots = 1 : dots = 0;
        (h6customProductCarousel.attr("data-auto") == "true") ? autoplay = 1 : autoplay = 0;

        if ($("body").hasClass("rtl")) rtl = true;	
            h6customProductCarousel.owlCarousel({
            rtl: rtl,
            loop: true,
            margin: 25,
            nav: nav,
            dots: dots,
            autoplay: autoplay,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: h6customProductCarousel.attr("data-sm")
                },
                768: {
                    items: h6customProductCarousel.attr("data-md")
                },
                992: {
                    items: h6customProductCarousel.attr("data-lg")
                }
            }
        });
    }

    if($(".h6-producttab .producttab-carousel").length) {
        var rtl = false;
        var h6ProducttabCarousel = $('.h6-producttab .producttab-carousel');
        (h6ProducttabCarousel.attr("data-nav") == "true") ? nav = 1 : nav = 0;
        (h6ProducttabCarousel.attr("data-dots") == "true") ? dots = 1 : dots = 0;
        (h6ProducttabCarousel.attr("data-auto") == "true") ? autoplay = 1 : autoplay = 0;

        if ($("body").hasClass("rtl")) rtl = true;	
            h6ProducttabCarousel.owlCarousel({
            rtl: rtl,
            loop: true,
            margin: 25,
            nav: nav,
            dots: dots,
            autoplay: autoplay,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: h6ProducttabCarousel.attr("data-sm")
                },
                768: {
                    items: h6ProducttabCarousel.attr("data-md")
                },
                992: {
                    items: h6ProducttabCarousel.attr("data-lg")
                }
            }
        });
    }

    if($(".blog-carousel").length) {
        var rtl = false;
        var blogCarousel = $('.blog-carousel');
        (blogCarousel.attr("data-nav") == "true") ? nav = 1 : nav = 0;
        (blogCarousel.attr("data-dots") == "true") ? dots = 1 : dots = 0;
        (blogCarousel.attr("data-auto") == "true") ? autoplay = 1 : autoplay = 0;

        if ($("body").hasClass("rtl")) rtl = true;	
            blogCarousel.owlCarousel({
            rtl: rtl,
            loop: true,
            margin: 20,
            nav: nav,
            dots: dots,
            autoplay: autoplay,
            responsive: {
                0: {
                    items: 1
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

    if($(".product-carousel-mr-30").length) {
		var productCarouselMr30 = $(".product-carousel-mr-30");
        var rtl = false;
        (productCarouselMr30.attr("data-nav") == "true") ? nav = 1 : nav = 0;
        (productCarouselMr30.attr("data-dots") == "true") ? dots = 1 : dots = 0;
        (productCarouselMr30.attr("data-auto") == "true") ? autoplay = 1 : autoplay = 0;

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
			nav: nav,
			dots: dots,
			autoplay: autoplay,
			loop: true,
			slideSpeed: 200,
		});
    }

    if($(".product-flexbox .megatab-carousel").length) {
		var megatabCarousel = $(".product-flexbox .megatab-carousel");
        var rtl = false;
        (megatabCarousel.attr("data-nav") == "true") ? nav = 1 : nav = 0;
        (megatabCarousel.attr("data-dots") == "true") ? dots = 1 : dots = 0;
        (megatabCarousel.attr("data-auto") == "true") ? autoplay = 1 : autoplay = 0;

		if ($("body").hasClass("rtl")) rtl = true;
		    megatabCarousel.owlCarousel({
            responsiveClass:true,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: megatabCarousel.attr("data-sm")
                },
                768: {
                    items: megatabCarousel.attr("data-md")
                },
                992: {
                    items: megatabCarousel.attr("data-lg")
                }
            },
			rtl: rtl,
			margin: 20,
			nav: nav,
			dots: dots,
			autoplay: autoplay,
			loop: true,
			slideSpeed: 200,
		});
    }

    if($(".categorytab-carousel-2").length) {
        var categorytabCarousel = $('.categorytab-carousel-2');
        var rtl = false;
        (categorytabCarousel.attr("data-nav") == "true") ? nav = 1 : nav = 0;
        (categorytabCarousel.attr("data-dots") == "true") ? dots = 1 : dots = 0;
        (categorytabCarousel.attr("data-auto") == "true") ? autoplay = 1 : autoplay = 0;

        if ($("body").hasClass("rtl")) rtl = true;	
            categorytabCarousel.owlCarousel({
            responsiveClass:true,
            responsive:{
                0: {
                    items: 2
                },
                576: {
                    items: categorytabCarousel.attr("data-sm")
                },
                768: {
                    items: categorytabCarousel.attr("data-md")
                },
                992: {
                    items: categorytabCarousel.attr("data-lg")
                }
            },
            rtl: rtl,
            margin: 10,
            nav: nav,
            dots: dots,
            loop: true,
            autoplay: autoplay,
            navigationText: ["", ""],
            slideSpeed: 200
        });
    }
}

$(document).on("click", ".switch-view", function(e) {

});

$(document).ready(function(){
    jsPromoBar();
    customCarousel();
    stickySidebar();
    changeShopGrid();
    closeSidebar();
    showMoreCategory();
    backToTop();


    setTimeout(() => {
        $('.preloader').fadeOut();
    }, 3000);	

    if ($("body").hasClass("page-index")){
        $('.header-1 #ver-menu').addClass('show');
    }

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
    
    $(".block-brand .col").hover(function(){
        $(".block-brand .col").addClass("change-color");
        $(this).removeClass("change-color");
        }, function(){
            $(".block-brand .col").removeClass("change-color");
    });

    $(".feature-box").hover(function(){
        $(this).children().children(".lnr").addClass("animated tada");
        }, function(){
            $(this).children().children(".lnr").removeClass("animated tada");
    });

    $("#ver-menu").hover(function(){
        $('body').addClass("hover-vermenu");
        }, function(){
        $('body').removeClass("hover-vermenu");
    });

    $(".h1-our-category .layout-column").hover(function(){
        $(this).addClass("open-sublink");
        }, function(){
        $(this).removeClass("open-sublink");
    });

    $('.panel-default').on('show.bs.collapse', function (e) {
        $('.panel-default .collapse').not(e.target).collapse('hide');
    });

    $('.cat-item').on('show.bs.collapse', function (e) {
        $('.cat-item .collapse').not(e.target).collapse('hide');
    });

    $('.product-comments-additional-info .post-product-comment').click(function(){
        $('#review').collapse('show');
    });

    var x = $(".vertical-thumbs .product-image-zoom").innerHeight();
    var y = $(".vertical-thumbs .js-qv-mask");
    if(x > 0){
        y.css("max-height",x + 2);
    }
    
    $("#search_filter_toggler").click(function(){
        $("body").addClass("open-filter");
    });

    $("#search_filter_controls button").click(function(){
        $("body").removeClass("open-filter");
    });

    $(".tabs-navigation-mobile ul li a").click(function() {
        $("#dlDropDown").dropdown("toggle");
     });

    $(window).resize(function(){
        jsPromoBar();
        changeShopGrid();
        stickySidebar();
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
    });
});

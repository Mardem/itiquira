(function ($) {
    "use strict";
    $(window).on('load', function () {
    });
    $(document).ready(function () {
        (function ($) {
            $.fn.jPushMenu = function (customOptions) {
                var o = $.extend({}, $.fn.jPushMenu.defaultOptions, customOptions);
                $('body').addClass(o.bodyClass);
                $(this).addClass('jPushMenuBtn');
                $(this).on('click', function () {
                    var target = '', push_direction = '';
                    if ($(this).is('.' + o.showLeftClass)) {
                        target = '.cbp-spmenu-left';
                        push_direction = 'toright';
                    } else if ($(this).is('.' + o.showRightClass)) {
                        target = '.cbp-spmenu-right';
                        push_direction = 'toleft';
                    } else if ($(this).is('.' + o.showTopClass)) {
                        target = '.cbp-spmenu-top';
                    } else if ($(this).is('.' + o.showBottomClass)) {
                        target = '.cbp-spmenu-bottom';
                    }
                    $(this).toggleClass(o.activeClass);
                    $(target).toggleClass(o.menuOpenClass);
                    if ($(this).is('.' + o.pushBodyClass)) {
                        $('body').toggleClass('cbp-spmenu-push-' + push_direction);
                    }
                    $('.jPushMenuBtn').not($(this)).toggleClass('disabled');
                    return false;
                });
                var jPushMenu = {
                    close: function (o) {
                        $('.jPushMenuBtn,body,.cbp-spmenu').removeClass('disabled active cbp-spmenu-open cbp-spmenu-push-toleft cbp-spmenu-push-toright');
                    }
                }
                if (o.closeOnClickOutside) {
                    $(document).on('click', function () {
                        jPushMenu.close();
                    });
                    $(document).on('click touchstart', function () {
                        jPushMenu.close();
                    });
                    $('.cbp-spmenu,.toggle-menu').on('click', function (e) {
                        e.stopPropagation();
                    });
                    $('.cbp-spmenu,.toggle-menu').on('click touchstart', function (e) {
                        e.stopPropagation();
                    });
                }
                if (o.closeOnClickLink) {
                    $('.cbp-spmenu a').on('click', function () {
                        jPushMenu.close();
                    });
                }
            };
            $.fn.jPushMenu.defaultOptions = {
                bodyClass: 'cbp-spmenu-push',
                activeClass: 'menu-active',
                showLeftClass: 'menu-left',
                showRightClass: 'menu-right',
                showTopClass: 'menu-top',
                showBottomClass: 'menu-bottom',
                menuOpenClass: 'cbp-spmenu-open',
                pushBodyClass: 'push-body',
                closeOnClickOutside: true,
                closeOnClickInside: true,
                closeOnClickLink: true
            };
        })(jQuery);
        $('.toggle-menu').jPushMenu({closeOnClickLink: false});
        $('.dropdown-toggle').dropdown();
        new WOW().init();
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            autoplay: 7000,
            loop: true,
            simulateTouch: false
        });
        var $scrolldown = $('.scroll-down a');
        $scrolldown.on('click', function (e) {
            e.preventDefault();
            var target = this.hash;
            var $target = $(target);
            $('html, body').stop().animate({'scrollTop': $target.offset().top}, 1300, function () {
                window.location.hash = target;
            });
        });
        var shuffleme = (function ($) {
            'use strict';
            var $grid = $('#grid'), $filterOptions = $('.gallery-sorting li'), $sizer = $grid.find('.shuffle_sizer'),
                init = function () {
                    setTimeout(function () {
                        listen();
                        setupFilters();
                    }, 100);
                    $grid.shuffle({itemSelector: '[class*="col-"]', sizer: $sizer, speed: 300});
                }, setupFilters = function () {
                    var $btns = $filterOptions.children();
                    $btns.on('click', function (e) {
                        e.preventDefault();
                        var $this = $(this), isActive = $this.hasClass('active'),
                            group = isActive ? 'all' : $this.data('group');
                        if (!isActive) {
                            $('.gallery-sorting li a').removeClass('active');
                        }
                        $this.toggleClass('active');
                        $grid.shuffle('shuffle', group);
                    });
                    $btns = null;
                }, listen = function () {
                    var debouncedLayout = $.throttle(300, function () {
                        $grid.shuffle('update');
                    });
                    $grid.find('img').each(function () {
                        var proxyImage;
                        if (this.complete && this.naturalWidth !== undefined) {
                            return;
                        }
                        proxyImage = new Image();
                        $(proxyImage).on('load', function () {
                            $(this).off('load');
                            debouncedLayout();
                        });
                        proxyImage.src = this.src;
                    });
                    setTimeout(function () {
                        debouncedLayout();
                    }, 500);
                };
            return {init: init};
        }(jQuery));
        shuffleme.init();
        $('section#gallery .gallery-items').each(function () {
            $(this).magnificPopup({
                delegate: 'a',
                type: 'image',
                mainClass: 'mfp-fade',
                gallery: {enabled: true},
                retina: {
                    ratio: 1, replaceSrc: function (item, ratio) {
                        return item.src.replace(/\.\w+$/, function (m) {
                            return '@2x' + m;
                        });
                    }
                },
                zoom: {
                    enabled: true, duration: 300, easing: 'ease-in-out', opener: function (openerElement) {
                        return openerElement.is('img') ? openerElement : openerElement.find('img');
                    }
                }
            });
        });
        $('.popup-video').magnificPopup({
            type: 'iframe', mainClass: 'mfp-fade', iframe: {
                markup: '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    '</div>',
                patterns: {
                    youtube: {index: 'youtube.com/', id: 'v=', src: '//www.youtube.com/embed/%id%?autoplay=1'},
                    vimeo: {index: 'vimeo.com/', id: '/', src: '//player.vimeo.com/video/%id%?autoplay=1'},
                    gmaps: {index: '//maps.google.', src: '%id%&output=embed'}
                },
                srcAction: 'iframe_src',
            }
        });
        var trainingCourse = $('.training-course'), courseImg = $('.training-course a img');
        $(courseImg).on('click', function () {
            $(trainingCourse).removeClass('active');
            $(this).closest(trainingCourse).addClass('active');
        });
        $('section#countup').on('inview', function (event, visible, visiblePartX, visiblePartY) {
            if (visible) {
                $(this).find('.counter').each(function () {
                    var $this = $(this);
                    $('.counter').countTo({speed: 3000, refreshInterval: 50});
                });
                $(this).unbind('inview');
            }
        });
        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        sync1.owlCarousel({
            singleItem: true,
            slideSpeed: 1000,
            navigation: false,
            pagination: false,
            afterAction: syncPosition,
            responsiveRefreshRate: 200,
        });
        sync2.owlCarousel({
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3],
            itemsTablet: [768, 3],
            itemsMobile: [479, 1],
            pagination: true,
            responsiveRefreshRate: 100,
            afterInit: function (el) {
                el.find(".owl-item").eq(0).addClass("synced");
            }
        });

        function syncPosition(el) {
            var current = this.currentItem;
            $("#sync2").find(".owl-item").removeClass("synced").eq(current).addClass("synced")
            if ($("#sync2").data("owlCarousel") !== undefined) {
                center(current)
            }
        }

        $("#sync2").on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = $(this).data("owlItem");
            sync1.trigger("owl.goTo", number);
        });

        function center(number) {
            var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
            var num = number;
            var found = false;
            for (var i in sync2visible) {
                if (num === sync2visible[i]) {
                    var found = true;
                }
            }
            if (found === false) {
                if (num > sync2visible[sync2visible.length - 1]) {
                    sync2.trigger("owl.goTo", num - sync2visible.length + 2)
                } else {
                    if (num - 1 === -1) {
                        num = 0;
                    }
                    sync2.trigger("owl.goTo", num);
                }
            } else if (num === sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", sync2visible[1])
            } else if (num === sync2visible[0]) {
                sync2.trigger("owl.goTo", num - 1)
            }
        }

        $('.partners-slider').owlCarousel({
            items: 6,
            itemsDesktop: [1199, 6],
            itemsDesktopSmall: [992, 4],
            itemsTablet: [768, 3],
            itemsTabletSmall: false,
            itemsMobile: [479, 2],
            slideSpeed: 200,
            paginationSpeed: 800,
            autoPlay: 8000,
            stopOnHover: false,
            navigation: false,
            navigationText: ["prev", "next"],
            rewindNav: true,
            scrollPerPage: false,
            pagination: true,
            responsive: true,
            responsiveRefreshRate: 200
        });
        $('.mailchimp').ajaxChimp({callback: mailchimpFunct, url: "your-mailchimp-url-here"});

        function mailchimpFunct(response) {
            if (response.result === 'success') {
                $('#subscribe-result').html('<div class="alert alert-success">' + resp.msg + '</div>').fadeIn(500);
                $("#subscribe-result").delay(5000).fadeOut(1000);
            } else if (response.result === 'error') {
                $('#subscribe-result').html('<div class="alert alert-danger">' + resp.msg + '</div>').fadeIn(500);
                $("#subscribe-result").delay(5000).fadeOut(1000);
            }
        }

        $("#contact-form").on('submit', function (e) {
            e.preventDefault();
            var user_name = $("input[name=name]").val();
            var user_email = $("input[name=email]").val();
            var user_phone = $("input[name=phone]").val();
            var user_subject = $("input[name=subject]").val();
            var user_message = $("textarea[name=message]").val();
            var proceed = true;
            if (user_name == "") {
                $("input[name=name]").css('border-color', 'red');
                proceed = false;
            }
            if (user_email == "") {
                $("input[name=email]").css('border-color', 'red');
                proceed = false;
            }
            if (user_message == "") {
                $("textarea[name=message]").css('border-color', 'red');
                proceed = false;
            }
            if (user_subject == "") {
                $("input[name=subject]").css('border-color', 'red');
                proceed = false;
            }
            if (proceed) {
                var post_data;
                var output;
                post_data = {
                    'user_name': user_name,
                    'user_email': user_email,
                    'user_phone': user_phone,
                    'user_subject': user_subject,
                    'user_message': user_message
                };
                $.post('php/email.php', post_data, function (response) {
                    if (response.type == 'error') {
                        output = '<div class="alert alert-danger">' + response.text + '</div>';
                    } else {
                        output = '<div class="alert alert-success">' + response.text + '</div>';
                        $("input").val('');
                        $("textarea").val('');
                    }
                    $("#contact-result").fadeIn(500).html(output).fadeIn(500);
                    $("#contact-result").delay(5000).fadeOut(1000);
                }, 'json');
            }
        });
        $("input, textarea").on("change keyup", function (event) {
            $("input, textarea").css('border-color', '');
            $("#contact-result").fadeOut(500);
        });
        $(function () {
            $("article.blog-listing").slice(0, 4).show();
            $("#loadMore").on('click', function (e) {
                e.preventDefault();
                $("article.blog-listing:hidden").slice(0, 2).slideDown(400);
                if ($("article.blog-listing:hidden").length == 0) {
                    $('#loadmsg').html('<div class="alert alert-success">No more posts to load.</div>').fadeIn(700);
                    $("#loadMore").fadeOut(600);
                }
            });
        });
        $(function () {
            $(".timeline > li").slice(0, 2).show();
            $("section#timeline .load a").on('click', function (e) {
                e.preventDefault();
                $(".timeline > li").slice(0, 4).fadeIn(600);
                if ($(".timeline > li:hidden").length == 0) {
                    $('#loadmsg').html('<div class="alert alert-success">No more timeline events to load.</div>').fadeIn(700);
                    $("section#timeline .load a").fadeOut(600);
                }
            });
        });
    });
})(jQuery);

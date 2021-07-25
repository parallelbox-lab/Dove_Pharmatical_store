(function($) {
    "use strict"
    /* pre loader */
    $(window).on('load', function() {
        $('#preloader-active').delay(450).fadeOut('slow');
        $('body').delay(450).css({
            'overflow': 'visible'
        });
    });

    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 50) { $(".header-container").addClass("header-scrolled"); } else {
            $(".header-container").removeClass("header-scrolled");
        }
    });

    $(document).ready(function() {
        $('#toggle').on('click', function() {
            $('#nav').toggleClass('visible');
        });
    });


    /*==================================================================
    [ Show / hide modal search ]*/
    $('.js-show-modal-search').on('click', function() {
        $('.modal-search-header').addClass('show-modal-search');
        $(this).css('opacity', '0');

    });

    $('.js-hide-modal-search').on('click', function() {
        $('.modal-search-header').removeClass('show-modal-search');
        $('.js-show-modal-search').css('opacity', '1');
    });

    $('.container-search-header').on('click', function(e) {
        e.stopPropagation();
    });

    // logout animation

    setTimeout(function() {
        $('.logout-flash').fadeOut("slow");

    }, 3000);

    // navigation
    var OnePageNavigation = function() {
        var navToggler = $('.site-menu-toggle');
        $("body").on("click", ".main-menu li a[href^='#'], .smoothscroll[href^='#'], .site-mobile-menu .site-nav-wrap li a", function(e) {
            e.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                'scrollTop': $(hash).offset().top
            }, 800, 'easeInOutCirc', function() {
                window.location.hash = hash;
            });

        });
    };
    OnePageNavigation();
    /* =============
    Bootstrap carousel
    */
    $('.carousel').carousel({
            interval: 2000
        })
        /* ==========================================================
    [datepicker function]
*/
    $("#datepicker").datepicker();

    jQuery(document).ready(function() {
        jQuery("#success_msg").hide();
        jQuery("#error_msg").hide();
        jQuery("#appoinment_form").on("submit", function(e) {
            //Stop the form from submitting itself to the server.
            e.preventDefault();

            var data = {};
            var date = jQuery("#datepicker").val();
            var time = jQuery("#time").val();
            var name = jQuery("#name").val();
            var prefix = jQuery("#prefix").val();
            var phone = jQuery("#phone").val();
            var gender = jQuery("#gender").val();
            var age = jQuery("#age").val();
            var email = jQuery("#email").val();
            //  var message = jQuery("#message").val();



            if (date == "", time === "", name === "", email === "", phone === "", gender === "", age === "") {
                // function to display required field 
                $("#time").show().css("border", "1px solid red");
                $("#datepicker").show().css("border", "1px solid red");
                $("#name").show().css("border", "1px solid red");
                $("#prefix").show().css("border", "1px solid red");
                $("#phone").show().css("border", "1px solid red");
                $("#gender").show().css("border", "1px solid red");
                $("#age").show().css("border", "1px solid red");
                $("#email").show().css("border", "1px solid red");
            } else {
                jQuery.ajax({
                    type: "POST",
                    dataType: "json",
                    beforeSend: function() {
                        jQuery(".msg-loader").css("display", "inline");
                    },
                    url: "Appoinment_controller/message",
                    data: {
                        date: date,
                        time: time,
                        name: name,
                        prefix: prefix,
                        phone: phone,
                        gender: gender,
                        age: age,
                        email: email
                    },
                    complete: function() {
                        jQuery("#appoinment_form")[0].reset();
                        jQuery(".msg-loader").css("display", "none");
                    },
                    success: function(data) {

                        jQuery("#success_msg").show();
                        setTimeout(function() {
                            $('#success_msg').fadeOut("slow");
                            $('.msg-loader').fadeOut("slow");

                        }, 2000);
                        jQuery("#appoinment_form")[0].reset().css("border", "0px");
                        jQuery("html, body").animate({
                            scrollTop: jQuery("#success_msg").offset().top - 200
                        }, 2000);
                    },
                    error: function(data) {
                        jQuery("#error_msg").show();
                        setTimeout(function() {
                            $('#error_msg').fadeOut("slow");
                            $('.msg-loader').fadeOut("slow");

                        }, 2000);
                        jQuery("html, body").animate({
                            scrollTop: jQuery("#error_msg").offset().top - 200
                        }, 2000);
                    },

                });
            };
        });
    });

})(jQuery);
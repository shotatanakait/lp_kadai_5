$(function() {
    // HUMBURGER MENU CLICK EVENT
    $("#humburgerMenuButton").click(function () {
        if ($(this).hasClass('closeMenuButton')) {
            $(this).removeClass('closeMenuButton');
            $('.navList').slideToggle(300, function() {
                $(this).removeAttr('style');
            });
        } else {
            $(this).addClass('closeMenuButton');
            $('.navList').slideToggle(300);
        }
    });

    // NAVIGATION LINK CLICK EVENT
    $('.navListItem a').click(function() {
        if ($(window).width() <= 480) {
            if ($('#humburgerMenuButton').hasClass('closeMenuButton')) {
                $('#humburgerMenuButton').removeClass('closeMenuButton');
                $('.navList').slideToggle(300, function() {
                    $(this).removeAttr('style');
                });
            } else {
                $('#humburgerMenuButton').addClass('closeMenuButton');
                $('.navList').slideToggle(300);
            }
        }

        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 300);
    });

    // WINDOW RESIZE EVENT
    $(window).resize(function() {
        if ($(window).width() > 480 && $('.navList').attr('style')) {
            $('.navList').attr('style', 'display: flex !important;');
        } else if ($(window).width() <= 480 && $('.navList').attr('style')) {
            $('.navList').attr('style', 'display: block !important;');
        }
    });

    // SWIPER
    const swiper = new Swiper('.swiper', {
        loop: true,
        slidesPerView: 1.2,
        centeredSlides: true,
        spaceBetween: 8,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});

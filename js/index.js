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

    // SCHEDULE CLICK EVENT
    $('.scheduleBox').click(function() {
        const scheduleBoxId = $(this).attr('id').slice(-1);
        const activeScheduleDescriptionText = '#scheduleDescriptionText' + scheduleBoxId;

        $('.scheduleBox').removeClass('active');
        $(this).addClass('active');

        $('.scheduleDescriptionText').removeClass('active');
        $(activeScheduleDescriptionText).addClass('active');
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

    // SUBMIT BUTTON CLICK EVENT
    $('#contactForm').submit(function() {
        const tel = $('input[name="tel"]').val();
        // 空白を許容
        if (tel === '') {
            return true;
        }
        // 数値以外の入力
        if (isNaN(tel)) {
            $('#errorMessage').text('電話番号は数値で入力してください。');
            $('#errorMessage').css('color', '#ff0000');
            return false;
        }
        // 11文字以外の入力
        if (tel.length !== 11) {
            $('#errorMessage').text('電話番号は11文字で入力してください。');
            $('#errorMessage').css('color', '#ff0000');
            return false;
        }
    });

    // FORM INPUT OR SELECT EVENT
    let allFilled = true;
    const inputRequiredCallback = function() {
        allFilled = true;
        $('#contactForm input[required], #contactForm select[required]').each(function() {
            if ($(this).is('input') && $(this).val() === '') {
                allFilled = false;
            } else if ($(this).is('select') && !$(this).val()) {
                allFilled = false;
            }
        });

        if (allFilled) {
            $('#contactFormSubmitButton').prop('disabled', false);
        } else {
            $('#contactFormSubmitButton').prop('disabled', true);
        }
    }
    // ページ読込み時
    inputRequiredCallback();
    // 入力時
    $('#contactForm input[required], #contactForm select[required]').on('input', inputRequiredCallback);

    // FOCUS EVENT
    $('input[name="tel"]').focus(function() {
        $('#errorMessage').text('');
    });
});

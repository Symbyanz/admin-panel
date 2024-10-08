$(document).ready(function () {
    $('.sidebar,.shadow,.header__logout').removeClass('-active');



    $('.header__menu').click(function (event) {
        $('.sidebar,.shadow').addClass('-active');
    });
    $('.sidebar__close,.shadow').click(function (event) {
        $('.sidebar,.shadow').removeClass('-active');
    });

    $('.header__photo').click(function (event) {
        $(".header__logout").addClass('-active');

        $(document).mouseup(function (e) {
            if ($(".header__logout").has(e.target).length === 0) {
                $(".header__logout").removeClass('-active');
            }
        });
    });


    $('.sidebar__title').click(function() {
        $(this).next('.sidebar__items').slideToggle();
        $(this).toggleClass('-active');
    });
});




$(window).on('load resize', function () {
    if ($(window).width() >= 992) {
        $('.sidebar,.shadow').removeClass('-active');
    }
});


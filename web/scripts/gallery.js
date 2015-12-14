$(function () {
    var Portfolio = {
        init: function () {
            $('.portfolio-index').css({marginTop: $(window).height()});
            $(".portfolio-image-full img").on("swiperight", function (e) {
                window.location.href = $('.portfolio-image-prev').attr('href');
            });
            $(".portfolio-image-full img").on("swipeleft", function (e) {
                window.location.href = $('.portfolio-image-next').attr('href');
            });
        }
    };

    Portfolio.init();
});
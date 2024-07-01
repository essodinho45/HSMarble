import './slick';

$(function () {
    $('.slick-carousel').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
});

$(document).on("click", ".image-modal-btn", function () {
    var url = $(this).data('url');
    $("#image-modal-body").html("<img class='modal-image' src='"+url+"'>");
});

$('button[data-bs-toggle="pill"]').on('click', function (e) {
    $('.slick-carousel').slick('setPosition');
})

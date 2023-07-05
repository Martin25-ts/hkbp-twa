
$(document).ready(function () {
    // Add margin to the last column in each row to create a gap
    $('.row-gallery').each(function () {
        $(this).find('.col-md-4:last').addClass('last-column');
    });
})


document.querySelectorAll(".projcard-description").forEach(function(box) {
    $clamp(box, {clamp: 6});
});



$(document).ready(function() {
    $('a[href^="#"]').on('click', function(event) {
        event.preventDefault();
        var target = $(this.getAttribute('href'));
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
});








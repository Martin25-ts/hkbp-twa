
$(document).ready(function () {
    // Add margin to the last column in each row to create a gap
    $('.row-gallery').each(function () {
        $(this).find('.col-md-4:last').addClass('last-column');
    });
})




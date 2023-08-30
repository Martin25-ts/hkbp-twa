$(document).ready(function() {
    var button = $('#sunday-add-button');
    var formsunday = $('.form-sundays');

    button.click(function() {
        formsunday.fadeIn(400);;
    });

    $(window).click(function(event) {
        if (!formsunday.is(event.target) && !button.is(event.target) && formsunday.has(event.target).length === 0) {
            formsunday.hide();
        }
    });
});



$(document).ready(function() {
    var button = $('#update-sunday');
    var formsunday = $('.form-sunday-update');

    button.click(function() {
        formsunday.fadeIn(400);;
    });

    $(window).click(function(event) {
        if (!formsunday.is(event.target) && !button.is(event.target) && formsunday.has(event.target).length === 0) {
            formsunday.hide();
        }
    });
});

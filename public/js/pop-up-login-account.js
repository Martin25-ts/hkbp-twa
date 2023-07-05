$(document).ready(function() {
    var button = $('#button-popup-login');
    var loginBox = $('.login-box');

    button.click(function() {
        loginBox.fadeIn(400);;
    });

    $(window).click(function(event) {
        if (!loginBox.is(event.target) && !button.is(event.target) && loginBox.has(event.target).length === 0) {
            loginBox.hide();
        }
    });
});

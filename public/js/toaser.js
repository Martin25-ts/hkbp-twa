$(document).ready(function () {
    var errorMessages;
    if (typeof window.errorMessages !== 'undefined') {
        errorMessages = window.errorMessages;

        console.log(errorMessages);
    }


    function showErrorToast(message) {
        var errorToast = $("#errorToast");
        var errorTitle = $("#error__title");

        errorTitle.text(message);
        errorToast.addClass('show');

        setTimeout(function () {
            errorToast.removeClass('show');
        }, errorMessages.length * 1250);
    }


    if (errorMessages.length > 0) {
        errorMessages.forEach(function (message) {
            showErrorToast(message);
        });
    }
});




$(document).ready(function () {
    var flashSuccessMessage;


    if (typeof window.flashSuccessMessage !== 'undefined') {
        flashSuccessMessage = window.flashSuccessMessage;

        console.log(flashSuccessMessage);
    }

    function showSuccessToast(message) {
        var successToast = $("#successToast");
        var successTitle = $("#success__title");

        successTitle.text(message);
        successToast.addClass('show');

        setTimeout(function () {
            successToast.removeClass('show');
        }, 2000);
    }

    if (flashSuccessMessage) {
        showSuccessToast(flashSuccessMessage);
    }
});



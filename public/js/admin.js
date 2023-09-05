$(document).ready(function() {
    var button = $('#add-sunday-button');
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



$(document).ready(function () {
    $("#fill").hide();
    $("#empty").show();

    $("#beritaimage").change(function () {
        $("#empty").hide();
        // Mendapatkan nama file dan jenis file yang diunggah
        var fileName = $(this).val().split("\\").pop();
        var fileType = fileName.split(".").pop();

        // Mengubah teks span menjadi nama file dan jenis file
        $("#filename").text(fileName);
        $("#fill").show();
    });
});


$(document).ready(function() {
    var button = $('#button-add-berita');
    var form = $('#form-add-berita');

    button.click(function() {
        form.fadeIn(400);;
    });

    $(window).click(function(event) {
        if (!form.is(event.target) && !button.is(event.target) && form.has(event.target).length === 0) {
            form.hide();
        }
    });
});

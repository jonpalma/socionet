$(window).scroll(function () {
    if ($(window).scrollTop() >= '90' && !$('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').addClass('navbar-fixed-top');
    } else if ($(window).scrollTop() < '90' && $('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').removeClass('navbar-fixed-top');
    }
});

$('.navbar-nav a').click(function() {
    $('.navbar-nav a').removeClass('active');
    $(this).addClass('active');
});

$("#bttnMapa").click(function() {
    $("iframe").css('pointer-events', 'all');
});

//Ajax contact form
$(function() {
    var close = '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
    // Get the form.
    var form = $('#form');
    // Get the messages div.
    var formMessages = $('#form-output');

    // Set up an event listener for the contact form.
    $(form).submit(function(e) {
        // Stop the browser from submitting the form.
        e.preventDefault();
        $("#form-submit").val("Enviando...");

        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
            .done(function(response) {
            // Make sure that the formMessages div has the 'success' class.
            $(formMessages).removeClass('alert alert-danger');
            $(formMessages).addClass('alert alert-success');

            // Set the message text.
            $(formMessages).html(close+response);

            // Clear the form.
            $('#name').val('');
            $('#email').val('');
            $('#mssg').val('');
            $("#form-submit").val("Enviar");
        })
            .fail(function(data) {
            // Make sure that the formMessages div has the 'error' class.
            $(formMessages).removeClass('alert alert-success');
            $(formMessages).addClass('alert alert-danger');

            // Set the message text.
            if (data.responseText !== '') {
                $(formMessages).html(close+data.responseText);
                $("#form-submit").val("Enviar");
            } else {
                $(formMessages).html(close+'Oops! Ocurrió un error, intentelo nuevamente.');
                $("#form-submit").val("Enviar");
            }
        });
    });
});
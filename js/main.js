$("#contact-form").submit(function (e) {
    e.preventDefault();
    var name = $('#name').val();
    var mail = $('#email').val();
    var tel = $('#phone').val();
    var text_msg = $('#message').val();
    var msg = $('#msg_error');

    if(name !== '' && mail !== '' && tel !== '' && text_msg !== ''){

        msg.innerHTML = '';
        var dataString = $("#contact-form").serialize();
        $.ajax({
            type: "POST",
            url: "send_contact.php",
            data: dataString,
            success: function(data) {
                msg.html(data);
                $("#contact-form")[0].reset();
                showAlert("success", "El mensaje se ha enviado con éxito. En breve nos pondremos en contacto con usted.");
            },
			error: function () {
                showAlert("danger", "Se ha producido un error, vuelva a intentar más tarde.");
            }
        });
    }else{
        msg.html('Todos los campos son requeridos.');
    }
    return false;
});

$(".glyphicon-remove").click(function (e) {
    $(this).parent().hide();
});

var showAlert = function (type, msg) {
    $(".alert-message").text(msg);
    $(".alert.alert-" + type).show();
};




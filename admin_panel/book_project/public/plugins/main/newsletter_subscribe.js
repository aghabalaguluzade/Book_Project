const _token = $('meta[name="csrf-token"]').attr('content');

const email_subscribe = () => {

    let email = $("#subscribe_email-normal").val();
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    $.ajax({
        type: "POST",
        url: "/newsletter-subscribe",
        data: {
            _token,
            email
        },
        success: function (response) {
            alert("Abunə olduğunuza görə təşəkkür edirik");
        },
        error: function(error) {
            alert('Xəta');
        }
    });
}
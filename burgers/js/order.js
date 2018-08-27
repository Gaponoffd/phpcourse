$('.order__form-button').on('click', function (e) {
    e.preventDefault();
    var name = $('#name').val();
    var phone = $('#phone').val();
    var email = $('#email').val();
    $.ajax({
        url: './order.php',
        data: {
            name: name,
            phone: phone,
            email: email
        },
        method: 'POST'
    }).done(function (data) {
        console.log(data);
    })
})

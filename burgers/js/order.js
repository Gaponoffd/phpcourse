$('.order__form-button').on('click', function (e) {
    e.preventDefault();
    var name = $('#name').val();
    var phone = $('#phone').val();
    var email = $('#email').val();
    var street = $('#street').val();
    var home = $('#home').val();
    var housing = $('#housing').val();
    var apartment = $('#apartment').val();
    var floor = $('#floor').val();
    var comment = $('#comment').val();

    $.ajax({
        url: './order.php',
        data: {
            name: name,
            phone: phone,
            email: email,
            street: street,
            home: home,
            housing: housing,
            apartment: apartment,
            floor: floor,
            comment: comment
        },
        method: 'POST'
    }).done(function (data) {
        console.log(data);
    })
})

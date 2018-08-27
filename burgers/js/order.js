$('.order__form-button').on('click', function (e) {
    e.preventDefault();
    $.ajax({
        url: './order.php',
        method: 'POST'
    }).done(function (data) {
        console.log(data);
    })
})

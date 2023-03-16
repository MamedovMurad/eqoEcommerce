function filterProducts(e) {

    /*     $.ajax({
            type: "POST",
            url: "your url.php",
            data: datastring,
            dataType: "json",
            success: function(data) {
             
            },
            error: function() {
                alert('error handling here');
            }
        });  */
}

$("#filterProduct").submit(function(e) {
    e.preventDefault();

    var datastring = $("#filterProduct").serialize();
    let action = $("#filterProduct").attr('action')
    $.ajax({
        type: "GET",
        url: action,
        data: datastring,
        dataType: "json",

        success: function(data) {
            $('.shop_wrapper').html(data.html)
        },
        error: function() {
            alert('error handling here');
        }
    });
    console.log(action);
});
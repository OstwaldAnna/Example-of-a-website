$(document).ready(function() {
    $('#needs-validation').submit(function(e) {
        var login = $('#login').val();
        $.ajax({
            type: "GET",
            url: '/vendor/check_login.php',
            data: {
                'login': login
            },
            success: function(response)
            {
                var jsonData = JSON.parse(response);
                console.log(jsonData);
                if (jsonData.success == false)
                {
                    $('.login-feedback').show();
                    e.preventDefault();
                }
                else{
                    $(".login-feedback").css("display", "none"); 
                }
           }
       });
    });
});
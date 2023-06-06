// Проверка на логин
$(document).ready(function() {
    $('#btn_reg').on('click', function(e) {
        e.preventDefault();
        var login = $('#login').val();
        $.ajax({
            type: "GET",
            url: '/vendor/check_login.php',
            data: {
                'login': login
            },
            success: function(response)
            {
                console.log(response);
                var jsonData = JSON.parse(response);
                console.log(jsonData);
                if (jsonData.success == false)
                {
                    $('.login-feedback').show();
                }
                else {
                    $(".login-feedback").css("display", "none");
                    $('#needs-validation').submit();
                }
           }
       });
    });
});
//авторизация
$('#login_btn').click(function (e) { 

    //e.preventDefault(e); //отключение стандартного поведения кнопки submit

    let email = $('input[name="email"]').val(),
    password = $('input[name="password"]').val();

    $.ajax({
        type: 'POST',
        url: 'inc/signin.php',
        data: {
            email: email,
            password: password
        },
        dataType: 'JSON',

        //'data'-данные которые возвращает сервер
        success (data) { 
            if(data.status){
                document.location.href = '/index.php';

            } else{
                $('.msg').removeClass('none').text(data.message);

            }
           
        }
    });

});

//регистрация
$('#reg_btn').click(function (){


    let login = $('input[name="login"]').val(),
    email = $('input[name="email"]').val(),
    password = $('input[name="password"]').val(),
    password_confirm = $('input[name="password_confirm"]').val();

    $.ajax ({
        url:'inc/signup.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            login:login,
            email:email,
            password:password,
            password_confirm:password_confirm
        },
        success(data) {
            if(data.status){
                document.location.href = '/check.php';

            }else{
                $('.msg').removeClass('none').text(data.message);
            }
        }

    })
})

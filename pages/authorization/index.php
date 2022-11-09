<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?include($_SERVER["DOCUMENT_ROOT"]."/init.php");?>
    
    <!-- links -->
    <script src="<?=SITE_DEFAULT_PATH?>/js/lib/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?=SITE_DEFAULT_PATH?>/fonts/fonts.css">

</head>
<body style="background-image: url('<?=SITE_DEFAULT_PATH?>/media/img/authorization_bg.png');">

    <div class="auth_form">
        <div class="tab">
            <a href="" class="enter active">Вход</a>
            <a href="" class="register">Регистрация</a>
        </div>
        <div class="form_bg">

            <form action="" id="enter_form" class="enter active">

                <input name="tel_number" placeholder="Номер телефона" type="tel">
                <input name="password" placeholder="Пароль" type="password">

                <button type="submit">Вход</button>
            </form>



            <form action="" id="register_form" class="register">
                <input type="text" placeholder="Имя*" name="Name">
                <input type="text" placeholder="Фамилия*" name="Surname">
                <input type="tel" placeholder="Номер телефона*" name="tel_number">
                <input type="email" placeholder="E-mail" name="Email">
                <input id="password" type="password" placeholder="Пароль*" name="password">
                <input type="password" placeholder="Подтвердите пароль*" name="Confirm_password">

                <div class="checkbox_cont">
                    <input type="checkbox" name="confirm_personal_data" id="">
                    <span>Я даю согласие на обработку моих <a target="_blank" href="">персональных данных</a>. *</span>
                </div>

                <div class="error_message">Ошибка: <span></span></div>
                <button type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div>
    
</body>

<script src="index.js"></script>
<script>
    $(function(){
    


    // $(".auth_form form.enter").validate();


    $("#register_form").validate({
        rules: {
            Email: {
              required: "Поле E-mail обязательно для заполнения",
              email: true
            },
            tel_number: {
              required: "Поле 'Номер телефона' обязательно для заполнения",
              minlength: 5
            }
        },
        submitHandler: function(event) {
            event.preventDefault();
            console.log("Форма работает");
        },
    });

    // $(".auth_form form input[type='tel']").mask("+7(999)999-9999", {autoclear: false});
});
</script>
</html>
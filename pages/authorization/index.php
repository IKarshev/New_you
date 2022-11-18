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
    <a href="<?=SITE_DEFAULT_PATH?>" class="back_to_main">На главную</a>
    <div class="auth_form">
        <div class="tab">
            <a href="" class="enter <?if ( ($_GET["tab"] == "enter") || (!isset($_GET["tab"])) ){echo "active";};?>">Вход</a>
            <a href="" class="register <?if ($_GET["tab"] == "register"){echo "active";};?>">Регистрация</a>
        </div>
        <div class="form_bg">

            <form action="" id="enter_form" class="enter <?if ( ($_GET["tab"] == "enter") || (!isset($_GET["tab"])) ){echo "active";};?>">

                <input name="tel_number" placeholder="Номер телефона" type="tel">
                <input name="password" placeholder="Пароль" type="password">
                <?if ($_GET["reg"] == "success"):?>
                    <div class="success_message">Регистрация пройдена успешно, авторизируйтесь</div>
                <?endif;?>
                <?if ($_GET["reg"] == "error"):?>
                    <div class="error_message">Неверный логин или пароль</div>
                <?endif;?>
                <!-- вывод ошибки при авторизации -->
                <button type="submit">Вход</button>
            </form>


            <form action="" id="register_form" class="register <?if ($_GET["tab"] == "register"){echo "active";};?>">
                <input value="" type="text" placeholder="Имя*" name="Name">
                <input value="" type="text" placeholder="Фамилия*" name="Surname">
                <input value="" type="tel" placeholder="Номер телефона*" name="tel_number">
                <input value="" type="email" placeholder="E-mail" name="Email">
                <input value="" id="password" type="password" placeholder="Пароль*" name="password">
                <input value="" type="password" placeholder="Подтвердите пароль*" name="Confirm_password">

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
});
</script>
</html>
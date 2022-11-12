<? session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="/fonts/fonts.css">
    <link rel="stylesheet" href="./css/lightbox.min.css">
    <script src="./js/lib/jquery.js"></script>
    <script src="./js/lib/slick.min.js"></script>
    <title>Новая ты <?=$page_title?></title>
    <?include($_SERVER["DOCUMENT_ROOT"]."/init.php");?>
</head>
<body>
    <div id="to_top_btn"></div>

    <div class="price_list hide">
        <div class="price_list_cont">
            <div class="price_list_header">
                <div class="img_cont">
                    <a class="close_price_list" href="">
                        <img src="./media/ikons/cross.svg" alt="">
                    </a>
                </div>
            </div>

            <div class="logo_cont">
                <img src="./media/ikons/full_logo.svg" alt="">
                <h1>Наши услуги</h1>
            </div>

            <div class="wrapper" id="price_list">
                <div class="container">

                    <? require("./moduls/price_list.php"); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="desktop" >
        <div class="top_line">
            <div class="wrapper">
                <div class="container">
                    <a class="telephone_number" href="tel:79134381847">+7 (913) 438-18-47</a>
                    <span class="">г.Ленинск-Кузнецкий, Проспект Кирова, 52Б</span>
                    <div class="social_ikons_cont">
                        <a href=""><img src="./media/ikons/telegram.svg" alt=""></a>
                        <a href=""><img src="./media/ikons/vk.svg" alt=""></a>
                    </div>
                </div>
            </div>            
        </div>
        <div class="logo_cont">
            <div class="wrapper">
                <div class="container">
                    <a class="img_cont" href="/">
                        <img src="./media/ikons/full_logo.svg" alt="">
                    </a>
                    <div class="log_in">
                        <a href="<?=SITE_DEFAULT_PATH?>/pages/authorization/index.php">Авторизация</a> 
                        / 
                        <a href="<?=SITE_DEFAULT_PATH?>/pages/authorization/index.php?tab=register">Регистрация</a>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="wrapper">
            <?require("./moduls/menu.php");?>
            </div>
        </nav>
    </header>

    <header class="mobile">
        <div class="wrapper main_line">
            <div class="container">
                <a href="" class="burger_btn">
                    <img src="./media/ikons/burger_menu.svg" alt="">
                </a>
                <a href="tel:79134381847" class="telephone_number">+7 (913) 438-18-47</a>
            </div>
        </div>
        <div class="burger_menu close">
            <div class="main_line">
                <a href="" class="burger_btn">
                    <img src="./media/ikons/burger_menu.svg" alt="">
                </a>
                <span>г.Ленинск-Кузнецкий,<br> Проспект Кирова, 52Б</span>
            </div>
            <nav>
            <?require("./moduls/menu.php");?>
            </nav>
            <div class="logo_container">
                <div class="img_cont">
                    <img src="./media/ikons/full_logo.svg" alt="">
                </div>
            </div>
            <div class="user_account">
                <div class="log_in">
                    <a href="<?=SITE_DEFAULT_PATH?>/pages/authorization/index.php">Авторизация</a> 
                    / 
                    <a href="<?=SITE_DEFAULT_PATH?>/pages/authorization/index.php?tab=register">Регистрация</a>
                </div>
            </div>
            <div class="ikons_cont">
                <a href="" class="ikon"><img src="./media/ikons/telegram.svg" alt=""></a>
                <a href="" class="ikon"><img src="./media/ikons/vk.svg" alt=""></a>
            </div>
        </div>
        <div class="black_bg"></div>
    </header>
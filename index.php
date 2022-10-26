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
    <title>Новая ты</title>
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

                    <? include "price_list.php"; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="desktop" >
        <div class="top_line">
            <div class="wrapper">
                <div class="container">
                    <a class="telephone_number" href="">+7 (913) 438-18-47</a>
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
                <a class="img_cont" href="/">
                    <img src="./media/ikons/full_logo.svg" alt="">
                </a>
            </div>
        </div>
        <nav>
            <div class="wrapper">
            <?include "menu.php";?>
            </div>
        </nav>
    </header>

    <header class="mobile">
        <div class="wrapper main_line">
            <div class="container">
                <a href="" class="burger_btn">
                    <img src="./media/ikons/burger_menu.svg" alt="">
                </a>
                <a href="" class="telephone_number">+7 (913) 438-18-47</a>
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
            <?include "menu.php";?>
            </nav>
            <div class="logo_container">
                <div class="img_cont">
                    <img src="./media/ikons/full_logo.svg" alt="">
                </div>
            </div>
            <div class="ikons_cont">
                <a href="" class="ikon"><img src="./media/ikons/telegram.svg" alt=""></a>
                <a href="" class="ikon"><img src="./media/ikons/vk.svg" alt=""></a>
            </div>
        </div>
        <div class="black_bg"></div>
    </header>


    <div class="banner">
        <a href="" class="side open_price_list">
            <h1>Наши услуги</h1>
        </a>
        <a target="_blank" href="https://clck.ru/32HrH9" class="side">
            <h1>Открыть карту</h1>
        </a>
    </div>


    <div id="why_our_clients" class="wrapper">
        <div class="container">

            <div class="img_block">
                <img src="./media/маникюр.jpeg" alt="">
            </div>
            <h1 >Почему наши клиенты выбирают нас</h1>
            <div class="text_container">
                <p>В салоне "Новая ты"абсолютно все направлено на то,
                    чтобы каждый посетитель почувствовал себя самым
                    желанным гостем, и провел время с максимумом комфорта и пользы</p>
                <a class="open_price_list" href="">Ознакомится с услугами</a>
            </div>

        </div>
    </div>


    <div class="wrapper" id="SlickSlider">
        <div class="container">

            <div class="slider">

                <div class="slider__item">
                    <div class="slide_cont">
                        <div class="img_cont"><img src="" alt=""></div>
                        <div class="text_cont">
                            <h1>Массаж</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Optio tempore dolore praesentium.</p>
                        </div>
                    </div>
                </div>

                <div class="slider__item">
                    <div class="slide_cont">
                        <div class="img_cont"><img src="" alt=""></div>
                        <div class="text_cont">
                            <h1>Массаж</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Optio tempore dolore praesentium.</p>
                        </div>
                    </div>
                </div>

                <div class="slider__item">
                    <div class="slide_cont">
                        <div class="img_cont"><img src="" alt=""></div>
                        <div class="text_cont">
                            <h1>Массаж</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Optio tempore dolore praesentium.</p>
                        </div>
                    </div>
                </div>

                <div class="slider__item">
                    <div class="slide_cont">
                        <div class="img_cont"><img src="" alt=""></div>
                        <div class="text_cont">
                            <h1>Массаж</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Optio tempore dolore praesentium.</p>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="arrows_container">
                <div class="arrow" id="left"></div>
                <div class="arrow" id="right"></div>
            </div>

        </div>
    </div>

    <!-- img_block -->
    <div class="wrapper" id="img_block">
        <div class="container">

            <a data-lightbox="img_block" href="./media/img/img1.jpg" class="img_block" id="img_1"><img src="./media/img/img1.jpg" alt=""></a>
            <a data-lightbox="img_block" href="./media/img/img2.jpg" class="img_block" id="img_2"><img src="./media/img/img2.jpg" alt=""></a>
            <a data-lightbox="img_block" href="./media/img/img3.jpg" class="img_block" id="img_3"><img src="./media/img/img3.jpg" alt=""></a>
            <a data-lightbox="img_block" href="./media/img/img4.jpg" class="img_block" id="img_4"><img src="./media/img/img4.jpg" alt=""></a>
            <a data-lightbox="img_block" href="./media/img/img5.jpg" class="img_block" id="img_5"><img src="./media/img/img5.jpg" alt=""></a>

        </div>
    </div>

    <!-- footer -->
    <footer id="contacts">
        <div class="wrapper">
            <div class="container">

                <div class="info_block">
                    <div class="map_container">
                        <!-- Короткая ссылка на карту: https://clck.ru/32HrH9 -->
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A724fb2f8275ce464192d0f4168e53222b62ed616a25a9d98f0329611d070ab13&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
                    </div>
                    <div class="info_row">
                        <div class="info_elem">
                            <h1>Номер телефона:</h1>
                            <a href="">+7 (913) 438-18-47</a>
                        </div>
                        <div class="info_elem">
                            <h1>Часы работы:<br>9:00-21:00</h1>
                        </div>
                        <div class="info_elem">
                            <h1>Проспект Кирова, 52Б</h1>
                        </div>
                    </div>
                    
                    <div class="btn_cont">
                        <a target="_blank" href="https://clck.ru/32HrH9">Открыть на карте</a>
                    </div>
                </div>

                
                <div class="mocup_block">
                    <img src="./media/img/mocup.png" alt="">
                </div>

            </div>
        </div>
        <div class="footer_bg"></div>
    </footer>



</body>
<script src="./js/index.js"></script>
<script src="./js/lib/lightbox.min.js"></script>
</html>
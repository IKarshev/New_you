<? require("./moduls/header.php"); ?>
<? require("./moduls/bd_connect.php"); ?>

    <!-- <? print_r($_SESSION["user"]); ?> -->

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
                <a class="open_price_list" href="">Ознакомиться с услугами</a>
            </div>

        </div>
    </div>


    <div class="wrapper" id="SlickSlider">
        <div class="container">

            <div class="slider">
            
            <? require("./moduls/slides.php"); ?>

            </div>
            
            <div class="arrows_container">
                <div class="arrow" id="left"></div>
                <div class="arrow" id="right"></div>
            </div>

        </div>
    </div>

    <? //блок новостей (разкоментить когда будет минимум 4 новости) ?>
    <?$data_last_news = get_quary("SELECT*FROM news ORDER BY id DESC LIMIT 4", $connect);
    $data_last_news[0]["date"] = date('d-m-Y', strtotime($data_last_news[0]["date"]));
    $data_last_news[0]["Preview_text"] = substr($data_last_news[0]["Detailed_text"], 0, 150)."...";

if ( count( $data_last_news ) == 4 ):?>
    
    <div class="wrapper" id="pre_news">
        <div class="container">
            <h1>Новости:</h1>
            <div class="main_news">
                <a href="./detail_news.php?news_id=<?=$data_last_news[0]["id"];?>" class="img_cont">
                    <img src=".\media\news_img\<?=$data_last_news[0]["preview_img_href"];?>" alt="">
                </a>
                <div class="text_cont">
                    <a href="./detail_news.php?news_id=<?=$data_last_news[0]["id"];?>"><?=$data_last_news[0]["title"];?></a>
                    <h2><?=$data_last_news[0]["date"];?></h2>
                    <p><?=$data_last_news[0]["Preview_text"];?></p>
                    <a href="./news.php" class="all_news">Все новости</a>
                </div>
            </div>
            
            <div class="news_row">
                <?foreach ($data_last_news as $key => $value):
                    if( $key > 0 ):
                    $value["date"] = date('d-m-Y', strtotime($value["date"]));
                    $value["Preview_text"] = substr($value["Detailed_text"], 0, 70)."...";
                    ?>

                    <div class="item">
                        <a href="./detail_news.php?news_id=<?=$value["id"];?>" class="img_cont">
                            <img src=".\media\news_img\<?=$value["preview_img_href"];?>" alt="">
                        </a>
                        <div class="text_cont">
                            <a href="./detail_news.php?news_id=<?=$value["id"];?>"><?=$value["title"];?></a>
                            <h2><?=$value["date"];?></h2>
                            <p><?=$value["Preview_text"];?></p>
                        </div>
                    </div>

            
                <?endif;?>
                <?endforeach;?>
            </div>
        </div>
    </div>
<?endif;?>



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

<? require("./moduls/footer.php"); ?>
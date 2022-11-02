<? require("./moduls/header.php"); ?>
<? require("./moduls/bd_connect.php"); ?>

<?
    $data = get_quary("SELECT*FROM news WHERE id=".$_GET["news_id"], $connect);
    $data = $data[0];//"Распаковал" массив
    $data["date"] = date('d-m-Y', strtotime($data["date"]));

    $imgs = get_quary("SELECT * FROM news_imgs WHERE news_id=".$_GET["news_id"], $connect);
    // print_r($imgs);
?>

<div class="wrapper" id="detaile_news">
    <div class="container">
        <a href="./news.php" class="allnews_btn">
            <img src="./media/ikons/black_arrow.svg" alt="">
            <h1>Все новости</h1>
        </a>

        <div class="detaile_cont">
            <div class="img_container">

                <div class="big_img">
                    <img src="/media/news_img/<?=$data["preview_img_href"];?>" alt="">
                </div>


                <div class="slider">
                    <div class="slides_cont">
                        <div class="slide_cont"><img src="/media/news_img/<?=$data["preview_img_href"];?>" alt=""></div>

                        <?foreach ($imgs as $key => $value):?>
                            <div  class="slide_cont"><img src="/media/news_img/<?=$value["news_img"];?>" alt=""></div>
                        <?endforeach;?>
                        </div>

                    <div class="slider_arrows">
                        <a href="" class="arrow prev"></a>
                        <a href="" class="arrow next"></a>
                    </div>

                </div>

            </div>

            <div class="text_container">

                <h1><?=$data["title"];?></h1>
                <h2 class="date"><?=$data["date"];?></h2>
                <p><?=$data["Detailed_text"];?></p>

            </div>

        </div>

    </div>
</div>

<?$last_news_data = get_quary("SELECT*FROM news ORDER BY id DESC LIMIT 6", $connect);?>

<div class="wrapper" id="last_news_title">
    <div class="container">
        <h1>Последние новости:</h1>
    </div>
</div>

<div class="wrapper" id="all_news">
    <div class="container">
    
    <?foreach ($last_news_data as $key => $value):?>
        <?
            $value["Preview_text"] = mb_substr($value["Detailed_text"], 0, 64)."...";
            $value["date"] = date('d-m-Y', strtotime($value["date"]));
        ?>

        <div class="item">
            <a href="./detail_news.php?news_id=<?=$value["id"]?>" class="img_cont">
                <img src="/media/news_img/<?=$value["preview_img_href"];?>" alt="<?=$value["title"];?>">
            </a>
            <div class="text_cont">
                <a href="./detail_news.php?news_id=<?=$value["id"]?>"><?=$value["title"];?></a>
                <h2><?=$value["date"];?></h2>
                <p class="preview_text"><?=$value["Preview_text"];?></p>
            </div>
        </div>

    <?endforeach;?>

    </div>
</div>




<? require("./moduls/footer.php"); ?>
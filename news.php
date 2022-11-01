<? require("./moduls/header.php"); ?>
<? require("./moduls/bd_connect.php"); ?>

<?
    if (  isset( $_GET["page"] ) ){$pagination_page = $_GET["page"];} else{$pagination_page = 1;};

    $elements_on_page = 10; //кол-во элементов на странице
    $alldata = get_quary("SELECT*FROM news ORDER BY id DESC", $connect);
    $data=[];

    foreach ($alldata as $key => $value){
        if ( ($key+1 > ( ($pagination_page-1) * $elements_on_page)) && ($key+1 < ($pagination_page * $elements_on_page+1)) ){
            $data[] = $value;
        };
    };
?>
<div class="wrapper" id="all_news">
    <div class="container">

    <?foreach ($data as $key => $value):?>
        <?
            $value["Preview_text"] = substr($value["Detailed_text"], 0, 64)."...";
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

<div class="page_container pagination">
    <?$i=0; //отчет страниц начинается с первой
        $total_pages  = count($alldata) / $elements_on_page;
        $total_pages = ceil($total_pages);

        while ($i < $total_pages):?>
            <a href="/news.php?page=<?=$i+1?>" <?if($i+1==$pagination_page){echo 'class="active"';};?> ><?echo $i+1;?></a>
            <?$i=$i+1;?>
        <?endwhile;?>

</div>

<? require("./moduls/footer.php"); ?>
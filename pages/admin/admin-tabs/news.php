<?
    if (  isset( $_GET["page"] ) ){$pagination_page = $_GET["page"];} else{$pagination_page = 1;};
    $data = get_all_from_db("news", $connect); 
?>


<h1 class="tab_title">Новости</h1>

<div class="table">
    <ul class="row title">
        <li class="photo">Фото</li>
        <li class="title">Название новости</li>
        <li class="detail_text">Текст</li>
        <li class="ikons">
            <a href="" class="add_news"><img src="<?=SITE_DEFAULT_PATH?>/media/ikons/admin_pluss.svg" alt=""></a>
        </li>
    </ul>

    <?foreach ($data as $key => $value):?>
        <ul class="row news">
            <li class="photo">
                <img src="<?=SITE_DEFAULT_PATH."/media/news_img/".$value["preview_img_href"];?>" alt="">
            </li>
            <li class="title"><?=$value["title"];?></li>

            <?if ( strlen($value["Detailed_text"]) > 300 ){//обрезаем текст длинее 300 символов
                $value["Detailed_text"] = mb_strimwidth($value["Detailed_text"],0,300,"...");
            };?>


            <li class="detail_text"><?=$value["Detailed_text"];?></li>
            <li class="ikons">
                <a href="" class="edit_news"><img src="<?=SITE_DEFAULT_PATH?>/media/ikons/admin_edit.svg" alt=""></a>
                <a href="" data-news_id="<?=$value["id"];?>" class="delete_news"><img src="<?=SITE_DEFAULT_PATH?>/media/ikons/admin_delete.svg" alt=""></a>
            </li>
        </ul>
    <?endforeach;?>

</div>
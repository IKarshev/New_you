<?session_start();?>
<?require($_SERVER["DOCUMENT_ROOT"]."/moduls/bd_connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=SITE_DEFAULT_PATH?>/fonts/fonts.css">
    <link rel="stylesheet" href="./styles.css">
    <script src="<?=SITE_DEFAULT_PATH?>/js/lib/jquery.js"></script>
    <title>Админ-панель</title>
</head>
<body>
    <a href="" class="toggle_burger_menu"><img src="<?=SITE_DEFAULT_PATH?>/media/ikons/burger_menu.svg" alt=""></a>
    <a href="" class="black_bg"></a>
    <div class="left_column">
        <a href="" class="toggle_burger_menu"><img src="<?=SITE_DEFAULT_PATH?>/media/ikons/burger_menu.svg" alt=""></a>
        <a href="" class="logo"><img src="<?=SITE_DEFAULT_PATH?>/media/ikons/full_logo.svg" alt=""></a>
        <ul class="tab_menu"></ul>
        <div class="back_to_main">
            <a href="<?=SITE_DEFAULT_PATH?>">На главную страницу</a>
        </div>
    </div>
    <div class="main_field">

        <?//вывожу все табы для админ-панели
        $files = $files = array_diff( scandir($_SERVER['DOCUMENT_ROOT']."/pages/admin/admin-tabs/"), array('..', '.') );
        $files = array_values($files);
    
        ?>

        <?foreach( $files as $key => $value ):?>
            <?$tab_id = str_replace(".php","", $value );?>
            <div id="<?=$tab_id;?>" data-tab_id="<?echo $key+1;?>" class="tab <?if($key+1 == 1){echo "active";};?>">
                <?require("./admin-tabs/".$value);?>
            </div>
        <?endforeach;?>
        
    </div>
    <?//=============================POP_UP_BLOCK===============================================?>
    <div class="popups">

        <?require("./popups.php");?>

        
        <div class="popup_black_bg close_popup"><?//задний фон pop-up?>
            <a href="" class="close_popup">
                <img src="<?=SITE_DEFAULT_PATH."/media/ikons/"?>close_popup.svg" alt="">
            </a>
        </div>
    </div>




</body>
<script src="./index.js"></script>
</html>
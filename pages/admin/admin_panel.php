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
    <div class="left_column">
        <a href="" class="logo"><img src="<?=SITE_DEFAULT_PATH?>/media/ikons/full_logo.svg" alt=""></a>
        <ul class="tab_menu"></ul>

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




</body>
<script src="./index.js"></script>
</html>
<? session_start();?>
<?include($_SERVER["DOCUMENT_ROOT"]."/init.php");?>
<?include($_SERVER["DOCUMENT_ROOT"]."/moduls/bd_connect.php");?>
<?if ( $_SESSION["user"]["isadmin"] == "true" ):?>
    
    <?
    // UPLOUD FILES
    $uploadFileDir = $_SERVER['DOCUMENT_ROOT'].'/media/news_img/';
    if (isset($_FILES)){
        foreach ($_FILES as $key => $value) {
            foreach($value["name"] as $arkey => $arvalue){
                $move_file = move_uploaded_file( $value["tmp_name"][$arkey], $uploadFileDir.$value["name"][$arkey] );
                if ($move_file){
                    $images[] = $value["name"][$arkey];
                }
            };
        };
    };

    // CREATE NEWS-NOTE
    $Title = $_POST["title"];
    $Detaile_text = $_POST["main_text"];

    if ( isset($_POST["main_image_name"]) ){
        $main_image_name = $_POST["main_image_name"];
    } else{
        $main_image_name = $images[0];
    };

    $current_date = date('Y-m-d');
    $create_news= mysqli_query($connect, "INSERT INTO news (title, date, Detailed_text, preview_img_href) VALUES ('$Title', '$current_date' ,'$Detaile_text', '$main_image_name')") or die(mysqli_error($connect));

    // CREATE IMAGES-NOTE
    if (isset($images)){
        $last_record_id = get_quary( "SELECT id FROM news ORDER BY id DESC LIMIT 1", $connect)[0]["id"];
        foreach ($images as $key => $value) {
            if ($value != $main_image_name){mysqli_query($connect, "INSERT INTO news_imgs (news_id, news_img) VALUES ('$last_record_id', '$value')") or die(mysqli_error($connect));}
        };
    };

    ?>





<?else:echo "error";endif;?>

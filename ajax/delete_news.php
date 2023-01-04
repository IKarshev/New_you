<? session_start();?>
<?include($_SERVER["DOCUMENT_ROOT"]."/init.php");?>
<?include($_SERVER["DOCUMENT_ROOT"]."/moduls/bd_connect.php");?>
<?if ( $_SESSION["user"]["isadmin"] == "true" ):?>
    
    <?
    $delete_news = $_POST["news_id"];

    $query1 = "DELETE FROM news WHERE id = $delete_news";
    $query2 = "DELETE FROM news_imgs WHERE news_id = $delete_news";

    mysqli_query($connect, $query2) or die(mysqli_error($connect));
    mysqli_query($connect, $query1) or die(mysqli_error($connect));


    ?>





<?else:echo "error";endif;?>

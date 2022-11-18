<? session_start();?>
<?include($_SERVER["DOCUMENT_ROOT"]."/init.php");?>
<?if ( $_SESSION["user"]["isadmin"] != "true" ):?>
    <h1>Доступ запрещен, <a href="<?=SITE_DEFAULT_PATH?>/authorization/">авторизуйтесь</a></h1>
<?else:
include("./admin_panel.php");   
endif;?>

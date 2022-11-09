<?
include($_SERVER["DOCUMENT_ROOT"]."/init.php");
require($_SERVER["DOCUMENT_ROOT"]."/moduls/bd_connect.php");


$query = "SELECT * FROM Users WHERE Email = "."'".$_POST['Email']."'";
$result = get_quary($query, $connect);
echo json_encode($result);
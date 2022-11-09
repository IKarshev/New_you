<?
include($_SERVER["DOCUMENT_ROOT"]."/init.php");
require($_SERVER["DOCUMENT_ROOT"]."/moduls/bd_connect.php");


$query = "SELECT * FROM Users WHERE TelephoneNumber = ".$_POST['Phone_number'];
$result = get_quary($query, $connect);
echo json_encode($result);

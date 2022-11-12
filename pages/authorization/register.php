<?
include($_SERVER["DOCUMENT_ROOT"]."/init.php");
require($_SERVER["DOCUMENT_ROOT"]."/moduls/bd_connect.php");

$name=$_POST["name"];
$surname=$_POST["surname"];
$tel_number=$_POST["tel_number"];
$email=$_POST["email"];
$password=md5($_POST["password"]);


// Нужно написать доп валидацию на стороне сервера

$query = "INSERT INTO Users(UserName, `Surname`, TelephoneNumber, Email, UserPassword) VALUES('$name','$surname','$tel_number','$email','$password')";
mysqli_query($connect, $query) or die(mysqli_error($connect));

if(!$query){
    echo "error";
} else{
    echo "success";
}
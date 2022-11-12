<?
session_start();
include($_SERVER["DOCUMENT_ROOT"]."/init.php");
require($_SERVER["DOCUMENT_ROOT"]."/moduls/bd_connect.php");

$tel_number=$_POST["tel_number"];
$password=md5($_POST["password"]);

// Нужно написать доп валидацию на стороне сервера

$query = "SELECT UserName, Surname, TelephoneNumber, Email, UserPassword, Is_admin FROM Users WHERE TelephoneNumber = '$tel_number'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
$result = mysqli_fetch_array($result);


if ($result["UserPassword"] == $password){
    $_SESSION["user"] = [
        "UserName" => $result["UserName"],
        "Surname" => $result["Surname"],
        "TelephoneNumber" => $result["TelephoneNumber"],
        "Email" => $result["Email"],
        "Is_admin" => $result["Is_admin"],
    ];
    echo "success";
} else{
    echo "error";
};
<?
//SITE_DEFAULT_PATH
$isHttps = !empty($_SERVER['HTTPS']) && 'off' !== strtolower($_SERVER['HTTPS']);
$scheme = $isHttps ? "https" : "http";
define('SITE_DEFAULT_PATH', $scheme . '://' . $_SERVER['HTTP_HOST']);

function get_all_from_db($table_name, $connect){//выводит всё из таблицы, переданной в качестве аргумента
    $query = mysqli_query($connect, "SELECT*FROM $table_name") or die(mysqli_error($connect));
    for ($data = []; $row = mysqli_fetch_assoc($query); $data[] = $row);
    return $data;
}

function get_quary($query, $connect){//Вывод запроса
    $query = mysqli_query($connect, $query) or die(mysqli_error($connect));
    for ($data = []; $row = mysqli_fetch_assoc($query); $data[] = $row);
    return $data;
}
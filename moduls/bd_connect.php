<?php
	//Устанавливаем доступы к базе данных:
		$host = 'karshev13.beget.tech'; //имя хоста
		$user = 'karshev13_new_yo'; //имя пользователя (название БД)
		$password = 'Mrforki13052002-'; //пароль, по умолчанию пустой

        // Пароль для всех адресов: Mrforki13052002-
        // Пароль для localgost: new_you13052002-

		$db_name = 'karshev13_new_yo'; //имя базы данных

	//Соединяемся с базой данных используя наши доступы:
    $connect = mysqli_connect($host, $user, $password, $db_name);

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

?>
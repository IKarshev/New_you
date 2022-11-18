<?
    if (  isset( $_GET["page"] ) ){$pagination_page = $_GET["page"];} else{$pagination_page = 1;};
    $data = get_all_from_db("Users", $connect); 
?>


<h1 class="tab_title">Пользователи</h1>

<div class="table">
    <ul class="row title">
        <li class="id">Id</li>
        <li class="name">Имя</li>
        <li class="surname">Фамилия</li>
        <li class="tel_number">Номер телефона</li>
        <li class="email">Почта</li>
    </ul>

    <?foreach ($data as $key => $value):?>
        <ul class="row">
            <li class="mob_title">Id</li>
            <li class="id"><?=$value["UserID"];?></li>
            <li class="mob_title">Имя</li>
            <li class="name"><?=$value["UserName"];?></li>
            <li class="mob_title">Фамилия</li>
            <li class="surname"><?=$value["Surname"];?></li>
            <?$value["TelephoneNumber"] = sprintf("%s (%s) %s-%s-%s",
                substr($value["TelephoneNumber"], 0, 1),
                substr($value["TelephoneNumber"], 1, 3),
                substr($value["TelephoneNumber"], 4, 3),
                substr($value["TelephoneNumber"], 7, 2),
                substr($value["TelephoneNumber"], 9)
            );?>
            
            <li class="mob_title">Номер телефона</li>
            <li class="tel_number"><?=$value["TelephoneNumber"];?></li>

            <li class="mob_title">Почта</li>
            <?if ( $value["Email"] == "" ){$value["Email"] = "—";};?>
            <li class="email"><?=$value["Email"];?></li>
        </ul>
    <?endforeach;?>

</div>
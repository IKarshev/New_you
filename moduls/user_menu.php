<li><a href="">Профиль</a></li>

<?if( $_SESSION["user"]["isadmin"] == "true" ):?>
    <li><a href="/admin/">Админ-панель</a></li>
<?endif;?>

<li><a class="exit_profile" href="">Выйти из аккаунта</a></li>
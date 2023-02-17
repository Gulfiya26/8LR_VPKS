<?php

// подключение к базе данных
$mysql = new mysqli('localhost', 'root', '', 'petshouse');

// поддержка русских символов
mysqli_set_charset($mysql, 'utf8');

?>
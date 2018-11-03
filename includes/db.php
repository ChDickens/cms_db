<?php

$connection = mysqli_connect('localhost', 'root', '', 'cms');

if (!$connection) {
    echo "Соединение с БД не удалось";
}

?>
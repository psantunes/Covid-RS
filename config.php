<?php
    $connection = mysqli_connect("SERVIDOR", "LOGIN", "SENHA");
    mysqli_select_db($connection, "NOME DO BANCO");
    mysqli_set_charset($connection,'utf8');
?>
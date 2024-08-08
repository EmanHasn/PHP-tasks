<?php
    include_once("config.php");
    $user_id = $_GET["uid"];
    $query = "delete from users where id = $user_id";
    mysqli_query($connection, $query);
    header("Location: index.php");
?>
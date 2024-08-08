<?php
    include_once("config.php");
    // get the id of user
    // get the id from the URL 
    $user_id = $_GET["uid"]; // from url
//    echo $user_id;
    $query = "delete from students where id = $user_id";
    mysqli_query($connection, $query);
    header("Location: index.php");
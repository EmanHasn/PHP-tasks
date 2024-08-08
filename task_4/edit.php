<?php

        if(isset($_POST["btn"])){
            include_once("config.php");
            $id = $_GET["uid"]; // from url
            $name  = $_POST["name"]; // mona
            $email = $_POST["email"];
            $age = $_POST["age"]; // int
            $query  = "update students set name='$name', email='$email', age = $age where id = $id";
            mysqli_query($connection , $query);
            header("Location: index.php");
        }
        include_once("config.php");
        $id = $_GET["uid"];
        $query = "select * from students where id = $id";
        $data=  mysqli_query($connection,$query);
        $user_info = mysqli_fetch_assoc($data);
    // print_r($user_info);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit User</h1>
    <form  method="post">
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" 
                value=<?php echo $user_info["name"]  ?> >
            </td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="email" 
                value=<?php echo $user_info["email"]  ?>></td>
            </tr>
            <tr>
                <td>Age: </td>
                <td><input type="text" name="age" value=<?php echo $user_info["age"]  ?>></td>
            </tr>
            <tr>
                <td><input type="submit" name="btn"> </td>
            </tr>

        </table>
    </form>
</body>
</html>
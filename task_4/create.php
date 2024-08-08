<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Add User</h1>
    <form action="create.php" method="post">
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Age: </td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td><input type="submit" name="btn"> </td>
            </tr>

        </table>
    </form>
</body>
</html>

<?php 
        if(isset($_POST["btn"])){
            $name  = $_POST["name"]; 
            $email = $_POST["email"];
            $age = $_POST["age"]; 
            include_once("config.php");
            
          $query = "insert into students (name,email,age) values ('$name', '$email', $age)" ;

          mysqli_query($connection, $query); 

         header("Location: index.php");

        }
?>
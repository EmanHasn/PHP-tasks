<?php

        if(isset($_POST["btnEdit"])){
            include_once("config.php");
            $id = $_GET["uid"]; 
            $fname = $_POST["Name"];
            $email = $_POST["email"];
            $Room = $_POST['room'];
            $Ext = $_POST["Ext"];
            $password=$_POST["password"];
            $query  = "update users set name='$fname', email='$email', room = '$Room ', ext='$Ext'  where id = $id";
            mysqli_query($connection , $query);
            header("Location: index.php");
        }
        include_once("config.php");
        $id = $_GET["uid"];
        $query = "select * from users where id = $id";
        $data=  mysqli_query($connection,$query);
        $user_info = mysqli_fetch_assoc($data);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>create</title>
</head>
<body>
    <form method="post" id="dataForm" enctype="multipart/form-data"> 
    <table>
            <caption style="marign-bottom:20px"><h2>Edit User</h2></caption>
            <tr>
                <td>Name</td>
                <td><input type="text" name= "Name" value=<?php echo $user_info["name"]  ?>/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name= "email" value=<?php echo $user_info["email"]  ?>/></td>
            </tr>
            
            <tr>
                <td> password</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td> confirm password</td>
                <td><input type="password" name="confirm_password" /></td>
            </tr>
            <tr>
                <td>Room No. </td>
                <td>
                <select for="room" name="room">room
                    <option value="Select Room" value=<?php echo $user_info["room"]  ?>>Select Room</option>
                    <option value="Application1" value=<?php echo $user_info["room"]  ?>>Application1</option>
                    <option value="Application2" value=<?php echo $user_info["room"]  ?>>Application2</option>
                    <option value="cloud" value=<?php echo $user_info["room"]  ?>>cloud</option>
                </select>
                </td>
            </tr>
            <tr>
                <td> Ext.</td>
                <td><input type="text" name="Ext" value=<?php echo $user_info["ext"]  ?>/></td>
            </tr>
            <tr>
                <td> Profile picture</td>
                <td><input type="file" name="photo"/></td>
            </tr>
           
            <tr>
                <td></td>
                <td><input type="submit" name="btnEdit" value="submit" style="padding:10px;"/>
                    <input type="reset" name="btnRest" value="reset" style="padding:10px;"/>
                </td>
            </tr>
        </table>

    </form>
</body>
</html>

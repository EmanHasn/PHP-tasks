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
    <form action="index.php" method="post" id="dataForm" enctype="multipart/form-data"> 
    <table>
            <caption style="marign-bottom:20px"><h2>Add User</h2></caption>
            <tr>
                <td>Name</td>
                <td><input type="text" name= "Name"/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name= "email"/></td>
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
                    <option value="Select Room" default>Select Room</option>
                    <option value="Application1">Application1</option>
                    <option value="Application2" >Application2</option>
                    <option value="cloud">cloud</option>
                </select>
                </td>
            </tr>
            <tr>
                <td> Ext.</td>
                <td><input type="text" name="Ext"/></td>
            </tr>
            <tr>
                <td> Profile picture</td>
                <td><input type="file" name="photo"/></td>
            </tr>
           
            <tr>
                <td></td>
                <td><input type="submit" name="btnSubmit" value="submit" style="padding:10px;"/>
                    <input type="reset" name="btnRest" value="reset" style="padding:10px;"/>
                </td>
            </tr>
        </table>

    </form>
</body>
</html>

<?php 
        if(isset($_POST["btnSubmit"])){
            $fname = $_POST["Name"];
            $email = $_POST["email"];
            $Room = $_POST['room'];
            $Ext = $_POST["Ext"];
            $password=$_POST["password"];
            
            include_once("config.php");
            
          $query = "insert into users (name,email,room,ext) values ('$fname', '$email','$Room','$Ext')" ;

          mysqli_query($connection, $query); 

         header("Location: index.php");

        }
?>
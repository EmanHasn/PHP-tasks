<?php 
    include_once("config.php"); 
    $query = "select * from students";
    $data = mysqli_query($connection, $query); // data 
    
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
    <center> 
        <a href="create.php">Add User</a>
        <table border="1" >
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>age</th>
                <th>Delete User</th>
                <th>Edit User</th>
            </tr>
                <?php 
                    while($info = mysqli_fetch_assoc($data)){
                       echo "<tr>";
                       echo "<td>".$info["name"]."</td>";
                       echo "<td>".$info["email"]."</td>"; 
                       echo "<td>".$info["age"]."</td>";
                       echo "<td><a href='delete.php?uid=$info[id]'> 
                       Delete </a></td>";
                       echo "<td><a href='edit.php?uid=$info[id]'> Edit </a></td>";

                       echo "</tr>";
                    }
                ?>
        </table>
    </center>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="done.php" method="post" id="dataForm"> 
        <table>
            <tr>
                <td>first Name</td>
                <td><input type="text" name= "fname"/></td>
            </tr>
            <tr>
                <td>last Name</td>
                <td><input type="text" name= "lname"/></td>
            </tr>
            <tr>
                <td> <label>Address</label></td>
                <td>
                <input type ="text" name="Address" ></input>
                 </td>
            </tr>
            <tr>
                <td>Country </td>
                <td>
                <select for="country" name="country">Country
                    <option value="Select Country" default>Select Country</option>
                    <option value="cairo">cairo</option>
                    <option value="suez" >suez</option>
                    <option value="benisuef">benisuef</option>
                </select>
                </td>
            </tr>
            <tr>
                <td> Gender</td>
                <td>
                    <input type="radio" name="gender" value="male" /> male
                    <input type="radio" name="gender" value="female"/> female
                </td>
            </tr>
            <tr>
                <td> Skills</td>
                <td>
                    <input type="checkbox" name="skills[]" value="php" /> php
                    <input type="checkbox" name="skills[]" value="j2es"/> j2es
                    <input type="checkbox" name="skills[]" value="mySQL" /> mySQL
                    <input type="checkbox" name="skills[]" value="postgreeSQL"/> postgreeSQL
                </td>
            </tr>
            <tr>
                <td> username</td>
                <td><input type="text" name="username" /></td>
            </tr>
            <tr>
                <td> password</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td> department</td>
                <td><input type="text" name="department" placeholder="Open Source"/></td>
            </tr>
            <tr>
                <?php
                $x = "0123456789abcdefghigklmnopqrstxuvwyzABCDFEGHIGKLMNOPQRSXZYU";
                $textCode= substr(str_shuffle($x),53,strlen($x));
                echo "<td>insert this code <input name='textCode' value='$textCode' type='text' style='color:red;'></input></td>"
                ?>
                <td><input type="text" name="code"/></td>
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
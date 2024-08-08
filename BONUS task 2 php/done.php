<?php 
 $mybtn =  $_POST["btnSubmit"];
    if(isset($mybtn)){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $Address = $_POST["Address"];
        $country = $_POST['country'];
        $username = $_POST["username"];
        $department = $_POST["department"];
        $gender = $_POST["gender"];
        $skills = $_POST['skills'];
        $password=md5($_POST["password"]);
        $textCode = $_POST['textCode'];
        $code = $_POST["code"];
        
        if(empty($fname)  
        || empty($lname) || empty($country) || empty($username) || empty($department) || empty($code) || empty($gender))
        {
                echo "<h2 style='color:red;'>insert all data</h2>";

        
        }
        else
        {
        if($textCode===$code)
        {
                if($gender == "male")
            {
                echo "<h2 style='color:blue;'>thank you Mr ".$fname." ".$lname."<br> <br> </h2>";
            }
            else
            {
                echo "<h2 style='color:blue;'>thank you Miss ".$fname." ".$lname."<br> <br> </h2>"; 
            }
            echo "Name: ".$fname."<br>";
            echo "Address: ".$Address."<br>";
            echo "your skills: ";
        

                foreach($skills as $skill)
            {
                echo $skill."<br>";
            }
            echo "password: ".$password."<br>";
            echo "department: ".$department."<br>";
            echo "<h2>data from file</h2>";
            $info = array('name: '=>$fname." ".$lname, 'address: '=> $Address, 'Skills: '=>$skills);
            
            file_put_contents("formsData.txt",print_r($info, true),FILE_APPEND);
            echo "<br> read data from file: ";
            print_r( file_get_contents("formsData.txt"));
            }
            else{
                echo "no validation completed";
            }
        }
          
        

                

    }
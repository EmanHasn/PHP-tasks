<?php 
 $mybtn =  $_POST["btnSubmit"]; 
    if(isset($mybtn)){
        $fname = $_POST["Name"];
        $email = $_POST["email"];
        $Room = $_POST['room'];
        $Ext = $_POST["Ext"];
        $password=$_POST["password"];
        
        if(empty($fname)  || empty($email) || empty($Room) || empty($Ext) )
        {
                echo "<h2 style='color:red;'>insert all data</h2>";
        }
        else
        {        
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                //Bonus password matching
                $patternPass = "/^[a-z_]{8}$/" ; //asd_fghk
                if (preg_match($patternPass, $password)){
                 echo "thank you password";
                }else{
                    header("Location:error.php");
                exit;
                    echo "<h2 style='color:red;'>please enter valid password</h2>";
                 }
                //upload image
                $uploadingFile = $_FILES["photo"]; 
                $file_name =  $uploadingFile["name"];
                $file_size = $uploadingFile["size"];
                $file_tem_path = $uploadingFile["tmp_name"];
                $my_array = explode(".", $file_name); 
               
                $my_ext = end($my_array);
               
                $my_ext = strtolower($my_ext);
                $valid_ext = ["png", "jpg", "jpeg","svg"];
                if(in_array($my_ext,$valid_ext )){
                                 
                       
                    
                    $myfile = fopen("userInfo.txt", "a");
                    $myphoto = time().$file_name."\n";
                    echo "<h2 style='color:red;'>thank you your data is uploaded <br><br></h2>";
               
                        $info = array('name: '=>$fname." ",'email'=>$email, 'room'=>$Room,  'photo: '=>$myphoto);
            
                        file_put_contents("userInfo.txt",print_r($info, true),FILE_APPEND);
                        echo "<br> read data from file: ";
                        print_r( file_get_contents("userInfo.txt"));
                    move_uploaded_file($file_tem_path, "img/".time().$file_name);
                 
                }else{
                    echo "<p style='color: red'> please upload valid image </p>";
                   
                }
            }else{
                echo "<h2 style='color:red;'>please enter valid email</h2>";
                header("Location:error.php");
                exit;
            }
            //another way to check email
            //  $pattern = "/^[a-zA-Z0-9. _-]+@[a-zA-Z0-9. -]+\. [a-zA-Z]{2,4}$/" ;
            // if (preg_match($pattern, $email)){
            //  echo "thank you";
            // }else{
            //     echo "<h2 style='color:red;'>please enter valid email</h2>";
            //  }
        }          
    }
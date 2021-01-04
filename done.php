<?php
    $your_name=$_POST['your_name'];
    $your_email=$_POST['your_email'];
    $your_pass=$_POST['give_password'];
   


    if(!empty($your_pass) && !empty($your_email) && !empty($your_name)){
        $db = mysqli_connect("localhost","root","","login_demo");
        $sql_query = "select * from demo_login where name = '$your_name' and  email ='$your_email' and Password='$your_pass'";
        $start = mysqli_query($db,$sql_query);

        $output = mysqli_num_rows($start);
        if($output>0)
        {
            echo " login successfull ";
        }
        else{
            echo " login  not successfull ";
        }
    }
    else{
        echo "Please  give all  Info ";
    }
  
?>
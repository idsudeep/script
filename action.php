<?php 

require_once 'config.php';
echo "<pre>";

 if($_GET['form']=='register'){

    $fname = $_POST['fname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "insert into user_log (name ,contact ,email , password) values ('$fname','$contact','$email','$pass')";


    if(mysqli_query($conn,$query)){

      
        header("location:user_log.php");

        echo "Account Created";
          
    }else{
        echo "error check the Database server.";
    }
 
}

if($_GET['form']=='edit_user'){

    
    print_r($_POST);
    die();
    
    $id = $_POST['userid'];
    $fname = $_POST['fname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $pass = $_POST['password'];


    

    // $query = "insert into user_log (name ,contact ,email , password) values ('$fname','$contact','$email','$pass')";


    
    

    if(mysqli_query($conn,$query)){

      
        header("location:user_log.php");

        echo "Account Created";
          
    }else{
        echo "error check the Database server.";
    }
 
}





?>
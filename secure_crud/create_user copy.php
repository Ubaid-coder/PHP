<?php
    require_once 'db.php';
    require_once 'csrf.php';

    if(!verifyToken($_POST['csrf_token'] ?? '')){
        die('Invalid token');
    }

   $name = trim($_POST['name'] ?? '');
   $email = trim($_POST['email'] ?? '');

   if($name == '' || $email == '' || !filter_var($email, FILTER_VALIDATE_EMAIL)){
       die('All fields are required');
       }
    
       try{
        $smtp = $pdo -> prepare('INSERT INTO employee(username, useremail) VALUES(:name, :email)');
        $smtp -> execute(['name'=>$name, 'email'=> $email]);
        echo '<script>alert("User Added Successfully"); window.location.href = "home.php"</script>';
       }catch(Exception $e){
        if($e -> getCode() == 23000){
            echo "<script>alert('Email already exists'); window.location.href= 'error.php'</script>";
        }else{
            echo "<script>alert('somethig went wrong'); window.location.href= 'error.php'</script>";
        }
       }

?>
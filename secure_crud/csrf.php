<?php
session_start();

// Generate Token
function generateToken(){
    if(empty($_SESSION['csrf_token'])){
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['csrf_token'];
}


// Verirfy Token
function verifyToken($token){
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token); //For token verification
}

?>


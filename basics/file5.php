<?php
    $name = 'ubaid';
    $password = 123;
    $email = 'ubaidgmail.com';

    $salary = 50000;
    $tax = 20/100;
    $taxAmount = $salary*$tax;

    if(($email == 'ubaid@gmail.com' || $name == 'ubaid') && $password == 123 ){
        echo 'Welcome back: Your salary'.$salary.'<br>Tax percentage: 20%<br> Text amount: <span style="color:red;">-'.$taxAmount.'<span>';
    }else{
        echo 'Invalid credentails';
    }



?>
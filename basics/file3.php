<?php 
 $firstName = 'muhammd';
 $lastName = 'ubaid'; 

 $fullname = 'Welcome '.$firstName.' '.$lastName;
  $password = 'ubaid';
  
  if($password == 'ubaid'){
    echo 'Allowed<br>';
    echo $fullname;
  }else{
    echo 'not allowed';
  }

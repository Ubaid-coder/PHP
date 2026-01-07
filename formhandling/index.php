
<?php 
if(isset($_POST['register'])){
    
$name = $_POST['username'];
$email = $_POST['useremail'];
$password = $_POST['userpassword'];

echo $name.'<br>'.$email.'<br>',$password.'<br>';

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <label for="">Name:</label>
        <input type="text" name="username">

        <label for="">Email:</label>
        <input type="text" name="useremail">

        <label for="">Password:</label>
        <input type="text" name="userpassword">

        <button type="submit" name="register">Submit</button>

    </form>



</body>
</html>
<?php
$user = "Ubaid";
 $age = 16;
 $collegeGoing = "yes";

$user2 = "Rahim";
 $age2 = 20;
 $collegeGoing2 = "no";

$user3 = "Ashar";
 $age3 = 25;
 $collegeGoing3 = "no";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        } table{
            width: 800px;
            padding: 2px;
           
        }
    </style>
</head>
<body>
    <mark></mark>
    <input type="text" value="<?php echo $user="rahim" ?>">
    <input type="text" value="<?php echo $age ?>">
    <input type="text" value="<?php echo $collegeGoing ?>">

    <table border>
       
    <tr>
        <th>Username</th>
        <th>Age</th>
        <th>CollegeGoing</th>
    </tr>

  <tr>
    <td><?php echo $user?></td>
    <td><?php echo $age?></td>
    <td><?php echo $collegeGoing?></td>
    
  </tr>

  <tr>
    <td><?php echo $user2?></td>
    <td><?php echo $age2?></td>
    <td><?php echo $collegeGoing2?></td>
    
  </tr>

  <tr>
    <td><?php echo $user3?></td>
    <td><?php echo $age3?></td>
    <td><?php echo $collegeGoing3?></td>
    
  </tr>

       
    </table>

    <script>

    </script>
</body>
</html>


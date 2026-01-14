<?php
require_once 'db.php';
require_once 'csrf.php';

try{
    $stmt = $pdo -> query('SELECT * FROM employee ORDER BY created_at DESC');
    $users = $stmt -> fetchAll(PDO::FETCH_ASSOC);
   
}catch(PDOException $e){
    die("Database query failed: ". $e -> getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css" />
    
</head>
<body>

    <div class="dashboard">
        <!-- Header -->
        <header class="dashboard-header">
            <h1>User Dashboard</h1>
            <a href="signup.php"><button class="add-user-btn">+ Add New User</button></a>
        </header>

        <!-- Users Table -->
        <section class="content">
            <table class="users-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($users)>0):?>
                        <?php foreach ($users as $user): ?>
                        <tr>
                        <td><?=  htmlspecialchars($user['id']) ?></td>
                        <td><?=  htmlspecialchars($user['username']) ?></td>
                        <td><?=  htmlspecialchars($user['useremail']) ?></td>
                        <td><?=  htmlspecialchars($user['created_at']) ?></td>
                        <td><button class="modify-user-btn">Edit</button></td>
                        <td><button class="delete-user-btn">Delte</button></td>
                    <?php endforeach; ?>
                    <?php else:?>
                    <h1>No user Added</h1>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
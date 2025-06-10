<?php
 require_once 'functions.php';
 $length = isset($_GET['length']) ? (int)$_GET['length'] : 0;

 if ($length < 0) {
     header('Location: index.php');
 } 

 $password = generateStrongPassword($length);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Your Generated Password</h1>
    <p><?php echo htmlspecialchars($password); ?></p>
</body>
</html>
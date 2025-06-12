<?php
 require_once 'functions.php';

 $length = $_POST['length'];
 $user_name = $_POST['user_name'];

 $_SESSION['user_name'] = $user_name;

 $filter = [
     'include_special' => isset($_POST['include_special']) ? $_POST['include_special'] : 'false',
     'include_numbers' => isset($_POST['include_numbers']) ? $_POST['include_numbers'] : 'false',
     'include_uppercase' => isset($_POST['include_uppercase']) ? $_POST['include_uppercase'] : 'false',
     'include_lowercase' => isset($_POST['include_lowercase']) ? $_POST['include_lowercase'] : 'false'
 ];

 $password = generateStrongPassword($length,$filter);
 if($password === 'Error: No character set selected. Please select at least one character type.') {
     header('Location: index.php');
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="bg-success-subtle">
    <div class="container text-center mt-5 bg-success p-4 rounded text-primary-emphasis">
        <h1 class="mb-5"><?php echo $user_name ?>'s Generated Password</h1>
        <p class="mt-3"><?php echo htmlspecialchars($password) ?></p>
    </div>
</body>
</html>
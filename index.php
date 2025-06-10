<?php 

require_once 'functions.php';


$length = isset($_GET['length']) ? $_GET['length'] : 0; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<section>
    <h1>GENERATE PASSWORD</h1>
    <?php isset($password) && print('<p>Your generated password is: <strong>' . htmlspecialchars($password) . '</strong></p>'); ?>
    <form method="get" action="result.php">
        <label for="length">Password Length (min 8 - max 64):</label>
        <input type="number" id="length" name="length" value=<?php echo $length; ?> min="8" max="64">
        <button type="submit">Generate</button>
    </form>
</section>
    
</body>
</html>
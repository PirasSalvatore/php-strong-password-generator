<?php 

require_once './functions.php';

$user_name = isset($_SESSION['user_name']) ? trim($_SESSION['user_name']) : 'Guest';

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
    <div class="container text-center mt-5">
        <section>
            <h1 class="mb-5">GENERATE PASSWORD</h1>

            <h3 class ="mb-4">Hello <?php echo $user_name; ?>, choose your password configuration</h3>

            <form method="POST" action="result.php" class="bg-success p-4 rounded mx-auto text-primary-emphasis">
                <div class="row mb-3">
                    <div class="col">
                        <label for="length" class="form-label">Password Length (min 2 - max 64):</label>
                        <input type="number" id="length" name="length" class="form-control form-control-sm w-50 mx-auto"
                            value=""
                            min="2" max="64"
                            required
                        />
                    </div>
                    <div class="col">
                        <label for="user_name" class="form-label">Username (min 3 - max 64):</label>
                        <input type="text" id="user_name" name="user_name" class="form-control form-control-sm w-50 mx-auto"
                            value=""
                            minlength="3" maxlength="64"
                            required
                        />
                    </div>
                </div>
                <div class="mb-3">
                    <label for="include_special" class="form-label">Include Special Characters:</label>
                    <input type="checkbox" id="include_special" name="include_special" value="true" checked>
                </div>
                <div class="mb-3">
                    <label for="include_numbers" class="form-label">Include Numbers:</label>
                    <input type="checkbox" id="include_numbers" name="include_numbers" value="true" checked>
                </div>
                <div class="mb-3">
                    <label for="include_uppercase" class="form-label">Include Uppercase Letters:</label>
                    <input type="checkbox" id="include_uppercase" name="include_uppercase" value="true" checked>
                </div>
                <div class="mb-3">
                    <label for="include_lowercase" class="form-label">Include Lowercase Letters:</label>
                    <input type="checkbox" id="include_lowercase" name="include_lowercase" value="true" checked>
                </div>
                <button type="submit" class="btn btn-primary">Generate</button>
            </form>
        </section>

    </div>
</body>

</html>
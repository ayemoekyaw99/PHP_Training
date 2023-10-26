<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<link rel="stylesheet" href="./css/reset.css">
<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container">
        <h1>Age Calculator</h1>
        <form action="" method="post">
            <label for="birthdate">Enter your birthdate:</label>
            <input type="date" id="birthdate" name="birthdate" value="" required>
            <input type="submit" value="Calculate">
        </form>
</div>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $birthdate = $_POST['birthdate'];

        $currentDate = new DateTime();
        $birthDate = new DateTime($birthdate);
        $age = $currentDate->diff($birthDate)->y;

        //echo "<p>Your age is: $age years</p>";
        echo $age;
    }
    ?>
</body>
</html>
<?php
session_start();

// Retrieve values
$name = isset($_COOKIE["user_name"]) ? $_COOKIE["user_name"] : "No name stored.";
$dob = isset($_SESSION["user_dob"]) ? $_SESSION["user_dob"] : "No date of birth stored.";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Display Page</title>
</head>
<body>

<h1>The Name in the Cookie is: <?php echo htmlspecialchars($name); ?></h1>

<h1>The Birthdate in the Session is: <?php echo htmlspecialchars($dob); ?></h1>

<br>
<a href="data_entry.php">Back to Data Entry Page</a>

</body>
</html>
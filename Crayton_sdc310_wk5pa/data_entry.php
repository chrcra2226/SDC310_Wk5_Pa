<?php
session_start();

// Initialize variables
$name = "";
$dob = "";

// If form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Store Name in cookie (expires in 30 days)
    if (!empty($_POST["name"])) {
        setcookie("user_name", $_POST["name"], time() + (86400 * 30), "/");
        $name = $_POST["name"];
    }

    // Store Date of Birth in session
    if (!empty($_POST["dob"])) {
        $_SESSION["user_dob"] = $_POST["dob"];
        $dob = $_POST["dob"];
    }
}

// Retrieve stored values (if they exist)
if (isset($_COOKIE["user_name"])) {
    $name = $_COOKIE["user_name"];
}

if (isset($_SESSION["user_dob"])) {
    $dob = $_SESSION["user_dob"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Entry Page</title>
</head>
<body>

<h2>Store your name in a cookie and birthdate in the Session</h2>

<form method="post" action="data_entry.php">
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br><br>

    <label>Date of Birth:</label>
    <input type="text" name="dob" value="<?php echo htmlspecialchars($dob); ?>"><br><br>

    <input type="submit" value="Submit">
</form>

<br>
<a href="data_display.php">Show Data Design Page</a>

</body>
</html>
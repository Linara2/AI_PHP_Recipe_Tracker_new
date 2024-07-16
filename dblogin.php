<?php
session_start();


$uname = $_POST['email'];
$pass = $_POST['pass'];
if ($uname == "admin@gmail.com" && ($pass) == "admin2024") {
    $_SESSION['adminloggedin'] = true;
    header('Location:usersList.php');
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipe_php";

$conn = new mysqli($servername, $username, $password, $dbname);
$stmt = $conn->prepare("SELECT * FROM user WHERE email = ?");
$stmt->bind_param("s", $uname);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    // Verify the password
    if ($user['Password']===$pass) {
        // Redirect to the desired page
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid password
        header("Location: login.php?error");
        exit();
    }
} else {
    // Invalid email or user does not exist
    header("Location: login.php?error");
    exit();
}

// Close the database connection
$stmt->close();
$conn->close();

?>
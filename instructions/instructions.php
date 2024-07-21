<?php
    session_start();
    if (!isset($_SESSION['userloggedin'])) {
        header("Location: ../login.php");
        exit();
    }
?>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "recipe_php";
        
        // Create a connection to the database
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Check if the form is submitted
        
            // Get the form data
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $instruction = $_POST["instruction"];
            $myrecipes = $_GET["myrecipes"];
            $cdate=$_GET["cdate"];


            // Prepare and execute the SQL query to insert the data into the "instructionss" table
            $stmt = $conn->prepare("INSERT INTO instructionss (instructions,recipeName) VALUES (?, ?)");
            $stmt->bind_param("ss", $instruction, $myrecipes);
        
            // Check if the insertion was successful
            if ($stmt->execute()) {
                header("Location: index.php?myrecipes=".$myrecipes . "&cdate=" . $cdate . "");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
        
            // Close the statement and connection
            $stmt->close();
            $conn->close();
        }

        if(isset($_GET['delid'])){
            $delid = $_GET['delid'];
            $conn = new mysqli($servername, $username, $password, $dbname);
            $sql = "DELETE FROM instructionss WHERE itemId = '$delid'";
            $conn->query($sql);
            $conn->close();
            header('Location: index.php?deleted');
            exit();
        }
        ?>
        
<?php
    session_start();
    if (!isset($_SESSION['userloggedin'])) {
        header("Location: ../login.php");
        exit();
    }
?>

<?php
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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the form data
            $recipeName = $_POST["recipeName"];
            $ingredients = $_POST["ingredients"];
            $source = $_POST["source"];
            

            $email = $_SESSION["userloggedin"];
        
            // Prepare and execute the SQL query to insert the data into the "my_recipe" table
            $stmt = $conn->prepare("INSERT INTO my_recipe (recipeName, ingredients, source, email) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $recipeName, $ingredients, $source, $email);
        
            // Check if the insertion was successful
            if ($stmt->execute()) {
                header('Location: index.php?inserted');
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
            $sql = "DELETE FROM my_recipe WHERE recipeName = '$delid'";
            $conn->query($sql);
            $conn->close();
            header('Location: index.php?deleted');
            exit();
        }
        ?>
        
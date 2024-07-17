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
            $description = $_POST["description"];
            $instructions = $_POST["instructions"];
            $calories = $_POST["calories"];
            

            if(isset($_POST['email'])){
                $email = $_POST['email'];
            }else{
                $email = "admin@gmail.com";
            }
        
            // Prepare and execute the SQL query to insert the data into the "recipe" table
            $stmt = $conn->prepare("INSERT INTO recipe (recipeName, description, instructions, calories, email) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $recipeName, $description, $instructions, $calories, $email);
        
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
        ?>
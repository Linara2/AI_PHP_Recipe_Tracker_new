<?php
    session_start();
    if (!isset($_SESSION['adminloggedin'])) {
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        function togglePassword() {
            var passwordCells = document.getElementsByClassName("password-cell");
            for (var i = 0; i < passwordCells.length; i++) {
                passwordCells[i].classList.toggle("d-none");
            }
        }
    </script>
    <style>
        .hero-text {
            text-align: center;
            color: #333;
            font-size: 5rem;
            margin-top: 10vh;
            font-weight: 100; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="hero-text mb-4">Users</h1>
        <table class="table mt-5 table-striped">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th onclick="togglePassword()">Password (Click to show/hide)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Establish a connection to the database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "recipe_php";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                
                $sql = "SELECT FullName, Username, Email, Password FROM user";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class=p-3>" . $row["FullName"] . "</td>";
                        echo "<td class=p-3>" . $row["Username"] . "</td>";
                        echo "<td class=p-3>" . $row["Email"] . "</td>";
                        echo "<td class='password-cell d-none'>" . $row["Password"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No data available.</td></tr>";
                }

                // Close the connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
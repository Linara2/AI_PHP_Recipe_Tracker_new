<?php
    session_start();
    if (!isset($_SESSION['userloggedin'])) {
        header("Location: ../login.php");
        exit();
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bon Appétit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/faviocns/site.webmanifest">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.html">Bon Appétit</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 20px;">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" style="color: lightgray; margin-right: 20px; font-size: 18px;" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" style="color: lightgray; margin-left: -5px; font-size: 18px;" href="../dashboard.php">Dashboard</a>
              </li>
            </ul>
            <form class="d-flex me-md-4" role="search">
              <a class="btn btn-outline-danger btn-logout" href="../logout.php">Logout</a>
            </form>
          </div>
        </div>
      </nav>

      <style>
        body{
          background-color: black;
        }
        .btn-logout{
          width: 140px;
        }
        .navbar-brand{
          font-weight:800;
          background: linear-gradient(to right, #e18ea1, #961600);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          font-size: 30px;
        }
        .form-control {
          text-align: center;
        }
        .form-container{
          border: 1px solid rgb(0, 0, 0);
          padding: 20px;
          border-radius: 10px;
  
        }
        .form-row {
          display: flex;
          justify-content: center;
          align-items: center;
          gap: 20px;
        }
        .form-row .col {
          flex: 1;
        }
        .form-row .col input {
          width: 100%;
        }
        .form-row .col label {
            font-weight: bold;
        }
        .form-row .col:last-child {
          flex: 0 0 auto;
          margin-top: 10px;
        }
        .form-row .btn{
            margin-top: 10px;
        }
        .alert {
        margin-top: 260px;
        max-width: 300px;
        padding: 10px;
        font-size: 14px;
        position: absolute;
        top: 0;
        right: 20px;
        }
        .modal-custom {
            top: 30%;
        }
        .position-absolute {
          position: absolute;
          top: 130px; 
          right: 2px; 
          transform: translateX(-10%); 
        }
      </style>
      
      <div class="container-md text-center mt-5" style="max-width: 1000px;">
      <h1 class="fw-bold mb-3" style="color: darkred; font-weight: bold; text-shadow: 0 0 2px rgba(255, 0, 0, 0.3), 0 0 3px rgba(255, 0, 0, 0.3), 0 0 3px rgba(255, 0, 0, 0.1);">Adventure of Delicacies👨‍🍳</h1>
        <form action="" method="GET" class="row row-cols-lg-auto g-2 align-items-center position-absolute">
         <div class="col-12">
          <label class="visually-hidden" for="inlineFormInputGroupUsername">Search</label>
          <div class="input-group">
            
            <div class="input-group-text">🔍</div>
            <input type="text" name="search" class="form-control" id="inlineFormInputGroupUsername" placeholder="Search">
         </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-outline-danger">Search</button>
        </div>
        </form>
        <div id="alertBox" class="alert alert-success d-none" role="alert">
        New recipe has been added!
        </div>
        <form id="recipeForm" action="dbrecipe.php" method="POST">
            <div class="form-row mt-5">
                <div class="col-2">
                    <label for="recipeName" class="sr-only" style="font-weight: bold; margin-top: 25px; color:lightgray; margin-bottom:15px">Recipe Name</label>
                    <input type="text" id="recipeName" name="recipeName" class="form-control border-danger" placeholder="Recipe Name" required>
                </div>
                <div class="col-3">
                    <label for="description" class="sr-only" style="font-weight: bold; margin-top: 25px; color:lightgray; margin-bottom:15px">Description</label>
                    <input type="text" id="description" name="description" class="form-control border-danger" placeholder="Description" required>
                </div>
                <div class="col-3">
                    <label for="instructions" class="sr-only" style="font-weight: bold; margin-top: 25px; color:lightgray; margin-bottom:15px">Instructions</label>
                    <input type="text" id="instructions" name="instructions" class="form-control border-danger" placeholder="Instructions" required>
                </div>
                <div class="col-2">
                    <label for="calories" class="sr-only" style="font-weight: bold; margin-top: 25px; color:lightgray; margin-bottom:15px">Calories</label>
                    <input type="text" id="calories" name="calories" class="form-control border-danger" placeholder="Calories" required>
                </div>
                <div class="col mt-5">
                    <button type="submit" class="btn btn-outline-danger">Add Recipe</button>
                </div>
                
                
            </div>
        </form>
        <table class="table table-striped border-dark mt-5 mb-5">
        <thead class="table-danger">
                <tr>
                    <th>Date Created</th>
                    <th>Recipe Name</th>
                    <th>Description</th>
                    <th>Instructions</th>
                    <th>Calories</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Establish a connection to the database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "recipe_php";
                $email=$_SESSION['userloggedin'];

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                

                if(isset($_GET['search'])){
                  $search=$_GET['search'];
                  if($search==''){
                    $sql = "SELECT id, createdDate,recipeName, description, instructions, calories FROM recipe WHERE email='$email' ORDER BY createdDate DESC";
                  }
                  $sql = "SELECT id, createdDate,recipeName, description, instructions, calories FROM recipe WHERE email='$email' AND recipeName LIKE '%$search%' ORDER BY createdDate DESC";
                }else{
                  $sql = "SELECT id, createdDate,recipeName, description, instructions, calories FROM recipe WHERE email='$email' ORDER BY createdDate DESC";
                }
                
                $result = $conn->query($sql);

                if ($result) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class=p-3>" . $row["createdDate"] . "</td>";
                        echo "<td class=p-3>" . $row["recipeName"] . "</td>";
                        echo "<td class=p-3>" . $row["description"] . "</td>";
                        echo "<td class=p-3>" . $row["instructions"] . "</td>";
                        echo "<td class=p-3>" . $row["calories"] . "</td>";
                        echo "<td class='p-3'> <button class='btn btn-danger' onclick='confirmDelete(" . $row["id"] . ")'>Delete</button> </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No data available.</td></tr>";
                }

                // Close the connection
                $conn->close();
                ?>
            </tbody>
        </table>
        </div>

        <div class="modal fade modal-custom" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    Are you sure you want to delete this recipe?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Yes</button>
                </div>
            </div>
        </div>
    </div>       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      document.getElementById('recipeForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Gather form data
        const formData = new FormData(this);

        // Send form data using AJAX
        fetch('dbrecipe.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.text())
        .then(data => {
          // Show the alert box
          const alertBox = document.getElementById('alertBox');
          alertBox.classList.remove('d-none');

          // Optionally, hide the alert box after a few seconds
          setTimeout(() => {
            alertBox.classList.add('d-none');
            location.reload();
          }, 2000);
        })
        .catch(error => console.error('Error:', error));
      });
      let deleteId;
      function confirmDelete(id) {
        deleteId = id;
        const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
        confirmationModal.show();
      }

      document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
        window.location.href = 'dbrecipe.php?delid=' + deleteId;
      });

      document.getElementById('searchInput').addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        const rows = document.querySelectorAll('#recipeTableBody tr');

        rows.forEach(row => {
          const recipeName = row.cells[1].textContent.toLowerCase();
          const description = row.cells[2].textContent.toLowerCase();

          if (recipeName.includes(searchTerm) || description.includes(searchTerm)) {
            row.style.display = '';
          } else {
            row.style.display = 'none';
          }
        });
      });
    </script>
  </body>
</html>
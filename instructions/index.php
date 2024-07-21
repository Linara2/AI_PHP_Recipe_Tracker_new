<?php
    session_start();
    if (!isset($_SESSION['userloggedin'])) {
        header("Location: ../login.php");
        exit();
    }
    if(isset($_GET['myrecipes']) && isset($_GET['cdate'])){
      $lname=$_GET['myrecipes'];
      $cdate=$_GET['cdate'];
    }else{
      header("Location: ../myrecipe/index.php");
      exit;
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
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../dashboard.php">Dashboard</a>
              </li>
            </ul>
            <form class="d-flex me-md-4" role="search">
              <a class="btn btn-outline-danger btn-logout" href="../logout.php">Logout</a>
            </form>
          </div>
        </div>
      </nav>

      <style>
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
        h1{
          color: black;
          font-size: 50px;
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
      
      <div class="container-md text-center mt-5" style="max-width: 900px;">
        <h1 class="fw-bold" class="mb-4 mt-2"><?php echo ($lname); ?><br/></h1>
        <span class="text-secondary fs-3 mt-0 pt-0"><?php echo ($cdate); ?></span>
        <form action="" method="GET" class="row row-cols-lg-auto g-2 align-items-center position-absolute">
         <div class="col-12">
          <label class="visually-hidden" for="inlineFormInputGroupUsername">Search</label>
          <div class="input-group">
            
            <div class="input-group-text">🔍</div>
            <input type="text" name="search" class="form-control" id="inlineFormInputGroupUsername" placeholder="Search">
         </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-outline-dark">Search</button>
        </div> 
        </form>
        <div id="alertBox" class="alert alert-success d-none" role="alert">
        New recipe has been added!
        </div>
        <form id="recipeForm" action="instructions.php?myrecipes=<?php echo ($lname); ?>&cdate=<?php echo ($cdate); ?>" method="POST">
            <div class="form-row mt-4">
                <div class="col-8">
                    <label for="instructions" class="sr-only">Instruction</label>
                    <input type="text" id="instructions" name="instruction" class="form-control" placeholder="Add your instructions" required>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-outline-success">Add Instruction</button>
                </div>

            </div>
        </form>
        <div style="text-align: left">
        <ul class="list-group">
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
                    $sql = "SELECT itemId, instructions, status FROM instructionss WHERE recipeName='$lname'";
                  }
                  $sql = "SELECT itemId, instructions, status FROM instructionss WHERE email='$email' AND instructions LIKE '%$search%' ";
                }else{
                  $sql = "SELECT itemId, instructions, status FROM instructionss WHERE recipeName='$lname'";
                }
                
                $result = $conn->query($sql);

                if ($result) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                      echo('<li class="list-group-item fs-6">
                        <input class="form-check-input me-1" type="checkbox" value="" id="'.$row['itemId'].'">
                        <label class="form-check-label stretched-link" for="'.$row['itemId'].'">'.$row["instructions"].'</label>
                      ');
                       echo "<a class='btn btn-outline-danger btn-sm float-end' href="."instructions.php?delid=".$row["itemId"].">Delete</a></li>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No data available.</td></tr>";
                }

                // Close the connection
                $conn->close();
                ?>
        </ul>
        </div>
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
  </body>
</html>
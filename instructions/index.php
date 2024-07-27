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
        .video-background {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 110%;
          object-fit: cover;
          z-index: -1;
          border-radius: 10px;
        }
        </style>
      
      <div class="container">
        <video autoplay muted loop class="video-background">
          <source src="../designs/images/recipe/test4.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      
      <div class="container-md text-center mt-5" style="max-width: 900px;">
        <h1 class="fw-bold" class="mb-4" style="color: #bfacac; font-family: 'Times New Roman', Times, serif; font-weight: bold; text-shadow: 0 0 2px rgba(255, 0, 0, 0.3), 0 0 2px rgba(255, 0, 0, 0.3), 0 0 2px rgba(255, 0, 0, 0.1); margin-top: -22px;"><?php echo ($lname); ?><br/></h1>
        <span class="text-secondary fs-3 mt-0 pt-0" style="font-weight: bold;"><?php echo ($cdate); ?></span>
        <form action="" method="GET" class="row row-cols-lg-auto g-2 align-items-center position-absolute">
         <div class="col-12">
          <label class="visually-hidden" for="inlineFormInputGroupUsername">Search</label>
         </div>
        </form>
        <div id="alertBox" class="alert alert-success d-none" role="alert">
        New recipe has been added!
        </div>
        <form id="recipeForm" action="instructions.php?myrecipes=<?php echo ($lname); ?>&cdate=<?php echo ($cdate); ?>" method="POST">
            <div class="form-row" style="margin-top: -10px;">
                <div class="col-8">
                    <label for="instructions" class="sr-only" style="font-weight: bold; margin-top: 40px; color:lightgray; margin-bottom:15px">Instruction</label>
                    <input type="text" id="instructions" name="instruction" class="form-control border-danger" placeholder="Add your instructions" required>
                </div>
                <div class="col" style="margin-top: 70px;">
                    <button type="submit" class="btn btn-outline-danger">Add Instruction</button>
                </div>

            </div>
        </form>
        <div style="text-align: left">
        <ul class="list-group" style="margin-top: 30px;">
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
                      <input class="form-check-input me-1" type="checkbox" value="" id="' . $row['itemId'] . '" onchange="updateStatus(' . $row['itemId'] . ')"' . ($row['status'] == '1' ? ' checked' : '') . '/>
                      <label class="form-check-label ' . ($row['status'] == '1' ? 'text-decoration-line-through' : '') . '" for="' . $row['itemId'] . '">' . $row["instructions"] . '</label>
                      ');
                       echo "<a class='btn btn-danger btn-sm float-end' href="."instructions.php?delid=".$row["itemId"]."&myrecipes=".$lname."&cdate=".$cdate.">Delete</a></li>";
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
    </div>
    
    <script>
      function updateStatus(itemId) {
        
        // Get the checkbox element
        var checkbox = document.getElementById(itemId);

        // Get the label element
        var label = document.querySelector(`label[for="${itemId}"]`);

        // Check if the checkbox is checked
        if (checkbox.checked) {
        // Add the strike-through class to the label
        label.classList.add('text-decoration-line-through');
        } else {
        // Remove the strike-through class from the label
        label.classList.remove('text-decoration-line-through');
        }

        var xhr = new XMLHttpRequest();
            xhr.open('POST', 'instructionupdate.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Handle the response from the server
                    var response = xhr.responseText;
                    console.log(response);
                }
            };
            xhr.send('itemId=' + itemId);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
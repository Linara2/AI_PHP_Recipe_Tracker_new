<?php
    session_start();
    if (!isset($_SESSION['userloggedin'])) {
        header("Location: login.php");
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
          <a class="navbar-brand" href="index.php">Bon Appétit</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 20px;">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" style="color: lightgray; margin-right: 20px; font-size: 18px;" href="index.php">Home</a>
              </li>
            </ul>
            <form class="d-flex me-md-4" role="search">
              <a class="btn btn-outline-danger btn-logout" href="logout.php">Logout</a>
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
        .container {
          max-width: 600px;
          margin-top: 50px;
          text-align: center;
        }
        h6{
          color: rgb(124, 132, 177);
          font-size: medium;
        }
        .form-control {
          text-align: center;
        }
        .form-container{
          border: 1px solid rgb(0, 0, 0);
          padding: 20px;
          border-radius: 10px;
          z-index: 2;
        }
        .video-background {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          object-fit: cover;
          z-index: -1;
          border-radius: 10px;
        }
        .card-container {
          display: flex;
          justify-content: center;
          gap: 30px;
          flex-wrap: wrap;
        }
        .card {
          width: 14rem;
          border: 3px solid black;
          background-color: #cfbfbf;
        }
      </style>
    
    <div class="container">
        <video autoplay muted loop class="video-background">
          <source src="designs\images\recipe\test7.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
    <div class="container-md text-center mt-5" style="max-width: 600px;">
      <h1 class="fw-bold" class="mb-3" style="color: lightgray; font-weight: bold; text-shadow: 0 0 2px rgba(255, 0, 0, 0.3), 0 0 3px rgba(255, 0, 0, 0.3), 0 0 3px rgba(255, 0, 0, 0.1);">Culinary Delights Await: Dive into Bon Appétit</h1>
      </div>
    </div>
    
    <div class="d-flex justify-content-center mt-5">
      <div class="card-container">
    <div class="card p-4 rounded-5 mt-5" style="width: 14rem; border: 3px solid black;">
      <a href="recipe/index.php">
        <img src="designs/images/cookbooks.gif" class="card-img-top" alt="...">
      </a>
        <div class="card-body text-center">
            <h5 class="card-title fw-bold" style="font-size: 1.5rem; margin-top: 15px; color: darkred;">Add Recipe</h5>
        </div>
    </div>
    <div class="card p-4 rounded-5 mt-5" style="width: 14rem; border: 3px solid black; margin-left: 100px;">
        <a href="myrecipe/index.php">
            <img src="designs/images/chefs.gif" class="card-img-top" alt="...">
        </a>
        <div class="card-body text-center">
            <h5 class="card-title fw-bold" style="font-size: 1.5rem; margin-top: 15px; color: darkred;">My Recipes</h5>
        </div>
    </div>
    <div class="card p-4 rounded-5 mt-5" style="width: 14rem; border: 3px solid black; margin-left: 100px;">
      <a href="quickrecipes/index.php">
        <img src="designs/images/cooksss.gif" class="card-img-top" alt="...">
      </a>
        <div class="card-body text-center">
            <h5 class="card-title fw-bold" style="font-size: 1.5rem; margin-top: 15px; color: darkred;">Quick Recipe</h5>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
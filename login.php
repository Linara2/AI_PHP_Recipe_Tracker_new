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
    <?php
    include_once("nav-common.php");
    ?>

      <style>
        body{
          background-color: red;
        }
        .container {
          max-width: 470px;
          margin-top: 90px;
          text-align: center;
          background-color: lightblue;
          border-radius: 10px;
          padding: 20px;
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
        }
      </style>
      
      <div class="container">
       <div class="form-container">
        <h1 class="fw-bold" class="mb-3">Bon Appétit Register</h1>
        <h6 class="fst-italic" class="mb-5">Doesn't have an account? Create an account and start your Recipe Road</h6>
        <form action="dblogin.php" method="POST">
            <div class="mb-3">
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
            </div>
            <div class="mb-3">
              <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-outline-success">Login</button>
            <p class="mt-3">Doesn't have an account yet? <a href="register.php">Sign Up</a></p>
          </form>
          <?php
            if(isset($_GET['error'])) {
              echo('
                <div id="alertbox" class="alert alert-danger mt-3" role="alert">
                  Username or Password is incorrect
                </div>');
            }
          ?>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
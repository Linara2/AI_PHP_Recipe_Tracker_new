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
      .body {
      font-family: Arial, sans-serif;
    }
    .container {
      max-width: 100%;
      margin: 0 auto;
      padding: 20px;
    }
    .homepage {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      background-color: #7d0000;
      height: 800px;
      padding: 40px 0;
    }
    .feature {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      background-color: #7d0000;
      padding: 40px 0;
    }
    .title {
      font-weight: bolder;
      color: #fbf7f7;
      margin-bottom: 70px;
    }
    h2{
      font-weight: bolder;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    h3{
      color: lightslategrey;
      font-family: Georgia, 'Times New Roman', Times, serif;
      font-weight: bold;
    }
    .image-container {
      margin-top: 2px;
      position: relative;
      width: 100%;
      height: 100%;
      overflow: hidden;
      margin-bottom: 2px;
    }
    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    /*the parapgraph in the cover page*/
    .content {
      position:absolute;
      top: 15%;
      left: 50%;
      transform: translateX(-90%);
      text-align: left;
      color: bisque;
      margin-bottom: 80px;      
    }
    .buttons {
      margin-top: 1rem;
      margin-top: 190px;
    }
    .buttonss {
      margin-left: 20px;
    }
    .features-section, .recipes-section {
      background-color: black;
      padding: 40px 0;
      text-align: center;
    }
    .features-section h2{
      font-size: 3.2rem;
      margin-top: 40px;
      margin-bottom: 30px;
      color: #29293d;/*recipes heading*/
    }
    .recipes-section h2 {
      font-size: 3.2rem;
      margin-top: -5px;
      margin-bottom: 30px;
      color: #29293d;/*recipes heading*/
    }
    .feature-carousel {
      display: flex;
      overflow-x: scroll;
      padding: 20px;
      margin-left: 20px;
      width: 100%;
      scroll-snap-type: x mandatory;
    }
    .feature-image {
    width: 100px; /* Adjust the width value to your desired size */
    height: auto;
    object-fit: cover; /* or object-fit: contain */
    }
    .feature-carousel::-webkit-scrollbar {
      width: 0;
      background: transparent;
    }
    .feature-item {
      flex-shrink: 0;
      scroll-snap-align: start;
      flex: 0 0 auto;
      width: 350px;
      height: 330px;
      margin-right: 24px;
      padding: 35px;
      color: #ffffff;/*letters inside the card*/
      border-radius: 20px;
      text-align: center;
    }
    .feature-item i {
      font-size: 2rem;
      margin-bottom: 10px;
    }
    .recipe-card {
      width: 100%;
      height: 90%;
      margin: 20px;
      padding: 20px;
      margin-left: 20px;
      margin-top: 20px;
      background-color: #680000;
      margin-left: 20px;
      }
      .card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
      }
      .recipe-card:hover .card-inner {
        transform: rotateY(180deg);
      }
      .card-front, .card-back {
        position: absolute;
        width: 100%;
        backface-visibility: hidden;
        border-radius: 0.25rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
      .card-front {
        background-color: #680000;
        
        color: lightcyan;
        padding-top: 10px;
      }
      .card-front img {
        width: 80%;
        border-radius: 0.25rem 0.25rem 0 0;
      }
      .card-back {
        position: relative;
        background-color: #680000;
        color: lightcyan;
        transform: rotateY(180deg);
        padding: 10px;
      }
      
                        
    </style>

      <div class="homepage">
        <div class="image-container">
          <img src="designs\images\food.jpg" alt="Homepage image">
        <div class="content">
          <h1 class="title">Homecook Book - better than an expensive cookery book</h1>
          <p>Unleash a world of variety culinary recipes and unleah your inner chef the easy way<br> with Bon Appétit. Keep track of all your favorite recipes, create shopping lists, and<br> discover new culinary delights. Start your cooking journey today!</p>
          <div class="buttons d-grid gap-4 d-md-flex justify-content">
            <a href="register.php" class="btn btn-outline-danger">Create an account</a>
            <a href="login.php" class=" buttonss btn btn-outline-danger">Already Registered?Login</a>
          </div>
        </div>
        </div>
      </div>
      <div class="features-section">
        <h2>Features</h2>
        <div class="feature-carousel">
          <div class="feature-item" style="background: linear-gradient(to bottom, #b30000, #4d0000);">
              <i class="bi bi-book"></i>
              <img src="designs\images\output.gif" alt="Feature 2" class="feature-image">
              <h3>Discover New Recipes</h3>
              <p>What recipe are you looking for today?Explore new culinary delights by title and ingredients.</p>
          </div>
          <div class="feature-item" style="background: linear-gradient(to bottom, #b30000, #4d0000);">
              <i class="bi bi-pencil-square"></i>
              <img src="designs\images\onlines.gif" alt="Feature 2" class="feature-image">
              <h3>Add Your Own Recipes</h3>
              <p>Keep track of your favorite recipes by adding them to your collection.</p>
          </div>
          <div class="feature-item" style="background: linear-gradient(to bottom, #b30000, #4d0000);">
              <i class="bi bi-search"></i>
              <img src="designs\images\chef.gif" alt="Feature 2" class="feature-image">
              <h3>View Recipe Details</h3>
              <p>View detailed information about your favorite recipes from your collection.</p>
          </div>
          <div class="feature-item" style="background: linear-gradient(to bottom, #b30000, #4d0000);">
              <i class="bi bi-book"></i>
              <img src="designs\images\burger.gif" alt="Feature 2" class="feature-image">
              <h3>Remove Recipes From Collection</h3>
              <p>Remove recipes from your cookbok that are are no longer needed.</p>
          </div>
          <div class="feature-item" style="background: linear-gradient(to bottom, #b30000, #4d0000);">
              <i class="bi bi-book"></i>
              <img src="designs\images\video.gif" alt="Feature 2" class="feature-image">
              <h3>Watch Recipe Videos</h3>
              <p>Watch video tutorials on how to prepare your favorite recipes through the URL you have added.</p>
          </div>
          <div class="feature-item" style="background: linear-gradient(to bottom, #b30000, #4d0000);">
              <i class="bi bi-book"></i>
              <img src="designs\images\tests.gif" alt="Feature 2" class="feature-image">
              <h3>Add Instructions To Recipes</h3>
              <p>Add your steps to your favorite recipes to make them easier to follow and remember.</p>
          </div>
          <div class="feature-item" style="background: linear-gradient(to bottom, #b30000, #4d0000);">
              <i class="bi bi-book"></i>
              <img src="designs\images\checker.gif" alt="Feature 2" class="feature-image">
              <h3>Mark Instructions As Completed</h3>
              <p>Tick off your intsructions once completed, for you to keep track of your progress.</p>
          </div>
        </div>
    </div>
      
    <div class="recipes-section">
      <h2>Latest Recipes</h2>
      <div class="row justify-content-center">
      <div class="col-lg-2 col-md-4 col-sm-6 mb-lg-8 mb-md-6 mb-sm-4" style="margin-left: -30px;">
      <div class="card recipe-card" style="box-shadow: 0 0 15px rgba(255, 255, 255, 0.6);">
            <div class="card-inner">
              <div class="card-front">
                <img src="designs/images/salad.png" alt="Recipe 1">
                <h3 style="margin-top: 30px;">Caprese Salad</h3>
              </div>
              <div class="card-back">
                <p style="color: #c5bfbf;">Ingredients: Tomatoes, Mozarela Cheese, Basil, Salt, Pepper
                <p>Slice the mozzarella and tomatoes into thin rounds.
                    Arrange them alternately on a plate with basil leaves.
                    Season with salt and pepper to taste.</p>
                <a href="dashboard.php" class="btn btn-dark btn-lg view-recipe-button" style="position: relative; overflow: hidden; border: none; outline: none; box-shadow: 0 0 10px rgba(255, 255, 255, 0.5); font-size: 15px; padding: 4px 13px;">
                  <span style="position: relative; z-index: 1;">View More...</span>
                  <span style="position: absolute; top: -5px; left: -5px; right: -5px; bottom: -5px; background: rgba(255, 255, 255, 0.5); filter: blur(10px); transform: scale(0.5); z-index: -1;"></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-lg-8 mb-md-6 mb-sm-4" style="margin-left: 70px;">
          <div class="card recipe-card" style="box-shadow: 0 0 15px rgba(255, 255, 255, 0.6);">
            <div class="card-inner">
              <div class="card-front">
                <img src="designs/images/sandwich.png" alt="Recipe 2">
                <h3 style="margin-top: 30px;">Cheese Quesadilla</h3>
              </div>
              <div class="card-back">
                <p style="color: #c5bfbf;">Ingredients: 2 flour tortillas, 1 cup cheese
                <p>Place one tortilla in the skillet, sprinkle with cheese, and top with the second tortilla. Cook until the cheese is melted and the tortillas are golden brown.</p>
                <a href="dashboard.php" class="btn btn-dark btn-lg view-recipe-button" style="position: relative; overflow: hidden; border: none; outline: none; box-shadow: 0 0 10px rgba(255, 255, 255, 0.5); font-size: 15px; padding: 4px 13px;">
                  <span style="position: relative; z-index: 1;">View More...</span>
                  <span style="position: absolute; top: -5px; left: -5px; right: -5px; bottom: -5px; background: rgba(255, 255, 255, 0.5); filter: blur(10px); transform: scale(0.5); z-index: -1;"></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-lg-8 mb-md-6 mb-sm-4" style="margin-left: 70px;">
          <div class="card recipe-card" style="box-shadow: 0 0 15px rgba(255, 255, 255, 0.6);">
            <div class="card-inner">
              <div class="card-front">
                <img src="designs/images/ice-cream.png" alt="Recipe 3">
                <h3 style="margin-top: 30px;">Fruit and Yogurt Parfait</h3>
              </div>
              <div class="card-back">
                <p style="color: #c5bfbf;">Ingredients: Granola, Breek Yogurt, Mixed Berries (strawberries, blueberries, raspberries)</p>
                <p>Layer yogurt, granola, and berries in a glass or bowl. Repeat the layers. Drizzle with honey if desired.</p>
                <a href="dashboard.php" class="btn btn-dark btn-lg view-recipe-button" style="position: relative; overflow: hidden; border: none; outline: none; box-shadow: 0 0 10px rgba(255, 255, 255, 0.5); font-size: 15px; padding: 4px 13px;">
                  <span style="position: relative; z-index: 1;">View More...</span>
                  <span style="position: absolute; top: -5px; left: -5px; right: -5px; bottom: -5px; background: rgba(255, 255, 255, 0.5); filter: blur(10px); transform: scale(0.5); z-index: -1;"></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-lg-8 mb-md-6 mb-sm-4" style="margin-left: 70px;">
          <div class="card recipe-card" style="box-shadow: 0 0 15px rgba(255, 255, 255, 0.6);">
            <div class="card-inner">
              <div class="card-front">
                <img src="designs/images/fruit.png" alt="Recipe 4">
                <h3 style="margin-top: 30px;">Mini Caprese Skewers</h3>
              </div>
              <div class="card-back">
                <p style="color: #c5bfbf;">Ingredients: Cheese, Tomatoes, Mozzarella balls, Mushrooms</p>
                <p>Thread a cherry tomato, mozzarella ball, and mushroom onto a skewer. Put skewers on a plate and serve. </p>
                <a href="dashboard.php" class="btn btn-dark btn-lg view-recipe-button" style="position: relative; overflow: hidden; border: none; outline: none; box-shadow: 0 0 10px rgba(255, 255, 255, 0.5); font-size: 15px; padding: 4px 13px;">
                  <span style="position: relative; z-index: 1;">View More...</span>
                  <span style="position: absolute; top: -5px; left: -5px; right: -5px; bottom: -5px; background: rgba(255, 255, 255, 0.5); filter: blur(10px); transform: scale(0.5); z-index: -1;"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>

  </body>
</html>
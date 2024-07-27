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
    .recipe-card {
      position: relative;
      width: 100%;
      height: 450px;
      margin-bottom: 30px;
      padding: 10px;
      margin-top: 20px;
      background-color: #680000;
      margin-left: 4px;
      overflow: hidden;
      }
      .row {
      margin-bottom: 30px;
      }
      .card-inner {
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
        height: 100%;
        backface-visibility: hidden;
        border-radius: 0.25rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: hidden;
      }
      .card-front {
        background-color: #680000;
        color: lightcyan;
        padding-top: 10px;
      }
      .card-front img {
        width: 70%;
        border-radius: 0.25rem 0.25rem 0 0;
      }
      .card-back {
        position: relative;
        background-color: #680000;
        color: lightcyan;
        transform: rotateY(180deg);
        padding: 10px;
        justify-content:flex-start;
        align-items:normal;
      }
        .scrollable-content {
        height: 400px; 
        overflow: auto; 
        scrollbar-width: none; 
        -ms-overflow-style: none; 
        }

      .scrollable-content::-webkit-scrollbar {
        display: none; 
      }

    </style>

<div class="container mt-4">
    <div class="recipes-section">
        <h2 class="mb-4" style="font-size: 50px; margin-top: 60px; font-weight: 700; color: #ffffff;">Latest Recipes</h2>
        <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card recipe-card" style="box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);">
            <div class="card-inner">
            <div class="card-front">
                <h3 style="margin-top: 1px; font-weight: 800; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #bdbbbb;">Avocado Toast</h3>
                <img src="../designs/images/avocadotoast.png" alt="Recipe 1" style="margin-top: 25px;">
            </div>
            <div class="card-back">
                <p style="color: #c5bfbf; margin-top: 30px;">Ingredients: 1 ripe Avocado, 1-2 slices of bread, 1 clove garlic (optional), 1 Egg, Red pepper flakes,  Salt, Pepper</p>
                <p>1. Toast the bread.</br>2. Cut the avocado into small slices.</br>3. Fry an egg on a pan and season it as you like.</br>4. Rub garlic on toast (optional), then spread avocado on top and add egg on the top.</br>5.Season with salt, pepper, and red pepper flakes.</p>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card recipe-card" style="box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);">
            <div class="card-inner">
            <div class="card-front">
                <h3 style="margin-top: 1px; font-weight: 800; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #bdbbbb;">Chicken Stir-Fry</h3>
                <img src="../designs/images/stirfry.png" alt="Recipe 1" style="margin-top: 25px;">
            </div>
            <div class="card-back">
                <p style="color: #c5bfbf; margin-top: 10px;">Ingredients: 2 boneless chicken breasts cut into cubes, 2 cups mixed vegetables, 2 tbsp soy sauce, 1 tbsp olive oil, 1 clove garlic, minced and Cooked rice or noodles.</p>
                <p>1. Mix the chicken with pepper, salt and minced garlic and marinate it for an hour.</br>2. Cook chicken in olive oil until done.</br>3. Add garlic and vegetables; cook until tender.</br>4. Stir in soy sauce and then added cooked rice or noodles.</br>5.Serve hot and yummy.</p>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card recipe-card" style="box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);">
            <div class="card-inner">
            <div class="card-front">
                <h3 style="margin-top: 1px; font-weight: 800; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #bdbbbb;">Garlic Butter Shrimp</h3>
                <img src="../designs/images/prawns.png" alt="Recipe 1" style="margin-top: 25px;">
            </div>
            <div class="card-back">
                <p style="color: #c5bfbf; margin-top: 70px;">Ingredients: 1 lb large shrimp,  4 tbsp butter,  3 cloves garlic minced,  1 tbsp lemon juice,  Fresh parsley (optional),  Salt and pepper</p>
                <p>1. Melt butter and cook garlic until fragrant.</br>2. Add shrimp; cook until pink.</br>3. Stir in lemon juice. Season with salt, pepper, and parsley if desired.</br>4. Serve immediately. </p>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card recipe-card" style="box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);">
            <div class="card-inner">
            <div class="card-front">
                <h3 style="margin-top: 1px; font-weight: 800; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #bdbbbb;">Pumpkin soup</h3>
                <img src="../designs/images/food.png" alt="Recipe 1" style="margin-top: 25px;">
            </div>
            <div class="card-back scrollable-content">
                <p style="color: #c5bfbf; margin-top: 30px;">Ingredients: 2 tbsp Olive Oil, 1 onion, finely chopped, 1 leek, white part only, 1 chopped garlic clove, 1kg peeled pumpkin, peeled, 1L chicken or vegetable stock,  1/2 cup (125ml) thin cream, pepper and salt</p>
                <p>1. Heat oil in a large saucepan over low heat, add onion and leek and cook for 2-3 minutes, until softened.</br>2. Add garlic and chopped onions and cook for 30 seconds.</br>3. Add pumpkin and chicken/vegetable stock and bring to the boil. Turn heat to low, cover and simmer for 30 minutes.</br>4. Allow to cool slightly, then blend it in your blender until it turns to puree.</br>5. Return soup to pan, stir through cream and reheat gently and add salt, pepper to your taste. </p>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card recipe-card" style="box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);">
            <div class="card-inner">
            <div class="card-front">
                <h3 style="margin-top: 1px; font-weight: 800; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #bdbbbb;">Chicken Quesadillas</h3>
                <img src="../designs/images/quesadilla.png" alt="Recipe 1" style="margin-top: 25px;">
            </div>
            <div class="card-back scrollable-content">
                <p style="color: #c5bfbf; margin-top: 30px;">Ingredients: 2 large tortillas, 1 cup cooked chicken shredded, 1 cup shredded cheese (cheddar or Monterey Jack), 1/2 cup salsa, 1 tablespoon olive oil</p>
                <p>1. Heat olive oil in a skillet over medium heat.</br>2. Place one tortilla in the skillet and sprinkle half of the cheese over it.</br>3. Add the shredded chicken and a few spoonfuls of salsa.</br>4. Top with the remaining cheese and place the second tortilla on top.</br>5. Cook until the bottom tortilla is golden brown, then carefully flip and cook the other side.</br>6. Slice into wedges and serve. </p>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card recipe-card" style="box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);">
            <div class="card-inner">
            <div class="card-front">
                <h3 style="margin-top: 1px; font-weight: 800; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #bdbbbb;">Simple Fried Rice</h3>
                <img src="../designs/images/friedrice.png" alt="Recipe 1" style="margin-top: 25px;">
            </div>
            <div class="card-back">
                <p style="color: #c5bfbf; margin-top: 20px;">2 cups cooked rice, 1 cup mixed vegetables (carrots,leek),  2 eggs, beaten,  2 tablespoons soy sauce,  1 tablespoon vegetable oil.</p>
                <p>1. Heat oil in a large skillet over medium-high heat.</br>2. Add mixed vegetables and cook until tender.</br>3. Push the vegetables to one side of the skillet and pour beaten eggs into the other side. Scramble the eggs until cooked.</br>4. Add the cooked rice and soy sauce. Stir to combine and heat through. Serve hot.</p>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card recipe-card" style="box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);">
            <div class="card-inner">
            <div class="card-front">
                <h3 style="margin-top: 1px; font-weight: 800; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #bdbbbb;">Banoffee milkshake</h3>
                <img src="../designs/images/milkshake.png" alt="Recipe 1" style="margin-top: 25px;">
            </div>
            <div class="card-back scrollable-content">
                <p style="color: #c5bfbf; margin-top: 30px;">Ingredients: 1 tsp vegetable oil, 1 tbsp popping corn, 1/3 cup caramel sauce, 100g dark chocolate melted, 2 ripe bananas, 2 scoops vanilla ice-cream, 1 1/2 cups milk, Canned whipped cream to serve,  to decorate 20g dark eating chocolate grated.</p>
                <p>1. Heat oil in a saucepan over high heat. Add popping corn. Cook, covered shaking pan, for 3-4 minutes or until popping sound stops.</br> 2. Remove from heat. Sprinkle with salt and add 1 tablespoon of caramel sauce. Stir to coat. Set aside to cool.</br>3. Pour melted chocolate down inside a glass.</br>4. Blend banana, ice-cream, milk and 2 tablespoons caramel sauce until smooth and frothy. Pour into prepared glasses.</br>5. Top with whipped cream. Sprinkle over grated chocolate and serve.</p>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card recipe-card" style="box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);">
            <div class="card-inner">
            <div class="card-front">
                <h3 style="margin-top: 1px; font-weight: 800; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #bdbbbb;">Homemade Pizza</h3>
                <img src="../designs/images/pizza.png" alt="Recipe 1" style="margin-top: 25px;">
            </div>
            <div class="card-back scrollable-content">
                <p style="color: #c5bfbf; margin-top: 30px;">Ingredients: 1 cup warm water, 1 (.25 ounce) package active dry yeast, 1 teaspoon white sugar, 2 ½ cups flour, 2 tablespoons olive oil, 1 teaspoon salt, grated cheese, toppings(chicken, sausages, vegetables) you like.</p>
                <p>1. Place warm water in a bowl; add yeast and sugar. Mix and let stand until creamy, about 10 minutes.</br>2. Add flour, oil, and salt to the yeast mixture; beat with your hand or mixer till the dough turns smooth. Let it rest for 20 minutes.</br>3. Flat out the dough into a thin circle and spread crust with sauce and toppings of your choice. .</br>4. Bake in the preheated oven at 450 degrees F (230 degrees C) until golden brown, 15 to 20 minutes.</br></p>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card recipe-card" style="box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);">
            <div class="card-inner">
            <div class="card-front">
                <h3 style="margin-top: 1px; font-weight: 800; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #bdbbbb;">Egg Muffins</h3>
                <img src="../designs/images/muffin.png" alt="Recipe 1" style="margin-top: 25px;">
            </div>
            <div class="card-back">
                <p style="color: #c5bfbf; margin-top: 20px;">Ingredients: 6 large eggs, 1/2 cup milk, 1 cup diced vegetables (bell peppers, spinach, tomatoes), 1/2 cup shredded cheeseof your choice, Salt and pepper to taste</p>
                <p>1. Preheat oven to 375°F (190°C).</br>2. In a bowl, whisk together eggs and milk. Season with salt and pepper.</br>3. Stir in diced vegetables and cheese.</br>4. Pour the mixture into greased muffin tin cups and bake for 20-25 minutes until set.</br>5. Let cool slightly before removing from the tin.</p>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card recipe-card" style="box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);">
            <div class="card-inner">
            <div class="card-front">
                <h3 style="margin-top: 1px; font-weight: 800; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #bdbbbb;">Spaghetti Napolitan</h3>
                <img src="../designs/images/spaghetti.png" alt="Recipe 1" style="margin-top: 25px;">
            </div>
            <div class="card-back scrollable-content">
                <p style="color: #c5bfbf; margin-top: 30px;">Ingredients: 220 grams spaghetti, 1/4 cup olive oil, 120g boiled chicken, 70g green pepper cut into slices, 70g sliced onions, 1tbsp buuter, 2 tsp soy sauce and ketchup, 1/2 tsp black pepper and salt</p>
                <p>1. Cook spaghetti according to directions in the package</br>2. Heat olive oil in a frying pan, add onions and chicken and fry over medium heat.</br>3. Add the green peppers, and when the pasta has about a minute left to go, add the ketchup, along with a ladle of boiling liquid from the pasta.</br>4. Add the soy sauce, butter, and black pepper and stir this together to emulsify the butter.</br>5.When the spaghetti is done, add it to the sauce and finish cooking it in the sauce. If the noodles start sticking together, add more of the pasta's boiling liquid to loosen the sauce. Serve with grated cheese.</p>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card recipe-card" style="box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);">
            <div class="card-inner">
            <div class="card-front">
                <h3 style="margin-top: 1px; font-weight: 800; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #bdbbbb;">Classic Hamburger</h3>
                <img src="../designs/images/fastfood.png" alt="Recipe 1" style="margin-top: 25px;">
            </div>
            <div class="card-back scrollable-content">
                <p style="color: #c5bfbf; margin-top: 30px;">Ingredients: 1 lb (450g) ground beef, Salt and pepper to taste, 4 hamburger buns, Lettuce, tomato, onion, pickles (optional toppings), 4 slices of cheese, Ketchup, mustard, mayonnaise</p>
                <p>1. Season ground beef with salt and pepper.</br>2. Divide the beef into 4 equal portions and shape into patties.</br>3. Preheat a grill or skillet over medium-high heat.</br>4. Cook patties for 4-5 minutes per side, or until desired doneness.</br>5.Add cheese slices on top of patties during the last minute if using.</br>6. oast hamburger buns on the grill or skillet for 1-2 minutes.</br>7. Assemble the burgers: place patties on buns and add optional toppings as you desire.</p>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card recipe-card" style="box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);">
            <div class="card-inner">
            <div class="card-front">
                <h3 style="margin-top: 1px; font-weight: 800; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #bdbbbb;">Veggie Wrap</h3>
                <img src="../designs/images/burrito.png" alt="Recipe 1" style="margin-top: 25px;">
            </div>
            <div class="card-back">
                <p style="color: #c5bfbf; margin-top: 70px;">Ingredients: 1 large tortilla, 1/2 cucumber sliced, 1/2 bell pepper sliced, 1/4 cup shredded carrots, A handful of lettuce leaves</p>
                <p>1. Spread hummus evenly over the tortilla.</br>2. Layer cucumber, bell pepper, shredded carrots, and lettuce on top.</br>3. Roll up the tortilla tightly.</br>4. Slice in half and serve.</p>
            </div>
            </div>
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
  </body>
</html>
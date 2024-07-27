<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Bon Appétit</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
            if (basename($_SERVER['PHP_SELF']) === 'index.php') {
            }else{
                echo '<li class="nav-item">
              <a class="nav-link active" aria-current="page" style="color: lightgray; margin-right: 20px; font-size: 18px;" href="index.php">Home</a>
              </li>';
            }
            ?>
           
          </ul>
          <div class="d-grid gap-4 d-md-flex justify-content me-md-5">
            <?php
            if (basename($_SERVER['PHP_SELF']) === 'register.php') {
                echo '<a class="btn btn-danger btn-login" href="register.php">Register</a>';
            }else{
                echo '<a class="btn btn-outline-danger btn-register" href="register.php">Register</a>';
            }
            ?>
          
            <?php 
            if(basename($_SERVER['PHP_SELF']) === 'login.php'){
                echo '<a class="btn btn-danger btn-login" href="login.php">Login</a>';
            }else{
                echo '<a class="btn btn-outline-danger btn-register" href="login.php">Login</a>';
            }
            ?>
            
          </form>
        </div>
        <style>
        .btn-login,
        .btn-register {
            width: 140px;
        }
</style>
      </div>
</nav>

    <style>
      .navbar-brand{
        font-weight:800;
        background: linear-gradient(to right, #e18ea1, #961600);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 30px;
      }
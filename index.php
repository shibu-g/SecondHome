<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Page</title>
    <link rel="stylesheet" href="./style/loginstyle.css"> 
  </head>
<body>
  <!-- <div class="container">
    <form action="" method="post">
    <div class="email">
      <div>
    <label for="email">Email</label>
      </div>
      <div>
      <input type="email" name="email" id="email">
      </div>
    </div>
    <div class="pass">
      <div>
          <label for="Password">Password</label>
      </div>
      <div>
          <input type="password" name="password" id="password">
      </div>
    </div>
    <div class="btns">
      <button type="submit">Login</button>
      <button type="button">Sign Up</button>
    </div>
    </form>
  </div> -->
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" name="email" placeholder="Email or Phone" id="username">

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" id="password">

        <button>Log In</button>
        <div class="social">
          <a href="./config/google.php"><div class="go"><i class="fab fa-google" ></i>Google</div><i class="fab fa-google" ></i></a>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
        <div class="create">
          <a href="signup.php">Create a new Accout Now</a>
        </div>
    </form>

<script src="./js/login.js"></script>
</body>
</html>
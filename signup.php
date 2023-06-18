<?php
require_once("./config/config.php");

if(isset($_POST['register'])){
    echo "<script> console.log('clicked');</script>";
    $name = $_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $pass=$_POST['password'];
    $confirm=$_POST['confirm'];
    $gender=$_POST['gender'];
    if($pass==$confirm){
       $query="SELECT * FROM user WHERE username='$username' OR mobile='$phone' OR email='$email';";
         $result=mysqli_query($conn,$query);
         if(mysqli_num_rows($result)!=0){
               echo "<script>alert('User Already Exist With Same Information');</script>";
                 
              }else{
            $currdate=date("Y-m-d h:i:sa");
           $query="INSERT INTO user (name,username,email,mobile,password,time,gender) VALUES ('$name','$username','$email','$phone','$pass','$currdate','$gender');";
          
           mysqli_query($conn,$query);
           echo "<script>alert('User Created Successfully');</script>";
           sleep(5);
           header("location:index.php");
         }
        // $result=$mysqliquery
    
    }
    else{
      echo("Please Enter Currect Confirm Password");
    }
    

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register YourSelf</title>
    <link rel="stylesheet" href="./style/signup.css">
</head>
<body>
     <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phone" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="confirm" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="Male">
          <input type="radio" name="gender" id="dot-2" value="Female">
          <input type="radio" name="gender" id="dot-3" value="Prefer Not to Say">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button" name="">
          <input type="submit" name="register" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
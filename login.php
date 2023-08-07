<?php
  include('login_handle.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>

    body,html{
      background-color: rgba(251, 134, 0, 0.618);
      height: 100%;
      margin: 0;
    }
    body{
        background-image: url(bg.png);
        background-attachment: fixed;
        background-size: cover;
    }
    input {
    width: 80%;
    border: 1px black solid ;
    outline: 0;
    padding: 18px 15px; 
}
    .container{
      position: absolute;
      left: 37.5%;
      top: 20%;
      height: 60%;
      width: 25%;
      background-color: white;
      text-align: center;
      
    }
    form{
      display: grid;
      justify-items: center;
      align-items: center;
      grid-template-rows: auto auto auto auto;
    }
    .btn-class {
    width: 60%;
    display: flex;
    justify-content: center
  }
span{
  text-align: center;
  font-size: large;
}
.btn-class input {
    background: #3c00a0;
    color: #fff;
    height: 40px;
    border-radius: 20px;
    border: 0;
    cursor: pointer;
}
  </style>
  <link rel="stylesheet" href="back.css">
</head>
<body>
<a href="home.html"><div class="back">Go Back</div></a>
  <div class="container">
<br><br><br>
      <h2 color="blue">Login</h2>
      <br><span style="color:green"><?php echo $val; ?></span><span style="color:red"><?php echo $ival; ?></span><br><br>
      <form method="post">
          <input type="text" name="email" placeholder="Email"><br><br><br>
          <input type="password" name="pass" placeholder="Passoword"><br><br><br>
          <div class="btn-class">
          <input type="submit" name="submit">
          <input type="reset" name="reset">
          </div>
      </form><br><br>
      No account?<a href="signup.php">Sign Up</a><br><br>
      Admin login? <a href="adminlogin.php">login here</a>
  </div>
</body>
</html>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link rel="stylesheet" href="../css/login.css" />
    <title>Rogepi Assistant</title>
  </head>
  <body>
    <div class="container1">
      <div class="login-wrapper">
        <div class="header">Assistant by rogepi</div>
        <div class="form-wrapper">
          <form action="../php/login.php" method="POST">
            <input
              type="text"
              name="username"
              placeholder="username"
              class="input-item"
              id="input_name"
            />

            <!-- <form action="../php/test.php" method="POST"> -->
            <input
              type="password"
              name="password"
              placeholder="password"
              class="input-item"
              id="input_passwd"
            />
            <!-- </form> -->
            <!-- <input type="submit" class="btn" value="Login" id="submit" /> -->
            <button type="submit" class="btn">Login</button>
          </form>
          <!-- <div class="btn"><a href="home.html">Login</a></div> -->
        </div>
         <?php
          include ('dbcn.php');
          $_SESSION["name"]=$_POST["username"];
          // $name=;
          $password=$_POST["password"];

          $sql="SELECT u_id,u_name,u_password FROM users";
          $result = $conn->query($sql);

          while($row = $result->fetch_assoc()){
            if($_SESSION["name"]==$row["u_name"]&&$password==$row["u_password"]) {
              $_SESSION["uid"]=$row["u_id"];
              echo "<script>location.href='../php/home.php';</script>";
            }
          }
          if($name!=$row["u_name"]||$password!=$row["u_password"]) {
            echo "<script>alert('用户名或密码输入错误')</script>";
          }
          ?>
        <div class="msg">
          Don`t have account? <a href="signup.php">Sign up</a>
        </div>
      </div>
    </div>
  </body>
</html>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link rel="stylesheet" href="../css/signup.css" />
    <title>Rogepi Assistant</title>
  </head>
  <body>
    <div class="container1">
      <div class="login-wrapper">
        <div class="header">Assistant by rogepi</div>
        <div class="form-wrapper">
          <form action="../php/signup.php" method="POST">
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
            <input
            type="password"
            name="repeat"
            placeholder="repeat"
            class="input-item"
            id="input_passwd"
          />
            <!-- </form> -->
            <!-- <input type="submit" class="btn" value="Login" id="submit" /> -->
            <button type="submit" class="btn">Sign up</button>
            <button type="button" class="btn" onclick="location.href='../php/login.php'">Back</button>
          </form>
          <!-- <div class="btn"><a href="home.html">Login</a></div> -->
          <?php
            include ('dbcn.php');
            $name=$_POST["username"];
            // $name=;
            $password=$_POST["password"];
            $repeat=$_POST["repeat"];
            if($name==null || $password==null || $repeat==null) {
              // echo "<script>alert('Please input the information')</script>";
              exit;
            }
            $sql="SELECT u_name FROM users";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
              if($name==$row["u_name"]) {
                echo "<script>alert('Username already exists')</script>";
                exit;
              }
            }
            if($password!=$repeat) {
              echo "<script>alert('Password input is inconsistent')</script>";
              exit;
            } else {
              $sql="INSERT INTO users (u_name, u_password) VALUES ($name,$password)";
              $conn->query($sql);
              echo "<script>alert('Add user successful')</script>";
              echo "<script>location.href='../php/login.php'</script>";
            }
         
          ?>
        </div>
      </div>
    </div>
  </body>
</html>

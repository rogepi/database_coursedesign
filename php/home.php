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
    <link rel="stylesheet" href="../css/home.css" />
    <title>Rogepi Assistant</title>
  </head>
  <body>

    <div class="home-wrapper">
      <div class="title_show">
        <ul class="title_show">
          <li><a class="active" href="home.php">Home</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="course.php">Course</a></li>
          <li><a href="todo.php">Todo</a></li>
          <li style="float: right;">
            <a class="active" href="login.php">Log out</a>
          </li>
        </ul>
      </div>
      <div class="main">
        <h1>Welcome to Assistant by rogepi</h1>
        <br />
        <?php
        echo "<h1>Hello " . $_SESSION["name"] ."</h1>";
        ?>
      </div>
    </div>
  </body>
</html>

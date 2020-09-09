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
    <link rel="stylesheet" href="../css/dele.css" />
    <title>Rogepi Assistant</title>
  </head>
  <body>
    <div class="home-wrapper">
      <div class="title_show">
        <ul class="title_show">
          <li><a href="home.php">Home</a></li>
          <li><a class="active" href="contact.php">Contact</a></li>
          <li><a href="course.php">Course</a></li>
          <li><a href="todo.php">Todo</a></li>
          <li style="float: right;">
            <a class="active" href="login.php">Log out</a>
          </li>
        </ul>
      </div>
      <div class="main">
        <div class="table_show">
          <div class="sshow">
            <form action="../php/pdele.php" method="GET">
            <select name="name" id="name">
            <?php
              include ("dbcn.php");
              $id = $_SESSION["uid"];
              $sql="SELECT * FROM contacts WHERE u_id=$id";
              $result = $conn->query($sql);
              while($row = $result->fetch_assoc()){
                echo  "<option value=\"".$row["name"]."\">".$row["name"]."</option>";
              }
            ?>
            </select>
          </div>
          <div class="mbtn">
              <button id="sbtn" type="submit">Enter</button>
            </div>
        </div>
            </from>

        <div class="mbtn">
          <button type="menu">
            Add
          </button>
          <button
            class="active"
            type="menu"
            onclick="location.href='contact.php'"
          >
            Delete
          </button>
          <button type="menu">Edit</button>
          <button type="menu">Search</button>
        </div>
      </div>
    </div>
  </body>
</html>

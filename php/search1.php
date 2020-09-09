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
            <form action="../php/search2.php" method="GET">
            <select name="class" id="class">
            <option value="计本1班">计本1班</option>
                    <option value="计本2班">计本2班</option>
                    <option value="计本3班">计本3班</option>
                    <option value="计本4班">计本4班</option>
                    <option value="计本5班">计本5班</option>
                    <option value="计本6班">计本6班</option>
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
          <button>
            Delete
          </button>
          <button type="menu" >Edit</button>
          <button type="menu" class="active"
            onclick="location.href='contact.php'">Search</button>
        </div>
      </div>
    </div>
  </body>
</html>

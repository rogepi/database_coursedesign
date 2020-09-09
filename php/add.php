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
    <link rel="stylesheet" href="../css/add.css" />
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
          <div class="container">
            <form action="../php/padd.php" method="GET">
              <div class="row">
                <div class="col-25">
                  <label for="name">Name</label>
                </div>
                <div class="col-75">
                  <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Your name.."
                  />
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="phone">Phone</label>
                </div>
                <div class="col-75">
                  <input
                    type="text"
                    id="phone"
                    name="phone"
                    placeholder="Your phone.."
                  />
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="class">Class</label>
                </div>
                <div class="col-50">
                  <select id="class" name="class">
                    <option value="计本1班">计本1班</option>
                    <option value="计本2班">计本2班</option>
                    <option value="计本3班">计本3班</option>
                    <option value="计本4班">计本4班</option>
                    <option value="计本5班">计本5班</option>
                    <option value="计本6班">计本6班</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="birthday">Birthday</label>
                </div>
                <div class="col-30">
                  <input
                    type="number"
                    name="bitrh_m"
                    min="1"
                    max="12"
                    step="1"
                    value="1"
                  />
                  <lable>-</label>
                  <input
                    type="number"
                    name="bitrh_d"
                    min="1"
                    max="31"
                    step="1"
                    value="1"
                  />
                </div>
              </div>
              <div class="mbtn">
                <button class="sbtn" id="submit" type="submit">Enter</button>
              </div>
            </form>
          </div>
        </div>
        <div class="mbtn">
          <button class="active" type="menu" onclick="location.href='contact.php'">
            Add
          </button>
          <button type="menu">Delete</button>
          <button type="menu">Edit</button>
          <button type="menu">Search</button>
        </div>
      </div>
    </div>

  </body>
</html>


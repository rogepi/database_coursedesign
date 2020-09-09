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
    <link rel="stylesheet" href="../css/contact.css" />
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
          <table>
            <tr>
              <th>Name</th>
              <th>Phone</th>
              <th>Class</th>
              <th>Birthday</th>
            </tr>
            <?php
              include ('dbcn.php');
              $id = $_SESSION["uid"];
              $sql = "SELECT * FROM contacts WHERE u_id = $id ";
              $result = $conn->query($sql);
              while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["phone"]."</td>";
                echo "<td>".$row["class"]."</td>";
                echo "<td>";
                if ($row["birth_m"]<10) {
                  echo "0".$row["birth_m"]."-";
                }else {
                  echo $row["birth_m"]."-";
                }
                if ($row["birth_d"]<10) {
                  echo "0".$row["birth_d"]."</td>";
                } else {
                  echo $row["birth_d"]."</td>";
                }
                echo "</tr>";
              }
              ?>
          </table>
        </div>
        <div class="mbtn">
          <button type="menu" onclick="location.href='add.php'">Add</button>
          <button type="menu" onclick="location.href='dele.php'">Delete</button>
          <button type="menu" onclick="location.href='edit1.php'">Edit</button>
          <button type="menu" onclick="location.href='search1.php'">Search</button>
        </div>
      </div>
    </div>
  </body>
</html>

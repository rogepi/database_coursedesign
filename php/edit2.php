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
          <li><a href="home.html">Home</a></li>
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
          <?php
            include ('dbcn.php');
            $cname=$_GET["name"];
            $sql="SELECT * FROM contacts WHERE `name`='$cname'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                $_SESSION["cid"]=$row["id"];
                $_phone=$row["phone"];
                $_class=$row["class"];
                $_birth_m=$row["birth_m"];
                $_birth_d=$row["birth_d"];
              }
            }
          ?>
          <div class="container">
            <form action="../php/pedit.php" method="GET">
              <div class="row">
                <div class="col-25">
                  <label for="name">Name</label>
                </div>
                <div class="col-75">
                  <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="your name..."
                    value=<?php echo $cname ?>
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
                    value=<?php echo $_phone ?>
                  />
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="class">Class</label>
                </div>
                <div class="col-50">
                  <select id="class" name="class" >
                    <?php
                     $aclass = array("计本1班","计本2班","计本3班","计本4班","计本5班","计本6班",);
                     foreach($aclass as $value) {
                       if($value==$_class) {
                        echo "<option value=$value  selected = \"selected.\">$value</option>";                     
                       }else {
                        echo "<option value=$value>$value</option>";
                       }
 
                     }
                     ?>

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
                    value=<?php echo $_birth_m ?>
                  />
                  <lable>-</label>
                  <input
                    type="number"
                    name="bitrh_d"
                    min="1"
                    max="31"
                    step="1"
                    value=<?php echo $_birth_d ?>
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
          <button  type="menu" >
            Add
          </button>
          <button type="menu">Delete</button>
          <button class="active" type="menu" onclick="location.href='contact.php'">Edit</button>
          <button type="menu">Search</button>
        </div>
      </div>
    </div>

  </body>
</html>


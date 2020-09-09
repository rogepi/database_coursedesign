<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link rel="stylesheet" href="../css/todo.css" />
    <title>Rogepi Assistant</title>
  </head>
  <body>
    <div class="home-wrapper">
      <div class="title_show">
        <ul class="title_show">
          <li><a href="home.php">Home</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="course.php">Course</a></li>
          <li><a class="active" href="todo.php">Todo</a></li>
          <li style="float: right;">
            <a class="active" href="login.php">Log out</a>
          </li>
        </ul>
      </div>
      <div class="main">
        <div id="myDIV" class="header">
          <!-- <h2 style="margin: 5px;">My To Do List</h2> -->
          <input type="text" id="myInput" placeholder="Title..." />
          <span onclick="newElement()" class="addBtn">Add</span>
        </div>
        <div class="list_show">
          <ul id="myUL">
          <?php
              include ('dbcn.php');
              $id = $_SESSION["uid"];
              $sql = "SELECT * FROM todos WHERE u_id = $id ";
              $result = $conn->query($sql);
              while($row = $result->fetch_assoc()){
                if ($row["finsh"]==1) {
                  echo "<li class='checked'>".$row["matter"]."</li>";
                } else {
                  echo "<li>".$row["matter"]."</li>";
                }
              }
              ?>
          </ul>
          <script>
            // Create a "close" button and append it to each list item
            var myNodelist = document.getElementsByTagName("LI");
            var i;
            for (i = 5; i < myNodelist.length; i++) {
              var span = document.createElement("SPAN");
              var txt = document.createTextNode("\u00D7");
              span.className = "close";
              span.appendChild(txt);
              myNodelist[i].appendChild(span);
            }

            // Click on a close button to hide the current list item
            var close = document.getElementsByClassName("close");
            var i;
            for (i = 0; i < close.length; i++) {
              close[i].onclick = function () {
                var div = this.parentElement;
                div.style.display = "none";
              };
            }

            // Add a "checked" symbol when clicking on a list item
            var list = document.querySelector("#myUL");
            list.addEventListener(
              "click",
              function (ev) {
                if (ev.target.tagName === "LI") {
                  ev.target.classList.toggle("checked");
                }
              },
              false
            );

            // Create a new list item when clicking on the "Add" button
            function newElement() {
              var li = document.createElement("li");
              var inputValue = document.getElementById("myInput").value;
              var t = document.createTextNode(inputValue);
              li.appendChild(t);
              if (inputValue === "") {
                alert("You must write something!");
              } else {
                document.getElementById("myUL").appendChild(li);
              }
              document.getElementById("myInput").value = "";

              var span = document.createElement("SPAN");
              var txt = document.createTextNode("\u00D7");
              span.className = "close";
              span.appendChild(txt);
              li.appendChild(span);

              for (i = 0; i < close.length; i++) {
                close[i].onclick = function () {
                  var div = this.parentElement;
                  div.style.display = "none";
                };
              }

            }             
          </script>
        </div>
      </div>
    </div>
  </body>
</html>

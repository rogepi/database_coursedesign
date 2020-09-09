<?php
              include ("dbcn.php");
              $id = $_SESSION["uid"];
              $name = $_GET["name"];
              $sql="DELETE FROM contacts WHERE name='$name'";
              $result=$conn->query($sql);
              if($result){
                echo "<script>alert('Delete information successful')</script>";
                echo "<script>location.href='../php/contact.php'</script>";
              } else {
                echo "Connection failed: " . $conn->error;
                echo "<script>alert('Delete Error')</script>";
              }
            ?>
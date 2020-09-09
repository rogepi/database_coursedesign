<?php session_start(); ?>

<?php
  include ('dbcn.php');
  $id = $_SESSION["uid"];
  $_cid = $_SESSION["cid"];
  $name=$_GET["name"];
  $phone=$_GET["phone"];
  $class=$_GET["class"];
  $birth_m=$_GET["birth_m"];
  $birth_d=$_GET["birth_d"];
  $result = $conn->query($sql);
  $sql="UPDATE contacts SET `name`='$name',`phone`=$phone, `class`='$class' WHERE id=$_cid";
  $result=$conn->query($sql);
  if($result){
    echo "<script>alert('Edit information successful')</script>";
    echo "<script>location.href='../php/contact.php'</script>";
  } else {
    echo "Connection failed: " . $conn->error;
    echo "<script>alert('Edit Error')</script>";
  }
?>
<?php session_start(); ?>

<?php
  include ('dbcn.php');
  $id = $_SESSION["uid"];
  $name=$_GET["name"];
  $phone=$_GET["phone"];
  $class=$_GET["class"];
  $birth_m=$_GET["birth_m"];
  $birth_d=$_GET["birth_d"];
  $sql="INSERT INTO contacts (`name`,`phone`,`class`,`u_id`) VALUE ('$name','$phone','$class',$id)";


  $result=$conn->query($sql);
  if($result){
    echo "<script>alert('Add information successful')</script>";
    echo "<script>location.href='../php/contact.php'</script>";
  } else {
    echo "Connection failed: " . $conn->error;
    echo "<script>alert('Add Error')</script>";
  }

  // } else {
  //   echo "<script>alert('Error')</script>";
  //   echo "<script>location.href='../html/add.html'</script>";
  // }
?>
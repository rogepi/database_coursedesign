<?php session_start(); ?>

<?php
  $db_servername = "localhost";
  $db_username = "rogepi";
  $db_password = "118384";
  $db_dbname = "ast";
  // Create connection
  $conn = new mysqli($db_servername, $db_username, $db_password, $db_dbname);
  $_SESSION["uid"];
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
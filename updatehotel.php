<?php

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $hotel_id = $_POST['hotel_id'];
  $hotel_name = $_POST['hotel_name'];
  $hotel_type = $_POST['hotel_type'];
  $facilities = $_POST['facilities'];
  $status = $_POST['status'];
  $description = $_POST['description'];

  $sql = "UPDATE hotel SET hotel_name = '$hotel_name', hotel_type = '$hotel_type', facilities = '$facilities', status = '$status', description = '$description' WHERE id = '$hotel_id'";

  if (mysqli_query($conn, $sql)) {
    echo "Hotel updated successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  }

mysqli_close($conn);

?>

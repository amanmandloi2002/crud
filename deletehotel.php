<?php

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $hotel_id = $_POST['hotel_id'];

  $sql = "DELETE FROM hotel WHERE id = '$hotel_id'";

  if (mysqli_query($conn, $sql)) {
    echo "Hotel deleted successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);


?>

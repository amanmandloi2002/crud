 <?php

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $hotel_name = $_POST['hotel_name'];
  $hotel_type = $_POST['hotel_type'];
  $facilities = $_POST['facilities'];
  $status = $_POST['status'];
  $description = $_POST['description'];

  $sql = "INSERT INTO hotel (hotel_name, hotel_type, facilities, status, description) VALUES ('$hotel_name', '$hotel_type', '$facilities', '$status', '$description')";

  if (mysqli_query($conn, $sql)) {
    $hotel_id = mysqli_insert_id($conn);

    // Inserting the images
    if (isset($_FILES['images'])) {
      $image_paths = [];

      foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $image_name = $_FILES['images']['name'][$key];
        $image_path = "images/" . $hotel_id . "_" . $image_name;

        if (move_uploaded_file($tmp_name, $image_path)) {
          $image_paths[] = $image_path;
        }
      }

      // Inserting the image paths into the database
      foreach ($image_paths as $image_path) {
        $sql = "INSERT INTO image (hotel_id, image_path) VALUES ('$hotel_id', '$image_path')";
        mysqli_query($conn, $sql);
      }
    }

    echo "Hotel created successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>

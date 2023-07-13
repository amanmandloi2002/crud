<!DOCTYPE html>
<html>
<head>
    <title>Hotel Crud</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Hotel Crud</h2>
        <form action="listing.php" method="POST" enctype="multipart/form-data">
        <form>
  <label for="hotel-name">Hotel Name:</label>
  <input type="text" id="hotel-name" name="hotel-name" required>

  <br>

  <label for="hotel-type">Hotel Type:</label>
  <input type="radio" id="sell" name="hotel-type" value="sell" required>
  <label for="sell">Sell</label>
  <input type="radio" id="rent" name="hotel-type" value="rent" required>
  <label for="rent">Rent</label>

  <br>

  <label for="facilities">Facilities:</label>
  <input type="checkbox" id="poolside" name="facilities" value="poolside">
  <label for="poolside">Poolside</label>
  <input type="checkbox" id="outdoor-restaurant" name="facilities" value="outdoor-restaurant">
  <label for="outdoor-restaurant">Outdoor Restaurant</label>
  
  <br>
  
  <label for="status">Status:</label>
  <input type="radio" id="yes" name="status" value="yes" required>
  <label for="yes">Yes</label>
  <input type="radio" id="no" name="status" value="no" required>
  <label for="no">No</label>

  <br>

  <label for="description">Description:</label>
  <textarea id="description" name="description" rows="4" cols="50"></textarea>

  <br>

  <label for="image">Image:</label>
  <input type="file" id="image" name="image">

  <br>

  <input type="submit" value="Submit" >
  
  </form>

    </div>
   </body>
  </html>




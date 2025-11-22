<?php
// menu.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menu Page</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/menu.css">
</head>
<body>

  <!-- Heading -->
  <h2>Menu Page</h2>

  <div class="container">
    <div class="row justify-content-center">

      <!-- Card 1 -->
      <div class="col-md-8">
        <div class="menu-card d-flex flex-md-row flex-column">
          <div class="col-md-4 col-12">
            <img src="assets/img/image1.jpeg" alt="Upload Image">
          </div>
          <div class="col-md-8 col-12 card-body">
            <a href="menu1.html">Upload an Image</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-8">
        <div class="menu-card d-flex flex-md-row flex-column">
          <div class="col-md-4 col-12">
            <img src="assets/img/image2.jpeg" alt="Bank Forms">
          </div>
          <div class="col-md-8 col-12 card-body">
            <a href="menu2.html">Bank Application forms</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-8">
        <div class="menu-card d-flex flex-md-row flex-column">
          <div class="col-md-4 col-12">
            <img src="assets/img/image3.jpeg" alt="Enter Text">
          </div>
          <div class="col-md-8 col-12 card-body">
            <a href="menu3.html">Enter the Text</a>
          </div>
        </div>
      </div>

    </div>
       <!-- Bottom Buttons -->
  <div class="container">
    <div class="d-flex justify-content-between my-4">
      <!-- Back Button -->
      <a href="home.php" class="btn btn-sm btn-outline-secondary px-4">Back</a>

      <!-- Contact Button -->
      <a href="contact.php" class="btn btn-sm btn-primary px-4">Contact</a>
    </div>
  </div>
  </div>
 
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

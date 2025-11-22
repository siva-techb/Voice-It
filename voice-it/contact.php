<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Voice It</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/contact.css">
</head>
<body>

<div class="container py-5">
  <div class="row justify-content-center align-items-center">
    
    <!-- Contact Form -->
    <div class="col-md-6">
      <div class="contact-box p-4">
        <h3 class="text-center fw-bold">Contact Us</h3>
        <p class="text-center">Have questions or need assistance? Reach out to us!</p>
        
        <form action="submit_contact.php" method="POST">
          <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
          </div>
          <div class="mb-3">
            <textarea name="message" rows="4" class="form-control" placeholder="Your Message" required></textarea>
          </div>
          <button type="submit" class="btn btn-submit w-100">Send Message</button>
        </form>
      </div>
      <a href="home.php"><button class="btn btn-primary mt-2">Back to Home</button></a>
    </div>

    <!-- Image -->
    <div class="col-md-6 text-center mt-4 mt-md-0">
      <img src="assets/img/girl_speaking.jpeg" alt="Contact Illustration" class="img-fluid contact-img">
    </div>

  </div>
</div>

</body>
</html>

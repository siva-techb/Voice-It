<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voice-It</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/about.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark top-banner fixed-top" style="background-color: #7b2cbf; width:100%; height: 80px;">
  <div class="container-fluid">
    <!-- Left Logo (no link) -->
    <span class="navbar-brand d-flex align-items-center">
      <img src="assets/img/voiceit.jpeg" alt="Logo" width="45" height="45" class="rounded-circle">
    </span>

    <!-- Center Title -->
    <div class="mx-auto text-white fw-bold fs-5">
      VOICE-IT
    </div>

    <!-- Right Menu (no links) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="home.php"><span class="nav-link active text-white">Home</span></li></a>
        <li class="nav-item"><a href="about.php"><span class="nav-link text-white">About Us</span></li></a>
        <li class="nav-item"><a href="menu.php"><span class="nav-link text-white">Menu</span></li></a>
        <li class="nav-item"><a href="contact.php"><span class="nav-link text-white">Contact</span></li></a>
      </ul>
    </div>
  </div>
</nav>
  <!-- Spacer so content is not hidden under fixed navbar -->
  <div style="height: 80px;"></div>

  <!-- Section 1 -->
  <div class="container my-5">
    <div class="row align-items-center">
      <!-- Left Video/Image -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="ratio ratio-16x9 shadow rounded">
          <iframe src="assets/video/vioceit.mp4"
          <!-- "https://www.youtube.com/embed/TzXXHVhGXTQ"  -->
                  title="Voice-It Video" allowfullscreen></iframe>
        </div>
      </div>
      <!-- Right Text -->
      <div class="col-md-6">
        <div class="p-4 bg-light border-start border-4 border-primary shadow-sm rounded" >
          <h3 class="fw-bold " style="color: #ce23a3;">See How The VOICE-IT Helps</h3>
          <p  class="fw-bold">
            <span class="fw-bold" style="color:  #7b2cbf;">Watch this video to explore how Voice-It is using voice technology</span> 
            to revolutionize the way we interact with devices. Learn how we transform simple text into lifelike speech, 
            enhancing both accessibility and user engagement across various platforms.
          </p>
          <p class="fw-bold">
            We’ve integrated advanced speech synthesis and recognition technologies to ensure a natural, human-like interaction 
            experience. Whether it’s for education, business, or personal productivity, Voice-It adapts to your needs in real time.
          </p>
          <p class="fw-bold">
            One of our standout features is the ability to 
            <span class="fw-bold" style="color: #7b2cbf;">translate and convert text into multiple languages</span>, 
            making it easier for users worldwide.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 2 -->
  <div class="container my-5">
    <div class="p-4 bg-info bg-opacity-25 rounded shadow-sm">
      <p class="fw-bold">
        The above problem can be solved by using <span class="fw-bold" style="color: #7b2cbf;">Voice-It</span>, 
        a smart solution for converting voice input into text and processing it seamlessly.
      </p>
      <p class="fw-bold">On the menu page, we are presented with 3 options:</p>
      <ul class="fw-bold">
        <li><span class="fw-bold" style="color: #7b2cbf;">Image Upload–</span> allows users to upload images containing text.</li>
        <li><span class="fw-bold" style="color: #7b2cbf;">Bank Application Forms– </span> how to fill the Bank Application Forms.</li>
        <li><span class="fw-bold" style="color: #7b2cbf;">Enter the Text–</span> Allows users to enter the text.</li>
      </ul>
      <p class="fw-bold">
        Based on the selected option, the system processes the input accordingly and uploads the data to the backend. 
        This helps in organizing and managing input types more efficiently while maintaining user flexibility.
      </p>
      <p class="fw-bold">
        <span class="fw-bold" style="color: #7b2cbf;">Voice-It</span> simplifies user interaction and makes data entry faster, 
        especially for those who prefer speaking over typing.
      </p>
    </div>
  </div>

  <!-- Section 3 (Cards) -->
  <div class="container my-5">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card shadow h-100 text-center">
          <img src="assets/img/image1.jpeg" class="card-img-top rounded-top" alt="Upload Image">
          <div class="card-body">
            <a href="menu1.html"><h6 class="fw-bold text-primary">Uploading Image</h6></a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow h-100 text-center">
          <img src="assets/img/image2.jpeg" class="card-img-top rounded-top" alt="Bank Application Forms">
          <div class="card-body">
            <a href="menu2.html"><h6 class="fw-bold text-primary">Bank Application Forms</h6></a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow h-100 text-center">
          <img src="assets/img/image3.jpeg" class="card-img-top rounded-top" alt="Entering Text">
          <div class="card-body">
            <a href="menu3.html"><h6 class="fw-bold text-primary">Entering Text</h6></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer text-center text-white py-3">
    <p class="m-0">© <?php echo date("Y"); ?> VoiceIt. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
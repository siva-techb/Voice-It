<?php
// about.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About VoiceIt</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
      <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link text-white" href="home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white active" href="about.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="menu.php">Menu</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="contact.php">Contact</a></li>
        </ul>
    </div>
  </div>
</nav>
  <!-- Spacer so content is not hidden behind navbar -->
  <div style="height: 80px;"></div>

  <!-- About Box -->
  <div class="container">
    <div class="about-box text-center text-white">
      About VoiceIt
    </div>
  </div>

  <div class="container my-4">

    <!-- What is VoiceIt -->
    <div class="card p-4">
      <h5>What is VoiceIt?</h5>
      <p>
        VOICEIT is an innovative text-to-speech voice assistant that converts written text into natural sounding speech. 
        Not only from text but also from images and many other sources. VOICEIT describes objects in the picture and what 
        particular actions are performed in it. VOICEIT is available in multiple languages and helps individuals fill 
        applications (like bank related, education related, etc.).
      </p>
    </div>

    <!-- Key Features -->
    <div id="features" class="card p-4">
      <h5>Key Features</h5>
      <div class="features mt-3">
        <p><i class="bi bi-mic-fill"></i><b>Natural-Sounding Speech</b> – Converts text into speech for better understanding.</p>
        <p><i class="bi bi-journal-text"></i><b>Application Assistance</b> – Reads out the instructions, aiding in tasks like filling bank or education-related applications.</p>
        <p><i class="bi bi-person-check-fill"></i><b>Reduces Dependence</b> – Allows users to get information through voice instead of asking for help.</p>
        <p><i class="bi bi-translate"></i><b>Multilanguage Support</b> – Available in multiple languages.</p>
      </div>
    </div>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

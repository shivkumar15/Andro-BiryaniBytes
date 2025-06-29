<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
        body {
            background-color: #121212;
            color: #fff;
        }
        .navbar-dark .navbar-nav .nav-link.active {
            color: #ffc107;
        }
    h2, h3 {
      color: #ffc107;
    }
    .form-label {
      font-weight: bold;
    }
    .form-control, .btn {
      border-radius: 0.5rem;
    }
    .btn-primary {
      background-color: #ffc107;
      border: none;
      color: #121212;
      font-weight: bold;
    }
    .btn-primary:hover {
      background-color: #e0a800;
    }
    .info-box i {
      color: #ffc107;
      font-size: 1.5rem;
      margin-right: 15px;
    }
    .info-box {
      margin-top: 30px;
    }
  </style>
</head>
<body>

<!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.html">Menu</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!-- Navbar End -->


  <!-- Contact Section -->
  <section class="container my-5">
    <h2 class="mb-4">Get in Touch</h2>
    <div class="row g-5">
      <!-- Contact Form -->
      <div class="col-md-6">
        <form action="php/booking-handler.php" method="post">
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea name="message" class="form-control" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>
      </div>

      <!-- Contact Info -->
      <div class="col-md-6">
        <h3>Contact Details</h3>
        <div class="info-box d-flex align-items-start">
          <i class="fas fa-map-marker-alt"></i>
          <div>
            <strong>Address:</strong><br />
            Domino's Pizza, Kankarbagh Main Rd, Patna, Bihar 800020
          </div>
        </div>
        <div class="info-box d-flex align-items-start">
          <i class="fas fa-envelope"></i>
          <div>
            <strong>Email:</strong><br />
            support@myrestaurant.com
          </div>
        </div>
        <div class="info-box d-flex align-items-start">
          <i class="fas fa-phone"></i>
          <div>
            <strong>Phone:</strong><br />
            +91 98765 43210
          </div>
        </div>
        <div class="info-box d-flex align-items-start">
          <i class="fas fa-clock"></i>
          <div>
            <strong>Hours:</strong><br />
            Mon - Sun: 11:00 AM – 11:00 PM
          </div>
        </div>
      </div>
    </div>

    <!-- Google Map -->
    <div class="mt-5">
      <h3>Find Us on Map</h3>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.7430331980794!2d85.14864381464242!3d25.602273783702254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed586b8db9babb%3A0x850bd2f30e29736d!2sDomino&#39;s%20Pizza!5e0!3m2!1sen!2sin!4v1685011342345!5m2!1sen!2sin" 
        width="100%" 
        height="350" 
        frameborder="0" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
      </iframe>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Expo</title>

    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
      a{
        text-decoration: none;
        color: rgb(255, 255, 255);
      }
      a:hover{
        color: rgb(178, 215, 248);
      }
      </style>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
  
<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-light shadow-sm" id="navbar">
  <div class="container">
    
    <!-- Brand -->
    <a class="navbar-brand fw-bold" href="#">Travel Expo</a>

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Content -->
    <div class="collapse navbar-collapse" id="navbarNav">
      
      <!-- Center Nav Links -->
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="beaches.php">Beaches</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hill.php">Hill Stations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="location.php">Destinations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About Us</a>
        </li>
      </ul>

      <!-- Search Bar -->
      <form class="d-flex" role="search" action="search.php" method="GET">
        <input class="form-control me-2 rounded-pill" type="search" name="q" placeholder="Search places..." required>
        <button class="btn btn-outline-primary rounded-pill px-3" type="submit">Search</button>
      </form>

      <?php session_start(); ?>
      <div class="d-flex align-items-center gap-2 ms-3">
      <?php if (isset($_SESSION['user_name'])): ?>
      <span class="navbar-text me-2">Hi, <?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
      <a href="logout.php" class="btn btn-outline-danger rounded-pill px-3">Logout</a>
      <?php else: ?>
      <a href="login.php" class="btn btn-outline-primary rounded-pill px-3">Login</a>
      <a href="signup.php" class="btn btn-primary rounded-pill px-3">Sign Up</a>
      <?php endif; ?>
      </div>


    </div>
  </div>
</nav>



<!-- Carousel -->
<div class="carousel-wrapper">
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" ></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"></button>
  </div>

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="img\hill-bg.jpg" class="d-block w-100" alt="Manali">
      <div class="carousel-caption d-none d-md-block"><h5><a href="hill.php">Explore Hill Stations</a><h5></div>
    </div>
    
    <div class="carousel-item">
      <img src="img\famous\jaipur.jpg" class="d-block w-100" alt="India">
      <div class="carousel-caption d-none d-md-block"><h5><a href="location.php">Explore Destinations</a><h5></div>
    </div>

    <div class="carousel-item">
      <img src="img\beach-bg.jpg" class="d-block w-100" alt="Manali">
      <div class="carousel-caption d-none d-md-block"><h5><a href="beaches.php">Explore Beaches</a><h5></div>
    </div>

    <div class="carousel-item ">
      <img src="img\famous\rann.jpg" class="d-block w-100" alt="India">
      <div class="carousel-caption d-none d-md-block"><h5><a href="location.php">Explore Destinations</a><h5></div>
    </div>

    <div class="carousel-item ">
      <img src="img\famous\udaipur.jpg" class="d-block w-100" alt="India">
      <div class="carousel-caption d-none d-md-block"><h5><a href="location.php">Explore Destinations</a><h5></div>
    </div>

    <div class="carousel-item">
      <img src="img\famous\dal lake.jpg" class="d-block w-100" alt="India">
      <div class="carousel-caption d-none d-md-block"><h5><a href="location.php">Explore Destinations</a><h5></div>
    </div>
  </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div>
<section id="about" class="about-section">
    <div class="about-container">
        <h2>About Travel Expo</h2>
        <p>
            Travel Expo is your gateway to discovering the most beautiful and diverse destinations across India.
            From peaceful hill stations and golden beaches to cultural cities and hidden gems, we aim to inspire
            every kind of traveler.
        </p>

        <p>
            Our platform is built for explorers who love authentic experiences. We share carefully curated
            destination guides, travel tips, local food recommendations, and practical insights to help you
            plan better journeys.
        </p>

        <p>
            Whether you are planning a short getaway, a solo adventure, or a family vacation, Travel Expo
            helps you explore India one destination at a time.
        </p>
    </div>
</section>


<!-- Footer -->
<footer class="footer">
    <div class="footer-container">

        <div class="footer-brand">
            <h3>Travel Expo</h3>
            <p>Your gateway to exploring India — one destination at a time.</p>

            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <div class="footer-links">
            <h5>Quick Links</h5>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="beaches.php">Beaches</a></li>
                <li><a href="hill.php">Hill Stations</a></li>
                <li><a href="location.php">Destinations</a></li>
            </ul>
        </div>

        <div class="footer-newsletter">
            <h5>Subscribe to our Newsletter</h5>
            <p>Get travel updates, tips & exclusive offers.</p>
            <form action="subscribe.php" method="POST">
                <input type="email" name="user_email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2026 Travel Expo. All rights reserved.</p>
    </div>
</footer>

<button id="scrollTopBtn" title="Go to top">↑</button>
<script>
    const scrollBtn = document.getElementById("scrollTopBtn");

    window.onscroll = function () {
        scrollBtn.style.display = window.scrollY > 300 ? "block" : "none";
    };

    scrollBtn.onclick = function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
    };
</script>
<script>
document.getElementById('subscribeForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Stop page from reloading

    let formData = new FormData(this);

    fetch('subscribe.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data); // This shows your "Success" or "Already subscribed" message
        if(data.includes("Success")) {
            document.getElementById('email').value = ''; // Clear input on success
        }
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="script.js"></script>

</div>
</body>
</html>
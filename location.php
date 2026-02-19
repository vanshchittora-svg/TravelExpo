<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hill Stations</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .card-hover:hover {
            transform: scale(1.05);
            transition: transform 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0,1);
        }
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: 
            linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
            url("img/hill-bg.jpg");
            background-size: cover;
            background-position: center;
            filter: blur(8px);
            z-index: -1;
        }
        h1 {
        bottom: 12%;
        backdrop-filter: blur(10px);
        background: rgba(0, 0, 0, 0.35);
        padding: 18px 36px;
        border-radius: 16px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.35);
        color: rgb(178, 215, 248);
        font-size: 2.5rem;
        }
        .card {
    height: 100%;
    display: flex;
    flex-direction: column;
}

.card-img-top {
    height: 220px !important;
    width: 100%;
    object-fit: cover;
}

.card-body {
    flex: 1;
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
      </ul>

      <!-- Search Bar -->
      <form class="d-flex" role="search" action="search.php" method="GET">
        <input class="form-control me-2 rounded-pill" type="search" name="q" placeholder="Search places..." required>
        <button class="btn btn-outline-primary rounded-pill px-3" type="submit">Search</button>
      </form>


    </div>
  </div>
</nav>


<!-- Content -->
<div class="container">
    <h1 class="text-center mt-4 mb-4">Popular Hill Stations</h1>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card card-hover">
                <img src="img/hill/auli.jpg" class="card-img-top" alt="Auli">
                <div class="card-body">
                    <h5 class="card-title">Auli</h5>
                    <p class="card-text">A famous ski destination in Uttarakhand with stunning Himalayan views.</p>
                    <a href="place.php?place=auli" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover">
                <img src="img/hill/coorg.jpg" class="card-img-top" alt="Coorg">
                <div class="card-body">
                    <h5 class="card-title">Coorg</h5>
                    <p class="card-text">Known as the Scotland of India, famous for coffee plantations and misty hills.</p>
                    <a href="place.php?place=coorg" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover">
                <img src="img/hill/dalhousie.jpg" class="card-img-top" alt="Dalhousie">
                <div class="card-body">
                    <h5 class="card-title">Dalhousie</h5>
                    <p class="card-text">A charming hill station in Himachal Pradesh with colonial-era architecture.</p>
                    <a href="place.php?place=dalhousie" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover">
                <img src="img/hill/darj.jpg" class="card-img-top" alt="Darjeeling">
                <div class="card-body">
                    <h5 class="card-title">Darjeeling</h5>
                    <p class="card-text">Famous for tea gardens, toy train rides, and views of Kanchenjunga.</p>
                    <a href="place.php?place=darjeeling" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover">
                <img src="img/hill/gangtok.jpg" class="card-img-top" alt="Gangtok">
                <div class="card-body">
                    <h5 class="card-title">Gangtok</h5>
                    <p class="card-text">A peaceful capital city of Sikkim with monasteries and mountain views.</p>
                    <a href="place.php?place=gangtok" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover">
                <img src="img/hill/himal.jpg" class="card-img-top" alt="Himalayas">
                <div class="card-body">
                    <h5 class="card-title">Himalayas</h5>
                    <p class="card-text">The world’s highest mountain range, offering breathtaking natural beauty.</p>
                    <a href="place.php?place=himalayas" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover">
                <img src="img/hill/leh1.jpg" class="card-img-top" alt="Leh Ladakh">
                <div class="card-body">
                    <h5 class="card-title">Leh Ladakh</h5>
                    <p class="card-text">A high-altitude desert region known for monasteries and scenic landscapes.</p>
                    <a href="place.php?place=leh" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover">
                <img src="img/hill/manal.opdownload" class="card-img-top" alt="Manali">
                <div class="card-body">
                    <h5 class="card-title">Manali</h5>
                    <p class="card-text">A popular hill station famous for adventure sports and snow-covered peaks.</p>
                    <a href="place.php?place=manali" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover">
                <img src="img/hill/Mussoorie.jpg" class="card-img-top" alt="Mussoorie">
                <div class="card-body">
                    <h5 class="card-title">Mussoorie</h5>
                    <p class="card-text">The Queen of Hills, offering panoramic views of the Doon Valley.</p>
                    <a href="place.php?place=mussoorie" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover">
                <img src="img/hill/nainital.jpg" class="card-img-top" alt="Nainital">
                <div class="card-body">
                    <h5 class="card-title">Nainital</h5>
                    <p class="card-text">A beautiful lake town in Uttarakhand, perfect for boating and relaxation.</p>
                    <a href="place.php?place=nainital" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover">
                <img src="img/hill/ooty.jpg" class="card-img-top" alt="Ooty">
                <div class="card-body">
                    <h5 class="card-title">Ooty</h5>
                    <p class="card-text">A cool hill station in Tamil Nadu, famous for gardens and tea estates.</p>
                    <a href="place.php?place=ooty" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover">
                <img src="img/hill/shillong.jpg" class="card-img-top" alt="Shillong">
                <div class="card-body">
                    <h5 class="card-title">Shillong</h5>
                    <p class="card-text">Known as the Scotland of the East, famous for waterfalls and music culture.</p>
                    <a href="place.php?place=shillong" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover">
                <img src="img/hill/shimla.jpg" class="card-img-top" alt="Shimla">
                <div class="card-body">
                    <h5 class="card-title">Shimla</h5>
                    <p class="card-text">A historic hill station and former summer capital of British India.</p>
                    <a href="place.php?place=shimla" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover">
                <img src="img/hill/spiti.jpg" class="card-img-top" alt="Spiti">
                <div class="card-body">
                    <h5 class="card-title">Spiti</h5>
                    <p class="card-text">A cold desert mountain valley known for monasteries and rugged beauty.</p>
                    <a href="place.php?place=spiti" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover">
                <img src="img/hill/srinagar.jpg" class="card-img-top" alt="Srinagar">
                <div class="card-body">
                    <h5 class="card-title">Srinagar</h5>
                    <p class="card-text">Famous for Dal Lake, houseboats, and beautiful Mughal gardens.</p>
                    <a href="place.php?place=srinagar" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover h-100">
                <img src="img/beach/allepey.jpg" class="card-img-top" alt="Allepey">
                <div class="card-body">
                    <h5 class="card-title">Allepey</h5>
                    <p class="card-text">Famous for houseboat cruises through serene backwaters and lagoons.</p>
                    <a href="place.php?place=alleppey" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover h-100">
                <img src="img/beach/goa.jpg" class="card-img-top" alt="Goa">
                <div class="card-body">
                    <h5 class="card-title">Goa</h5>
                    <p class="card-text">Known for vibrant nightlife, beautiful beaches, and Portuguese heritage.</p>
                    <a href="place.php?place=goa" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover h-100">
                <img src="img/beach/puri.jpg" class="card-img-top" alt="Puri">
                <div class="card-body">
                    <h5 class="card-title">Puri</h5>
                    <p class="card-text">A sacred coastal city famous for the Jagannath Temple and golden beaches.</p>
                    <a href="place.php?place=puri" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover h-100">
                <img src="img/beach/puducheery.jpg" class="card-img-top" alt="Pondicherry">
                <div class="card-body">
                    <h5 class="card-title">Pondicherry</h5>
                    <p class="card-text">A peaceful seaside town with French architecture and quiet beaches.</p>
                    <a href="place.php?place=pondicherry" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover h-100">
                <img src="img/beach/andman.jpg" class="card-img-top" alt="Andaman and Nicobar Islands">
                <div class="card-body">
                    <h5 class="card-title">Andaman and Nicobar Islands</h5>
                    <p class="card-text">A tropical paradise with crystal-clear waters and coral reefs.</p>
                    <a href="place.php?place=andaman" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover h-100">
                <img src="img/beach/daman.jpg" class="card-img-top" alt="Daman and Diu">
                <div class="card-body">
                    <h5 class="card-title">Daman and Diu</h5>
                    <p class="card-text">A coastal union territory known for beaches and Portuguese forts.</p>
                    <a href="place.php?place=daman" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover h-100">
                <img src="img/beach/gokarna.jpg" class="card-img-top" alt="Gokarna">
                <div class="card-body">
                    <h5 class="card-title">Gokarna</h5>
                    <p class="card-text">A peaceful beach town famous for temples and pristine shorelines.</p>
                    <a href="place.php?place=gokarna" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover h-100">
                <img src="img/beach/calangute.jpg" class="card-img-top" alt="Calangute Beach">
                <div class="card-body">
                    <h5 class="card-title">Calangute Beach</h5>
                    <p class="card-text">One of Goa’s busiest beaches, known for water sports and nightlife.</p>
                    <a href="place.php?place=calangute" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover h-100">
                <img src="img/beach/golden.jpg" class="card-img-top" alt="Golden Beach">
                <div class="card-body">
                    <h5 class="card-title">Golden Beach</h5>
                    <p class="card-text">A clean and scenic beach perfect for relaxation and family trips.</p>
                    <a href="place.php?place=golden-beach" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover h-100">
                <img src="img/beach/kochi.jpg" class="card-img-top" alt="Kochi">
                <div class="card-body">
                    <h5 class="card-title">Kochi</h5>
                    <p class="card-text">A historic port city known for Chinese fishing nets and coastal charm.</p>
                    <a href="place.php?place=kochi" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover h-100">
                <img src="img/beach/kovalam.jpg" class="card-img-top" alt="Kovalam">
                <div class="card-body">
                    <h5 class="card-title">Kovalam</h5>
                    <p class="card-text">A crescent-shaped beach town famous for lighthouse views and calm waters.</p>
                    <a href="place.php?place=kovalam" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover h-100">
                <img src="img/beach/lakshwadeep.jpg" class="card-img-top" alt="Lakshadweep">
                <div class="card-body">
                    <h5 class="card-title">Lakshadweep</h5>
                    <p class="card-text">An untouched island group with turquoise lagoons and coral atolls.</p>
                    <a href="place.php?place=lakshdweep" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover h-100">
                <img src="img/beach/radhanagar.jpg" class="card-img-top" alt="Radhanagar Beach">
                <div class="card-body">
                    <h5 class="card-title">Radhanagar Beach</h5>
                    <p class="card-text">One of Asia’s best beaches, famous for white sand and sunsets.</p>
                    <a href="place.php?place=radhanagar" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover h-100">
                <img src="img/beach/udupi.jpg" class="card-img-top" alt="Udupi">
                <div class="card-body">
                    <h5 class="card-title">Udupi</h5>
                    <p class="card-text">A coastal town famous for temples, beaches, and South Indian cuisine.</p>
                    <a href="place.php?place=udupi" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-hover h-100">
                <img src="img/beach/vizag.jpg" class="card-img-top" alt="Vizag">
                <div class="card-body">
                    <h5 class="card-title">Vizag</h5>
                    <p class="card-text">A scenic port city known for beaches, hills, and coastal views.</p>
                    <a href="place.php?place=vizag" class="btn btn-primary mt-auto">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>
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
            <form>
                <input type="email" placeholder="Enter your email" required>
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




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="script.js"></script>
</body>
</html>
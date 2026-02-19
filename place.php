<?php
$places = include 'places-data.php';


$placeKey = $_GET['place'] ?? null;
$place = $places[$placeKey] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $place ? $place['name'] : "Place Not Found"; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/place.css">
</head>
<body>

<div class="container mt-4">
    <?php if ($place): ?>

        <a href="index.php" class="btn btn-outline-secondary mb-3">⬅ Back to Places</a>

        <div class="row g-4 align-items-center">
            <div class="col-md-6">
                <img src="<?php echo $place['image']; ?>" class="img-fluid rounded shadow place-main-img" alt="<?php echo $place['name']; ?>">
            </div>
            <div class="col-md-6">
                <h1 class="place-title"><?php echo $place['name']; ?></h1>
                <p class="place-desc"><?php echo $place['description']; ?></p>

                <div class="info-badges mb-3">
                    <span class="badge bg-primary">⭐ <?php echo $place['rating']; ?> / 5</span>
                    <span class="badge bg-success">🌤 <?php echo $place['weather']; ?></span>
                    <span class="badge bg-warning text-dark">🗓 Best Time: <?php echo $place['best_time']; ?></span>
                </div>

                <a href="<?php echo $place['map']; ?>" target="_blank" class="btn btn-success mb-2">📍 View on Google Maps</a>
            </div>
        </div>

        <hr class="my-4">

        <h3>📸 Photo Gallery</h3>
        <div class="row">
            <?php foreach ($place['gallery'] as $img): ?>
                <div class="col-md-4 mb-3">
                    <img src="<?php echo $img; ?>" class="img-fluid rounded shadow gallery-img" alt="">
                </div>
            <?php endforeach; ?>
        </div>

        <hr class="my-4">

        <h3>🗺 Location Map</h3>
        <div class="map-container mb-4">
            <iframe src="<?php echo $place['map']; ?>&output=embed"
                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <hr class="my-4">

        <h3>🏨 Recommended Hotels</h3>
        <ul class="list-group mb-4">
            <?php foreach ($place['hotels'] as $hotel): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $hotel['name']; ?>
                    <a href="<?php echo $hotel['link']; ?>" target="_blank" class="btn btn-sm btn-primary">Book Now</a>
                </li>
            <?php endforeach; ?>
        </ul>

        <hr class="my-4">

        <h3>🗓️ Suggested Travel Plan</h3>
        <ul class="timeline">
            <?php foreach ($place['plan'] as $day): ?>
                <li><?php echo $day; ?></li>
            <?php endforeach; ?>
        </ul>

    <?php else: ?>
        <div class="alert alert-danger text-center">
            <h2>Place not found!</h2>
            <p>Please go back and select a valid destination.</p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>

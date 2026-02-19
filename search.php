<?php
$places = include 'places-data.php';
if (isset($_GET['q'])) {
    $query = strtolower(trim($_GET['q']));
    $query = str_replace(' ', '-', $query); // handle "golden beach" → "golden-beach"

    // Direct match by key
    if (isset($places[$query])) {
        header("Location: place.php?place=$query");
        exit();
    }

    // Try matching by place name
    foreach ($places as $key => $place) {
        if (stripos($place['name'], $query) !== false) {
            header("Location: place.php?place=$key");
            exit();
        }
    }

    // If no match found
    echo "<h2 style='text-align:center;margin-top:50px;'>No place found for '$query'</h2>";
    echo "<p style='text-align:center;'><a href='index.php'>Go back</a></p>";
}
?>

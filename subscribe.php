<?php
$message = ""; // Variable to hold our alert message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = 'localhost';
    $dbname = 'travel';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $email = filter_var($_POST['user_email'], FILTER_SANITIZE_EMAIL);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $stmt = $pdo->prepare("INSERT INTO subscribers (email) VALUES (:email)");
            $stmt->execute(['email' => $email]);
            $message = "Success! You have been subscribed.";
        }
    } catch (PDOException $e) {
        $message = ($e->getCode() == 23000) ? "You are already subscribed!" : "Error: " . $e->getMessage();
    }

    // Trigger the Javascript Alert
    echo "<script type='text/javascript'>alert('$message'); window.location.href='index.php';</script>";
    exit();
}
?>

<form method="POST">
    <input type="email" name="user_email" placeholder="Enter your email" required>
    <button type="submit">Subscribe</button>
</form>
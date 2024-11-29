<?php
session_start();

// Check if the session variables are set
if (!isset($_SESSION['name'], $_SESSION['email'], $_SESSION['password'])) {
    header("Location: index.php"); // Redirect to the registration page if session variables are not set
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <style>
        body {
            background-image: url(image.jpg);
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .message {
            font-size: 18px;
            margin-bottom: 20px;
            color: red;
            font-size: larger;
        }
        .back-link {
            padding: 10px 20px;
            background: #6c5ce7;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .back-link:hover {
            background: #5b4dc4;
        }
    </style>
</head>
<body>
    <div class="message">
        <h1>Registration Successful!</h1>
        <p><strong>Name:</strong> <?php echo $_SESSION['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
        <p><strong>Password:</strong> <?php echo $_SESSION['password']; ?></p>
    </div>
    <a href="index.php" class="back-link">Go Back</a>
</body>
</html>

<?php
// Optional: Clear session data if no longer needed
// session_unset();
// session_destroy();
?>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$gender = $_POST['gender'];

if ($password === $confirm_password) {
    // If both passwords match
    header("Location: ../register.php?success=Passwords match!");
    exit();
} else {
    // If passwords do not match
    $error = "Passwords do not match";
    header("Location: ../register.php?error=" . urlencode($error));
    exit();
}
?>

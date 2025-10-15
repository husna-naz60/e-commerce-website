<?php
$name = $_POST['name'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$gender = $_POST['gender'];

if ($password === $confirm_password) {
    // If both passwords match
    $conn = mysqli_connect('localhost', 'root','', 'ecommercewebsite' ) or die('Connection Failed : ' . mysqli_connect_error());
    $query = "INSERT INTO users (name, email, whatsapp, password, gender) VALUES ('$name', '$email', '$whatsapp', '$password', '$gender')";
    mysqli_query($conn, $query) or die('Query Failed : ' . mysqli_error($conn));
    $error = "Thank you for registering with us!";
    header('Location: ../register.php?success=' . $error);
    exit();
} else {
    // If passwords do not match
    $error = "Passwords do not match";
    header("Location: ../register.php?error=" . urlencode($error));
    exit();
}
?>
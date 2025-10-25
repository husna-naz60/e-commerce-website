<?php
$name = $_POST['name'];              // Name from register form
$email = $_POST['email'];            // Email
$whatsapp = $_POST['whatsapp'];      // WhatsApp number
$password = $_POST['password'];      // Password
$confirm_password = $_POST['confirm_password']; // Confirm password
$gender = $_POST['gender'];          // Gender

if ($password === $confirm_password) {
   
    include('actions/connection.php');  // include the database connection file

    // Check if email already exists
    $que = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $que) or die('Query Failed: ' . mysqli_error($conn));
    $row = mysqli_num_rows($res);

    if ($row > 0) {

        $error = "Email already exists";
        header("Location: ../register.php?error=" . urlencode($error));
        exit();
    }

    // Simple insert query for registration
    $query = "INSERT INTO users (name, email, whatsapp, password, gender)
              VALUES ('$name', '$email', '$whatsapp', '$password', '$gender')";
    mysqli_query($conn, $query) or die('Query Failed: ' . mysqli_error($conn));

    $success = "Thank you for registering with us!";
    header("Location: ../register.php?success=" . urlencode($success));
    exit();

} else {
    // If passwords do not match
    $error = "Passwords do not match";
    header("Location: ../register.php?error=" . urlencode($error));
    exit();
}
?>

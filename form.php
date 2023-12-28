<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header('location: index.php');
}

$name = htmlspecialchars(trim($_POST['name']));
$instagram = htmlspecialchars(trim($_POST['instagram']));
$followers = htmlspecialchars(trim($_POST['followers']));
$email = htmlspecialchars(trim($_POST['email']));

$errors = [];
if (empty($name)) {
    $errors[] = "Name is required";
}
if (empty($instagram)) {
    $errors[] = "Instagram is required";
}
if (!is_numeric($followers) || $followers < 0) {
    $errors[] = "Invalid followers count";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format";
}

if (count($errors) > 0) {
    session_start();
    $_SESSION['form_errors'] = $errors;
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['instagram'] = $_POST['instagram'];
    $_SESSION['followers'] = $_POST['followers'];
    $_SESSION['email'] = $_POST['email'];
    header('location: index.php');
    exit;
}

$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    header('location: index.php');
}

$stmt = $conn->prepare("INSERT INTO users_data (name, instagram, followers, email) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssis", $name, $instagram, $followers, $email);

$stmt->execute();

$stmt->close();
$conn->close();

header('location: success.php?name='.$name);
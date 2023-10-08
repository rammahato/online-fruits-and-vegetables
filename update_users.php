<?php
@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:login.php');
}

if (isset($_GET['edit'])) {
    $edit_id = $_GET['edit'];
    $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
    $select_user->execute([$edit_id]);
    $user_data = $select_user->fetch(PDO::FETCH_ASSOC);
}

// ... (rest of your code)
?>

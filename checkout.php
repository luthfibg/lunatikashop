<?php

$title = 'Checkout';
$header = 'components/user_header.php';
$content = '';
$footer = 'components/footer.php';

include('components/connection.php');

session_start();
$user_id = $_SESSION['user_id'];
if (!isset($user_id)) {
    header('location:user_login.php');
}

include('layouts/checkout_layout.php');

?>
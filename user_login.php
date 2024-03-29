<?php

$title = 'Login';
$header = 'components/user_header.php';
$content = 'components/user_login_card.php';
$footer = 'components/footer.php';
$user_register = 'user_register.php';

include('components/connection.php');

session_start();

// if (isset($_SESSION[$user_id])) {
//     $user_id = $_SESSION[$user_id];
// } else {
//     $user_id = '';
// }

// include('components/user_header.php');
include('layouts/user_login_layout.php');

if (isset($_POST['user_submit_login'])) {

    $email = $_POST['email'];
    $email = filter_var(htmlspecialchars($email));
    $password = sha1($_POST['password']);
    $password = filter_var(htmlspecialchars($password));

    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
    $select_user->execute([$email, $password]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);

    if ($select_user->rowCount() > 0) {
        $_SESSION['user_id'] = $row['id'];
        $message[] = 'Login Success';
        header('location:home.php');
    } else {
        $message[] = 'Login Failed, Please Check Email or Password';
    }
}

?>
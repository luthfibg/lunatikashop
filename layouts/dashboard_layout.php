<?php

session_start();

$admin_id = $_SESSION['admin_id'];
if (!isset($admin_id)) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Metro UI -->
    <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro-all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../resources/css/admin.css">
    <link rel="stylesheet" href="../resources/css/responsive_style.css">
    <link rel="stylesheet" href="../resources/css/theme.css">
    <title>
        <?php echo $title; ?>
    </title>
</head>

<body style="background: var(--dark-base);">
    <!-- <div class="container mw-100 h-100 pos-absolute d-flex flex-align-center flex-column">
        /* <?php
        // if (isset($message)) {
        //    foreach ($message as $message) {
        //       echo '
        // <div class="message">
        //   <span>' . $message . '</span>
        //   <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        // </div>
        //   ';
        //    }
        // }
        ?> */
    </div> -->
    <?php include 'components/admin_header.php' ?>
    <div class="container">
        <section class="dashboard">
            <div class="box">
                <h3>Welcome</h3>
                <p>
                    <?= $fetch_profile['name'] ?>
                </p>
                <a href="update_profile.php" class="btn btn-sm">Update Profile</a>
            </div>

            <div class="box">
                <?php
                $total_completes = 0;
                $select_completes = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
                $select_completes->execute(['completed']);

                while ($fetch_completes = $select_completes->fetch(PDO::FETCH_ASSOC)) {
                    $total_completes += $fetch_completes['total_price'];
                }
                ?>

                <h3>
                    <span>$</span>
                    <?= $total_completes; ?>
                    <span>/-</span>
                </h3>
                <p>Total Completes</p>
                <a href="placed_orders.php" class="btn btn-sm">See Orders</a>
            </div>
        </section>
    </div>

    <script src="resources/js/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
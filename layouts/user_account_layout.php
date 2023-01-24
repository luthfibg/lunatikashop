<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Metro UI -->
    <!-- <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro-all.min.css"> -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="resources/css/admin.css">
    <link rel="stylesheet" href="resources/css/account.css">
    <link rel="stylesheet" href="resources/css/theme.css">
    <link rel="stylesheet" href="resources/css/main.css">
    <link rel="stylesheet" href="resources/css/responsive_style.css">
    <title>
        <?php echo $title; ?>
    </title>
</head>

<body style="background: var(--dark-base);">

    <!-- default embeded header start -->
    <?php include 'components/admin_header.php' ?>
    <!-- default embeded header end -->

    <div class="container">
        <!-- php notification section start -->
        <?php
        $message = array();
        if (isset($message)) {
            foreach ($message as $message) {
                echo '
        <div class="message">
          <span>' . $message . '</span>
          <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
          ';
            }
        }
        ?>
        <!-- php notification section end -->

        <!-- main content start -->
        <section class="user-account py-5">
            <h3 class="my-5 text-center">User Account</h3>
            <div class="box-container grid">
                <?php

                $select_user_account = $conn->prepare("SELECT * FROM `users`");
                $select_user_account->execute();

                if ($select_user_account->rowCount() > 0) {
                    while ($fetch_user_accounts = $select_user_account->fetch(PDO::FETCH_ASSOC)) {
                        # code...
                        ?>
                        <?php include('components/user_account_box.php'); ?>
                        <?php
                    }
                } else {
                    echo '<p class="empty">No Account Registered</p>';
                }


                ?>
            </div>
        </section>
        <!-- main content end -->
    </div>

    <script src="resources/js/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
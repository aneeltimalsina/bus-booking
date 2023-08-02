<?php
//session_start();
if ((!isset($_SESSION['username']) || empty($_SESSION['username']))) {
    header("location:/users/passenger-login.php");
}

include 'action/dbconnation.php';


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/custom.css">
<!--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>-->
</head>
<body>

<main>
    <!--    <header>-->
    <!--        --><?php //include 'includes/header.php' ?>
    <!--    </header>-->
    <navbar class="text-black">
        <?php include 'includes/navigation.php' ?>
    </navbar>
    <section class="container">
        <?= $content ?>
    </section>
    <footer>
        <?php include 'includes/footer.php' ?>
    </footer>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
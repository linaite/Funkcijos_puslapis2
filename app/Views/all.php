<?php
include_once '../php/array.php';
include_once '../Models/functions.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body class="m-auto">
<header>
    <?php get_menu($array); ?>
</header>
<main class="container">
    <section class="mt-5">
        <div class="row">
            <div class="col-12">
                <?php get_table($array) ;?>
            </div>
    </section>
</main>

<script src="../../assets/js/jQuery.js"></script>
<script src="../../assets/js/bootstrap.bundle.js"></script>
</body>
</html>
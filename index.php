<?php include "./utils/connection.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final project - LIA</title>

    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>

<?php include_once "./components/header.php"; ?>
<?php include_once "./components/heroSection.php"; ?>
<?php include_once "./components/aboutSection.php"; ?>
<?php include_once "./components/videoGallery.php"; ?>
<?php include_once "./components/storiesSection.php"; ?>
<?php include_once "./components/footer.php"; ?>


<?php $conn->close(); ?>


<script src="assets/js/main.js"></script>
</body>
</html>
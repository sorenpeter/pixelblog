<?php include './config.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" media="all" href="./layout/default.css?v=1.1">
    <link rel="stylesheet" type="text/css" media="all" href="./custom.css?v=1.1">
    <title><?=$title?> - Timeline</title>
</head>
<body>

<!-- PHP: GET HEADER  --><?php include './layout/header.php';?>

<!-- PHP: GET PROFILE CARD  --><?php include './layout/profile.php';?>

<main class="timeline">

<!-- PHP: GET TIMELIE  --><?php include './system/timeline.php'?>

</main>

<!-- PHP: GET FOOTER  --><?php include './layout/footer.php';?>

</body>
</html> 
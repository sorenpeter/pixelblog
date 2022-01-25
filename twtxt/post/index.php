<?php include '../config.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link rel="stylesheet" type="text/css" media="all" href="../layout/default.css" />
    <link rel="stylesheet" type="text/css" media="all" href="../custom.css" />
    <title><?=$title?> - post and upload</title>
</head>
<body>

<!-- PHP: GET HEADER  --><?php include $base_path.'layout/header.php';?>

<nav class="profileCard">

    <!-- PHP: GET NAV-BAR  --><?php include $base_path.'layout/nav-bar.php' ?>

<hr>

    <div class="upload"> 
        
        <p><ul class="fullwidth">
            <li><i class="ti ti-upload"></i>&nbsp;<strong>Upload images</strong> </li>
            <li class="right"><small>(Select the images files you want to uploade)</small></li>
        </ul></p>

        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple>
            <input type="submit" name="submit" value="Upload">
        </form>

        <p><ul class="fullwidth">
            <li><i class="ti ti-photo"></i></i>&nbsp;<strong>Images updated today</strong> </li>
            <li class="right"><small>(Copy the markdown code into your post below)</small></li>
        </ul></p>

        <?php

            $files = glob($media.date('Y-m-d_')."*.{jpg,jpeg,png,gif}", GLOB_BRACE);

            for ($i=0; $i<count($files);$i++) {

                $file = $files[$i];

                $public_file = $public_media.basename($file);

                echo '<table class="center"><tr class="preview">';
                    echo '<td><a href="'.$public_file.'">';
                        echo '<img src="'.$public_file.'">';
                    echo '</a></td>';
                
                    //$file = str_replace('../', $base_url, $file);
                    echo '<td><code>![]('.$public_file.')</code></td>';
                echo '</tr></table>';
            }
        ?>

    </div>

    <?php include "post-form.php" ?>

</nav>


<main class="timeline">

    <?php include_once '../system/timeline.php' ?>

</main>

    <!-- PHP: GET FOOTER  --><?php include $base_path.'layout/footer.php';?>

</body>
</html>
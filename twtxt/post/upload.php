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
            <li><i class="ti ti-photo"></i></i>&nbsp;<strong>Images updated just now</strong> </li>
            <li class="right"><small>(Copy the markdown code into your post)</small></li>
        </ul></p>

<?php

// Credits: https://www.geeksforgeeks.org/how-to-select-and-upload-multiple-files-with-html-and-php-using-http-post/

//$media = '../../twtxt';

// Check if form was submitted
if(isset($_POST['submit'])) {

	// Configure upload directory and allowed file types
	$upload_dir = $media.DIRECTORY_SEPARATOR;
	$allowed_types = array('jpg', 'png', 'jpeg', 'gif');
	
	// Define maxsize for files i.e 2MB
	$maxsize = 5 * 1024 * 1024;

	// Checks if user sent an empty form
	if(!empty(array_filter($_FILES['files']['name']))) {

		// Loop through each file in files[] array
		foreach ($_FILES['files']['tmp_name'] as $key => $value) {
			
			$file_tmpname = $_FILES['files']['tmp_name'][$key];
			$file_name = $_FILES['files']['name'][$key];
			$file_size = $_FILES['files']['size'][$key];
			$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);


			// Apped date to filename
			$file_name = date('Y-m-d_').$file_name;

			// Replace spaces with dashes and set all lower case
			$file_name = str_replace(' ', '-', strtolower($file_name));

			// Set upload file path
			$file_path = $upload_dir.$file_name;

			// Check file type is allowed or not
			if(in_array(strtolower($file_ext), $allowed_types)) {

				// Verify file size - 2MB max
				if ($file_size > $maxsize)		
					echo "Error: File size is larger than the allowed limit.";

				// If file with name already exist then append time in
				// front of name of the file to avoid overwriting of file
				if(file_exists($file_path)) {
					echo "Error uploading {$file_name} - File already exists! <br />";
					// $file_path = $upload_dir.date('Y-m-d_').$file_name;
					
					// if( move_uploaded_file($file_tmpname, $file_path)) {
					// 	echo "{$file_name} successfully uploaded <br />";
					// }
					// else {					
					// 	echo "Error uploading {$file_name} - File already exists! <br />";
					// }
				}
				else {
				
					if( move_uploaded_file($file_tmpname, $file_path)) {
						
						//$full_url = "http://{$_SERVER['HTTP_HOST']}/twtxt/".$file_name;
						$public_file = $public_media.basename($file_path);

		                echo '<table class="center"><tr class="preview">';
		                    echo '<td><a href="'.$public_file.'">';
		                        echo '<img src="'.$public_file.'">';
		                    echo '</a></td>';
		                
		                    //$file = str_replace('../', $base_url, $file);
		                    echo '<td><code>![]('.$public_file.')</code></td>';
		                echo '</tr></table>';


						// echo "{$file_path} successfully uploaded <br />";
						//echo "<img src='{$file_path}' width='48' height='48'>";
						//echo "<code>![]({$full_url})</code><br />";
						//echo "<img src=".$file_path." height=200 width=300 />";
					}
					else {					
						echo "Error uploading {$file_name} (no explanation...)<br />";
					}
				}
			}
			else {
				
				// If file extension not valid
				echo '<p class="warning">';
					echo "Error uploading {$file_name} ";
					echo "({$file_ext} file type is not allowed)<br / >";
				echo '</p>';
			}
		}
	}
	else {
		
		// If no files selected
		echo "No files selected.";
	}
}

?>

<a href="<?=$public_url?>post" class="button">Go back to post and upload</a>

<?php // include "post-form.php" ?>

</div>
</nav>

<main class="timeline">

<?php // include_once '../system/timeline.php' ?>

</main>

    <!-- PHP: GET FOOTER  --><?php include $base_path.'layout/footer.php';?>

</body>
</html>    

<?php

// Variables set by user

$title = "pixelblog"; // used in title-tag shown in the tab of your browser
$tagline = "a visual focused microblog powered by twtxt.txt"; 

$txt_file = "../twtxt.txt"; // need to be relative to where you have installed pixelblog

// Profile settings - TODO: get from the twtxt.txt
$nick = "sørenpeter"; // What's ya name?
$avatar_file = "../avatar.png"; // TODO: split into relative (user facing) and absolute (backend)
$description = "visualist and live coder"; // who are you?


// Path for uploading media:
//$upload_folder = "media/"; // relative path to where you want pixelblog-post to uploade images to -- must end with a slash: / 
$upload_folder = "../twtxt/"; // default is "media/"
//echo $upload_folder . '<br>';


// The base url for this Pixelblog -- must end with a slash: / 
$public_url = "https://example.com/twtxt/";

//$public_media = "https://example.com/pixelblog/media/"; // defaul(ish)
$public_media = "https://example.com/twtxt/";

/* --------------------------------- */
//echo '<hr>'; 
#TODO split here and move to this below to system/globals.php

// Internal base path for pixelblog
$base_path = dirname(__FILE__).DIRECTORY_SEPARATOR;
//echo $base_path . '<br>';

//$base_url = '//'.$_SERVER['SERVER_NAME'].DIRECTORY_SEPARATOR;
$base_url = $public_url; // TODO: replace all $base_url with $public_url
//echo $base_url . '<br>';

// Public path to avatar file:
$avatar = $public_url.$avatar_file; // TODO: add realpath and use propper detection instead of hardcoded url
//echo $avatar  . '<br>';

// Backend path to twtxt.txt file:
$twtxt = realpath($base_path.$txt_file);
//echo $twtxt  . '<br>';

// Backend path to upload folder:
$media = realpath($base_path.$upload_folder).DIRECTORY_SEPARATOR;
//echo $media  . '<br>';


//$twtxt  = "https://example.com/twtxt.txt";
//$twtxt  = "https://twtxt.net/user/darch/twtxt.txt";

// echo '<hr>';


// echo $_SERVER['SERVER_NAME']  . '<br>';
// // echo $_SERVER['DOCUMENT_ROOT'] ;
// // echo dirname(__FILE__) . '<br>';
// // echo realpath('../twtxt.txt') . '<br>';
// echo $_SERVER['SCRIPT_FILENAME'] . '<br>';
// // echo $_SERVER['REQUEST_URI'] . '<br>';
// echo $_SERVER['SCRIPT_NAME'] . '<br>';
// echo $_SERVER['PHP_SELF'] . '<br>';
// echo dirname($_SERVER['PHP_SELF']) . '<br>'; 
// echo basename($_SERVER['PHP_SELF']) . '<br>'; 
// echo $_SERVER['SERVER_NAME'] . '<br>';
// echo $_SERVER['HTTP_HOST'] . '<br>';
// echo $_SERVER['DOCUMENT_ROOT'] . '<br>';
// //echo $_SERVER['HTTP_REFERER'] . '<br>';
// // echo $_SERVER['HTTP_USER_AGENT'] . '<br>';

// echo "<pre>config loaded</pre>";

?>

<!-- Load icons from https://tabler-icons.io -->
<link rel="stylesheet" href="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.css">


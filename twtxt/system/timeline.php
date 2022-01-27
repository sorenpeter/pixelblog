<?php
// Include the file
include_once $base_path.'system/picoblog.php';

// Instantiate the class with the source file
// $mb = new \hxii\PicoBlog('blog.txt');
// $mb = new \hxii\PicoBlog('../twtxt.txt');
$mb = new \hxii\PicoBlog($twtxt);

// Parse query string and get blog entries
$query = $mb->parseQuery();
//$entries = ($query) ? $mb->getEntries($query) : $mb->getEntries('all');
$entries = ($query) ? $mb->getEntries($query) : $mb->getEntries('all', true); // sort in reverse is now true

?>

<center>
    <?php
    // Display message and link to main list if viewing a filtered entry list
    // if ($query) {
        // echo '<small class="warning">Currently only viewing posts from:</small><br><code>' . implode('', $query) . '</code>';
        // echo '<p><a href="' . $_SERVER['PHP_SELF'] . '">Go back to full timeline</a></p>';
    // }
    ?>
</center>

<ul>
    <!-- Render entries -->
    <?= $mb->renderEntries($entries, '<li class="e">{entry}</li>'); ?>
</ul>

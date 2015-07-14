<?php
exec("sh /var/www/html/home/wp-content/commands/open_all_relay20.sh");
//header('Location:' . $_SERVER['HTTP_REFERER']);
//echo "DUD IS ON";
//sleep (3);
header("location: http://home.omri-bm.com:81/wp-content/messages/dud-is-on.php");

// ob_start(); // ensures anything dumped out will be caught

// ####do stuff here
// $url = 'http://home.omri-bm.com:81/wp-content/messages/dud-is-on.php'; // this can be set based on whatever

// ###clear out the output buffer
// while (ob_get_status())
// {
//     ob_end_clean();
// }

// ###no redirect
// header( "Location: $url" );

?>
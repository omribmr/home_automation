<?php
exec("sh /var/www/html/home/wp-content/commands/open_all_relay20.sh");
//header('Location:' . $_SERVER['HTTP_REFERER']);
//echo "DUD IS ON";
//sleep (3);
header("location: /wp-content/messages/dud-is-on.php");
?>
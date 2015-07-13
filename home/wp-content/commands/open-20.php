<?php
exec("sh /var/www/html/home/wp-content/commands/open_all_relay20.sh");
header( "refresh:1;url=http://home.omri-bm.com/wp-content/messages/dud-is-on.php" );
header('Location:' . $_SERVER['HTTP_REFERER']);
?>
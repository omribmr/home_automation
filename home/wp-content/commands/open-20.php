<?php
exec("sh /var/www/html/home/wp-content/commands/open_all_relay20.sh");
//header('Location:' . $_SERVER['HTTP_REFERER']);
//sleep (3);
header("location: http://home.omri-bm.com:81/?page_id=43");
?>
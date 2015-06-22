<?php
exec("sh /var/www/html/home/wp-content/commands/open_all_15min_relay20.sh");
header('Location:' . $_SERVER['HTTP_REFERER']);
?>
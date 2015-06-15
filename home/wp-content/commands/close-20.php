<?php
exec("sh /var/www/html/home/wp-content/commands/close_all_relay20.sh");
header('Location:' . $_SERVER['HTTP_REFERER']);
test
?>
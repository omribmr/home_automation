<?php
exec("sh /var/www/html/home/wp-content/commands/close_all_relay20.sh");
header('Location: /?page_id=31');
sleep(2);
header('Location:' . $_SERVER['HTTP_REFERER']);
test
?>
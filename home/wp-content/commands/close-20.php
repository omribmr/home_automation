<?php
exec("sh /var/www/html/home/wp-content/commands/close_all_relay20.sh");
$str = "Turning off the DOOD";
echo $str;
sleep(2);
header('Location:' . $_SERVER['HTTP_REFERER']);
test
?>
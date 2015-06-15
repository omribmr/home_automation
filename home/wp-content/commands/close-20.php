<?php
echo '<textarea style="color:#FF0000;" name="message">Turning off the DOOD</textarea>';
exec("sh /var/www/html/home/wp-content/commands/close_all_relay20.sh");
sleep(2);
header('Location:' . $_SERVER['HTTP_REFERER']);
test
?>
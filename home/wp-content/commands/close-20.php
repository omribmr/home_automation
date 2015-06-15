<?php
exec("sh /var/www/html/home/wp-content/commands/close_all_relay20.sh");
echo '<textarea style="color:#FF0000;" name="message">Turning off the DOOD</textarea>';
sleep(2);
header('Location:' . $_SERVER['HTTP_REFERER']);
test
?>
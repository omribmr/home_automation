<?php
exec("sh /var/www/html/home/wp-content/commands/close_all_relay20.sh");
echo '<script type="text/javascript">alert("הדוד כבוי");window.history.go(-1);</script>';
sleep(2);
header('Location:' . $_SERVER['HTTP_REFERER']);
test
?>
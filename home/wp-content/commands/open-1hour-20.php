<?php
exec("sh /var/www/html/home/wp-content/commands/open_all_1hour_relay20.sh");
header("location: http://home.omri-bm.com:81/?page_id=43");
?>
#!/bin/sh

sh /var/www/html/home/wp-content/commands/open_all_relay20.sh
at -f sh /var/www/html/home/wp-content/commands/close_all_relay20.sh now + 30 minutes
exit
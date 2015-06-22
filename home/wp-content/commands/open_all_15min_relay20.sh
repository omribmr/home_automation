#!/bin/sh

sh open_all_relay20.sh
at -f /var/www/html/home/wp-content/commands/close_all_relay20.sh now + 15 minutes
exit
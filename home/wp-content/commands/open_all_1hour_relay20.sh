#!/bin/sh

sh open_all_relay20.sh
at now + 5 minutes -f 'sh close_all_relay20.sh'
exit
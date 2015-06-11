#!/bin/sh
# replace cmd1 for the command to execute
 
host=192.168.1.20
port=2000
#user=myuser
#pass=mypass
cmd1='n'
 
( echo open ${host} ${port}
sleep 3
echo ${cmd1}
sleep 2
 ) | telnet

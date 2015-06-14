#!/bin/sh
# replace cmd1 for the command to execute
 
host=192.168.1.20
port=2000
#user=myuser
#pass=mypass
cmd1='d'
 
( echo open ${host} ${port}
sleep 1
echo ${cmd1}
 ) | telnet

#!/bin/bash

# Port setting
stty -f /dev/tty.usbserial-AL00DYGD ispeed 9600 ospeed 9600 -ignpar cs8 -cstopb -echo -hupcl
echo "d" > /dev/tty.usbserial-AL00DYGD
exit
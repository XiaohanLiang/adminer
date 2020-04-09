#! /bin/bash

function am_i_running() {
    echo $(netstat -antp | grep LISTEN | grep 9510 | wc -l)
}


function run() {
    
    if [ $(am_i_running) -eq 0 ]
    then
        php -S 0:9510 -t /usr/local/adminer &
        echo $! > /var/run/adminer.pid
    fi
}

run

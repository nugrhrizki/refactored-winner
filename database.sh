#! /usr/bin/env bash

# sadly mariadb not work on my laptop :(
# mysql -h 127.0.0.1 -P 3306 --protocol=TCP -u root -p

# So i switch to postgresql
docker exec -it $1 psql -U postgres technicaltest

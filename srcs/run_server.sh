#!/bin/bash

echo "==================> Initialize services. <=================="
service mysql start
echo "CREATE DATABASE test_db" | mariadb
echo "GRANT ALL ON test_db.* TO 'admin'@'localhost' IDENTIFIED BY 'toor' WITH GRANT OPTION;" | mariadb
echo "FLUSH PRIVILEGES;" | mariadb
service php7.3-fpm start
service nginx start
echo "====================> Server is ready. <===================="
bash
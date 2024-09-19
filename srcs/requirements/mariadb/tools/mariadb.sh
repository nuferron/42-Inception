#!/bin/bash

mkdir -p /run/mysqld
chown mysql:mysql /run/mysqld

if [ ! -d /var/lib/mysql/${MYSQL_DB} ];
then
	mysql -u ${MYSQL_ROOT} -p${MYSQL_ROOT_PWD} -e "CREATE DATABASE ${MYSQL_DB};"
	mysql -e "CREATE USER '${MYSQL_USR}'@'%' IDENTIFIED BY '${MYSQL_PWD}'"
	mysql -e "GRANT ALL ON ${MYSQL_DB}.* TO '${MYSQL_USR}'@'%' IDENTIFIED BY '${MYSQL_PWD}' WITH GRANT OPTION;"
	mysql -e "FLUSH PRIVILEGES;"
fi

mysqladmin -u ${MYSQL_ROOT} --password=${MYSQL_ROOT_PWD} shutdown

exec mysqld --user=mysql --console

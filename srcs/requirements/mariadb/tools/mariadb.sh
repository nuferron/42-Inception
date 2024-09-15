#!/bin/bash
# Script en bash que automatiza la configuración inicial de MariaDB dentro de un contenedor Docker

service mariadb start

# Utilidad que ayuda a mejorar la seguridad de la instalación de MariaDB
mysql_secure_installation << FB_EOF

n
Y
$DB_ROOT_PWD
$DB_ROOT_PWD
Y
Y
Y
Y
FB_EOF

# si el directorio de la base de datos no existe...
if [ ! -d /var/lib/mysql/${MYSQL_DB} ];
then
	mysql -u ${MYSQL_ROOT} -p${MYSQL_ROOT_PWD} -e "CREATE DATABASE $MYSQL_DB;"
	mysql -e "CREATE USER '$MYSQL_USR'@'%' IDENTIFIED BY '$MYSQL_PWD'"
	mysql -e "GRANT ALL ON $MYSQL_DB.* TO '$MYSQL_USR'@'%' IDENTIFIED BY '$MYSQL_PWD' WITH GRANT OPTION;"
	mysql -e "FLUSH PRIVILEGES;"
fi

service mariadb stop
mysqld


#! /bin/bash

# Wait for MariaDB to be ready
echo "Waiting for MariaDB to be ready..."
while ! mysqladmin ping -h"$MYSQL_HOST" --silent; do
    sleep 2
    echo "Waiting for MariaDB..."
done

if [ -f ./wp-config.php ]
then
    echo "WordPress already exists"
else
    echo "Downloading and setting up WordPress..."
    wp core download --allow-root
    wp config create --dbname=$MYSQL_DB --dbuser=$MYSQL_USR --dbpass=$MYSQL_PWD --dbhost=$MYSQL_HOST --allow-root
    wp core install --url=$DOMAIN_NAME --title="$WP_TITLE" --admin_user=$WP_ADMIN --admin_password=$WP_ADMIN_PWD --admin_email=$WP_ADMIN_EMAIL --skip-email --allow-root
    wp user create $WP_USR $WP_EMAIL --role=author --user_pass=$WP_USR_PWD --allow-root
    wp theme install twentytwentyfour --activate --allow-root
fi

# Start PHP-FPM
/usr/sbin/php-fpm7.4 -F;

#!/bin/bash

sleep 10

# Check if WordPress is already installed
if [ -f ./wp-config.php ]; then
    echo "WordPress already exists."
else
    echo "Downloading and configuring WordPress..."

    # Download WordPress core files
    wp core download --allow-root

    # Generate wp-config.php with the given DB details
    wp config create \
        --dbname="$MYSQL_DB" \
        --dbuser="$MYSQL_USR" \
        --dbpass="$MYSQL_PWD" \
        --dbhost="$MYSQL_HOSTNAME" \
        --allow-root

    # Install WordPress with given site details
    wp core install \
        --url="$DOMAIN_NAME" \
        --title="$WP_TITLE" \
        --admin_user="$WP_ADMIN" \
        --admin_password="$WP_ADMIN_PWD" \
        --admin_email="$WP_ADMIN_EMAIL" \
        --skip-email \
        --allow-root

    # Create an additional user
    wp user create "$WP_USR" "$WP_EMAIL" \
        --role=author \
        --user_pass="$WP_PWD" \
        --allow-root

    # Install and activate a theme
    wp theme install twentytwentyfour --activate --allow-root
fi

# Start PHP-FPM
/usr/sbin/php-fpm7.4 -F

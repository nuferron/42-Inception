FROM debian:bullseye

RUN apt-get update -y \
	&& apt-get install -y \
	mariadb-server

EXPOSE 3306

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY tools/mariadb.sh /etc/mariadb.sh


RUN chmod a+x /etc/mariadb.sh


RUN mkdir -p /var/run/mysqld \
	&& chown -R mysql:mysql /var/run/mysqld \
	&& chmod 777 /var/run/mysqld

RUN mysql_install_db

ENTRYPOINT [ "/etc/mariadb.sh" ]


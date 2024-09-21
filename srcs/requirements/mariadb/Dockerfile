FROM debian:bullseye

RUN apt-get update -y \
	&& apt-get upgrade -y \
	&& apt-get install mariadb-server -y

EXPOSE 3306

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY tools/mariadb.sh /usr/local/bin/mariadb.sh


RUN chmod a+x /usr/local/bin/mariadb.sh

RUN mkdir -p /var/run/mysqld \
	&& chown -R mysql:mysql /var/run/mysqld \
	&& chmod 755 /var/run/mysqld

ENTRYPOINT [ "/bin/bash", "/usr/local/bin/mariadb.sh" ]

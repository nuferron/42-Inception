FROM debian:bullseye

RUN apt -y update
RUN apt install -y nginx && apt install openssl -y

EXPOSE 443

COPY ./tools/nginx_init.sh /var/www/.
COPY ./conf/nginx_conf /etc/nginx/sites-enabled/default

RUN chmod +x /var/www/nginx_init.sh

ENTRYPOINT [ "/bin/bash", "/var/www/nginx_init.sh" ]

CMD ["nginx", "-g", "daemon off;"]

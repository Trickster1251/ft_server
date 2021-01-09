FROM debian:buster

RUN apt-get upgrade && \ 
	apt-get update && \
    apt-get install -y \
    wget \
    nginx \
    mariadb-server \
    php-fpm php-mysql php-mbstring \
	vim

WORKDIR /var/www/

RUN	wget  https://wordpress.org/latest.tar.gz && \
    tar -xvf latest.tar.gz && \
    rm -rf latest.tar.gz &&\
	wget  https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz && \
    tar -xvf phpMyAdmin-5.0.4-all-languages.tar.gz && \
    mv phpMyAdmin-5.0.4-all-languages phpMyAdmin && rm -rf phpMyAdmin-5.0.4-all-languages.tar.gz

WORKDIR /etc/nginx/ssl/

RUN	openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
            -out ssl_certificate.crt \
            -keyout ssl_key.key \
            -subj "/C=RU/ST=Tatarstan State/L=Kazan/O=School21/OU=It Security/CN=localhost"

COPY srcs/nginx.conf /etc/nginx/sites-available/
COPY srcs/config.inc.php /var/www/phpMyAdmin/
COPY srcs/wp-config.php /var/www/wordpress/
COPY srcs/run_server.sh /var/www/
COPY srcs/autoindex.sh /var/www/

RUN ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/

WORKDIR /var/www/

CMD bash ./run_server.sh
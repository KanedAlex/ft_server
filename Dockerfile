# Usage : 
FROM debian:buster
#
MAINTAINER Alexandre Lienard <alienard@student.42.fr>

ADD 	srcs /srcs

RUN	apt-get update; \
	apt-get upgrade; \
	apt-get	install -y dpkg gnupg wget vim curl && \
	apt-get install -y nginx && \
	service nginx start && \
	apt-get install -y php php-cli php-mysql php-curl php-gd php-intl php-fpm php-mbstring && \
	service php7.3-fpm start && \
	apt-get update; \
	apt-get install -y mariadb-server && \
	service mysql start && \
	echo "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;" | mysql && \
	echo "GRANT ALL ON wordpress.* TO 'wordpress_user'@'localhost' IDENTIFIED BY 'mdp';" | mysql && \
	echo "FLUSH PRIVILEGES;" | mysql && \
	apt-get install -y wordpress && \
	ln -s /usr/share/wordpress/ /var/www/html/ && \
	wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz && \
	tar xvf phpMyAdmin-4.9.0.1-all-languages.tar.gz && \
	rm phpMyAdmin-4.9.0.1-all-languages.tar.gz && \
	mv phpMyAdmin-4.9.0.1-all-languages/ /usr/share/phpmyadmin && \
	ln -s /usr/share/phpmyadmin /var/www/html/ && \
	apt-get clean; \
	rm -rf /var/lib/apt/lists/*; \
	rm -rf /var/www/html/index.html 

COPY	srcs/nginx/* /etc/nginx/sites-available/
COPY	srcs/wp-config.php /var/www/html/wordpress/wp-config.php
COPY	srcs/index* /var/www/html/
COPY	srcs/ssl/* /etc/nginx/ssl/

EXPOSE	80:80
EXPOSE	443:443

CMD	service php7.3-fpm start && \
	service mysql start && \
	bash
#	nginx -g "daemon off;"

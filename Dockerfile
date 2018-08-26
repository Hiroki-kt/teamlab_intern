FROM php:7-fpm

# add Driver
RUN docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd && \
	docker-php-ext-install pdo_mysql


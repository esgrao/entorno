FROM php:8.1-apache
# RUN docker-php-ext-install mysqli
#añadir extensiónes para usar pdo con mysql
RUN docker-php-ext-install pdo pdo_mysql
# /usr/local/bin/docker-php-ext-install -j5 gd mbstring mysqli pdo pdo_mysql shmop

#activar módulo rewrite a apache
#lo usaremos para usar url amigables: /user/show/1 
#en vez de /index.php?contrller=user&method=show&id=1
RUN a2enmod rewrite headers
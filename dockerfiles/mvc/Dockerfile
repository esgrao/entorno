FROM php:7.4-apache
# RUN docker-php-ext-install mysqli
#añadir extensiónes para usar pdo con mysql
RUN docker-php-ext-install pdo pdo_mysql
# /usr/local/bin/docker-php-ext-install -j5 gd mbstring mysqli pdo pdo_mysql shmop

#activar módulo rewrite a apache
#lo usaremos para usar url amigables: /user/show/1 
#en vez de /index.php?contrller=user&method=show&id=1
RUN a2enmod rewrite headers

#modificamos el punto de entrada o document_root
#suele ser interesante que la carpeta public sea un subdirectorio de todo el proyecto
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf



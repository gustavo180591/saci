# Usamos PHP 8.2 como base
FROM php:8.2-cli

# Definir el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copiar todos los archivos del backend al contenedor
COPY . .

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y unzip git \
    && docker-php-ext-install pdo pdo_mysql

# Comando por defecto para ejecutar Symfony
CMD ["php", "bin/console", "server:run", "0.0.0.0:8000"]

FROM php:8.2-cli
COPY . /usr/src/dash
WORKDIR /usr/src/dash
CMD [ "php", "./index.php" ]

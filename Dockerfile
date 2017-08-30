FROM php:5.6-cli
COPY . /usr/src/app
WORKDIR /usr/src/app
CMD [ "php", "./index.php" ]

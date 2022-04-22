# algorithms-php
Project with studies in algorithms and data structures in PHP

## Tech stack

- PHP 8.1
- Docker
- PHPUnit

## To install dependencies

`docker run --rm -i --tty -v ${PWD}:/app composer install`

## To run tests

### Unit tests
`docker container run --rm -i -v ${PWD}:/app/ php:8.1-cli /app/vendor/bin/phpunit --configuration=/app/phpunit.xml`

## To run an algorithm

`docker container run --rm -i -v ${PWD}:/app/ php:8.1-cli sh -c "php /app/folder/file-name.php"`
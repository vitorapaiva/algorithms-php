# algorithms-php
Projeto de com estudos de algoritmos e estruturas de dados em PHP

## Tecnologias utilizadas

- PHP 8.1
    - Escolhida por ser a linguagem que possui mais familiaridade, na versão mais atualizada
- Docker
    - Escolhido para encapsular a aplicação e evitar a necessidade de instalação do PHP no ambiente de execução
- PHPUnit
    - Ferramenta para execução de testes unitários mais utilizada no PHP

## Para instalar as dependencias

`docker run --rm -i --tty -v ${PWD}:/app composer install`

## Para rodar os testes

### Testes unitarios
`docker container run --rm -i -v ${PWD}:/app/ php:8.1-cli /app/vendor/bin/phpunit --configuration=/app/phpunit.xml`

## Para executar um algoritmo

`docker container run --rm -i -v ${PWD}:/app/ php:8.1-cli sh -c "php /app/nome-do-algoritmo.php"`
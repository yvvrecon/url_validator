### URL VALIDATOR ###

### Для того, чтобы можно было выполнять тесты, нужно установить phpunit вместе с дополнительными модулями.
composer require --dev phpunit/phpunit
composer require --dev phpunit/dbunit
composer require phpunit/php-invoker


### Файлы
Исходники, которые тестим, нужно расположить в директории ./src
Сами тесты кладем в ./tests


### Далее можно спокойно тестить.
phpunit --bootstrap autoload.php tests/MyclassTest.php -vvv
php vendor/bin/phpunit --bootstrap autoload.php  tests/UrlValidatorTest.php
php vendor/bin/phpunit --bootstrap autoload.php  tests/UrlValidatorTest.php

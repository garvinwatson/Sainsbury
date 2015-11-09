# Sainsbury's Software Engineering Test INSTALLATION Steps

My version PHP 5.5.9

I am assuming we already have a basic LAMP environment running

To install composer

curl -sS https://getcomposer.org/installer | php

To install phpunit

php composer.phar install

To run the scraper

php src/index.php

To run the test

phpunit tests/webScraperProductTest.php

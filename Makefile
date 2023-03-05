csfix:
	PHP_CS_FIXER_IGNORE_ENV=1 ./vendor/bin/php-cs-fixer fix
phpstan:
	./vendor/bin/phpstan analyse src
migrations-diff:
	php bin/console doctrine:migrations:diff
migrations-migrate:
	php bin/console doctrine:migrations:migrate
fixtures:
	php ./bin/console doctrine:fixtures:load --purge-with-truncate
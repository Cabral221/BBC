
vendor: composer.json
	composer install

composer.lock: composer.json
	composer update

.PHONY: install
install: vendor composer.lock

.PHONY: serve
serve:
	php artisan serve

.PHONY: cache-clear
cache-clear:
	php artisan cache:clear

.PHONY: migrate
migrate:
	php artisan migrate

.PHONY: prod
prod: cache-clear
	rsync -avp --delete ./ bbcsncomtb-empro@ssh.cluster028.hosting.ovh.net:~/www --include=public/.htaccess --exclude-from=.gitignore --exclude=storage/* --exclude=boostrap/cache --exclude=".*"

.PHONY: ssh
ssh:
	ssh bbcsncomtb-empro@ssh.cluster028.hosting.ovh.net

.PHONY: test
test:
	./vendor/bin/phpunit

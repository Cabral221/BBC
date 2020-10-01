.PHONY: ssh serve prod install cache-clear

vendor: composer.json
	composer install

composer.lock: composer.json
	composer update

install: vendor composer.lock

ssh:
	ssh bbcsncomtb-empro@ssh.cluster028.hosting.ovh.net

serve:
	php artisan serve

cache-clear:
	php artisan cache:clear

prod: cache-clear
	rsync -av ./ bbcsncomtb-empro@ssh.cluster028.hosting.ovh.net:~/www --include=public/.htaccess --exclude-from=.gitignore --exclude=storage/* --exclude=boostrap/cache --exclude=".*"
	
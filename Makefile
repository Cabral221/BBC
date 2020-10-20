.PHONY  ssh
ssh:
	ssh bbcsncomtb-empro@ssh.cluster028.hosting.ovh.net

.PHONY  serve
serve:
	php artisan serve

.PHONY  prod
prod:
	rsync -av ./ bbcsncomtb-empro@ssh.cluster028.hosting.ovh.net:~/www --include=vendor --include=public/.htaccess --exclude-from=.gitignore --exclude=".*"

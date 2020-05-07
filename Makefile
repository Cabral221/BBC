.PHONY ssh
ssh:
	ssh ./ sshlogin@sshserver.xxx -p ConnectionPort

.PHONY	serve
serve:
	php artisan serve

.PHONY	prod
	rsync -av ./ bbcsncomtb-empro@ssh.cluster028.hosting.ovh.net:~/www --include=vendor --include=public/.htaccess --exclude-from=.gitignore --exclude=".*"

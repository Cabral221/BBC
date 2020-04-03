.PHONY ssh
ssh:
	ssh ./ sshlogin@sshserver.xxx -p ConnectionPort

.PHONY	serve
serve:
	php artisan serve

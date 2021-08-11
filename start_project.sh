#!/usr/bin/env bash
docker run --name=mysql --net=host --rm --env MYSQL_ROOT_PASSWORD=root123 --env MYSQL_DATABASE=test --env MYSQL_USER=test --env MYSQL_PASSWORD=test123 -d mysql/mysql-server:8.0
while ! timeout 1 bash -c "echo > /dev/tcp/localhost/3306" 2> /dev/null; do sleep 1; done; echo "Done."
php artisan key:generate
php artisan migrate:fresh
php artisan db:seed
php artisan serve

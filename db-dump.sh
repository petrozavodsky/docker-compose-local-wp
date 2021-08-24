#!/usr/bin/env bash

rm -rf mariadb-init/*.gz
docker exec -i site_mariadb mysqldump -usite -hmariadb -psite site | gzip -c | cat > mariadb-init/dump-$(date +%Y-%m-%d-%H.%M.%S).sql.gz
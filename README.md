
# Get started

1. Open a command prompt or bash window, and run the commands:

`wp core download  --path=public_html`

`./run.sh`

2. Add a line to the hosts file of your OS 

`127.0.0.1 my-domain.lc`

4. Open this URL (`http://my-domain.lc/`) in your browser

# Additionally

`stop.sh` - stop all containers

`remove-containers.sh` - delete all containers

`run.sh` - run docker composer

`db-dump.sh` - saves the database dump to the mariadb-init directory

`mariadb-init` - Directory for importing*. sql files into a container
# Docker for Wordpress or Drupal

A basic stack with NGINX, PHP and Apache. Including PHPMyAdmin and Portainer for simple management.

```docker-compose up -d```

## Virtual Hosts

This stack will use ports 80 and 443 to serve all applications proxied by NGINX. Apache is accessible directly by port 8081.

All NGINX site configs can be found in the `nginx/conf.d` directory.

All Apache site configs can be found in the `apache/sites` directory.

## Hostnames

Update your host files for each virtual host; Below are for the management tools.

```
::1             portainer.local # manage docker
127.0.0.1       portainer.local
fe80::1%lo0     portainer.local
::1             phpmyadmin.local # manage db
127.0.0.1       phpmyadmin.local
fe80::1%lo0     phpmyadmin.local
::1             static.local # access to www
127.0.0.1       static.local
fe80::1%lo0     static.local
```

`.local` hosts on macOS will resolve over Bonjour first, to prevent delays add loopbacks for IPv6.

## Database

Your applications can access the MySQL server using the `db:3306` host and port from within the containers. You may use port `localhost:3307` when accessing from the host machine.

| Username | Password |
| -------- | -------- |
| root     | root     |

## Extra

Drush is also included in the PHP build. Use the bash alias below to easily call it.

```
# docker drush alias
rush () {
	pushd ~/projects/nginx > /dev/null;
	docker-compose run --rm php drush --root=/var/www/drupal/web $*;
	popd > /dev/null;
}
```
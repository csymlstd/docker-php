# Docker for Wordpress or Drupal

A basic stack with NGINX, PHP and Apache. Including PHPMyAdmin and Portainer for simple management.

```docker-compose up -d```

## Virtual Hosts

This stack will use ports 80 and 443 to serve all applications proxied by NGINX. Apache is accessible directly by port 8081.

All NGINX site configs can be found in the `nginx/app.conf` file.

All Apache site configs can be found in the `apache/sites` folder.

## Hostnames

Update your host files for each virtual host added; Below are for the management tools.

```
127.0.0.1       portainer.local # manage docker
127.0.0.1       phpmyadmin.local # manage db
127.0.0.1       static.local # access to www
```

## Database

Your applications can access the MySQL server using the `db:3306` host and port from within the containers. You may use port `3307` when accessing from the host machine.

| Username | Password |
| -------- | -------- |
| root     | root     |
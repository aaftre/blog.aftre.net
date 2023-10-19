#!/bin/sh

echo  "crond starting..."
crond

echo  "php-fpm starting..."
php-fpm82 --nodaemonize --force-stderr &

#nginx in foreground must be last
echo "nginx starting..."
exec nginx -g "daemon off;"

#!/bin/sh

set -e

cd /var/www/html

echo "Starting Laravel application..."

# Make sure Laravel writable directories have correct permissions
chown -R www-data:www-data storage bootstrap/cache public

chmod -R 775 storage bootstrap/cache

# Clear old cached configuration
php artisan config:clear

# Cache Laravel configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache Blade views
php artisan view:cache

echo "Laravel initialization complete."

# Start Supervisor
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
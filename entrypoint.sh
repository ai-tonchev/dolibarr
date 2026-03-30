#!/bin/sh
set -e

# Dynamically fix permissions on the volume every time the app boots
echo "Setting permissions on /var/www/documents..."
chown -R www-data:www-data /var/www/documents
chmod -R 775 /var/www/documents

# Execute the original Docker PHP entrypoint
exec docker-php-entrypoint apache2-foreground
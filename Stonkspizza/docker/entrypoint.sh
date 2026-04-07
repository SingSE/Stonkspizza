#!/bin/sh

echo "✅ Running database migrations..."
php artisan migrate --force || true

echo "✅ Running automated tests..."
vendor/bin/phpunit || echo "⚠ Tests failed, but continuing"

echo "✅ Running static analysis (linter)..."
vendor/bin/phpstan analyse --memory-limit=512M || echo "⚠ Linter issues found, but continuing"

echo "✅ Building release..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
composer dump-autoload --optimize

echo "✅ Starting Apache..."
apache2-foreground

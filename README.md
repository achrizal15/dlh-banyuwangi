

STEP 1: cd ./dlh-banyuwangi
STEP 2: docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
STEP 3: ./vendor/bin/sail up -d
STEP 5: ./vendor/bin/sail php artisan key:generate
STEP 6: ./vendor/bin/sail php artisan migrate:fresh
STEP 7: ./vendor/bin/sail npm install
STEP 8: ./vendor/bin/sail npm run build
STEP 9: ./vendor/bin/sail php artisan storage:link
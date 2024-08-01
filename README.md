## Project setup/installation guides
Please Follow the guideline to set up locally.

- Laravel 11 (php 8.3/8.2)

### Installation process after cloning from git

1. composer install
2. cp .env.example .env
3. composer install
4. php artisan key:generate
5. set database mysql and update related things in .env (for example your database name, password)
6. php artisan migrate
7. php artisan db:seed
8. php artisan jwt:secret
9. php artisan generate:token and use this token in api request
10. php artisan install:broadcasting and follow the steps and select yes always and it set variable in .env automatically.
11. php artisan reverb:start
12. php artisan queue:work
13. set CACHE_STORE=redis in .env and update redis related information and you have to start you redis server in you machine

# note:
I also added postman collection name as BariKoi.postman_collection.json in this main directory.

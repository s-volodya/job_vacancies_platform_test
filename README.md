# laravel test task for job vacancies platform

Please run following commands for installation.

1. clone the repository
2. cd project_dir
3. cd /application
4. run composer install5. 
5. create .env file from .env.example and set these configs for DB and APP_URL
   APP_URL=http://localhost\
   DB_CONNECTION=mysql\
   DB_HOST=mysql\
   DB_PORT=3306\
   DB_DATABASE=job_vacanices_db\
   DB_USERNAME=root\
   DB_PASSWORD=root 

6. run php artisan key:generate
7. run php artisan jwt:secret for jwt secret key
8. run docker-compose up -d
9. run docker ps -a to see all docker containers
10. check the php container name (it should be your folder name in lowercase and _php_1)
11. run docker exec -it `php_container` bash
12. run php artisan migrate

after installation you can see database via adminer. URL is: http://localhost:8080


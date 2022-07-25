# laravel test task for job vacancies platform

Please run following commands for installation.

1. clone the repository
2. cd project_dir
3. cd /application
4. create .env file from .env.example and set configs
5. run php artisan jwt:secret for jwt secret key
6. run docker-compose up -d
7. run docker exec -it jobvacancy_test_php_1 bash
8. run php artisan migrate

after installation you can see database via adminer. URL is: http://localhost:8080


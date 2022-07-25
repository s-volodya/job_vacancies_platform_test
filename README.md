# symfony_task

Please run following commands.

1. docker-compose up -d
2. docker exec -it symfonydocker_php_1 bash
3. php bin/console doctrine:migrations:migrate
4. exit;

Api calls are:

1. https://localhost/register [POST]
2. https://localhost/api/login_check [POST]
3. https://localhost/user/create [POST]
4. https://localhost/user/edite [POST]
5. https://localhost/user/delete [POST]
6. https://localhost/user/view/{email} [GET]


Examples for these calls you can see in screenshots folder.

after installation you can see database via adminer. URL is: http://localhost:8080


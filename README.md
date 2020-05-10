# Internet Programming: Group Project Assignment

PROJECT SETUP PROCESS:

1 - clone this project to local machine (git clone https://github.com/iuthub/ip-group-project-homehub.git)

2- run terminal in project root folder

3- execute command: composer install

4- execute command: php artisan key:generate

5- execute command: composer require laravelcollective/html

6- create database called "BLOG" using phpMyAdmin

7- configure config/database.php to : 

'mysql' => [


            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => 'localhost',
            'port' => '',
            'database' => 'BLOG',
            'username' => '',
            'password' => '',
            'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],

        ],

! Insert port, username, password from mysql

8- execute command: php artisan migrate (it will create all tables in database)

9- create folder in storage/app/public/ called "cover_images"

10- execute command: php artisan storage:link (it will create folder to store cover images of your posts)

11- execute command: php artisan migrate and go to localhost:8000



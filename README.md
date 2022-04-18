## Application Setup::

Checkout this below project as "example-app" directory 
Example:: git checkcout https://github.com/suriyakuppusamy/packt.git example-app 



1. goto project root directory then run below command, to install all project specific dependencies 
composer install 

2. Kindly add your DSN (Data Source Name) @ .env file 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=scrum_management
DB_USERNAME=XXXX
DB_PASSWORD=XXXX

3. Create a Database "scrum_management" & select it. 
CREATE DATABASE IF NOT EXISTS `scrum_management`;
use `scrum_management`;

4. Run All DB Migrations 
php artisan migrations

5. Start the application
php artisan serve


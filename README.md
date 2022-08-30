# Project Title

To start the project :

- git clone from github
- composer install
- check .env for database connection

- php bin/console doctrine:database:create
- php bin/console doctrine:migrations:migrate
- (php bin/console doctrine:fixtures:load)
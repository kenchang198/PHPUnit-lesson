# container build
docker-compose up -d --build

# login container
docker-compose exec web bash

## package install
(in container)
composer install

# url
http://localhost:8080/index.php
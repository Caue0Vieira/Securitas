# Caminhos
DOCKER_COMPOSE=docker/docker-compose.yml
SRC_PATH=src
CONTAINER_APP=securitas-app
CONTAINER_DB=securitas-db

up:
	docker-compose -f $(DOCKER_COMPOSE) up -d --build

down:
	docker-compose -f $(DOCKER_COMPOSE) down

restart:
	make down && make up

logs:
	docker-compose -f $(DOCKER_COMPOSE) logs -f

bash:
	docker exec -it $(CONTAINER_APP) sh

composer-install:
	docker exec -it $(CONTAINER_APP) composer install

npm-install:
	docker exec -it $(CONTAINER_APP) npm install

npm-build:
	docker exec -it $(CONTAINER_APP) npm run build

artisan:
	docker exec -it $(CONTAINER_APP) php artisan $(cmd)

migrate:
	docker exec -it $(CONTAINER_APP) php artisan migrate

seed:
	docker exec -it $(CONTAINER_APP) php artisan db:seed

fresh:
	docker exec -it $(CONTAINER_APP) php artisan migrate:fresh --seed

ide-helper:
	docker exec -it $(CONTAINER_APP) php artisan ide-helper:generate && \
	docker exec -it $(CONTAINER_APP) php artisan ide-helper:models --nowrite && \
	docker exec -it $(CONTAINER_APP) php artisan ide-helper:meta

test:
	docker exec -it $(CONTAINER_APP) php artisan test

test-coverage:
	docker exec -it $(CONTAINER_APP) ./vendor/bin/phpunit --coverage-html coverage

ci:
	make down
	make up
	make composer-install
	make npm-install
	make npm-build
	make migrate
	make test
	make test-coverage

clean:
	docker system prune -af

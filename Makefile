# Makefile for managing the Docker environment

.PHONY: up down restart logs shell

up:
	@echo "Starting Docker containers..."
	docker compose up -d
	@echo "Environment is up and running!"

down:
	@echo "Stopping Docker containers..."
	docker compose down
	@echo "Environment is down."

stop:
	@echo "Stopping (pausing) Docker containers..."
	docker compose stop
	@echo "Containers stopped."

start:
	@echo "Starting Docker containers..."
	docker compose start
	@echo "Containers started."

restart:
	@echo "Restarting Docker containers..."
	$(MAKE) down
	$(MAKE) up
	@echo "Environment restarted."

logs:
	@echo "Tailing logs... (Press Ctrl+C to exit)"
	docker compose logs -f

shell:
	@echo "Entering the PHP container shell..."
	docker compose exec php bash

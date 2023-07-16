install: #установка composer
	composer install
brain-games: #запуск программы
	./bin/brain-games
validate:
	composer validate
lint: #запуск линтера
	composer exec --verbose phpcs -- --standard=PSR12 src bin

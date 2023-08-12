install: #установка composer
	composer install
brain-games: #запуск программы
	./bin/brain-games
validate:
	composer validate
lint: #запуск линтера
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even: #запуск программы
	./bin/brain-even
brain-calc: #запуск программы 
	./bin/brain-calc
brain-gcd: #запуск программы
	./bin/brain-gcd
brain-progression: #запуск программы
	./bin/brain-progression
brain-prime: #запуск программы
	./bin/brain-prime

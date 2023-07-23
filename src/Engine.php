<?php

namespace BrainGames\Engine;

require_once __DIR__ . '/../vendor/autoload.php';


use function cli\line;
use function cli\prompt;
use BrainGames\Greeting;

function evengame()
{
    $name = Greeting\greeting();
    line('Answer "yes" if the number is even, otherwise answer "no".');


    for ($i = 1; $i < 4; $i+=1) {

	$check = 'no';
	$var = mt_rand();
	if($var % 2 == 0) {
	    $check = 'yes';
	}

	line("Question:{$var}\nYour answer:");
	$answer = trim(fgets(STDIN));
	if($answer == $check){
	    line("Correct!");
	    if($i === 3) {
		line("Congratulations, {$name}!");
		break;
	    }
	    continue;
	}

	else {
	    line("'{$answer}' is wrong answer. Correct answer was '{$check}'\nLet's try again {$name}!");
	    break;
	}
    }
}

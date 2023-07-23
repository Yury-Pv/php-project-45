<?php

namespace BrainGames\Cli2;

use function cli\line;
use function cli\prompt;

function run()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
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
	    line("{$answer} is wrong answer. Correct answer was {$check}\n Let's try again, {$name}!");
	    break;
	}
    }
}

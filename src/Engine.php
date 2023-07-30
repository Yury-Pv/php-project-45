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
	if($answer === $check){
	    line("Correct!");
	    if($i === 3) {
		line("Congratulations, {$name}!");
		break;
	    }
	    continue;
	}

	else {
	    line("'{$answer}' is wrong answer ;(. Correct answer was '{$check}'.\nLet's try again {$name}!");
	    break;
	}
    }
}



function calcgame()
{

    $name = Greeting\greeting();
    line('What is the result of the expression?');

    for ($i = 1; $i < 4; $i+=1){

        $first_number = mt_rand(0, 1000);
	$second_number = mt_rand(0, 1000);
	$arr = array('-', '+', '*');
	$curr_op_sw = mt_rand(0, 2);
	$curr_op = $arr[$curr_op_sw];
	$show = ("$first_number $curr_op $second_number");


	switch ($curr_op) {
	    case '+':
		$check = $first_number + $second_number;
	    	break;
	    case '-':
                $check = $first_number - $second_number;
                break;
	    case '*':
                $check = $first_number * $second_number;
                break;
	}

	line("Question: {$show}");
	$answer = prompt('Your answer');

	if((int)$answer === $check){
	    line("Correct!");
            if($i === 3) {
                line("Congratulations, {$name}!");
                break;
            }
            continue;
        }

        else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$check}'.\nLet's try again {$name}!");
            break;
        }
    }
}



function gcdgame() 
{

    $name = Greeting\greeting();
    line('Find the greatest common divisor of given numbers.');

    for ($i = 1; $i < 4; $i+=1){

        $first_number = mt_rand(1, 100);
        $second_number = mt_rand(1, 100);
	$check = 1;
	$show = ("$first_number $second_number");
	$lowest = $first_number;

	if($second_number < $first_number){
	    $lowest = $second_number;
	}

	for ($iter = 1; $iter <= $lowest; $iter+=1){

	    if(($first_number % $iter == 0) && ($second_number % $iter == 0)){
		$check = $iter;
	    }
	}


	line("Question: {$show}");
        $answer = prompt('Your answer');

        if($answer == $check){
            line("Correct!");
            if($i === 3) {
                line("Congratulations, {$name}!");
                break;
            }
            continue;
        }

        else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$check}'.\nLet's try again {$name}!");
            break;
        }
    }
}

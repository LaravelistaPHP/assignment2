<?php


//Task 1: Looping with Increment using a Function
// For Loop

function printEvenNumberf() {
    for ($i = 1; $i <= 20; $i += 1) {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
    }
}

printEvenNumberf();

// While Loop

function printEvenNumberw() {
    $i = 1;
    while ($i <= 20) {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
        $i += 1;
    }
}

printEvenNumberw();

//do while loop

function printEvenNumberd() {
    $i = 1;
    do {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
        $i += 1;
    } while ($i <= 20);
}

printEvenNumberd();


echo PHP_EOL;

//Task 2: Skip Multiples of 5

for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 === 0) {
        continue; 
    }
    echo $i . " ";
}


echo PHP_EOL;
//Task 3: Break on Condition


$first = 0;
$second = 1;

for ($i = 0; $i < 10; $i++) {
    $fibonacci = $first + $second;

    if ($fibonacci > 100) {
        break; 
    }

    echo $fibonacci . " ";

    $first = $second;
    $second = $fibonacci;
}

echo PHP_EOL;
//Task 4: Fibonacci Series printing using a Function

function printFibonacci($count) {
    $first = 0;
    $second = 1;

    for ($i = 0; $i < $count; $i++) {
        echo $first . " ";

        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

printFibonacci(15);







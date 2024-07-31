<?php

function FizzBuzz(int $number): void
{
    for ($i = 1; $i <= $number; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo "FizzBuzz\n";
        } else if ($i % 3 === 0) {
            echo "Fizz\n";
        } else if ($i % 5 === 0) {
            echo "Buzz\n";
        } else {
            echo $i. "\n";
        }
    }
}

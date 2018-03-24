<?php

require_once 'function.primes.php';

echo "Find primes in a given range of values:\n";
for ($i=12345678; $i<12345900; $i++) {
    if (IsPrime($i)) {
        echo $i . " is prime \n";
    }
}

echo "Find the next prime greater than a given number; i.e. = 12345678:\n";
echo "Next prime is: " . NextPrime(12345678) . "\n";

echo "Find the previous prime smaller than a given number; i.e. = 12345899:\n";
echo "Previous prime is: " . PrevPrime(12345899) . "\n";



<?php

// Check if a given number is prime. Returns bool value.
function IsPrime($number) {
    
    // include list of first 1000 primes
    require 'primeslist.php';    
    
    // check if number is in the list of the first 1000 primes    
    if (in_array($number, $firstprimes)) {
        return true;
    }

    // attempt to divide the number by the first 1000 primes
    foreach ($firstprimes as $prime) {
        if ($prime < $number && $number % $prime == 0) {
            return false;
        }
    }
    
    // if not divisible by first primes, try brute force division
    for ($n = 997; $n < ceil($number/2); $n++) {
        if ($number % $n == 0) {
            return false;
        }
    }
     
    return true;
}

// find the prime greater than a given number
function NextPrime($number) {
    for ($n = $number+1;; $n++) {
        if (IsPrime($n)) {
            return $n;
        }
    }
}

// find the prime smaller than a given number
function PrevPrime($number) {
    for ($n = $number-1;; $n--) {
        if (IsPrime($n)) {
            return $n;
        }
    }
}

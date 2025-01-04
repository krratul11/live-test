<?php

$randomStrings = ["Apple", "banana", "Apricot", "grape", "avocado", "Mango", "almond"];

$filteredArray = array_filter($randomStrings, function($string) {
    return stripos($string, 'A') === 0;
});

$upperCaseArray = array_map('strtoupper', $filteredArray);

print_r($upperCaseArray);

?>
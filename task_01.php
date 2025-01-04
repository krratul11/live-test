<?php

$randomStrings = ["Apple", "banana", "Apricot", "grape", "avocado", "Mango", "almond"];

$filteredArray = array_filter($randomStrings, function($string) {
    return stripos($string, 'A') === 0;
});

$upperCaseArray = array_map('strtoupper', $filteredArray);

print_r($upperCaseArray);

?>

 README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/krratul11/live-test.git
git push -u origin main
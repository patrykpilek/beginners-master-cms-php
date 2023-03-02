<?php
// Works as of PHP 5.3.0
const CONSTANT = 'Hello World';
echo CONSTANT;

echo "<br/>";
// Works as of PHP 5.6.0
const ANOTHER_CONST = CONSTANT.'; Goodbye World';
echo ANOTHER_CONST;

echo "<br/>";
const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; // outputs "cat"

echo "<br/>";
// Works as of PHP 7
define('ANIMALS_TWO', array('dog', 'cat', 'bird'));

echo ANIMALS_TWO[1]; // outputs "cat"
<?php

$x='5';
$y=2;
echo $x+$y; //o/p: 7
echo $x++ + ++$x; //o/p:12 

$a='true';
$b= true;
echo $a == $b; // 1

$c=10;
$d=&$c;
$d += 5;
echo $c + $d; //30

$fruit='apple';
$basket = &$fruit;
$basket = 'banana';
echo $fruit; // banana

$original = 'Hello';
$alias = & $original;
unset($original);
echo $alias; // Hello

?>


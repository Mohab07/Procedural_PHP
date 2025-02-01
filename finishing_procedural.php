<?php



declare(strict_type=1);

include 'secondgroupvid.php';
require 'secondgroupvid.php';
require_once 'secondgroupvid.php';
include_once 'secondgroupvid.php';

echo "mohab";
   
echo "<br>";
// the diffrence between include and require is if the file not exist in require the program never run and gave us fatal error but include gave us warning only and our file run;
/*
#functions;;

function foo(){
	return 'hello world';
}
var_dump(foo());
echo "<br>";
function too(){
	echo 'foo';
	function bar(){
		echo 'bar';
	}
}
too();
echo '<br>';
bar();
#if we using nested functions we should use the parent functions then the functions in the parent function to avoid error;;*/
/*
function foo():int{
	return 3;
}
var_dump(foo());

function moo():void{
	return  ;
	#void doesn't return anything
}
moo();
echo '<br>';

function zoo():int|float|array#or using (mixed)
{
	return [];
}
var_dump(zoo());
echo '<br>';

function poo($x,$y):int|float{
	return $x*$y;
}
echo poo(5,10);
echo '<br>';

function loo(&$x,&$y):int|float{
	if($x%2==0){
		$x/=2;
	}
	return $x*$y;
}

$a=6; $y=7;*/
// echo loo($a,$y);
// echo '<br>';
#named arguments
/*echo loo(x:$a,y:$y);
echo '<br>';
var_dump($a,$y);
*/
/*

function roo(...$numbers):int|float{
	$sum=0;
	foreach($numbers as $number){
		$sum+=$number;
	}
	return $sum;
	#or return array_sum(numbers);; its a built in function in php

}
echo '<br>';

echo roo(3,4,5,2,6.5);
echo '<br>';


#(...numbers) called a splat or unbacking operator so if we made that
$num=[30,40,50];
echo roo(...$num);
*/

#variable scopes *(global and local);;
/*$x=5;
function foo() {
	$GLOBALS['x'] = 10;
	global $x ;
	$x=9;
	echo $GLOBALS['x']; 
}
echo $x;
echo '<br>';
foo();
echo '<br>';
echo $x;
#okkkk*/

#static variables
/*
function getvalue(){
	static $value=null;
	if($value==null){
		$value=someveryexpnsivefunction();
	}
	return $value;
}


function someveryexpnsivefunction(){
	sleep(2);
	echo 'processing'.'<br>';
	return 10;

}
echo getvalue();
echo getvalue();
echo getvalue();
*/

function sum(int|float ...$numbers):int|float{
	return array_sum($numbers);
}
$x='sub'; #here is an error because the function name is sum replace sub to sum and it will run;;


if(is_callable($x)){
	echo $x(1,2,3,4);
}
else{
	echo "not callable";
}
echo '<br>';

/*
//anonymous function;
$c=function (int|float ...$nums):int|float{
	return array_sum($nums);
};
 echo $c(1,2,3,4);*/


echo '<br>';
/*
$m=5;
$c=function (int|float ...$nums)use($m):int|float{
	$m=10;
	echo $m;
	return array_sum($nums);
};
 echo $c(1,2,3,4);
echo $m;
*//*
 echo "<br>";
$arr1=[1,3,2,4];
$map=array_map(function($sum){
	return $sum*$sum;
},$arr1);
print_r($arr1);
 echo "<br>";
print_r($map);*/



#arrow function;;
/*
$y=5;
$array=[1,2,3,4];
$arr2=array_map(fn ($numbers) =>$numbers*$numbers*$y , $array);

echo '<pre>';
print_r($arr2);
echo '</pre>';
*/

/*
#date and time;;;;;;;;;;;;;;;;;;;
$currenttime=time(); #past history
echo $currenttime.'<br>';
echo $currenttime +5 *24 *60*60;#history of 5 days plus
echo '<br>';
echo $currenttime -60*60*24;# history of yesterday
echo '<br>';
echo date('m/d/Y g:ia').'<br>';
echo date('m/d/Y g:ia',$currenttime + 5 * 60 *60 *24).'<br>';

echo date_default_timezone_get();
date_default_timezone_set('UTC');

echo '<br>';
echo date('m/d/Y g:ia').'<br>';
echo date('m/d/Y g:ia',$currenttime + 5 * 60 *60 *24).'<br>';
echo date_default_timezone_get();*/

echo date('m/d/Y g:ia',mktime(0,0,0,4,10,null));
echo '<br>';
$date= date('m/d/Y g:ia',strtotime('tomorrow'));
echo '<br>';
echo date('m/d/Y g:ia',strtotime('third friday of January'));
echo '<br>';
var_dump(date_parse($date));
?>

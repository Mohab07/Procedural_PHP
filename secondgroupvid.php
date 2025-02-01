 <?php 
	/*
	#array video
	//[];
	$programminglan =['c++', 'python', 'PHP'];
/*

	echo $programminglan[0]  .'<br>';
	var_dump(isset($programminglan[3]));
	$programminglan[1]='python';
	echo $programminglan[1], 
	$programminglan[2];

	echo '<pre>';
	print_r($programminglan);
	echo '</pre>';
	echo count($programminglan);
	*/
	/*
	$programminglan[]='mohab';
	array_push($programminglan, 'milan', 'sohag','minya');

	echo '<br>';

	echo '<pre>';
	print_r($programminglan);
	echo '</pre>';
	echo count($programminglan);
	
	echo '<br>';
	echo '<hr>';
	
	$programminglan= [
		'PHP'=>'0.8',
		'python'=>'0.99'

	];

	echo '<pre>';
		print_r($programminglan);
	echo '</pre>';
	echo'<br>';

	echo $programminglan['PHP'];
	$programminglan['go']='1.99';
	echo '<pre>';
	print_r($programminglan);
	echo '</pre>';
	*/

	#multimedtional array;
	/*
	$programminglan =[
		'PHP'=> [
			'creator'=>'mohab gaafer',
			'extesion'=>'php versio 8',
			'website'=>'php.net',
			'isopesource'=> true,
			'versions'=> [
				['version'=>8 , 'releaseDate'=>'Nov 26,2020'],
				['version'=>99, 'releaseDate'=>'Nov 18,2002'],

			],

		],

		'python'=>[

			'creator'=>'',
			'extesion'=>'',
			'website'=>'',
			'isopesource'=> true,
			'versions'=> [
					['version'=>8 , 'releaseDate'=>'Nov 26,2020'],
				['version'=>99, 'releaseDate'=>'Nov 18,2002'],


			],

		],
	];

	echo '<pre>';
	print_r($programminglan);
	echo '</pre>';

	echo '<br>';

	echo $programminglan['PHP']['website'];
	echo '<br>';
	echo $programminglan['PHP']['versions'][0]['releaseDate'];
	

	#duplicate key and overwriting

	$array=[0=>'foo', 1=>'bar',1=>'baz'];
	print_r($array);
	echo '<br>';
	$arr2=[true=>'a', 1=>'b', 1.8 =>'d', null=>'e'];
	print_r($arr2);
	echo '<br>';
	echo $arr2[null];


	# starting from 0 , 1 then 50 because iam passing a key to it and after that it will be 51 , 52 etc;
	
	$array=['a','b',50=>'c', 'd','f'];
	echo '<pre>';
	print_r($array);
	echo '</pre>';
	
	#removing the last element in the array
	// echo array_pop($array);
	#removing the first index in the array
	// echo array_shift($array);

	// print_r($array);

	# after removing element from the array the array is reindex again so it will be not [50]=>c it will be [1]=>c;

	// unset($array[0],$array[50]);
	// print_r($array);
	#unset dosent reindexing the array elemnts;

	#casting using array;
	$array=['a'=> 1 , 'b'=> null];
	$x=5;
	var_dump((array)$x);
	echo'<br>';
	$y='mohab';
	var_dump((array)$y);
	echo '<br>';
	var_dump(array_key_exists('b', $array));
	echo '<br>';
	var_dump(isset($array['b']));

	#in the last two fucntions array key exist is shows us if the elemnt in the array or not but isset function showing us the statue of the element if it bool
*/



echo '<h1> expressions video and operators </h1>';   

//Arithmatic operators (+ - * / % **)
// $x =10.8;
// $y= 2.5;
// var_dump(fdiv($x,$y));
// echo '<br>';
// var_dump(fmod($x, $y));
echo '<br>';

// $x='hello';
// $x.=' world';
// echo $x;



// $lol=6;
// $ll=5;
// var_dump($lol<>$ll);
// var_dump($lol===$ll);
// var_dump($lol<=>$ll);
/*//
//

$x="hello world";
$y=strpos($x, 'w');
/*
if($y==false){
	echo 'w not found';
}
else{
	echo 'w found at index '. $y;
}*/
 
/* $result= $y==false ? 'w not found':'w found at index '. $y;
 echo $result;
 echo '<br>';
// important line if the first not exist output the second its if statment on close;
$m=null;
$n='mohab';
$d=$m??$n;
echo $d;*/

#error control operator

# $x=@file('foo.txt');

#logical operators
/*$x= true;
$y=false;
function hello(){
	echo "hello world";
	return true;
}
var_dump($x&&hello());*/

#&& default is to return false if it false it dosen't print hello world if it true it will print;

#|| defualt is true if it true it will not print anything else
#it will print the thing inside the fuction


//the bitwise operators



/*$x=4;
$y=2;
var_dump(~$x&$y);
echo '<br>';

*/
 


// its convert the two to binary and 6 to binary and make and operation between them 110 and 010 =  010 =2;;


//(~) it flips the bits 6= 110 using ~ will be 001 ; // NOR

// shift right and shift left << or  >> it increases the number of zeros in way you select so the final answer will be change


//operations with array;

/*$x= ['a'=>1,'b'=>2,'c'=>3];
$y= ['d'=>4,'e'=>5,'f'=>6,'d','m'];
//taking the index not in x ;(union)
print_r($x+$y);*/
#if we using assoiative array he takes all the elemnts in concatination between x and y
echo '<br>';


echo '<br>';
/*#if statment video;;

$score= 70;
if($score>=90){
	echo "A";
	if($score>=95){
		echo '+';
	}
}
elseif ($score>=80) {
	echo 'B';
	if($score>=85){
		echo '+';
	}
}
elseif ($score>=70) {
	echo 'C';
	if($score>=75){
		echo '+';
	}
}
elseif ($score>=60) {
	echo 'D';
	if($score>=65){
		echo '+';
	}
}
else{
	echo "F";
}
*/

/*#loops
$x=4;
while($x--){
	echo "three two one mohab number one".'<br>';
}





$k=0;
do{
	echo $k;
	$k++;

}while($k<=9);

*/

/*for($i=0; $i<15; print $i, $i++){
	//echo $i;
}

echo '<br>';

$text="hello world";
for($i=0; $i<=strlen($text); $i++){
	echo @$text[$i].'<br>';
}

// foreach ($programminglan as $lan) {
// 	echo $lan . '<br>';
// }
foreach ($programminglan as $key => &$lan) {
	$lan='php';
	echo $key. ' :'. $lan . '<br>';
}
unset($lan);
//& br reference (pointer)

//importaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaant 
$user=[

	'name'=>'mohab',
	'email'=>'mohabgaafer0@gmail.com',
	'skills'=>['php','ccna','ps']

];

foreach($user as $key => $value){
	echo $key. ': '.json_encode($value). '<br>';
}
echo'<br>';

//antohr way for json_encode()
foreach($user as $key =>$value){
	if(is_array($value)){
		$value=implode(',', $value);
	}

	echo $key . ': '.$value . '<br>';
}


foreach($user as $key => $value){
	if(is_array($value)){
		foreach($i=0 ; $i<count($value);$i++){
			echo $value . '_';
		}
	}
	else{
		echo $value;
	}
	echo '<br>';
}

*/


//switch alo alo alo
/*$paymentmethod=[0,3];
foreach ($paymentmethod as $value) {
	
switch ($value) {
	case 1:
		echo 'paid';
		break;
	case 2:	
	case 3:
		echo 'payment declined';	
		break;
	case 0:
		echo 'pending payment';
		break;
	
	default:
		echo 'unkonw payment statue';
		break;
}
echo '<br>';
}


*/
/*function x(){
	sleep(3);
	echo "Done".'<br>';
	return 3;

}
if(x()==1){
	echo 1;
}
elseif(x()==2){
	echo 2;
}
elseif(x()==3){
	echo 3;
}
else{
	echo 4;
}*/

#switch is faster than if else;;;; 

#match expression

#the diffrence between switch and match is switch loose== comparison and match is strict=== comparison

/*
$payment=5;
match ($payment) {
	1=> print 'paid',
	2=> print'paymed declined',
	3=>	print'pedning payment',
	default => null
};

$day = 'Monday';

$message = match ($day) {
    'Monday' => 'Start of the week',
    'Friday' => 'End of the work week',
    default => 'Midweek day',
};

echo $message;
*/


#expression video
/*$x=3;
$y=5;
$z=$x*$y;*/

/*functoion onTick(){
	echo 'Tick<br>';

}
register_tick_function('onTick');

declare(ticks=3);
$i=0;
$length=10;
while($i<$length){
	echo $i++ . '<br>';
}
*/


//declare(strict_type=1) for saving the data type from changing and if i using strict data type in file and using require in anthor file using it it dosen't work
//we must to define it in the new file again;;*/


function prettyprintarray(array $value)
{
	echo'<pre>';
	print_r($value);
	echo '</pre>';
}














	





	




 ?>
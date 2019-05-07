<?php 
$y=array(
	'name'=>"Ali",
	'City'=>"FSD",
	'Cnic'=>"98469127354"
);
echo shuffle($y);
die();
$products=array(
	'x'=>array(
		'name'=>"Ali",
		'City'=>"FSD",
		'Cnic'=>"98469127354"
	),
	'y'=>array(
		'name1'=>"Ali",
		'City1'=>"FSD",
		'Cnic1'=>"98469127354"
	),
	'z'=>array(
		'name2'=>"Ali",
		'City2'=>"FSD",
		'Cnic2'=>"98469127354"
	)
);
echo "<pre>";
echo count($products,1		 );
die();
foreach ($products as $section => $item) {
	foreach ($item as $key => $value) {
		echo "$section\t : $key\t $value";
		echo "<br>";
	}
}
echo "</pre>";
// print_r($products);
die();
foreach ($y as $key => $value) {
	echo "$key : $value";
	echo "<br>";
	}

die();
$x= array(1,2,3,4,5,6,7,8,9,3,32422,35,43,5,3425,3);
foreach ($x as $value) {
	if($value==3){
		continue;
	}
	echo "Value is $value";
	echo "<br>";
}


?>
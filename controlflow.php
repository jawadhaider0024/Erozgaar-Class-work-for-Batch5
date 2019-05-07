<?php 
$x=11;
 while ( $x<= 10){
	echo "i love pakistan";
	$x++;
}
die();
for ($i=0; $i <= 3; $i++) { 
	echo "Today is last day of the week";
	echo "<br>";
}
die();
$y=90;
if ($y>90 && $y<=100) {
	echo "You got A grade";
} 
elseif($y>80 && $y<=90) {
	echo "You got B grade";
}
elseif ($y>70 && $y<=80) {
	echo "You got C grade";
}
else{
	echo "You are fail";
}

$x=date("D");
switch ($x) {
		case 'Mon':
		echo "Today is monday";
		break;
		case 'Tues':
		echo "Today is Tuesday";
		break;
		case 'Wed':
		echo "Today is Wednesday";
		break;
		case 'Thurs':
		echo "Today is Thursday";
		break;
		case 'Fri':
		echo "Today is Friday";
		break;
	
		default:
		echo "Wonderful day";
		break;
}
die();
$d= date("D");
if ($d== "Sat") {
	echo "Have a nice Saturday";
} 
elseif($d=="Sun") {
	echo "Have a nice Sunday";
}
elseif($d=="Mon") {
	echo "Have a nice Monday";
}
elseif($d=="Tues") {
	echo "Have a nice Friday";
}
elseif($d=="Wed") {
	echo "Have a nice Wednesday";
}
else{
	echo "Today is another day";
}

 ?>
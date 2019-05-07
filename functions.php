<?php 
	echo "a:[".(20>9)."]<br>";
	echo "a:[".(20<9)."]<br>";
	echo "a:[".TRUE."]<br>";
	echo "a:[".(20>9)."]<br>";
	echo "a:[".(20>9)."]<br>";
	die();
	$tbl_num = 9;
	$tbl_lmt = 10;
	$i = 1;
	while ($i <= $tbl_lmt) {
		echo $tbl_num." * ".$i." = ".$tbl_num*$i."<br>";
		$i++;
	}

	die();
	function assignx(){
		static $y=5;
		
		$y++;
		echo "$y";
		echo "<br>";
	}
	assignx();
	assignx();
	assignx();
	assignx();
	assignx();
	// echo "$y";
	die();
	function addfive(&$num){
		$num+=5;
	}
	$orignum=10;
	addfive($orignum);
	echo "$orignum";
die();
function junaid($num1,$num2){
	$sum=$num1+$num2;
	echo "Sum of these number is : $sum";
}
junaid(2,3);
echo "<br>";
$x=1;
while ($x <= 10) {
	junaid(2,6);
	$x++;
	echo "<br>";
}
 ?>

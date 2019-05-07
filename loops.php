<?php 
function firstfunction($n1,$n2,$n3){
	$n1=ucfirst(strtolower($n1));
	$n2=ucfirst(strtolower($n2));
	$n3=ucfirst(strtolower($n3));
	return array($n1,$n2,$n3);
}
$names=firstfunction("WILLIAM","henry","gAtEs");
echo "$names[0]    $names[1]   $names[2]";
echo ucwords("akshdf kjsfh asliugsdf ljsdf" );

die();
 echo ucfirst(strtolower("hENrY")) ;

echo strrev("olleh");echo "<br>";
echo str_repeat("hip", 2);
echo strtoupper("kajdgfkjshd");
echo "<br>";
echo strtolower("HDKJSHDKkjshdfjks");
echo "<br>";
echo ucfirst("agksjdgf");
echo "<br>";
// phpinfo();

die();
for ($i=1; $i<=8 ; $i++) { 
for ($j=$i; $j<=8 ; $j++) { 
echo "8";}
echo "<br>";
}
die();
$a=10;
$b=30;
while ($a <= $b) {
	if ($a % 2 == 1) {
		echo "$a <br>";
	}
	$a++;
}
 ?>
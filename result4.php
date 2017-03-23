<?php

// include ("index3.html");
// require ("test.php");

// echo time()."<br/>";
// $now=mktime();
// $nowdate=getdate($now);
// echo "Today is : ".$nowdate.["year"].$nowdate.["month"].$nowdate.["date"];
echo date("F月 j日 H 時 i 分 s 秒 ");
echo "<br>";
// foreach ($nowdate as $new){
// 	echo $new."<br/>";
// }
// foreach ($nowdate as $key=>$value){
// 	echo $key."=>".$value;
// 	echo "<br/>";

// }

$n=$_GET["input1"];
$m=$_GET["input2"];

echo "Your first numebr is : ".$n."<br>";
echo "Your second number is : ".$m."<br>";


echo "<table border ='1'>";
echo "<tr>";
		echo "<td>";
		echo "X";
		echo "</td>";

	for($j=1;$j<=$m;$j++){

		echo "<td>";
		echo $j;
		echo "</td>";
	}
	echo "</tr>";

for($i=1;$i<=$n;$i++){
	echo "<tr>";
	echo "<td>";
	echo $i;
	echo "</td>";
	for($j=1;$j<=$m;$j++){

		echo "<td>";
		echo $i."x".$j."=".$i*$j;
		echo "</td>";
	}
	
    echo "</tr>";
}
echo "</table>";





?>
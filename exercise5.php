<DOCTYPE html>
<html>
<body>
<?php

	$temp[0]="78";
	$temp[1]="68";
	$temp[2]="70";
	$temp[3]="72";
	$temp[4]="58";
	$temp[5]="60";
	$temp[6]="79";
	$temp[7]="82";
	$temp[8]="73";
	$temp[9]="77";
	$temp[10]="73";
	$temp[11]="58";
	$temp[12]="63";
	$temp[13]="79";
	$temp[14]="78";
	$temp[15]="68";
	$temp[16]="72";
	$temp[17]="73";
	$temp[18]="80";
	$temp[19]="79";
	$temp[20]="68";
	$temp[21]="72";
	$temp[22]="77";
	$temp[23]="73";
	$temp[24]="82";
	$temp[25]="85";
	$temp[26]="89";
	$temp[27]="83";
	$temp[28]="75";
	$temp[29]="75";
	
	
	//echo print_r($temp);
	
	function average($numbers){
		$size = count($numbers);
		$total = 0;
		
		for($x = 0; $x < $size; $x++){
			$total = $total + $numbers[$x];
		}
		
		$average = $total/$size;
		
		echo 'Average: '. $average;
		
	}
	
	function five_highest($temps){
		$size = count($temps);
		sort($temps);
		
		echo 'Five highest: <br/>';
		
		for($i = $size-1; $i > $size-6; $i--){
			echo $temps[$i].'<br/>';
			
		}
	}
	
	function five_lowest($temps){
		$size = count($temps);
		sort($temps);
		
		echo 'Five lowest: <br/>';
		
		for($i = $size-1; $i < $size-6; $i--){
			echo $temps[$i].'<br/>';
			
		}
	}
	
	function five_coolest($temps){
		$size = count($temps);
		sort ($temps);
	 
		echo 'Five coolest: <br/>';
		
		for($i = 0; $i < 5; $i++){
			
			
			echo $temps[$i].'<br/>';
			
		}
	}
	
	average($temp);
	echo '<br/>';  
	five_highest($temp);
	five_coolest($temp);


?> 

method 2
<?php
$temperature=array(30,40,50,60);

$totalno=count($temperature);
$sum=array_sum($temperature);
$average=$sum/$totalno;

for($i=0;$i<$totalno;$i++){
	$sum=$sum+$temperature[$i];
}

sort ($temperature);
?>





















n
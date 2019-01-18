<?php
		
function binarySearch($fileName, $valueSeach){
	$data = fopen($fileName, "r");
	while (!feof($data)) {
		$string = fgets($data);		
	}
	$explodedata = explode('\x0A', $string);
	foreach ($explodedata as $key => $value) {
			$mas[] = explode('\t', $value);
		}

	$firstElement = 0;
	$lastElement = count($mas)-1;
	echo "<p>Первый элемент: ";
	echo $firstElement;
	echo "</p>";
	echo "<p>Последний элемент: ";
	echo $lastElement;
	echo "</p>";

	while ($firstElement <= $lastElement) {
		$middle = floor(($firstElement+$lastElement)/2);
		$newBorder = strcmp($mas[$middle][0],$valueSeach);

		if($newBorder > 0){
			$lastElement = $middle - 1;
		}elseif ($newBorder < 0) {
			$firstElement = $middle + 1;
		}else{
			return $mas[$middle][1];
		}
	}
	return "undef";
}
//$faliName = "data.txt";
//$value = "ключ11";
echo "Значение ключа6: ".binarySearch("data.txt","ключ6");
echo "Значение ключа11: ".binarySearch("data.txt","ключ11");

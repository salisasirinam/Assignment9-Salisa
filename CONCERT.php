<?php

// $countTicket = 0;
// $totalPrice = 0;
// $discount = 0.5;
// if(isset($_POST["a1"])){
// 	echo "A1:  3000 <br>";
// 	$countTicket++;
// 	$totalPrice+= 3000;
	
// }
// if(isset($_POST['a2'])){
// 	echo "A2:  3000 <br>";
// 	$countTicket++;
// 	$totalPrice+=3000;
	
// }
// if(isset($_POST['a3'])){
// 	echo "Congradulation ! You got 50% for this special seat. <br>";
// 	echo "A3:  3000 <br>";
// 	$countTicket++;
// 	$totalPrice += 3000*$discount;
	
// }
// if(isset($_POST['b1'])){
// 	echo "B1:  2000 <br>";
// 	$countTicket++;
// 	$totalPrice += 2000;
	
// }

// if(isset($_POST['b2'])){
// 	echo "B2:  2000 <br>";
// 	$countTicket++;
// 	$totalPrice += 2000;
	

// }
// if(isset($_POST['b3'])){
// 	echo "B3:  2000 <br>";
// 	$countTicket++;
// 	$totalPrice += 2000;
	
// }
	
// if(isset($_POST['c1'])){
// 	echo "C1:  1000 <br>";
// 	$countTicket++;
// 	$totalPrice += 1000;
	
// }
// if(isset($_POST['c2'])){
// 	echo "C2:  1000 <br>";
// 	$countTicket++;
// 	$totalPrice += 1000;
	
// }
// if(isset($_POST['c3'])){
// 	echo "C3:  1000 <br>";
// 	$countTicket++;
// 	$totalPrice += 1000;
	
// }
// if($countTicket == 0){
// 	echo "Hi dear, you need to select at least one ticket. Thanks !";
// }else{
// 	echo "Number of seat: ".$countTicket."<br>";
// 	echo "Total Price is ".$totalPrice."<br>";
// }

// --------------------------------------------------------------
// $countTicket = 0;
// $totalPrice = 0;
// $types = array("a", "b", "c");
// foreach ($types as $type) {
// 	for($i=1; $i<=3; $i++){
// 		if(isset($_POST["$type$i"])){
// 			$countTicket++;
// 			if($type == "a"){
// 					echo "A$i : 3000 <br>";
// 				if("$type$i" == "a3"){
// 					echo "Congradulation! You got 50% for this special seat A3. <br>";
// 					$totalPrice += 3000*0.5;
// 				}else{
// 					$totalPrice += 3000;
// 					// echo "A$i : 3000 <br>";
// 				}
			
// 			}elseif ($type == "b") {
// 				$totalPrice += 2000;
// 				echo "B$i : 2000 <br>";
// 			}elseif ($type == "c") {
// 				$totalPrice += 1000;
// 				echo "C$i : 1000 <br>";
// 			}
// 		}
// 	}	
// }
// if($countTicket == 0){
// 	echo "Hi dear, you need to select at least one ticket. Thanks !";
// }else{
// 	echo "Number of seat: ".$countTicket."<br>";
// 	echo "Total Price is ".$totalPrice."<br>";
// }

// --------------------------------------------------------------
// $countTicket = 0;
// $totalPrice = 0;
// $types = array("a" => 3000, "b" => 2000, "c" => 1000);

// foreach ($types as $type => $price) {
// 	for($i=1; $i<=3; $i++){
// 		if(isset($_POST["$type$i"])){
// 			$countTicket++;
// 			if("$type$i" == "a3"){
// 				$totalPrice += $price * 0.5;
// 				echo "Congradulation ! You got 50% for this special seat A3. <br>";
// 			}else{
// 				$totalPrice += $price;
// 			}
// 			echo strtoupper($type)."$i : $price <br>";
// 		}
// 	}
// }
// if($countTicket == 0){
// 	echo "Hi dear, you need to select at least one ticket. Thanks !";
// }else{
// 	echo "Number of seat: ".$countTicket."<br>";
// 	echo "Total Price is ".$totalPrice."<br>";
// }
$countTicket = 0;
$totalPrice = 0;
$type = array("a"=> 3000, "b"=>2000, "c" => 1000);
foreach ($type as $type => $price) {
	for($i = 1; $i<=3 ; $i++){
		if(isset($_POST["$type$i"])){
			$countTicket++;
			if("$type$i" == 'a3'){
				echo "Congradulation.<br>";
				$totalPrice += $price*0.5;
			}else{
				$totalPrice += $price;
			}
			
			echo strtoupper($type)."$i :$price <br>";
		}
	}
}
if($countTicket == 0){
	echo "You need to buy at least one ticket";
}else{
	echo "number of seat: ".$countTicket."<br>";
	echo "Total price is: ".$totalPrice ."<br>";
}


?>
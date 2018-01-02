<?php

$booked_seats = 0;
$total= 0;
$a_row = 3000;
$b_row = 2000;
$c_row = 1000;

$list_booked = array();

if(isset($_POST['a1'])){
	$list_booked[$booked_seats] = $_POST['a1'].": ". $a_row;
	$booked_seats+=1;
	$total+= $a_row;
}

if(isset($_POST['b1'])){
	$list_booked[$booked_seats] = $_POST['b1'].": ". $b_row;
	$booked_seats+=1;
	$total+= $b_row;
}

if(isset($_POST['c1'])){
	$list_booked[$booked_seats] = $_POST['c1'].": ". $c_row;
	$booked_seats+=1;
	$total+= $c_row;
}

for ($i=0; $i < count($list_booked); $i++) { 
	echo $list_booked[$i]."<br>";
}

if($booked_seats == 0)
{
	echo "<div style='color: red'>Please select some ticket</div>";
}
elseif ($booked_seats > 4) {
	echo "The maximum number of ticket is 4";
}
else{
	echo "Number of seats: ".$booked_seats."<br>";
	echo "Total Price: ".$total."<br>";
}

?>
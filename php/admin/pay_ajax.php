<?php

$connection = mysqli_connect('localhost','root','root','hotel');
if(!$connection) {
    die("Database connection failed");
}

$cus_id=$_GET['cus_id'];




//$query = "select room_price,check_in,check_out from room where cusid ='$cus_id' ";
$query = "select room_price,check_in,check_out from room where  cusid=20";
$result=mysqli_query($connection,$query);
if (!$result){
  die("payments details query failed" . mysqli_error($connection));
}
//
$cusid = mysqli_fetch_assoc($result);
$room_price = $cusid['room_price'];
$check_in = $cusid['check_in'];
$check_out = $cusid['check_out'];

// echo $check_in ."  ".$check_out;


$day_query = "SELECT DATEDIFF('$check_out', '$check_in') AS DateDiff";
// $day_query = "SELECT DATEDIFF(day, '$check_in', '$check_out') AS DateDiff";
$result=mysqli_query($connection,$day_query);
if (!$result){
  die("day query failed" . mysqli_error($connection));
}

$no_of_days = mysqli_fetch_assoc($result);
$no_of_days = $no_of_days['DateDiff'];



$room_amount= $room_price * $no_of_days;
$tax= 5*$room_amount/100;
$total=$room_amount+$tax;
echo $room_amount.$tax.$total;

// $paycost= ('$room_amount','$tax','$total');
// print_r(explode(',',$paycost,-1));







 ?>

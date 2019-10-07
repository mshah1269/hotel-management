<?php

//echo "test";

$connection = mysqli_connect('localhost','root','root','hotel');
if(!$connection) {
    die("Database connection failed");
}
else
{
  //  echo "OK";
}


$room_type=$_GET['r_type'];
//echo $room_type;

if($room_type!=""){




    $query = "SELECT * FROM room where room_type='$room_type' and cusid is null";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error($result));
    }
    else
    {
        //echo "OKKKKK";
    }

   // echo $query;
    // echo "No of rows".mysqli_num_rows($result);

     echo  $str="";
  //    $str=$str+ "<select>";
   echo "<select class='form-control' name='room_no' id='room_no'>";
     while($row = mysqli_fetch_assoc($result)) {

        $rno = $row['room_id'];
  //      echo $rno;
     echo "<option value='$rno'>$rno</option>";
  //     // $str=$str+"<option value='$rno'>$rno</option>"
     }

     echo "</select>";
  //  // $str=$str+"</select>";
  //   echo $str;
  //   return $str;
  }

?>

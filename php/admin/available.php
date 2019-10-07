
<?php
$connection = mysqli_connect('localhost','root','root','hotel');
if(!$connection) {
    die("Database connection failed");
}


  		$query= "select room_type,count(available) from room where available=1 group by room_type" ;

  		$result = mysqli_query($connection ,$query);

  		if(!$result){
  			echo ("query failed" . mysqli_error($connection));
  		}

      $i=-1;
      while($row = mysqli_fetch_assoc($result)) {
         $i++;
         // $no_of_room[$i]=$row['count(available)'];
            $avl_table[$i]['room_type']=$row['room_type'];
            $avl_table[$i]['count(available)']=$row['count(available)'];
       }
       $j=$i;
       $deluxe_no = 0;
       $double_no = 0;
       $single_no = 0;

       $i=0;
        while ($i<=$j) {
          if($avl_table[$i]['room_type']=='deluxe'){
                  $deluxe_no = $avl_table[$i]['count(available)'];
               }
               elseif($avl_table[$i]['room_type']=='double') {
                  $double_no = $avl_table[$i]['count(available)'];
               }else {
                       $single_no = $avl_table[$i]['count(available)'];
                    }
              $i++;
        }


?>

  <!-- .....no of rooms available.... -->
          <div class="available">
            <h3><b>ROOMS AVAILABLE</b></h3>
            <h3>Deluxe : <?php echo $deluxe_no; ?></h3>
            <h3>Double : <?php echo $double_no; ?></h3>
            <h3>Single : <?php echo $single_no; ?></h3>
         </div>

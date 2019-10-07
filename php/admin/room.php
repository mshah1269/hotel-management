
<?php
  $page = 'rooms';
  include 'include/header.php';
 ?>


<?php

$connection = mysqli_connect('localhost','root','root','hotel');
if(!$connection) {
    die("Database connection failed");
}


$rquery = "select max(cusid) as maxid from customer";
$result=mysqli_query($connection,$rquery);
if (!$result){
  die("read query failed" . mysqli_error($connection));
}

$cusid = mysqli_fetch_assoc($result);
$cusid = $cusid['maxid'];

 ?>



 <?php

 if(isset($_POST['submit'])){

   $connection = mysqli_connect('localhost:3307','root','root','hotel');
   if(!$connection) {
       die("Database connection failed");
   }


   // ...insert...
   $cusid = $_POST['customer_id'];
   // $lname = $_POST['r_type'];
   $room_no = $_POST['room_no'];
   $checkin = $_POST['checkin'];
   $checkout = $_POST['checkout'];
   $desc = $_POST['desc'];

   // $query= "update room set cusid=$cusid,available=0, check_in=$checkin, check_out=$checkout, description=$desc where room_id=$room_no";
   $query= "update room set cusid='$cusid',available=0 ,check_in='$checkin', check_out='$checkout', description='$desc' where room_id='$room_no' ";
   $result = mysqli_query($connection,$query);
   //
   if(!$result){
     die('query failed' . mysqli_error($connection));
   }


 }

 ?>








  <div id="page-wrapper">

      <div class="container-fluid">

          <!-- Page Heading -->
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">
                      Select Room
                      <small>details</small>
                  </h1>
              </div>
          </div>
          <!-- /.row -->


          <?php
          include 'available.php';
          ?>
          <form action="#" method="post" id="rooms" name="room">




                  <label for="select customer">CUSTOMER ID</label><br>
                  <select class="form-control" name="customer_id" id="customer">

                    <?php

                    $rquery = "SELECT * FROM customer";
                    $result = mysqli_query($connection, $rquery);
                    if(!$result) {
                        die('Query FAILED' . mysqli_error());
                    }

                    echo "<option value='$cusid'>$cusid</option>";
                    while($row = mysqli_fetch_assoc($result)) {
                       $id = $row['cusid'];

                    echo "<option value='$id'>$id</option>";
                    }
                    ?>
                  </select>
                  <br>



                  <label for="r_type">SELECT ROOM</label><br>
                  <select class="form-control" name="r_type" id="r_type" onChange="room_type()">
                      <option selected="" disabled="">SELECT</option>
                      <option value="deluxe">Deluxe</option>
                      <option value="double">Double Suite</option>
                      <option value="single">Single Suite</option>
                  </select><br>


                  <label for="room_no">SELECT ROOM NO</label><br>
                  <div class="" id="r_no">
                    <select class="form-control" name="room_no" id="room_no">
                      <option value="">SELECT</option>
                    </select>
                  </div>
                  <br>


                  <label for="checkin">CHECKIN DATE</label><br>
                  <input class="form-control" type="text" placeholder="DATE" name="checkin" id="checkin">
                  <br>


                  <label for="checkout">CHECKOUT DATE</label><br>
                  <input class="form-control" type="text" placeholder="DATE" name="checkout" id="checkout">
                  <br>


                  <label for="description">DESCRIPTION</label><br>
                  <textarea class="form-control" type="text" name="desc" id="desc" placeholder="Description" rows="5" cols="30"> </textarea>
                  <br>


                  <button class="btn btn-primary"  name='submit' type="submit" value="submit">Submit</button>

          </form>

</div>

</div>
<!-- /#wrapper -->


<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script type="text/javascript">
function room_type(){
  //alert("roomtype"+document.getElementById('r_type').value);
    var xmlhttp=new XMLHttpRequest();

    xmlhttp.open("GET","ajax.php?r_type="+document.getElementById('r_type').value,false);
   // xmlhttp.open("GET","ajax.php",false);
    xmlhttp.send();
  //  alert(xmlhttp.responseText);
    document.getElementById('r_no').innerHTML=xmlhttp.responseText;

  }
</script>



          <script type="text/javascript">
          var jQuery_2 = $.noConflict(true);
          jQuery_2(document).ready(function(){

            jQuery_2("#rooms").validate({
                rules:{
                    customer_id: {
                        required:true
                    },
                    r_type: {
                        required:true
                    },
                    room_no: {
                        required:true
                    },
                    checkin:{
                      required:true
                    },
                    checkout:{
                      required:true
                    },
                    amount: "required"
                },
                messages:{
                    customer_id: "Please Select Customer Id",
                    checkin:"please enter date",
                    checkout:"please enter dates",
                    r_type: "Please Select Room Type",
                    room_no: "Please Select Room No",
                    booking_status: "Please Select Booking Status",
                    amount: "Fill Amount"
                },
                submitHandler: function(form){
                    form.submit();
                }
            });//VALIDATE
        });//DOCUMENT.READY
    </script>


<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">

    <script>
    var jQuery_1 = $.noConflict(true);
        jQuery_1(document).ready(function(){
            var minDate =new Date();
            jQuery_1("#checkin").datepicker({
                showAnim: 'drop',
                numberOfMonth: 1,
                minDate: minDate,
                dateFormat: 'yy/mm/dd',
                onClose: function(selectedDate){
                    jQuery_1('#checkout').datepicker("option","minDate",selectedDate);
                }
            });
            jQuery_1("#checkout").datepicker({
                showAnim: 'drop',
                numberOfMonth: 1,
                minDate: minDate,
                dateFormat: 'yy/mm/dd',
                // onClose: function(selectedDate){
                //     jQuery_1('#checkout').datepicker("option","minDate",selectedDate);
                // }
            });
        });

    </script>



</body>

</html>

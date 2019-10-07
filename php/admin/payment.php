
<?php
  $page = 'payments';
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

 $date = date("Y/m/d");

  ?>


  <div id="page-wrapper">

      <div class="container-fluid">

          <!-- Page Heading -->
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">
                      Select Payment
                      <small>details</small>
                  </h1>
              </div>
          </div>
          <!-- /.row -->



<!-- .....no of rooms available.... -->
<?php
include 'available.php';
?>

<!-- ........FORM........ -->
<form action="room.php" method="post" id="rooms" name="room">




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

        <label for="pay_date">PAYMENT DATE</label><br>
        <input class="form-control" type="text" disabled placeholder="DATE" name="pay_date" id="pay_date" value="<?php echo $date; ?>">
        <br>


        <label for="amount">ROOM AMOUNT</label><br>
        <input class="form-control" type="text" name="amount" id="amount">
        <br>

        <label for="tax">TAX</label><br>
        <input class="form-control" type="text" name="tax" id="tax">
        <br>

        <label for="t_amount">TOTAL AMOUNT</label><br>
        <input class="form-control" type="text" name="t_amount" id="t_amount">
        <br>

        <label for="description">DESCRIPTION</label><br>
        <textarea class="form-control" type="text" name="desc" id="desc" placeholder="Description" rows="3" cols="30"> </textarea>
        <br>
        <button class="btn btn-primary" name='submit' type="submit" value="submit">Submit</button>
</form>

<!-- container fluid  end-->
</div>






</div>
<!-- /#wrapper -->


<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="js/validation.js"></script>
<script type="text/javascript">
var cus_id=<?php echo $cusid; ?>;
//var xmlhttp=new XMLHttpRequest();
// var cus_id =document.getElementById('r_type').value
//xmlhttp.open("GET","pay_ajax.php?cus_id="+cus_id,false);
//xmlhttp.send();
//alert(xmlhttp.responseText);
//var data=xmlhttp.responseText;
//var jsonResponse = JSON.parse(data);
//console.log(jsonResponse["Data"]);
//alert(jsonResponse["Data"]);


 // var pay_value=xmlhttp.responseText;
 // document.getElementById("amount").value=pay_value;
// document.getElementById('r_no').innerHTML=xmlhttp.responseText;

$("button").click(function(){
  $.ajax({url: "pay_ajax.php", 
    success: function(result){
    //$("#div1").html(result);
    alert("OK"+result);
    var jsonResponse = JSON.parse(result);
//console.log(jsonResponse["Data"]);
alert(jsonResponse);
  data = $.parseJSON(data);
  alert(data);

  }});
});
</script>


</body>

</html>


<?php
  $page = 'customer';
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
   $cusid = $cusid['maxid']+1;


?>

<?php

if(isset($_POST['submit'])){

  // ...insert...
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $dob = $_POST['dob'];
  $address = $_POST['address'];

  $query= "INSERT INTO customer (fname, lname, email, phoneno, dob , address) VALUES ('$fname','$lname','$email','$phone','$dob','$address')";

  $result = mysqli_query($connection,$query);

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
                     Add Customer
                     <small>details</small>
                 </h1>
             </div>
         </div>
         <!-- /.row -->

<!-- .....no of rooms available.... -->
<?php
include 'available.php';
?>
<!-- <div class="available">
  <h3>Deluxe : </h3>
  <h3>Double : </h3>
  <h3>Single : </h3>

</div> -->




         <div class="input-container">
         <form action="customer.php" method="POST" name="customerform" id="customerform">



         <label>Customer id:</label> <br>
         <input class="form-control" disabled id="cusid" name="cusid" type="text" value='<?php echo $cusid ?>' ><br>

         <label>Name:</label> <br>
         <input class="form-control" id="fname" name="fname" type="text" placeholder="John" ><br>

         <input class="form-control" id="lname" name="lname" type="text" placeholder="Smith"><br>

         <label>Email:</label> <br>
         <input class="form-control" id="email" name="email" type="text" placeholder="Enter email"><br>

         <label>Phone:</label> <br>
         <input class="form-control" name="phone" placeholder="Enter phone number"><br>

         <label>DOB:</label> <br>
         <input class="form-control" name="dob" type="date" placeholder="Select date of birth"><br>

         <label>Address:</label> <br>
         <!-- <textarea class="form-control" name="address" type="text" placeholder="Enter address"> </textarea> -->
          <textarea class="form-control" name="address" type='text' placeholder="Enter address" cols="5" rows="3"></textarea><br>
         <br>

         <button class="btn btn-primary"  name='submit' type="submit" value="submit">Add Customer</button>
         </div>
         </form>
         </div>
     </div>
     <!-- /.container-fluid -->
 </div>
 <!-- /#page-wrapper -->



 <?php
   include  "include/footer.php";
     ?>

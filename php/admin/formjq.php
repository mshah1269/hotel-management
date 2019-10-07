<?php 
 
if(isset($_POST['submit'])){


	$con = mysqli_connect('localhost','root','root','form');
  		
  		if(!$con)
  		{
  			die("connection failed"); 
  		}
  		


  		$fname = $_POST['fname'];
  		$lname = $_POST['lname'];
  		$mob = $_POST['mobno'];
  		$email = $_POST['email'];
  		


  		$query= "INSERT INTO customer (fname, lname, mob, email) VALUES ($fname','$lname','$mob','$email')";
  		echo $query;
  		$result = mysqli_query($con,$query);

  		if(!$result){
  			echo ("query failed" . mysqli_error($con));
  		} 




}
?>

<?php 
 
if(isset($_POST['read'])){

     echo "test";
     $name="";
	$con = mysqli_connect('localhost','root','root','form');
  		
  		if(!$con)
  		{
  			die("connection failed"); 
  		}
  		


  		$cid = $_POST["cid"];
  		echo "cust".$cid;

  		$query= "select fname, lname, mob, email from customer where cid= $cid ";
  		echo $query;
  		$result = mysqli_query($con,$query);

  		if(!$result){
  			echo ("query failed" . mysqli_error($con));
  		} 

  		while ($row = mysqli_fetch_assoc($result)){
  			 echo "Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
  			 echo "mobile no" . $row["mob"];
  			 $fname = $row['fname'];
  			 $lname = $row['lname'];
  			 $mob = $row['mob'];

  		}




}

?>

<?php 
 
if(isset($_POST['update'])){
	echo "string";

	// $con = mysqli_connect('localhost','root','root','form');
  		
 //  		if(!$con)
 //  		{
 //  			die("connection failed"); 
 //  		}
  		


 //  		$fname = $_POST['fname'];
 //  		$lname = $_POST['lname'];
 //  		$mob = $_POST['mobno'];
 //  		$email = $_POST['email'];
  		


 //  		$query= "INSERT INTO customer (cid,fname, lname, mob, email) VALUES ('2','$fname','$lname','$mob','$email')";
 //  		echo $query;
 //  		$result = mysqli_query($con,$query);

 //  		if(!$result){
 //  			echo ("query failed" . mysqli_error($con));
 //  		} 




}
?>






<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>form</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <style type="text/css">
            form{
              padding:30px;
              line-height:33px;
            }

            .space{
              padding:10px;
            }

            .read{
            	transform: translate(500px,-622px); 
   				background-color: #daedf5;
			    height: 150px;
			    width: 200px;
			    border-radius: 18px;  
             } 
    </style>
  </head>
  <body>





  	






    <fieldset>
      <legend fontsize=24>Form</legend>
          <form class="" id="formjq" name="feedbackform" action="formjq.php" method="POST">
          	customer id : <input type="text" name="cid"  placeholder="enter id"><br>
  
      FIRST NAME : <input type="text" name="fname" value="<?php echo $fname; ?>" placeholder="enter first name"><br>
      LAST NAME : <input type="text" name="lname" value="<?php echo $lname; ?>" placeholder="enter last name"><br>

      MOBILE NO : <input type="text" name="mobno" value="<?php echo $mob; ?>"><br>
      EMAIL ID  : <input type="email" name="email" value=""><br>

      PASSWORD : <input type="password" name="pass" id="pass" value="" placeholder="enter password"><br>
      RE-ENTER password: <input type="password" name="rpass" value="" placeholder="re-enter password"><br>

      GENDER :
      <input type="radio" name="gender" value="male" checked> Male
      <input type="radio" name="gender" value="female"> Female<br>

      COLLEGE : <select class="" name="">
                      <option value="kjsieit">kjsieit</option>
                      <option value="kjsce">kjsce</option>
                      <option value="kjmedical">kjmedical</option>

                  </select><br>
      YOUR FEEDBACK:<br><textarea name="feedback" rows="8" cols="80"></textarea><br><br>


    <font color='red'> <DIV id="error"> </DIV> </font><br><br>
      <input type="submit" name="submit" value="insert">
      <input type="submit" name="read" value="read">
      <input type="submit" name="delete" value="delete">
      <input type="submit" name="update" value="update">
      <input type="reset" name="reset" value="reset">
    </form>

  

 <!--   <form class="read" id="formq" name="feedbackform" action="formjq.php" method="POST">
      customer id : <input type="text" name="cid"  placeholder="enter id"><br>
  </form> -->

  <div class="read">
  	<?php


  	  			 echo "Name: " . $fname. " " . $lname. "<br>";
  			 echo "mobile no   :" . $mob;




  	?>

  		

  </div>

</fieldset>





   <script type="text/javascript">
      //$(document).ready(function(){
      //  $("#formjq").validate({
          //   rules:{
          //     fname:"required",
          //     lname:"required",
          //     email:{
          //       required:true,
          //       email:true,
          //     },
          //     mobno:{
          //       maxlength:10,
          //       minlength:10,
          //       phone:true,
          //       required:true,
          //     },

          //     pass:{
          //       maxlength:5,
          //       minlength:10,
          //       required:true,

          //     },
          //     rpass:{
          //       maxlength:5,
          //       minlength:10,
          //       required:true,
          //       equalTo:$("#pass"),

          //     }
          //   },



          //    messages:{
          //     fname:"please enter valid name",
          //     lname:"please enter valid name",
          //     email:{
          //       required:"please enter valid email",
          //       email:"please enter valid email",


          //     },
          //     mobno:{
          //       maxlength:"please enter valid phno",
          //       minlength:"please enter valid phno",
          //       required:"phno is empty",
          //     },

          //      pass:{
          //       maxlength:"length must be between 5 to 10",
          //       minlength:"length must be between 5 to 10",
          //       required:"enter password",

          //     },
          //     rpass:{
          //       maxlength:"length mus be between 5 to 10",
          //       minlength:"length mus be between 5 to 10",
          //       required:"enter password",
          //       equalTo:"password didn't match",

          //     }


          //   },

          //   submitHandler: function(form) {
          //                 form.submit();
          //               }


          // });
   //     });
      
      

    </script>



  </body>
</html>

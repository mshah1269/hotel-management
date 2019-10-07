<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>

<?php
  $page = 'login';
  include "include/nav.php";
 ?>
 <div class="loginbg" style="background-image: url(../images/loginbg.jpg)">
   <div class="container">
     <div class="row justify-content-center">
       <form class="loginform" name="loginform" action="admin/index.php" method="post" onsubmit="return validation()">
         <h2>login</h2>
         <input type="text" name="username" value="" placeholder="username" required>
         <br>
         <input type="password" name="password" value="" placeholder="password" required>
         <br>
         <font color='red'> <DIV id="password"></DIV> </font>
         <br>
         <br>

         <input type="submit" name="submit" value="login">
       </form>

     </div>

   </div>

 </div>




<script type="text/javascript">
  function validation(){
    var username = document.loginform.username.value;
    var password = document.loginform.password.value;

    var usr = "admin";//username
    var pswd = "admin";//password



    if(username == usr && password == pswd){
      return true;
    }
    else{
      document.getElementById("password").innerHTML="Invalid username or password";
      loginform.username.focus();
      return false;
    }
  }

</script>

<?php
 include "include/footer.php";
?>

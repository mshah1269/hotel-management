<html>
<head>
  <script type="text/javascript">
   function myfunction(){
    a = document.getElementById('myselect').value;
    location.href="?a="+a;
   }
  </script>
 </head>

<body>
  <select id="myselect" onchange="myfunction()">
     <option value="10" <?php if($_GET['a']== 10 ) echo "selected"; ?> > value 10 </option>
     <option value="20" <?php if($_GET['a']== 20 ) echo "selected"; ?> > value 20 </option>
     <option value="30" <?php if($_GET['a']== 30 ) echo "selected"; ?> > value 30 </option>
  </select>

 <?php
    if (isset($_GET['a'])) {
      $val = $_GET['a'];
      echo $val;
    }
    else{
      $val = 0;
      echo $val;
    }
?>
</body>
</html>

<?php
$server= 'localhost';
$user= 'root';
$password= '';
$db='corona';

$con=mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
     <script>
     alert("connection sucess");
     </script>
     <?php
}
else
{
    ?>
     <script>
     alert("no connection");
     </script>
     <?php
}


?>
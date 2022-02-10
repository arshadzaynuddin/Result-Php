<?php
include ("config.php");
// session_start();
$a=$_POST['username'];
 $b=$_POST['password'];
$r= pg_query($con ,"select * from login");
 $f=0; 
while($row=pg_fetch_row($r))
{
if($a==$row[0] and $b==$row[1])
 {     
header("Location:insert.html");
       $f=1;
 }
}
if($f==0)
echo "login failed"; 
pg_close($con);

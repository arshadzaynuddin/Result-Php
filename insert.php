<?php
include ("config.php");
$a=$_POST['rollno'];
$b=$_POST['name'];
$c=$_POST['mark'];
$d=$_POST['grade'];
$r=pg_query($con,"INSERT INTO public.student (rollno,name,mark,grade)VALUES('$a','$b','$c','$d')");
 if($r){
     echo "success";
 }else{
     echo "error";
 }
?>
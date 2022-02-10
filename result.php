
<html>
<head>
<title>Result</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
<link rel="stylesheet" href="/style.css">
</head>
<body>
    
<h3 align="center">Result</h3>

    <div class="container">
<table class="table table-striped table-dark" align="center">
<?php
include ("config.php");
$a=$_POST['regno'];
$r=pg_query($con,"select * from student where rollno='$a'");
$f=0;

while($row=pg_fetch_row($r))
{
    if($a==$row[0])
    {   
        echo "<tr><td>Name</td><td>$row[1]</td></tr>";
        echo "<tr>";
        echo "<td>Register No</td>";
        echo "<td> $row[0]</td>";
        echo "</tr>";

       
        echo "<tr>";
        echo "<td>Mark</td>";
        echo "<td> $row[2]</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Grade</td>";
        echo "<td> $row[3]</td>";
        echo "</tr>";
        echo "</table>";
    $f=1;
    }
}
if($f==0)
echo "Result not found";
pg_close($con);
?>
</table>
</body>
</div>
</HTML>
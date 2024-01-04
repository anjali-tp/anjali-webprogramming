<html>
<center>
<body>
<?php
$name=["virat kohli","Rohit sharma","Shikar Dhawan","Rishab pande","harder pandya"];
echo"<h4>Cricket Team players Name</h4>
<table border='1px'>
<tr> <th>SI NO</th> <th>NAME</th></tr>";
for($i=0; $i<10;$i++)
{
$sl=$i+1;
echo"<tr><td>$sl </td><th>$name[$i]</th></tr>";
}
echo"</table>";
?>
</body>
</html>

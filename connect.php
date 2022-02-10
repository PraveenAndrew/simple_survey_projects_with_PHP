
<?php

 $s = "localhost";
 $u = "root";
 $p = "root";
 $db = "student_review";

  $con = new mysqli($s, $u, $p, $db);
 
 $r = $_POST['redmi'];
 $ss = $_POST['samsung'];
 $re = $_POST['realme'];


 echo "redmi:{$r}<br>";
 echo "samsung:{$ss}<br>";
 echo "realme:{$re}<br>";

$query = "update reviews set review= review+1,redmi=redmi+{$r},samsung=samsung+{$ss},realme=realme+{$re}";

// echo $query;


$query_run = mysqli_query($con,$query);


if($query_run)
{
	echo " review updated";
}
else
{
	echo "review not updated";
}


echo "<br>";

echo "<a href=view.php>view results </a>";


?>


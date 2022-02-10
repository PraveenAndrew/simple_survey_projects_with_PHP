<?php

 $s = "localhost";
 $u = "root";
 $p = "root";
 $db = "student_review";
 
 $con = new mysqli($s, $u, $p, $db);

	$totalreview = 0;
	$r = 0; 
	$ss =0;
	$re =0;

$query = "select * from reviews";

$query_run = mysqli_query($con,$query);

while($results=mysqli_fetch_assoc($query_run))
{

  $totalreview = $results["review"];
  $redmi = $results["redmi"];
  $samsung = $results["samsung"];
  $realme = $results["realme"];
}

  echo "<h1>review results </h1>";
  echo "<h3>";
  echo "redmi:".($redmi/$totalreview)."<br>";
  echo "samsung:".($samsung/$totalreview)."<br>";
  echo "realme:".($realme/$totalreview)."<br>";

  echo "</h3>";


?>
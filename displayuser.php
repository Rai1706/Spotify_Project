<?php  
include("dbconnect.php");
?>

<?php
$sql = "SELECT * FROM registration";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_assoc($result))
  {
    echo "<hr>User:" . $row["uname"]. "Password:" . $row["pass"];
  }
} 


else {
  echo "0 results";
}

mysqli_close($conn);
?>

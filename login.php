<?php
include("dbconnect.php");
?>
<?php
$un = $_POST['t1'];
$pd = $_POST['t2'];
$sql = "SELECT * FROM lgn";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    if ($row["uname"] == $un && $row["pass"] == $pd) {
        header("location:profile.php");
    }
}
mysqli_close($conn);
?>

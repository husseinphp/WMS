<?php 
include 'db.php';
include 'tempalte/header.php';
// include 'fun.php';


$sql = "select name,email from contact";

$res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
$num = mysqli_num_rows($res);

$json = array();
if($num > 0)
{
    while ($obj=mysqli_fetch_object($res))
    {
        $json[] = $obj;
    }
}
echo json_encode($json);


?>

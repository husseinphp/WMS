<?php 
include 'db.php';
include 'tempalte/header.php';
// include 'fun.php';
?>

<?php

if(isset($_POST['update-items-mnq'])){

$id2   = addslashes($_POST['id']);
$undersigned   = addslashes($_POST['undersigned']);
$received_from   = addslashes($_POST['received_from']);
$section   = addslashes($_POST['section']);
$tems_listed_below = addslashes($_POST['tems_listed_below']);
$sequencing   = addslashes($_POST['sequencing']);
$subject_name   = addslashes($_POST['subject_name']);
$count   = addslashes($_POST['count']);
$notes   = addslashes($_POST['notes']);
$recipient_name   = addslashes($_POST['recipient_name']);
$title   = addslashes($_POST['title']);
$date   = addslashes($_POST['date']);

$sql3 = "UPDATE `mnq` SET undersigned = '$undersigned' , received_from = '$received_from' , section = '$section' , tems_listed_below  = '$tems_listed_below' , sequencing = '$sequencing' , subject_name = '$subject_name' , count = '$count' , notes = '$notes' , recipient_name = '$recipient_name' , title = '$title' , date = '$date' WHERE id = '$id2'" ;

    // $res3=$con->query($sql3);
    // echo $undersigned;
    $result = mysqli_query($con,$sql3);
    if (!$result)
{
    die('Error: '. mysqli_error($con));

}


?>
<div class="alert alert-success text-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>تم تحديث البيانات  </strong> 
</div>

<script type="text/javascript">   
function Redirect() 
{  
window.location="/hussein/exploer-mnq.php"; 
} 

setTimeout('Redirect()', 800);   
</script>

<?php  }

?>
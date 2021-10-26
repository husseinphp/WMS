<?php 
include 'db.php';
// include 'tempalte/header.php';
 // include 'I18N/Arabic.php';
 include 'toarb.php';
 // toarb

//  error_reporting(0);
?>

<?php
if(isset($_POST['loginadmin'])){
   
    // echo "loginadminloginadminloginadminloginadminloginadminloginadmin";


        $username = $_POST['username'];
        $password = $_POST['password'];
   
    $sql="SELECT * FROM `admin` WHERE username='$username' and password='".$password."'";
    
    $result = mysqli_query($con,$sql) or die(mysql_error());
	$row = mysqli_num_rows($result);
    
    echo "rowwwwwwww =>" .$row;

    
            if ($row == 1) {
                # code...
                // setcookie('user', $username,time() + (86400 * 30), "/"); // 86400 = 1 DAY
                $_SESSION['user'] = $username;
                
                header('Location: index.php');

                // echo "OKKKKKKKKK MAN";
               
    
            }
            else{
        header('Location: loginadmin.php');
    
    }
}
?>



<?php 

include 'tempalte/footer.php';


?>



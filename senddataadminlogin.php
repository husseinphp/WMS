<?php 

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] =='POST') {

include 'db.php';
// include '/tempalte/header.php';
// include 'fun.php';
?>

<?php 

if (isset($_SESSION['user'])) {
	# code...
	
	$No_ERROR  = array('error' => 'No_ERROR',);
	echo json_encode($No_ERROR);
	header('Location: index.php');

	      exit();
	
}

?>

<?php
//cheak if user coming from HTTP POST
if ($_SERVER['REQUEST_METHOD'] =='POST') {
	# code...
	$username = $_POST['username'];
	$password = $_POST['password'];
	$hashpass = sha1($password);
// echo "PASS = > " . $hashpass . "</br>";
// cheak if user Exit in database
$sql="SELECT username  , SHA1(password) FROM admin  WHERE username = $username AND password = $password " ;

$res=$con->query($sql);

// $row=$res->fetch_assoc();

// 		$cont = $row->rowCount();


		//if count > 0 ,mean the informathin exit in data

		if (mysqli_num_rows($res) > 0) {
			# code...
			// setcookie('user', $username,time() + (86400 * 30), "/"); // 86400 = 1 DAY
			$_SESSION['user'] = $username;
			// header('Location: index.php');
			$arr_error  = array('error' => 'no_error');
				
							echo json_encode($arr_error);

		}
		else{
		if (empty($username)) {


						$arr_error  = array('error' => 'username is empty',);
				
							echo json_encode($arr_error);

						}

		else {
				// echo "hashpass = > " . $hashpass;
		$arr_error  = array('error' => 'username or password is incorrect',);
				
			echo json_encode($arr_error);

		}
	}
}
}else{
	header('Location: loginadmin.php');

}
?>


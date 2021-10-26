<?php 
include 's_input_db.php';
include 'tempalte/header.php';
// include 'fun.php';
?>
<div class="container-fluid">

<?php
  $urlx = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<a href='$urlx' class=' '>
  "?>
  
<svg id="bold" enable-background="new 0 0 32 32" height="" viewBox="0 0 32 32" width="50" xmlns="http://www.w3.org/2000/svg"><path d="m26 32h-20c-3.314 0-6-2.686-6-6v-20c0-3.314 2.686-6 6-6h20c3.314 0 6 2.686 6 6v20c0 3.314-2.686 6-6 6z" fill="#ffe6e2"/><path d="m19.833 14h-3.833v-2.167c0-.44-.53-.666-.847-.36l-4.333 4.167c-.098.094-.153.224-.153.36s.055.266.153.36l4.333 4.167c.316.304.847.082.847-.36v-2.167h3.833c.46 0 .833-.374.833-.833v-2.333c.001-.46-.373-.834-.833-.834z" fill="#fd907e"/><path d="m16 24c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8zm0-14.667c-3.676 0-6.667 2.991-6.667 6.667s2.991 6.667 6.667 6.667 6.667-2.991 6.667-6.667-2.991-6.667-6.667-6.667z" fill="#fc573b"/></svg>
  
  <?php
 echo "</a>"; 
?>

<?php
  $urlx = "index.php";
  echo "<a href='$urlx' class=' '>
  "?>
  
<svg xmlns="http://www.w3.org/2000/svg" height="" version="1.1" viewBox="0 0 512.00001 512" width="45">
<g id="surface1">
<path d="M 423.667969 167.667969 L 397.191406 141.191406 L 397.191406 176.578125 L 397.191406 141.191406 L 256 0 L 256 300.121094 L 326.597656 300.121094 L 326.597656 511.910156 L 467.789062 511.910156 L 467.789062 256 L 512 256 Z M 423.667969 167.667969 " style=" stroke:none;fill-rule:nonzero;fill:rgb(74.901961%,76.470588%,95.686275%);fill-opacity:1;" />
<path d="M 256 300.121094 L 256 0 L 0 256 L 44.210938 256 L 44.210938 511.910156 L 185.402344 511.910156 L 185.402344 300.121094 Z M 256 300.121094 " style=" stroke:none;fill-rule:nonzero;fill:rgb(70.588235%,72.54902%,94.901961%);fill-opacity:1;" />
<path d="M 423.667969 167.667969 L 423.667969 53.035156 L 397.191406 53.035156 L 397.191406 141.191406 Z M 423.667969 167.667969 " style=" stroke:none;fill-rule:nonzero;fill:rgb(56.078431%,58.823529%,92.156863%);fill-opacity:1;" />
<path d="M 397.191406 53.035156 L 370.71875 53.035156 L 370.71875 114.71875 L 397.191406 141.191406 Z M 397.191406 53.035156 " style=" stroke:none;fill-rule:nonzero;fill:rgb(48.627451%,51.764706%,90.980392%);fill-opacity:1;" />
<path d="M 256 300.121094 L 326.597656 300.121094 L 326.597656 511.910156 L 256 511.910156 Z M 256 300.121094 " style=" stroke:none;fill-rule:nonzero;fill:rgb(56.078431%,58.823529%,92.156863%);fill-opacity:1;" />
<path d="M 185.402344 300.121094 L 256 300.121094 L 256 511.910156 L 185.402344 511.910156 Z M 185.402344 300.121094 " style=" stroke:none;fill-rule:nonzero;fill:rgb(48.627451%,51.764706%,90.980392%);fill-opacity:1;" />
</g>
</svg>
  
  <?php
echo "</a>"; 
?>



<?php
  $urlx = "logout.php";
  echo "<a href='$urlx' class=' '>
  "?>
  

  
<svg id="Capa_1" enable-background="new 0 0 512 512" height="" viewBox="0 0 512 512" width="45" xmlns="http://www.w3.org/2000/svg"><g><path d="m256 512c-68.38 0-132.667-26.629-181.02-74.98-48.351-48.353-74.98-112.64-74.98-181.02s26.629-132.667 74.98-181.02c48.353-48.351 112.64-74.98 181.02-74.98s132.667 26.629 181.02 74.98c48.351 48.353 74.98 112.64 74.98 181.02s-26.629 132.667-74.98 181.02c-48.353 48.351-112.64 74.98-181.02 74.98z" fill="#ff6446"/><path d="m256 0v512c68.38 0 132.667-26.629 181.02-74.98 48.351-48.353 74.98-112.64 74.98-181.02s-26.629-132.667-74.98-181.02c-48.353-48.351-112.64-74.98-181.02-74.98z" fill="#ff320a"/><path d="m256 451c-107.523 0-195-87.477-195-195s87.477-195 195-195 195 87.477 195 195-87.477 195-195 195z" fill="#ff320a"/><path d="m451 256c0-107.523-87.477-195-195-195v390c107.523 0 195-87.477 195-195z" fill="#d21900"/><path d="m256 371c-63.411 0-115-51.589-115-115 0-36.485 16.836-70.02 46.19-92.006 6.63-4.966 16.032-3.617 20.998 3.014s3.617 16.032-3.014 20.998c-21.718 16.266-34.174 41.05-34.174 67.994 0 46.869 38.131 85 85 85s85-38.131 85-85c0-26.944-12.456-51.728-34.175-67.994-6.631-4.966-7.98-14.367-3.014-20.998s14.368-7.98 20.998-3.014c29.355 21.986 46.191 55.521 46.191 92.006 0 63.411-51.589 115-115 115z" fill="#dcf5fa"/><path d="m256 211c-8.284 0-15-6.716-15-15v-60c0-8.284 6.716-15 15-15s15 6.716 15 15v60c0 8.284-6.716 15-15 15z" fill="#dcf5fa"/><g fill="#bedce6"><path d="m371 256c0-36.485-16.836-70.02-46.19-92.006-6.63-4.966-16.032-3.617-20.998 3.014s-3.617 16.032 3.014 20.998c21.718 16.266 34.174 41.05 34.174 67.994 0 46.869-38.131 85-85 85v30c63.411 0 115-51.589 115-115z"/><path d="m271 196v-60c0-8.284-6.716-15-15-15v90c8.284 0 15-6.716 15-15z"/></g></g></svg>
  
  <?php
echo "</a>"; 
?>


<div class="forborder border border-dark mt-2">

<div class="row">
	
<div class="col">
	
<h1 class="text-center mt-3 mb-5"> سند الاخراج    </h1>

</div>

</div>



</div>	

<form action="" method="post">


<?php 

if (isset($_GET['edit'])) {
	# code...

$id = $_GET['edit'];

	$sql='SELECT * FROM s_input WHERE id ='.$id;

        $res=$con->query($sql);

        $row=$res->fetch_assoc();
            // $row["d_rec"];
	

 ?>

<div class="forborder2  border border-dark mt-2 ">
<div class="row text-right mt-5 mb-5" dir="rtl" lang="ar" >
	<div class="col"><span>الرقم </span>  <input type="text" name="number" value="<?php if(isset($row['number'])) { echo $row['number'] ;} ?> "></div>
	<div class="col"><span>  اسم الدائرة المستلمة</span>  <input type="text" name="d_rec" value="<?php if(isset($row['d_rec'])) { echo $row['d_rec'] ;} ?> " ></div>
	<div class="col"><span>  اسم الجهة المجهزة</span>  <input type="text" name="name_of_the_provider" value="<?php if(isset($row['name_of_the_provider'])) { echo $row['name_of_the_provider'] ;} ?> " ></div>
	<div class="col"><span>  ،التاريخ</span>  <input type="text" name="date" value="<?php if(isset($row['date'])) { echo $row['date'] ;} ?> "></div>
	<div class="col"><span>  رقم وتاريخ كتاب الطلب</span>  <input type="text" name="date_order_book" value="<?php if(isset($row['date_order_book'])) { echo $row['date_order_book'] ;} ?> "></div>
	
</div>
	

	<div class="row text-right mt-5 mb-5" dir="rtl" lang="ar" >
	<div class="col"><span> رقم وتاريخ التجهيز</span>  <input type="text" name="number_date_processing" value="<?php if(isset($row['number_date_processing'])) { echo $row['number_date_processing'] ;} ?> "></div>
	<div class="col"><span> ،التسلسل</span>  <input type="text" name="sequence" value="<?php if(isset($row['sequence'])) { echo $row['sequence'] ;} ?> "></div>
	<div class="col"><span> العدد</span>  <input type="text" name="count" value="<?php if(isset($row['count'])) { echo $row['count'] ;} ?> "></div>
	<div class="col"><span> لسعر /المفرد</span>  <input type="text" name="price_singular" value="<?php if(isset($row['price_singular'])) { echo $row['price_singular'] ;} ?> "></div>
	<div class="col"><span> السعر /الاجمالي</span>  <input type="text" name="price_total" value="<?php if(isset($row['price_total'])) { echo $row['price_total'] ;} ?> "></div>
	
	</div>


	<div class="row text-right mt-5 mb-5" dir="rtl" lang="ar" >
	<div class="col"><span> نوع المادة المستلمة</span>  <input type="text" name="type_item_received" value="<?php if(isset($row['type_item_received'])) { echo $row['type_item_received'] ;} ?> "></div>
	<div class="col"><span> رقم الصفحة في سجل المخزن</span>  <input type="text" name="page_number_store_log" value="<?php if(isset($row['page_number_store_log'])) { echo $row['page_number_store_log'] ;} ?> "></div>
	<div class="col"><span> رقم تسلسل القيد في سجل المخزن</span>  <input type="text" name="registration_sequence_number_store_record" value="<?php if(isset($row['registration_sequence_number_store_record'])) { echo $row['registration_sequence_number_store_record'] ;} ?> "></div>
	<div class="col"><span> ،الملاحظات</span>  <input type="text" name="notes" value="<?php if(isset($row['notes'])) { echo $row['notes'] ;} ?> "></div>
	<div class="col"><span> اسم المستلم</span>  <input type="text" name="name_rec" value="<?php if(isset($row['name_rec'])) { echo $row['name_rec'] ;} ?> "></div>
	
	</div>


	<div class="row text-right mt-5 mb-5" dir="rtl" lang="ar" >
	<div class="col-3"><span> ،العنوان الوظيفي</span>  <input type="text" name="title" value="<?php if(isset($row['title'])) { echo $row['title'] ;} ?> "></div>
	<!-- <div class="col"><span> توقيع المستلم  </span>  <input type="text" name=""></div> -->
<!-- <button class="btn btn-danger col-1 "> تحديث  </button> -->
	

<button type="submit" class="btn btn-info" name="update">تحديث</button>

	<!-- <div class="col"><span> توقيع امين المخزن</span>  <input type="text" name=""></div> -->
	
	







	
	</div>


</div>
</div>
</form>
<?php  

if(isset($_POST['update'])){

	$id   = $_GET['edit'];
	   $number   = $_POST['number'];
	   $d_rec   = $_POST['d_rec'];
	   $name_of_the_provider   = $_POST['name_of_the_provider'];
	   $date   = $_POST['date'];
	   $date_order_book   = $_POST['date_order_book'];
	   $number_date_processing   = $_POST['number_date_processing'];
	   $sequence   = $_POST['sequence'];
	   $count   = $_POST['count'];
	   $price_singular   = $_POST['price_singular'];
	   $price_total   = $_POST['price_total'];
	   $type_item_received   = $_POST['type_item_received'];
	   $page_number_store_log   = $_POST['page_number_store_log'];
	   $registration_sequence_number_store_record   = $_POST['registration_sequence_number_store_record'];
	   $notes   = $_POST['notes'];
	   $name_rec   = $_POST['name_rec'];
	   $title  = $_POST['title'];

	   $sql2 = "UPDATE s_input  SET number = '$number' , d_rec = '$d_rec' , name_of_the_provider = '$name_of_the_provider' , date  = '$date' , date_order_book = '$date_order_book' , number_date_processing = '$number_date_processing' , sequence = '$sequence' , count = $count , price_singular = '$price_singular' , price_total = '$price_total' , type_item_received = '$type_item_received' , page_number_store_log = '$page_number_store_log'  , registration_sequence_number_store_record = '$registration_sequence_number_store_record'  , notes = '$notes'  , name_rec = '$name_rec' , title = '$title'  WHERE id = '$id' " ;

        	$res2=$con->query($sql2);
			// echo $id;

?>
	<div class="alert alert-success text-center">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>تم تحديث البيانات  </strong> 
		</div>

		<script type="text/javascript">   
    function Redirect() 
    {  
        window.location="/hussein/exploer-out.php"; 
    } 
    // document.write("You will be redirected to a new page in 5 seconds"); 
    setTimeout('Redirect()', 1000);   
</script>

<?php

// header( "refresh:1;url=/hussein/exploer-out.php" );


}

}


// print


elseif(isset($_GET['print'])){
	
	
?>


<!-- <form action="" method="post"> -->


<?php 


	# code...

$id = $_GET['print'];

	$sql='SELECT * FROM s_input WHERE id ='.$id;

        $res=$con->query($sql);

        $row=$res->fetch_assoc();
            // $row["d_rec"];
	

 ?>

<div class="forborder2  border border-dark mt-2 ">
<div class="row text-right mt-5 mb-5" dir="rtl" lang="ar" >
	<div class="col"><span>الرقم </span>  <input type="text" name="number" value="<?php if(isset($row['number'])) { echo $row['number'] ;} ?> "></div>
	<div class="col"><span>  اسم الدائرة المستلمة</span>  <input type="text" name="d_rec" value="<?php if(isset($row['d_rec'])) { echo $row['d_rec'] ;} ?> " ></div>
	<div class="col"><span>  اسم الجهة المجهزة</span>  <input type="text" name="name_of_the_provider" value="<?php if(isset($row['name_of_the_provider'])) { echo $row['name_of_the_provider'] ;} ?> " ></div>
	<div class="col"><span>  ،التاريخ</span>  <input type="text" name="date" value="<?php if(isset($row['date'])) { echo $row['date'] ;} ?> "></div>
	<div class="col"><span>  رقم وتاريخ كتاب الطلب</span>  <input type="text" name="date_order_book" value="<?php if(isset($row['date_order_book'])) { echo $row['date_order_book'] ;} ?> "></div>
	
</div>
	

	<div class="row text-right mt-5 mb-5" dir="rtl" lang="ar" >
	<div class="col"><span> رقم وتاريخ التجهيز</span>  <input type="text" name="number_date_processing" value="<?php if(isset($row['number_date_processing'])) { echo $row['number_date_processing'] ;} ?> "></div>
	<div class="col"><span> ،التسلسل</span>  <input type="text" name="sequence" value="<?php if(isset($row['sequence'])) { echo $row['sequence'] ;} ?> "></div>
	<div class="col"><span> العدد</span>  <input type="text" name="count" value="<?php if(isset($row['count'])) { echo $row['count'] ;} ?> "></div>
	<div class="col"><span> لسعر /المفرد</span>  <input type="text" name="price_singular" value="<?php if(isset($row['price_singular'])) { echo $row['price_singular'] ;} ?> "></div>
	<div class="col"><span> السعر /الاجمالي</span>  <input type="text" name="price_total" value="<?php if(isset($row['price_total'])) { echo $row['price_total'] ;} ?> "></div>
	
	</div>


	<div class="row text-right mt-5 mb-5" dir="rtl" lang="ar" >
	<div class="col"><span> نوع المادة المستلمة</span>  <input type="text" name="type_item_received" value="<?php if(isset($row['type_item_received'])) { echo $row['type_item_received'] ;} ?> "></div>
	<div class="col"><span> رقم الصفحة في سجل المخزن</span>  <input type="text" name="page_number_store_log" value="<?php if(isset($row['page_number_store_log'])) { echo $row['page_number_store_log'] ;} ?> "></div>
	<div class="col"><span> رقم تسلسل القيد في سجل المخزن</span>  <input type="text" name="registration_sequence_number_store_record" value="<?php if(isset($row['registration_sequence_number_store_record'])) { echo $row['registration_sequence_number_store_record'] ;} ?> "></div>
	<div class="col"><span> ،الملاحظات</span>  <input type="text" name="notes" value="<?php if(isset($row['notes'])) { echo $row['notes'] ;} ?> "></div>
	<div class="col"><span> اسم المستلم</span>  <input type="text" name="name_rec" value="<?php if(isset($row['name_rec'])) { echo $row['name_rec'] ;} ?> "></div>
	
	</div>


	<div class="row text-right mt-5 mb-5" dir="rtl" lang="ar" >
	<div class="col-3"><span> ،العنوان الوظيفي</span>  <input type="text" name="title" value="<?php if(isset($row['title'])) { echo $row['title'] ;} ?> "></div>
	<!-- <div class="col"><span> توقيع المستلم  </span>  <input type="text" name=""></div> -->
<!-- <button class="btn btn-danger col-1 "> تحديث  </button> -->
	
<!-- <img src="x" alt="x">	 -->
<!-- <img src="x" alt="x">	 -->

<div class="col-2 text-center">
<img src="image\<?php echo $row['rec_signature'] ?>" alt="<?php echo $row['rec_signature'] ?>" width="100" height="100">
<p>توقيع المستلم	</p>
</div>

<div class="col-6 text-left">
<img src="image\<?php echo $row['signature_department_head'] ?>" alt="<?php echo $row['signature_department_head'] ?>" width="100" height="100">
<p>توقيع ومصادقة رئيس الدائرة
	</p>
</div>

	<!-- <div class="col"><span> توقيع امين المخزن</span>  <input type="text" name=""></div> -->
	
	


	
	</div>

<div class="row">
<div class="col-12 text-center">
<button type="button" class="btn btn-info w-25 mb-3" name="update" onclick="window.print();" target="_blank" style="cursor:pointer;" >طباعة</button>
</div>
</div>


</div>
</div>
<!-- </form> -->



	
<?php }

?>
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>


<script>
var loadFile2 = function(event) {
	var image = document.getElementById('output2');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

<script>
var loadFile3 = function(event) {
	var image = document.getElementById('output3');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>


<?php 
include 'tempalte/footer.php';

 ?>


	<!-- <div class="col"><span>  </span>  <input type="text" name=""></div> -->

<?php 
include 's_input_db.php';
include 'tempalte/header.php';
// include 'fun.php';
?>

<div class="container-fluid">

<div class="forborder border border-dark mt-2">

<div class="row">
	
<div class="col">
	
<h1 class="text-center mt-3"> سند الاخراج    </h1>

</div>

</div>



<div class="row mb-5 mt-5 text-center" dir="rtl" lang="ar" > 

<div class="col"> 


	<button class="btn btn-success"> أضافه  </button>

	<button class="btn btn-secondary mr-5"> تعديل</button> <input type="" name="" class="w-50" placeholder="رقم الصفحة في سجل المخزن">



 </div>


<div class="col"> 


	<button class="btn btn-danger"> حذف </button> <input type="" name="" class="w-50" placeholder="رقم الصفحة في سجل المخزن">


 </div>



 <div class="col"> 


	<button class="btn btn-primary"> بحث    </button> <input type="" name="" class="w-50" placeholder="رقم الصفحة في سجل المخزن">


 </div>
</div>

</div>	

<div class="forborder2  border border-dark mt-2 ">
<div class="row text-right mt-5 mb-5" dir="rtl" lang="ar" >
	<div class="col"><span>الرقم </span>  <input type="text" name=""></div>
	<div class="col"><span>  اسم الدائرة المستلمة</span>  <input type="text" name=""></div>
	<div class="col"><span>  اسم الجهة المجهزة</span>  <input type="text" name=""></div>
	<div class="col"><span>  ،التاريخ</span>  <input type="text" name=""></div>
	<div class="col"><span>  رقم وتاريخ كتاب الطلب</span>  <input type="text" name=""></div>
	
</div>
	

	<div class="row text-right mt-5 mb-5" dir="rtl" lang="ar" >
	<div class="col"><span> رقم وتاريخ التجهيز</span>  <input type="text" name=""></div>
	<div class="col"><span> ،التسلسل</span>  <input type="text" name=""></div>
	<div class="col"><span> العدد</span>  <input type="text" name=""></div>
	<div class="col"><span> لسعر /المفرد</span>  <input type="text" name=""></div>
	<div class="col"><span> السعر /الاجمالي</span>  <input type="text" name=""></div>
	
	</div>


	<div class="row text-right mt-5 mb-5" dir="rtl" lang="ar" >
	<div class="col"><span> نوع المادة المستلمة</span>  <input type="text" name=""></div>
	<div class="col"><span> رقم الصفحة في سجل المخزن</span>  <input type="text" name=""></div>
	<div class="col"><span> رقم تسلسل القيد في سجل المخزن</span>  <input type="text" name=""></div>
	<div class="col"><span> ،الملاحظات</span>  <input type="text" name=""></div>
	<div class="col"><span> اسم المستلم</span>  <input type="text" name=""></div>
	
	</div>


	<div class="row text-right mt-5 mb-5" dir="rtl" lang="ar" >
	<div class="col"><span> ،العنوان الوظيفي</span>  <input type="text" name=""></div>
	<!-- <div class="col"><span> توقيع المستلم  </span>  <input type="text" name=""></div> -->

	<div class="col"> توقيع المستلم <input type="file"  accept="image/*" name="image" id="file3"  onchange="loadFile3(event)" style="display: none;">

		<img id="output3" width="200" />	

		 <label for="file3" style="cursor: pointer;" class="btn btn-success">  اضافه توقيع   </label> </p>

		</div>



	<!-- <div class="col"><span> توقيع امين المخزن</span>  <input type="text" name=""></div> -->
	
		<div class="col"> توقيع ومصادقة رئيس الدائرة  <input type="file"  accept="image/*" name="image" id="file2"  onchange="loadFile2(event)" style="display: none;">

		<img id="output2" width="200" />	

		 <label for="file2" style="cursor: pointer;" class="btn btn-success">  اضافه توقيع   </label> </p>

		</div>





	<div class="col"> توقيع ومصادقة رئيس الدائرة  <input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">

		<img id="output" width="200" />	

		 <label for="file" style="cursor: pointer;" class="btn btn-success">  اضافه توقيع   </label> </p>
	</div>

	
	</div>


</div>
</div>

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

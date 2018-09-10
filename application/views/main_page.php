<?php 
	$this->load->view("header");
?>

<div class="container-fluid">


<div class="row">

<div class="col-md-3 bg-primary text-white">

<?php $this->load->view('left_menu',$menus);  ?>

</div>

<div class="col-md-9 bg-white page-content">

<h2 class="page-title">บริการของหน่วยงาน</h2>

<ol class="content-ol">
<li>บริการตรวจวิเคราะห์และทดสอบคุณภาพตัวอย่างน้ำเสีย น้ำทิ้ง น้ำใต้ดิน น้ำบาดาล น้ำประปา น้ำดื่มและน้ำผิวดิน โดยมีดัชนีชี้วัดหรือคุณลักษณะที่ต้องการทราบ ตามประกาศ พระราชบัญญัติ พระราชกำหนด  กฎหมาย หรือมาตรฐานคุณภาพของน้ำประเภทต่างๆ ที่กำหนดโดยหน่วยงานที่รับผิดชอบ และใช้วิธีวิเคราะห์/ทดสอบตามวิธีมาตรฐาน Standard Method for the Examination of Water and Wastewater (APHA, AWWA, WEF) 

<div class="row img-padding" >
<div class="col-md-6">
<img src="<?= base_url('images/water1.jpg') ?>" class="img-fluid">
</div>
<div class="col-md-6">
<img src="<?= base_url('images/water2.jpg') ?>"  class="img-fluid">
</div>
</div>

</li>
<li>
บริการตรวจวิเคราะห์และทดสอบตัวอย่างผลิตภัณฑ์ชุมชน (OTOP) ทั้งที่เป็นอาหาร และไม่ใช่อาหาร โดยใช้วิธีวิเคราะห์ตามวิธีมาตรฐาน  Official Methods of Analysis of Association of Official Analytical Chemists (AOAC)

<div class="row img-padding" >
<div class="col-md-6">
<img src="<?= base_url('images/water4.jpg') ?>" class="img-fluid">
</div>
<div class="col-md-6">
<img src="<?= base_url('images/water5.jpg') ?>"  class="img-fluid">
</div>
</div>


</li>
<li>
ตัวอย่างอื่น ๆ ตามที่ผู้ขอรับบริการและห้องปฏิบัติการวิเคราะห์และทดสอบตกลงกัน
</li>
</ol>

<p class="text-center" style="font-size:1.4em;color:red">
*** บริหารจัดการคุณภาพตามระบบมาตรฐานห้องปฏิบัติ ISO/IEC 17025 ***
</p>


</div>

</div><!--end row-->
</div><!--end container-->

<?php 
	$this->load->view("footer");
?>

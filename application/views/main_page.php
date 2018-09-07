<?php 
	$this->load->view("header");
?>

<div class="container-fluid">

<div class="row">

<div class="col-md-3 bg-primary text-white">
<h2>Menu</h2>
<ul>
<?php foreach($menus->result() as $menu): ?>
  <li><?= $menu->menu_text ?></li>
<?php endforeach; ?>
</ul>
</div>

<div class="col-md-9 bg-white">
<ol>
<li>บริการตรวจวิเคราะห์และทดสอบคุณภาพตัวอย่างน้ำเสีย น้ำทิ้ง น้ำใต้ดิน น้ำบาดาล น้ำประปา น้ำดื่มและน้ำผิวดิน โดยมีดัชนีชี้วัดหรือคุณลักษณะที่ต้องการทราบ ตามประกาศ พระราชบัญญัติ พระราชกำหนด  กฎหมาย หรือมาตรฐานคุณภาพของน้ำประเภทต่างๆ ที่กำหนดโดยหน่วยงานที่รับผิดชอบ และใช้วิธีวิเคราะห์/ทดสอบตามวิธีมาตรฐาน Standard Method for the Examination of Water and Wastewater (APHA, AWWA, WEF) 
</li>
<li>
บริการตรวจวิเคราะห์และทดสอบตัวอย่างผลิตภัณฑ์ชุมชน (OTOP) ทั้งที่เป็นอาหาร และไม่ใช่อาหาร โดยใช้วิธีวิเคราะห์ตามวิธีมาตรฐาน  Official Methods of Analysis of Association of Official Analytical Chemists (AOAC)
</li>
<li>
ตัวอย่างอื่น ๆ ตามที่ผู้ขอรับบริการและห้องปฏิบัติการวิเคราะห์และทดสอบตกลงกัน
</li>
</ol>

</div>

</div><!--end row-->
</div><!--end container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</head>
</html>

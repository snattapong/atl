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

<h1>ขั้นตอนในการให้บริการ</h1>
<ol>
<li>ลูกค้าติดต่อขอรับบริการกับทางห้องปฏิบัติการวิเคราะห์และทดสอบ</li> 
<li>ลูกค้ากรอกรายละเอียดขอรับบริการวิเคราะห์และทดสอบในแบบฟอร์ม จากนั้นเจ้าหน้าที่จะกำหนดรหัสตัวอย่าง และลงในบัญชีรับ ตัวอย่าง และกำหนดออกผลภายใน 2 สัปดาห์</li>
<li>เจ้าหน้าที่คิดค่าวิเคราะห์ให้ลูกค้าชำระกับการเงินกรณีลูกค้าต้องการชำระเงินก่อน</li>
<li>เจ้าหน้าที่รับตัวอย่างจัดเก็บตัวอย่างในตู้เย็น</li> 
<li>เจ้าหน้าที่ทดสอบจะทำการทดสอบตามพารามิเตอร์ที่ระบุไว้ข้างขวดตัวอย่าง</li>
<li>เจ้าหน้าที่ทดสอบส่งผลมาให้เจ้าหน้าที่ธุรการเพื่อรายงานผลตามแบบฟอร์มรายงานผล</li>
<li>ห้วหน้าห้องปฏิบัติการวิเคราะห์ลงนามในใบรายงานผล พร้อมเสนอคณบดีลงนาม</li>
<li>กรณีลูกค้ายังไม่ชำระค่าวิเคราะห์ ออกใบแจ้งหนี้ส่งไปยังลูกค้า เมื่อลูกค้าชำระแล้วจึงจัดส่งผลฉบับจริง กรณีลูกค้าชำระค่าวิเคราะห์ จัดส่งผลฉบับจริงให้ลูกค้าตามที่อยู่ระบุในฟอร์ม</li>
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

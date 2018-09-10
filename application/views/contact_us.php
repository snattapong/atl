<?php 
	$this->load->view("header");
?>

<div class="container-fluid">

<div class="row">

<div class="col-md-3 bg-primary text-white">
<?php $this->load->view('left_menu',$menus);  ?>
</div>

<div class="col-md-9 bg-white page-content">

<h2 class="page-title">สถานที่ติดต่อ</h2>

<p class="page-content">
<strong>ห้องปฏิบัติการวิเคราะห์และทดสอบ</strong><br/>
อาคารวิจัย ชั้น 4 ห้อง Sc 454-457&nbsp; คณะวิทยาศาสตร์ มหาวิทยาลัยอุบลราชธานี <br>
                  85 ถนนสถลมาร์ค ตำบลเมืองศรีไค อำเถอวารินชำราบ จังหวัดอุบลราชธานี 34190<br>
โทรศัพท์ - โทรสาร 0-4528-8231 หรือ<br>
โทรศัพท์ 0-4535-3400-2 ต่อ 4481, 4581, 4421 โทรสาร 0-4535-3422
<p>
</div>

</div><!--end row-->
</div><!--end container-->

<?php 
	$this->load->view("footer");
?>

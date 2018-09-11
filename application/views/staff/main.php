<?php 
	$this->load->view("header");
?>

<div class="container-fluid">

<div class="row">

<div class="col-md-3 bg-primary text-white">

<?php $this->load->view('left_menu',$menus);  ?>

</div>

<div class="col-md-9 bg-white page-content">

<h2 class="page-title">ยินดีต้อนรับ</h2>

<table class="table table-bordered">
<tr> <td>ชื่อ-สกุล</td> <td><?= $staff_info->full_name ?></td> </tr>
<tr> <td>หน้าที่</td> <td><?= $staff_info->job ?></td> </tr>
<tr> <td>อีเมล์</td> <td><?= $staff_info->email ?></td> </tr>
<tr> <td>เบอร์โทร</td> <td><?= $staff_info->phone ?></td> </tr>
</table>

<strong>ข้อมูลการใช้งานระบบ</strong>
<table class="table table-bordered">
<tr> <td>ชื่อผุ้ใช้</td> <td><?= $staff_info->user_id ?></td> </tr>
<tr> <td>สิทธิ์เข้าใช้งาน</td> <td><?= $staff_info->authority ?></td> </tr>
<tr> <td>วันที่สมัคร</td> <td><?= $staff_info->create_date ?></td> </tr>
<tr> <td>เข้าระบบล่าสุด</td> <td><?= $staff_info->last_login ?></td> </tr>

</table>


</div>

</div><!--end row-->
</div><!--end container-->

<?php 
	$this->load->view("footer");
?>

<script>
	$('#staff_user').focus();
</script>

<?php 
	$this->load->view("header");
?>

<div class="container-fluid">

<div class="row">

<div class="col-md-3 bg-primary text-white">

<?php $this->load->view('left_menu',$menus);  ?>

</div>

<div class="col-md-9 bg-white page-content">

<h2 class="page-title">ลูกค้า/ผู้ขอใช้บริการ</h2>

<table class="table table-bordered">
<tr>
	<th>หน่วยงาน/บริษัท</th>
  <th>ผู้ประสานงาน</th>
  <th>เบอร์โทรติดต่อ</th>
</tr>
<?php foreach($customers->result() as $customer):?>
<tr>
<td><?= $customer->customer_name ?></td>
  <td><?= $customer->coordinator_name ?></td>
  <td><?= $customer->mobile ?></td>
</tr>

<?php endforeach; ?>
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

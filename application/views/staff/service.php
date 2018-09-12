<?php 
	$this->load->view("header");
?>

<div class="container-fluid">

<div class="row">

<div class="col-md-3 bg-primary text-white">

<?php $this->load->view('left_menu',$menus);  ?>

</div>

<div class="col-md-9 bg-white page-content">

<h2 class="page-title">คำขอรับบริการ</h2>

</div>

</div><!--end row-->
</div><!--end container-->

<?php 
	$this->load->view("footer");
?>

<script>
	$('#staff_user').focus();
</script>

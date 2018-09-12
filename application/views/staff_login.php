<?php 
	$this->load->view("header");
?>

<div class="container-fluid">

<div class="row">

<div class="col-md-3 bg-primary text-white">

<?php $this->load->view('left_menu',$menus);  ?>

</div>

<div class="col-md-9 bg-white page-content">

<h2 class="page-title">เข้าสู่ระบบ<small>(staff)</small></h2>
<form method="POST" action="<?= site_url('main/staff_login') ?>">
  <div class="form-group">
    <label for="staff_user">Username</label>
    <input type="text" class="form-control" id="staff_user" name="staff_user" aria-describedby="usernameHelp" placeholder="Enter username">
    <small id="usernameHelp" class="form-text text-muted">กรอกชื่อผู้ใช้</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <!--
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="remember" name="remember">
    <label class="form-check-label" for="remember">Remember me</label>
  </div>
  -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

</div><!--end row-->
</div><!--end container-->

<?php 
	$this->load->view("footer");
?>

<script>
	$("input").on("click", function () {
   	$(this).select();
	});

</script>

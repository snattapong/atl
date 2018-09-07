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
<li>เกี่ยวกับองค์กร</li>
<li>บุคลากร</li>
<li>ขั้นตอนการให้บริการ</li>
<li>อัตราค่าบริการ</li>
<li>วิธีการชำระเงิน</li>
<li>ติดต่อเรา</li>
</ul>
</div>

<div class="col-md-9 bg-white">
</div>

</div><!--end row-->
</div><!--end container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</head>
</html>

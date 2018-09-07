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

<h1>เกี่ยวกับองค์กร</h1>
<h2>ประวัติและความเป็นมา</h2>
<p>
          คณะวิทยาศาสตร์ มหาวิทยาลัยอุบลราชธานี ได้จัดตั้งหน่วยวิเคราะห์คุณภาพน้ำขึ้น พ.ศ. 2537 โดยมีวัตถุประสงค์เพื่อให้เป็นงาน บริการวิชาการของคณะฯ โดยมิได้มุ่งหวังกำไร ซึ่งสามารถตรวจวิเคราะห์คุณภาพน้ำตามดัชนีที่ชี้วัดคุณภาพน้ำต่าง ๆ ตามความต้องการของผู้ใช้ เช่น การวิเคราะห์น้ำผิวดินและน้ำใต้ดินในการสำรวจคุณภาพแหล่งน้ำ  วิเคราะห์คุณภาพน้ำใต้ดินและน้ำผิวดินเพื่อจัดหาน้ำสะอาด วิเคราะห์น้ำเสียก่อนบำบัดและน้ำทิ้งหลังบำบัดเพื่อออกแบบระบบบำบัดหรือติดตามระบบบำบัด โดยมีความพร้อมทางด้านอุปกรณ์ เครื่องมือ และบุคลากรที่มีประสบการณ์ในการวิเคราะห์คุณภาพน้ำ ต่อมาในปี พ.ศ.2549 ได้จัดตั้งหน่วยวิเคราะห์ผลิตภัณฑ์ชุมชน (One Tambon One Product; OTOP) โดยมีจุดประสงค์เพื่อตรวจพินิจ ตรวจวิเคราะห์ผลิตภัณฑ์จากชุมชนต่าง ๆ (ภาคตะวันออกเฉียงเหนือตอนล่าง) ทั้งทางด้ายกายภาพ เคมี และชีวภาพ ซึ่งเป็นการส่งเสริมความคิดริเริ่มสร้างสรรค์ของชุมชน ในการพัฒนาผลิตภัณฑ์ โดยสอดคล้องกับวิถีชีวิตและวัฒนธรรมในท้องถิ่นให้ได้รับการรับรองและแสดงเครื่องหมายการรับรองมาตรฐานผลิตภัณฑ์ชุมชน (มผช.)จากสำนักงานมาตรฐาน ผลิตภัณฑ์อุตสาหกรรม (สมอ.)  ในปี พ.ศ.2553 คณะวิทยาศาสตร์ ได้แสดงเจตจำนงในโครงการฝึกอบรมและให้คำปรึกษาแนะนำการจัดทำระบบคุณภาพห้องปฏิบัติการตามมาตรฐาน มอก. 17025 (ISO/IEC 17025)  หรือ โครงการ TLC ร่วมกับ  สมอ. โดยมีสถาบันอาหารเป็นที่ปรึกษาในการจัดทำระบบคุณภาพ ทั้งนี้เพื่อเป็นการพัฒนาคุณภาพการให้บริการตรวจวิเคราะห์ของห้องปฏิบัติการคณะวิทยาศาสตร์ มีผลการตรวจสอบถูกต้อง แม่นยำ เชื่อถือได้  ซึ่งเป็นไปตามระบบคุณภาพมาตรฐานสากล  ISO/IEC 17025 ดัวยเหตุผลดังกล่าวข้างต้น คณะวิทยาศาสตร์ จึงได้รวมหน่วยวิเคราะห์คุณภาพน้ำ และหน่วยวิเคราะห์ผลิตภัณฑ์ชุมชน (OTOP) เป็นห้องปฏิบัติการเดียวกัน ในนาม “ห้องปฏิบัติการวิเคราะห์และทดสอบ (Analysis and Testing Laboratory)” คณะวิทยาศาสตร์ มหาวิทยาลัยอุบลราชธานี โดยมีวิสัยทัศน์ และพันธกิจดังนี้
</p>

<h2>วิสัยทัศน์</h2>
<p>
 มุ่งมั่นในการให้บริการและสร้างความพึงพอใจสูงสุดด้วยคุณภาพระดับมาตรฐานสากล  เป็นผู้นำในด้านการวิเคราะห์และทดสอบควบคู่กับการพัฒนาคุณภาพมาตรฐานอย่างต่อเนื่อง และเป็นสถานที่ฝึกอบรมเพื่อส่งเสริมทักษะการเรียนการสอนของคณะวิทยาศาสตร์ มหาวิทยาลัยอุบลราชธานี
</p>

<h2>พันธกิจ</h2>
<p>
<ol>
<li>บริหารงานและดำเนินงานในการวิเคราะห์และทดสอบด้วยวิธีที่เป็นมาตรฐานสากล หรือวิธีการที่ยอมรับ เพื่อให้ผลการทดสอบถูกต้อง  แม่นยำ รวดเร็ว  เชื่อถือได้ รวมทั้งการรักษาข้อมูลของผู้ขอรับบริการเป็นความลับ</li>
<li>ให้บริการตรวจวิเคราะห์และทดสอบด้วยคุณภาพตามมาตรฐานห้องปฏิบัติการทดสอบ (ISO/IEC 17025) ควบคู่กับการพัฒนาคุณภาพบริการอย่างต่อเนื่อง</li>
<li>ส่งเสริมและพัฒนาบุคลากรให้มีคุณภาพและมีประสิทธิภาพ โดยให้ได้รับการพัฒนาทักษะ การฝึกอบรมในด้านต่าง ๆ เพื่อความเข้าใจและการปฏิบัติตามคู่มือคุณภาพ ขั้นตอนการดำเนินงาน  คู่มือปฏิบัติงาน คู่มือวิธีทดสอบ และสามารถปฏิบัติงานได้อย่างอิสระปราศจากความกดดันจากภายในและภายนอกที่อาจมีต่อผลการทดสอบ</li>
<li>ฝึกอบรมและให้ความรู้ในเรื่องมาตรฐานห้องปฏิบัติการทดสอบ (ISO/IEC 17025) เพื่อเสริมทักษะการเรียนการสอนแก่นักศึกษาของคณะวิทยาศาสตร์ มหาวิทยาลัยอุบลราชธานี</li>
</ol>
</p>

</div>

</div><!--end row-->
</div><!--end container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</head>
</html>

<?php 
	$this->load->view("header");
?>

<div class="container-fluid">

<div class="row">

<div class="col-md-3 bg-primary text-white">
<?php $this->load->view('left_menu',$menus);  ?>
</div>

<div class="col-md-9 bg-white page-content">

<h2 class="page-title">อัตราค่าบริการ</h2>

<table class="table table-bordered table-striped">
			 <tbody>
					<tr>
					 <td width="40" height="40" align="center" >ลำดับ</td>
						<td colspan="2" align="center" >รายการวิเคราะห์</td>
						<td width="140" align="center" >วิธีวิเคราะห์</td>
						<td width="90" align="center" >ค่าบริการ<br>
							(บาท/ตัวอย่าง)</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >1</td>
						<td style="padding-left:5px" >Color (Color )</td>
						<td style="padding-left:5px" >สี</td>
						<td align="center" >2120 C</td>
						<td align="center" >200</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >2</td>
						<td style="padding-left:5px" >Conductivity (Conduc.)</td>
						<td style="padding-left:5px" >ค่าการนำไฟฟ้า</td>
						<td align="center" >2510 B</td>
						<td align="center" >75</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >3</td>
						<td style="padding-left:5px" >pH</td>
						<td style="padding-left:5px" >ความเป็นกรด-ด่าง</td>
						<td align="center" >4500-H+ B</td>
						<td align="center" >75</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >4</td>
						<td style="padding-left:5px" >Turbidity (Turbi.)</td>
						<td style="padding-left:5px" >ความขุ่น</td>
						<td align="center" >2130</td>
						<td align="center" >200</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >5</td>
						<td style="padding-left:5px" >Temperature (Temp.)</td>
						<td style="padding-left:5px" >อุณหภูมิ</td>
						<td align="center" >4500-H+ B</td>
						<td align="center" >50</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >6</td>
						<td style="padding-left:5px" >Alkalinity (Alkali.)</td>
						<td style="padding-left:5px" >ความเป็นด่าง</td>
						<td align="center" >2320 B</td>
						<td align="center" >200</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >7</td>
						<td style="padding-left:5px" >Ammonia-Nitrogen (NH3-N)</td>
						<td style="padding-left:5px" >แอมโมเนีย-ไนโตรเจน</td>
						<td align="center" >4500-HN3 B</td>
						<td align="center" >250</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >8</td>
						<td style="padding-left:5px" >BOD</td>
						<td style="padding-left:5px" >บีโอดี</td>
						<td align="center" >5210 B</td>
						<td align="center" >300</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >9</td>
						<td style="padding-left:5px" >Chloride (Cl-)</td>
						<td style="padding-left:5px" >คลอไรด์</td>
						<td align="center" >4500-Cl-</td>
						<td align="center" >200</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >10</td>
						<td style="padding-left:5px" >Chemical Oxygen Demand (COD )</td>
						<td style="padding-left:5px" >ซีโอดี</td>
						<td align="center" >5220 A</td>
						<td align="center" >300</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >11</td>
						<td style="padding-left:5px" >Dissolved Oxygen (DO )</td>
						<td style="padding-left:5px" >ปริมาณออกซิเจนละลายน้ำ</td>
						<td align="center" >5210 B</td>
						<td align="center" >200</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >12</td>
						<td style="padding-left:5px" >Magnesium (Mg)</td>
						<td style="padding-left:5px" >แมกนีเซียม</td>
						<td align="center" >3500-Mg</td>
						<td align="center" >450</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >13</td>
						<td style="padding-left:5px" >Nitrate-Nitrogen (NO3-N)</td>
						<td style="padding-left:5px" >ไนเตรท-ไนโตรเจน</td>
						<td align="center" >4500-NO3</td>
						<td align="center" >200</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >14</td>
						<td style="padding-left:5px" >Salinity</td>
						<td style="padding-left:5px" >ความเค็ม</td>
						<td align="center" >2520 D</td>
						<td align="center" >50</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >15</td>
						<td style="padding-left:5px" >Settleable Solids (Sett.)</td>
						<td style="padding-left:5px" >ของแจ็งจมตัว</td>
						<td align="center" >2540-F</td>
						<td align="center" >75</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >16</td>
						<td style="padding-left:5px" >Sulfate (SO42- )</td>
						<td style="padding-left:5px" >ซัลเฟต</td>
						<td align="center" >4500-SO42-</td>
						<td align="center" >150</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >17</td>
						<td style="padding-left:5px" >Sulfide (H2S)</td>
						<td style="padding-left:5px" >ซัลไฟล์</td>
						<td align="center" >4500-S2 -F</td>
						<td align="center" >300</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >18</td>
						<td style="padding-left:5px" >Total Dissolved Solids (TDS)</td>
						<td style="padding-left:5px" >ของแข็งละลายน้ำ</td>
						<td align="center" >2540-C</td>
						<td align="center" >200</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >19</td>
						<td style="padding-left:5px" >Total Hardness (TH)</td>
						<td style="padding-left:5px" >ความกระด้างทั้งหมด</td>
						<td align="center" >2340 C</td>
						<td align="center" >200</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >20</td>
						<td style="padding-left:5px" >Total Kjedahl Nitrogen (TKN)</td>
						<td style="padding-left:5px" >ไนโตรเจนทั้งหมด</td>
						<td align="center" >4500-N org B</td>
						<td align="center" >400</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >21</td>
						<td style="padding-left:5px" >Total Phosphorus (TP)</td>
						<td style="padding-left:5px" >ฟอสฟอรัสทั้งหมด</td>
						<td align="center" >4500-P E</td>
						<td align="center" >300</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >22</td>
						<td style="padding-left:5px" >Total Solids (TS)</td>
						<td style="padding-left:5px" >ของแข็งทั้งหมด</td>
						<td align="center" >2540 B</td>
						<td align="center" >200</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >23</td>
						<td style="padding-left:5px" >Suspended Solids (SS)</td>
						<td style="padding-left:5px" >ของแข็งแขวนลอย</td>
						<td align="center" >2540-D</td>
						<td align="center" >200</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >24</td>
						<td style="padding-left:5px" >Cadmium (Cd)</td>
						<td style="padding-left:5px" >แคดเมียม</td>
						<td align="center" >3500-Cd</td>
						<td align="center" >450</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >25</td>
						<td style="padding-left:5px" >Chromium (Cr)</td>
						<td style="padding-left:5px" >โครเมียม</td>
						<td align="center" >3500-Cr</td>
						<td align="center" >450</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >26</td>
						<td style="padding-left:5px" >Copper (Cu)</td>
						<td style="padding-left:5px" >ทองแดง</td>
						<td align="center" >3500-Cu</td>
						<td align="center" >450</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >27</td>
						<td style="padding-left:5px" >Iron (Fe)</td>
						<td style="padding-left:5px" >เหล็ก</td>
						<td align="center" >3500-Fe</td>
						<td align="center" >450</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >28</td>
						<td style="padding-left:5px" >Lead (Pb)</td>
						<td style="padding-left:5px" >ตะกั่ว</td>
						<td align="center" >3500-Pb</td>
						<td align="center" >450</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >29</td>
						<td style="padding-left:5px" >Manganese (Mn)</td>
						<td style="padding-left:5px" >แมงกานีส</td>
						<td align="center" >3500-Mn</td>
						<td align="center" >450</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >30</td>
						<td style="padding-left:5px" >Zinc (Zn)</td>
						<td style="padding-left:5px" >สังกะสี</td>
						<td align="center" >3500-Zn</td>
						<td align="center" >450</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >31</td>
						<td style="padding-left:5px" >Antimony (Sb)</td>
						<td style="padding-left:5px" >พลวง</td>
						<td align="center" >3500-Sb</td>
						<td align="center" >450</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >32</td>
						<td style="padding-left:5px" >Asenic (As)</td>
						<td style="padding-left:5px" >สารหนู</td>
						<td align="center" >3500-As</td>
						<td align="center" >1000</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >33</td>
						<td style="padding-left:5px" >Mercury (Hg)</td>
						<td style="padding-left:5px" >ปรอท</td>
						<td align="center" >3500-Hg</td>
						<td align="center" >1000</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >34</td>
						<td style="padding-left:5px" >Total Coliform Bacteria (TCB)</td>
						<td style="padding-left:5px" > แบคทีเรียทั้งหมด</td>
						<td align="center" >9221 B</td>
						<td align="center" >300</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >35</td>
						<td style="padding-left:5px" >Fecal Coliform Bacteria (FCB)</td>
						<td style="padding-left:5px" >ฟีคอล คลอลิฟอร์ม แบคมีเรีย</td>
						<td align="center" >9222 D</td>
						<td align="center" >250</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >36</td>
						<td style="padding-left:5px" >Escherichia coli. (E. coli)</td>
						<td style="padding-left:5px" >อี.โคไล.</td>
						<td align="center" >9222 F</td>
						<td align="center" >500</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >37</td>
						<td style="padding-left:5px" >Grease&amp;Oil</td>
						<td style="padding-left:5px" >ไขมันและน้ำมัน</td>
						<td align="center" >5520-B</td>
						<td align="center" >400</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >38</td>
						<td style="padding-left:5px" >Fluoride (F)</td>
						<td style="padding-left:5px" >ฟลูออไรด์</td>
						<td align="center" >4500-F</td>
						<td align="center" >300</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >39</td>
						<td style="padding-left:5px" >Residual Chlorine (Res. ClO2)</td>
						<td style="padding-left:5px" >คลอรีนตกค้าง</td>
						<td align="center" >4500-ClO2</td>
						<td align="center" >200</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >40</td>
						<td style="padding-left:5px" >Non-Carbonate Hardness (NCH)</td>
						<td style="padding-left:5px" >ความกระด้างถาวร</td>
						<td align="center" >2340 C</td>
						<td align="center" >200</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >41</td>
						<td style="padding-left:5px" >Calcium (Ca)</td>
						<td style="padding-left:5px" >แคลเซียม</td>
						<td align="center" >FAAS</td>
						<td align="center" >450</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >42</td>
						<td style="padding-left:5px" >Potassium (K)</td>
						<td style="padding-left:5px" >โปรแตสเซียม</td>
						<td align="center" >FAAS</td>
						<td align="center" >450</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >43</td>
						<td style="padding-left:5px" >Nitrogen (N)</td>
						<td style="padding-left:5px" >ไนโตรเจน</td>
						<td align="center" >Distill</td>
						<td align="center" >400</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >44</td>
						<td style="padding-left:5px" >Molybdinum (Mo)</td>
						<td style="padding-left:5px" >โมลิบดินัม</td>
						<td align="center" >FAAS</td>
						<td align="center" >450</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >45</td>
						<td style="padding-left:5px" >Boron (B)</td>
						<td style="padding-left:5px" >โบรอน</td>
						<td align="center" >FAAS</td>
						<td align="center" >450</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >46</td>
						<td style="padding-left:5px" >MLVSS</td>
						<td style="padding-left:5px" >ของแข็งแขวนลอยละเหยง่าย</td>
						<td align="center" >B4500</td>
						<td align="center" >400</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >47</td>
						<td style="padding-left:5px" >Volatile Suspend Solids (VSS)</td>
						<td style="padding-left:5px" >ของแข็งระเหยง่าย</td>
						<td align="center" >B4500</td>
						<td align="center" >300</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >48</td>
						<td style="padding-left:5px" >Clostridium perfrigens (Cos)</td>
						<td style="padding-left:5px" >คอสตริเดียม</td>
						<td align="center" >AA</td>
						<td align="center" >800</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >49</td>
						<td style="padding-left:5px" >Salmonella spp. (Sal. spp.)</td>
						<td style="padding-left:5px" >ซาโมเนลา</td>
						<td align="center" >AA</td>
						<td align="center" >800</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >50</td>
						<td style="padding-left:5px" >Carbon dioxide (Free)  (CO2 (Free))</td>
						<td style="padding-left:5px" >คาร์บอนไดออกไซด์อิสระ</td>
						<td align="center" >2310 B</td>
						<td align="center" >300</td>
					</tr>
					
					<tr>
						<td height="30" align="center" >51</td>
						<td style="padding-left:5px" >Sulfur (SO2)</td>
						<td style="padding-left:5px" >ซัลเฟอร์</td>
						<td align="center" >Iodometric method</td>
						<td align="center" >300</td>
					</tr>
					 
						</tbody>
		</table>



</div>

</div><!--end row-->
</div><!--end container-->

<?php 
	$this->load->view("footer");
?>

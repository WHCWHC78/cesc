<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
	<meta name="language" content="th" />
	<title>CE SMART CAMP 8</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="lib/img-light/img-light.css">
	<link rel="stylesheet" href="css/dropdown.css">
	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/skrollr.min.js"></script>
	<script type="text/javascript" src="scripts/smoothscroll.js"></script>
	<script type="text/javascript" src="lib/img-light/img-light.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $( '.dropdown' ).hover(
		        function(){
		            $(this).children('.sub-menu').slideDown(200);
		        },
		        function(){
		            $(this).children('.sub-menu').slideUp(200);
		        }
		    );
		}); // end ready
		$(document).on( 'scroll', function(){
			mapPosition('.detail img',450,1050,1.5);
			mapPosition('.robot img',450,2450,1.5);
			mapPosition('.network img',400,3850,1.5);
			mapPosition('.timeline img',450,5250,1.5);
			mapPosition('.map_contact img',450,6650,1.5);
			mapPosition('.faq img',400,8050,1.5);
		});
		function mapValue(min,max,value){
			if(value >= max) return max;
			else if(value <= min) return min;
			else return value;
		}
		function mapPosition(select,margin_posi,img_posi,posi_fx){
			var scr_posi = $("html").scrollTop();
			var scr_posi_diff = -(img_posi - scr_posi)*posi_fx;
			var img_posi  = mapValue(-200,600,margin_posi-scr_posi_diff-200);
			$(''+select).css('margin-top',img_posi+'px');
		}
	</script>
</head>
<body >
	<nav id="menu">
		<ul>
			<li class="dropdown">
            	<a href="#logo_section" class="smoothScroll">MENU</a>
            	<ul class="sub-menu">
                	<!--li><a href="#logo_section" class="smoothScroll">CE SMART CAMP #8</a></li-->
					<li><a href="#detail_section" class="smoothScroll">รายละเอียด</a></li>
					<li><a href="#robot_section" class="smoothScroll">ROBOT</a></li>
					<li><a href="#network_section" class="smoothScroll">NETWORK</a></li>
					<li><a href="#timeline_section" class="smoothScroll">กำหนดการ</a></li>
					<li><a href="#map_contact_section" class="smoothScroll">แผนที่ & ติดต่อ</a></li>
					<li><a href="#faq_section" class="smoothScroll">คำถาม</a></li>
					<li><a href="#pic_section" class="smoothScroll">บรรยากาศ</a></li>
					<li><a href="#spon_section" class="smoothScroll">ผู้สนับสนุน</a></li>
                </ul>
            </li>
		</ul>
	</nav>
	<div class="nv_group">
<!-- 		<a href="#logo_section" class="smoothScroll">
			<svg x="0px" y="0px" width="205px" height="40px" viewBox="0 0 205 40">
				<polygon fill="#FAA026" fill="none" points="0,0 196,0 205,20 196,40 0,40">
				</polygon>
				<text x="195" y="28" fill="#FFFFFF" text-anchor="end" style="font-size:26px">CE SMART CAMP #8</text>
			</svg>
		</a>
		<a href="#detail_section" class="smoothScroll">
			<svg x="0px" y="0px" width="185px" height="30px" viewBox="0 0 185 30">
				<polygon fill="#000000" fill="none" points="0,0 180,0 185,15 180,30 0,30">
				</polygon>
				<text x="175" y="22" fill="#FFFFFF" text-anchor="end">รายละเอียด</text>
			</svg>
		</a>
		<a href="#robot_section" class="smoothScroll">
			<svg x="0px" y="0px" width="165px" height="30px" viewBox="0 0 165 30">
				<polygon fill="#000000" fill="none" points="0,0 160,0 165,15 160,30 0,30">
				</polygon>
				<text x="155" y="22" fill="#FFFFFF" text-anchor="end">ROBOT</text>
			</svg>
		</a>
		<a href="#network_section" class="smoothScroll">
			<svg x="0px" y="0px" width="165px" height="30px" viewBox="0 0 165 30">
				<polygon fill="#000000" fill="none" points="0,0 160,0 165,15 160,30 0,30">
				</polygon>
				<text x="155" y="22" fill="#FFFFFF" text-anchor="end">NETWORK</text>
			</svg>
		</a>
		<a href="#timeline_section" class="smoothScroll">
			<svg x="0px" y="0px" width="165px" height="30px" viewBox="0 0 165 30">
				<polygon fill="#000000" fill="none" points="0,0 160,0 165,15 160,30 0,30">
				</polygon>
				<text x="155" y="22" fill="#FFFFFF" text-anchor="end">กำหนดการ</text>
			</svg>
		</a>
		<a href="#map_contact_section" class="smoothScroll">
			<svg x="0px" y="0px" width="185px" height="30px" viewBox="0 0 185 30">
				<polygon fill="#000000" fill="none" points="0,0 180,0 185,15 180,30 0,30">
				</polygon>
				<text x="175" y="22" fill="#FFFFFF" text-anchor="end">เเผนที่ & ติดต่อ</text>
			</svg>
		</a>
		<a href="#faq_section" class="smoothScroll">
			<svg x="0px" y="0px" width="185px" height="30px" viewBox="0 0 185 30">
				<polygon fill="#000000" fill="none" points="0,0 180,0 185,15 180,30 0,30">
				</polygon>
				<text x="175" y="22" fill="#FFFFFF" text-anchor="end">คำถาม</text>
			</svg>
		</a>
		<a href="#pic_section" class="smoothScroll">
			<svg x="0px" y="0px" width="185px" height="30px" viewBox="0 0 185 30">
				<polygon fill="#000000" fill="none" points="0,0 180,0 185,15 180,30 0,30">
				</polygon>
				<text x="175" y="22" fill="#FFFFFF" text-anchor="end">บรรยากาศ</text>
			</svg>
		</a>
		<a href="#spon_section" class="smoothScroll">
			<svg x="0px" y="0px" width="185px" height="30px" viewBox="0 0 185 30">
				<polygon fill="#000000" fill="none" points="0,0 180,0 185,15 180,30 0,30">
				</polygon>
				<text x="175" y="22" fill="#FFFFFF" text-anchor="end">ผู้สนับสนุน</text>
			</svg>
		</a> -->
		<a href="#logo_section" class="smoothScroll" >
			<svg x="0px" y="0px" width="205px" height="40px" viewBox="0 0 205 40" style="margin-bottom: 1px;">
				<polygon fill="#FAA026" fill="none" points="0,0 196,0 205,20 196,40 0,40">
				</polygon>
				<text x="195" y="28" fill="#FFFFFF" text-anchor="end" style="font-size:26px">CE SMART CAMP #8</text>
			</svg>
		</a>
		<a href="#detail_section" class="smoothScroll">
			<svg x="0px" y="0px" width="165px" height="30px" viewBox="0 0 165 30">
				<polygon fill="#1e8bc3" fill="none" points="0,0 160,0 165,15 160,30 0,30">
				</polygon>
				<text x="155" y="22" fill="#FFFFFF" text-anchor="end">รายละเอียด</text>
			</svg>
		</a>
		<a href="#robot_section" class="smoothScroll">
			<svg x="0px" y="0px" width="95px" height="30px" viewBox="0 0 95 30">
				<polygon fill="#1e8bc3" fill="none" points="0,0 90,0 95,15 90,30 0,30">
				</polygon>
				<text x="85" y="22" fill="#FFFFFF" text-anchor="end">ROBOT</text>
			</svg>
		</a>
		<a href="#network_section" class="smoothScroll">
			<svg x="0px" y="0px" width="135px" height="30px" viewBox="0 0 135 30">
				<polygon fill="#1e8bc3" fill="none" points="0,0 130,0 135,15 130,30 0,30">
				</polygon>
				<text x="125" y="22" fill="#FFFFFF" text-anchor="end">NETWORK</text>
			</svg>
		</a>
		<a href="#timeline_section" class="smoothScroll">
			<svg x="0px" y="0px" width="185px" height="30px" viewBox="0 0 185 30">
				<polygon fill="#1e8bc3" fill="none" points="0,0 180,0 185,15 180,30 0,30">
				</polygon>
				<text x="175" y="22" fill="#FFFFFF" text-anchor="end">กำหนดการ</text>
			</svg>
		</a>
		<a href="#map_contact_section" class="smoothScroll">
			<svg x="0px" y="0px" width="155px" height="30px" viewBox="0 0 155 30">
				<polygon fill="#1e8bc3" fill="none" points="0,0 150,0 155,15 150,30 0,30">
				</polygon>
				<text x="145" y="22" fill="#FFFFFF" text-anchor="end">เเผนที่ & ติดต่อ</text>
			</svg>
		</a>
		<a href="#faq_section" class="smoothScroll">
			<svg x="0px" y="0px" width="105px" height="30px" viewBox="0 0 105 30">
				<polygon fill="#1e8bc3" fill="none" points="0,0 100,0 105,15 100,30 0,30">
				</polygon>
				<text x="95" y="22" fill="#FFFFFF" text-anchor="end">คำถาม</text>
			</svg>
		</a>
		<a href="#pic_section" class="smoothScroll">
			<svg x="0px" y="0px" width="165px" height="30px" viewBox="0 0 165 30">
				<polygon fill="#1e8bc3" fill="none" points="0,0 160,0 165,15 160,30 0,30">
				</polygon>
				<text x="155" y="22" fill="#FFFFFF" text-anchor="end">บรรยากาศ</text>
			</svg>
		</a>
		<a href="#spon_section" class="smoothScroll">
			<svg x="0px" y="0px" width="150px" height="26px" viewBox="0 0 150 26">
				<polygon fill="#1e8bc3" fill="none" points="0,0 145,0 150,15 145,26 0,26">
				</polygon>
				<text x="140" y="18" fill="#FFFFFF" text-anchor="end">ผู้สนับสนุน</text>
			</svg>
		</a>
		<!-- <a href="#logo_section" class="smoothScroll">
			<svg x="0px" y="0px" width="170px" height="26px" viewBox="0 0 170 26">
				<polygon fill="#000000" fill="none" points="0,0 170,0 160,26 0,26">
				</polygon>
				<text x="155" y="22" fill="#FFFFFF" text-anchor="end">CE SMART CAMP 8</text>
			</svg>
		</a>
		<a href="#detail_section" class="smoothScroll">
			<svg x="0px" y="0px" width="170px" height="26px" viewBox="0 0 170 26">
				<polygon fill="#000000" fill="none" points="0,0 170,0 160,26 0,26">
				</polygon>
				<text x="155" y="22" fill="#FFFFFF" text-anchor="end">รายละเอียด</text>
			</svg>
		</a>
		<a href="#robot_section" class="smoothScroll">
			<svg x="0px" y="0px" width="170px" height="26px" viewBox="0 0 170 26">
				<polygon fill="#000000" fill="none" points="0,0 170,0 160,26 0,26">
				</polygon>
				<text x="155" y="22" fill="#FFFFFF" text-anchor="end">ROBOT</text>
			</svg>
		</a>
		<a href="#network_section" class="smoothScroll">
			<svg x="0px" y="0px" width="170px" height="26px" viewBox="0 0 170 26">
				<polygon fill="#000000" fill="none" points="0,0 170,0 160,26 0,26">
				</polygon>
				<text x="155" y="22" fill="#FFFFFF" text-anchor="end">NETWORK</text>
			</svg>
		</a>
		<a href="#timeline_section" class="smoothScroll">
			<svg x="0px" y="0px" width="170px" height="26px" viewBox="0 0 170 26">
				<polygon fill="#000000" fill="none" points="0,0 170,0 160,26 0,26">
				</polygon>
				<text x="155" y="22" fill="#FFFFFF" text-anchor="end">กำหนดการ</text>
			</svg>
		</a>
		<a href="#map_contact_section" class="smoothScroll">
			<svg x="0px" y="0px" width="170px" height="26px" viewBox="0 0 170 26">
				<polygon fill="#000000" fill="none" points="0,0 170,0 160,26 0,26">
				</polygon>
				<text x="155" y="22" fill="#FFFFFF" text-anchor="end">เเผนที่ & ติดต่อ</text>
			</svg>
		</a>
		<a href="#faq_section" class="smoothScroll">
			<svg x="0px" y="0px" width="170px" height="26px" viewBox="0 0 170 26">
				<polygon fill="#000000" fill="none" points="0,0 170,0 160,26 0,26">
				</polygon>
				<text x="155" y="22" fill="#FFFFFF" text-anchor="end">คำถาม</text>
			</svg>
		</a>
		<a href="#pic_section" class="smoothScroll">
			<svg x="0px" y="0px" width="170px" height="26px" viewBox="0 0 170 26">
				<polygon fill="#000000" fill="none" points="0,0 170,0 160,26 0,26">
				</polygon>
				<text x="155" y="22" fill="#FFFFFF" text-anchor="end">บรรยากาศ</text>
			</svg>
		</a>
		<a href="#spon_section" class="smoothScroll">
			<svg x="0px" y="0px" width="170px" height="26px" viewBox="0 0 170 26">
				<polygon fill="#000000" fill="none" points="0,0 170,0 160,26 0,26">
				</polygon>
				<text x="155" y="18" fill="#FFFFFF" text-anchor="end">ผู้สนับสนุน</text>
			</svg>
		</a> -->

	</div> 
	<div id="logo_section" class="logo" >
		<svg style="transform: translate3d(0px, 0px, 0px);" data-type="vertical_parallax" data-speed="2" x="0px" y="0px" width="492px" height="172px" viewBox="0 0 492 172">
			<polygon fill="none" points="884.732,0 491.956,0 0,0 -394.333,0 -394.333,242.154 884.732,242.154 "></polygon>
			<g>
				<polyline fill="#333" points="0,-0.002 245.7,172.252 491.956,0 	"></polyline>
				<polygon fill="#f00" points="486.236,4 5.708,4 0,0 491.956,0 	"></polygon>
			</g>
		</svg>
	</div>
	<div class="bg" id="bg">
		<!-- about -->
		<div class="top detail" >
			<div id="detail_section" class="content"  style="vertical-align: text-bottom;">
				<div class="img left"> 
					<img src="images/baymax.png">
				</div>
				<div class="text right">
					<span class="head">รายละเอียดค่าย</span><hr>
					<span class="body">&nbsp;&nbsp;&nbsp;ค่าย CE Smart Camp #8 จัดขึ้นในวันที่ 27 พฤษภาคม - 1 มิถุนายน 2558 (พักค้างแรม) โดยรับน้อง ม.ปลายจำนวน 80 คนจากทั่วประเทศ แบ่งเป็นสาขา <a href="#robot_section" class="smoothScroll">Robot</a> 40 คน และสาขา <a href="#network_section" class="smoothScroll">Network</a> 40 คน
						ซึ่งน้องๆสามารถเลือกอบรมสาขาใดก็ได้ การอบรมเน้นทั้งทฤษฎี และปฏิบัติ กับอุปกรณ์จริง...
					</span>
				</div>
			</div>
			<svg x="0px" y="0px" width="1920px" height="2700px" viewBox="0 0 1920 2700">
				<polygon fill="#3E3E3E" points="1920,0 1920,1300 0,2700 0,1400"></polygon>
			</svg>
		</div>
		<!-- detail -->
		<div class="down robot">
			<div id="robot_section" class="content">
				<div class="img right">
					<img src="images/robot.png">
				</div>
				<div class="text left">
					<span class="head">รายละเอียด ROBOT</span><hr>
					<span class="body">&nbsp;&nbsp;&nbsp;ในส่วนของการอบรมการเขียนโปรแกรมควบคุมหุ่นยนต์ (Robot) น้องๆ จะได้เรียนรู้เกี่ยวกับกลไกการทำงานของหุ่นยนต์ แนวคิดการแก้ไขปัญหาอย่างมีระบบ และการเขียนโปรแกรมเพื่อควมคุมหุ่นยนต์เบื้องต้น ด้วยกิจกรรมสนุกๆ จากพี่ๆ ทั้งในรูปแบบทฤษฏี และปฏิบัติ น้องๆจะได้สัมผัสและทดลองจริงกับอุปกรณ์ชั้นนำ อาทิเช่น Lego mindstorms, Robobuilder ฯลฯ ...
					</span>
				</div>
			</div>
			<svg x="0px" y="0px" width="1920px" height="2700px" viewBox="0 0 1920 2700">
				<polygon fill="#E52420" points="0,0 1920,1400 1920,2700 0,1300"></polygon>
			</svg>			
		</div>
		<!-- robot -->
		<div class="top network">
			<div id="network_section" class="content">
				<div class="img left">
					<img src="images/network2.png">
				</div>
				<div class="text right">
					<span class="head">รายละเอียด Network</span><hr>
					<span class="body">&nbsp;&nbsp;&nbsp;ในโลกที่เราใช้คอมพิวเตอร์ในการสื่อสารกันอยู่ตลอดเวลา น้องๆเคยสงสัยไหมว่า ระบบเครือข่ายคอมพิวเตอร์นี่มันทำงานยังไงกันนะ? ถ้าอยากรู้ล่ะก็ เชิญมาหาคำตอบกันในค่าย Network เลย ภายในค่าย น้องๆจะได้รับความรู้ทางทฤษฎีพื้นฐานเกี่ยวกับระบบเครือข่ายคอมพิวเตอร์ เบื้องต้น นอกจากนั้นแล้ว น้องๆยังจะได้เรียนรู้การทำงานและการตั้งค่าอุปกรณ์ที่ใช้ในระบบเครือข่าย ผ่านการปฏิบัติจริงโดยใช้ชุดเครื่องมือที่ทันสมัยจาก Cisco...
					</span>
				</div>
			</div>
			<svg x="0px" y="0px" width="1920px" height="2700px" viewBox="0 0 1920 2700">
				<polygon fill="#3E3E3E" points="1920,0 1920,1300 0,2700 0,1400"></polygon>
			</svg>
		</div>
		<!-- Network -->
		<div class="down timeline">
			<div id="timeline_section" class="content">
				<div class="img right">
					<img src="images/batman.png">
				</div>
				<div class="text left">
					<span class="head">กำหนดการ</span><hr>
					<span class="body">
						วันรับสมัคร : สมัครวันนี้ - 15 เมษายน 2558<br>
						ประกาศผล : xxx<br>
						ช่วงเวลาค่าย : 27 พฤษภาคม - 1 มิถุนายน 2558
					</span>
				</div>
			</div>
			<svg x="0px" y="0px" width="1920px" height="2700px" viewBox="0 0 1920 2700">
				<polygon fill="#E52420" points="0,0 1920,1400 1920,2700 0,1300"></polygon>
			</svg>
		</div>
		<!-- time line -->
		<div class="top map_contact">
			<div id="map_contact_section" class="content">
				<div class="img left">
					<img src="images/img.png">
				</div>
				<div class="text right">
					<span class="head">เเผนที่และ ติดต่อ</span><hr>
					<span class="body">
						พี่ปู้น : Tel (082-6595005), FB (<a href="http://www.facebook.com/poonbassist" target="_blank">Chatrtime Chatramorn</a>)<br>
						พี่กิ๊ก : Tel (089-9202987), FB (<a href="https://www.facebook.com/kikreongnopawat" target="_blank">Kik Reongnopawat</a>)<br>
						ที่อยู่ : อาคารปฏิบัติการรวม คณะวิศวกรรมศาสตร์ หลังที่ 2 (ECC) สาขาวิชาวิศวกรรมคอมพิวเตอร์ คณะวิศวกรรมศาสตร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง เลขที่ 1 ซองฉลองกรุง 1 เขตลาดกระบัง แขวงลาดกระบัง กรุงเทพฯ 10520
					</span>
				</div>
			</div>
			<svg x="0px" y="0px" width="1920px" height="2700px" viewBox="0 0 1920 2700">
				<polygon fill="#3E3E3E" points="1920,0 1920,1300 0,2700 0,1400"></polygon>
			</svg>
		</div>
		<!-- map contact -->
		<div  class="down faq">
			<div id="faq_section" class="content">
				<div class="img right">
					<img src="images/sailor moon.png">
				</div>
				<div class="text left">
					<span class="head">คำถาม</span><hr>
					<span class="body" style="line-height: 95%;">
						ถาม : วัน/เวลา/สถานที่ดำเนินกิจกรรม ?<br>
						<span style="font-size:20px">
							ตอบ : ระยะเวลาในการเข้าค่ายตั้งแต่วันที่ 27 พฤษภาคม - 1 มิถุนายน 2558 เป็นค่ายพักค้างแรม (ไม่อนุญาตให้เดินทางไปกลับ) สถานที่ดำเนินกิจกรรมทั้งหมดจัดภายในคณะวิศวกรรมศาสตร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง<br><br>
						</span>
						ถาม : ไมมีบัตรประจำตัวประชาชน ต้องทำอย่างไร ?<br>
						<span style="font-size:20px">
							ตอบ : ใช้บัตรนักเรียนก็ได้จ้า<br><br>
						</span>
						ถาม : หากเกรดเฉลี่ยเทอมล่าสุดยังไม่ออก <br>ใช้เกรดเฉลี่ยเทอมไหน ?<br>
						<span style="font-size:20px">
							ตอบ : เกรดเฉลี่ยของเทอมล่าสุดที่เกรดออกเลยค่ะ ^^<br><br>
						</span>
						ถาม : หากกรอกผิด และกดยืนยันประวัติส่วนตัวไปแล้ว <br>จะสามารถแก้ได้หรือเปล่า ?<br>
						<span style="font-size:20px">
							ตอบ : ได้ค่ะ โดยจะเขียนใหม่ผ่านระบบบนเว็บไซต์ได้เลยจ้ะ    
						</span>
					</span>
				</div>
			</div>
			<svg x="0px" y="0px" width="1920px" height="2700px" viewBox="0 0 1920 2700">
				<polygon fill="#E52420" points="0,0 1920,1400 1920,2700 0,1300"></polygon>
			</svg>
		</div>
		<!-- pic -->
		<div class="top pic">
			<div id="pic_section" class="content" style="padding-top:40px" align="center">
				<span class="head" >บรรยากาศ</span><hr>
				<table border="0" cellspacing="0px" align="center">
					<tr>
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_1.jpg')">
								<img class="img_cesc" src="picture/pic_1_.jpg">
							</a>
						</td>
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_2.jpg')">
								<img class="img_cesc" src="picture/pic_2_.jpg">
							</a>
						</td>						
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_3.jpg')">
								<img class="img_cesc" src="picture/pic_3_.jpg">
							</a>
						</td>						
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_4.jpg')">
								<img class="img_cesc" src="picture/pic_4_.jpg">
							</a>
						</td>						
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_5.jpg')">
								<img class="img_cesc" src="picture/pic_5_.jpg">
							</a>
						</td>
					</tr>
					<tr>
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_6.jpg')">
								<img class="img_cesc" src="picture/pic_6_.jpg">
							</a>
						</td>						
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_7.jpg')">
								<img class="img_cesc" src="picture/pic_7_.jpg">
							</a>
						</td>						
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_8.jpg')">
								<img class="img_cesc" src="picture/pic_8_.jpg">
							</a>
						</td>						
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_9.jpg')">
								<img class="img_cesc" src="picture/pic_9_.jpg">
							</a>
						</td>						
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_10.jpg')">
								<img class="img_cesc" src="picture/pic_10_.jpg">
							</a>
						</td>
					</tr>
					<tr>
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_11.jpg')">
								<img class="img_cesc" src="picture/pic_11_.jpg">
							</a>
						</td>						
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_12.jpg')">
								<img class="img_cesc" src="picture/pic_12_.jpg">
							</a>
						</td>						
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_13.jpg')">
								<img class="img_cesc" src="picture/pic_13_.jpg">
							</a>
						</td>						
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_14.jpg')">
								<img class="img_cesc" src="picture/pic_14_.jpg">
							</a>
						</td>						
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_15.jpg')">
								<img class="img_cesc" src="picture/pic_15_.jpg">
							</a>
						</td>
					</tr>
					<tr>
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_16.jpg')">
								<img class="img_cesc" src="picture/pic_16_.jpg">
							</a>
						</td>						
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_17.jpg')">
								<img class="img_cesc" src="picture/pic_17_.jpg">
							</a>
						</td>						
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_18.jpg')">
								<img class="img_cesc" src="picture/pic_18_.jpg">
							</a>
						</td>						
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_19.jpg')">
								<img class="img_cesc" src="picture/pic_19_.jpg">
							</a>
						</td>						
						<td>					
							<a href="javascript:void(0)" onclick="img_light('picture/pic_20.jpg')">
								<img class="img_cesc" src="picture/pic_20_.jpg">
							</a>
						</td>
					</tr>
				</table>
			</div>
			<svg x="0px" y="0px" width="1920px" height="2700px" viewBox="0 0 1920 2700">
				<polygon fill="#3E3E3E" points="1920,0 1920,1300 0,2700 0,1400"></polygon>
			</svg>
		</div>
		<!-- spon -->
		<div  class="down spon">
			<div id="spon_section" class="content" style="padding-top:40px" align="center">
				<span class="head" style="color: white;">ผู้สนับสนุน</span><hr>
				<div id="spon_border" align="center" style="width:100%;background-color: white;">
					<img class="img_spon" src="picture/sponsor/orcsoft 5,000.png">
					<img class="img_spon" src="picture/sponsor/Digital Alchemy 2,000.png">
					<img class="img_spon" src="picture/sponsor/LOGO OOKBEE 10,000.png">
					<img class="img_spon" src="picture/sponsor/IT ONE 10,000.png">
					<img class="img_spon" src="picture/sponsor/yannix_thailand_logo 2,000.png">
					<img class="img_spon" src="picture/sponsor/Logo ExxonMobil 1,000.png">
					<img class="img_spon" src="picture/sponsor/logo_JobThai_Slogan 5,000.png">
					<img class="img_spon" src="picture/sponsor/logo mfec 2,000.png">
					<img class="img_spon" src="picture/sponsor/innoviz 1,500.png">
					<img class="img_spon" src="picture/sponsor/DCS10,000.png">
					<img class="img_spon" src="picture/sponsor/Troughware 5,000.png">
					<img class="img_spon" src="picture/sponsor/Osllus 6,000.gif">
					<img class="img_spon" src="picture/sponsor/Softsquare 5,000.png">
					<img class="img_spon" src="picture/sponsor/nstda 1,000.gif">
					<img class="img_spon" src="picture/sponsor/Logo_CPF 5,000.gif">
				</div>
			</div>
			<svg x="0px" y="0px" width="1920px" height="2700px" viewBox="0 0 1920 2700">
				<polygon fill="#E52420" points="0,0 1920,1400 1920,2700 0,1300"></polygon>
			</svg>
		</div>
		<div  class="down foot" >
			ssss
		</div>

	</div>

</body>
</html>

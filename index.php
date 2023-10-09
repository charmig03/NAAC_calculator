<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/home.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
		<script src="./js/index.js"></script>
  <style>
	.crit{
		border : 1px solid blue;	
	}
  </style>
</head>
<body>

<div class="header">
  <img src="./img/new-mu.jfif" alt="Marwadi university" height = "10%" width = "13%" align="right">
  <h1 class="ms-5">NAAC calculator Portal</h1>
</div>
<br>
<div class="topnav">
  </div> 
  <form action="" method="POST">


<!---criterion1--->
	<a class="btn fw-bold"  style="font-size:25px"  onclick="change()"><p><i class="bi bi-caret-right-fill">Criterion 1–CurricularAspects (150)</i></p></a>
    	<!-- <a onclick="change()"><label style="font-size:20px; font-weight :bold;" ></label></a>  -->
    <input type="number" name="criteria01" id="criteria01" value="0" disabled>
	<div  id="change"class="w-75 ms-5 border " style="display:none">
	
							
                          <form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						  <!-- <a onclick="changeup01()">--><label for="criteria1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator – 1.1 Curriculum Design and Development (50)</h3></label>
						  <div class="d-flex justify-content-end">
							<input type="number" name="criteria1" id="criteria_design" onkeyup="criteria1()" value="0" disabled>
</div>
                           <a onclick="changeup()"> <label style="font-size:20px;"><b>1.1.1</b><h4> <p style="color:#800000 "> Curricula developed and implemented have relevance to the local, national, regional and global developmental needs, which is reflected in the Programme outcomes, and Course Outcomes of the Programmes offered by the University<b>(20)</b></p></label></a></h4>
						   <div class="d-flex justify-content-end">
							   <input type="number"  name="criteria1" id="criteria11" value="0" onkeyup="calculate_naac_grade_design()"><br>
							</div>
							<div id="label1" class="label1"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "><img src="./img/1.png"></p></div>	
							<a onclick="changeup1()"><label for="criteria1" style="font-size:20px;"><b>1.1.2 </b><h4><p style="color:#800000  "> The Programmes offered by the institution focus on employability / entrepreneurship/ skill development and their course syllabi are adequately revised to incorporate contemporary requirements<b>(30)</b></p></label></a></h4>
							<div class="d-flex justify-content-end">
                            <input type="number" name="criteria1" id="criteria12" value="0" onkeyup="calculate_naac_grade_design()"><br>
                               </div>
							<div id="label2" class="label2"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/2.png"></p></div>	
                          </form>
                  
                    <br>
                          <form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
                            <label for="academic1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator – 1.2 Academic Flexibility (30)</h3></label>
							<input type="number" name="academic1" id="criteria_academic"  value="0"disabled ><br><br>
                            <a onclick="changeup2()"><label for="academic1" style="font-size:20px;"><b>1.2.1 </b><h4><p style="color:#800000"> Percentage of new courses introduced out of the total number of courses across all programmes offered during the last five years<b>(30)</b></p></label></a></h4>
							<div class="d-flex justify-content-end">
						<label>Output 1: </label><input type="number" name="academic1" id="academic10"  value="0" disabled><br>	
						<label>Output 2: </label><input type="number" name="academic1" id="academic1"  value="0" disabled><br>	
							</div><br>
							<div id="label3" class="label3"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/3.png"></div>	
							<h5><p style="color: #0000cc"><i class="bi bi-dot"> Enter  Number of new courses introduced during the last five years:			<input onkeyup="academic121()" id="text1"type="text"></i></p><br></h5>
							<h5><p style="color: #0000cc"><i class="bi bi-dot">Enter Number courses offered during the last five years:			<input onkeyup="academic121()" id="text2"type="text"></i></p></h5>
                          </form>

						<br>
						  <form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
                            <label for="curriculum1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator – 1.3 Curriculum Enrichment (50)</h3></label>
							<input type="number" name="curriculum1" id="criteria_curriculum"  value="0" disabled><br><br>
                            <a onclick="changeup3()"><label for="curriculum1" style="font-size:20px;"><b>1.3.1</b> <h4><p style="color:#800000 "> Institution integrates cross-cutting issues relevant to Professional Ethics, Gender, Human Values, Environment & Sustainability and other value framework enshrined in Sustainable Development goals and National Education Policy – 2020 into the Curriculum<b>(15)</b></p></label></h4>
							<div class="d-flex justify-content-end">
                            <input type="number" name="curriculum1" id="curriculum11"  value="0" onkeyup="calculate_naac_grade_curriculum()"><br>
							</div>
							<div id="label4" class="label4"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/4.png"></div>	
                            <a onclick="changeup4()"><label for="curriculum1" style="font-size:20px;"><b>1.3.2</b> <h4><p style="color:#800000 "> The Programmes offered by the institution focus on employability/ entrepreneurship/ skill development and their course syllabi are adequately revised to incorporate contemporary requirements<b>(30)</b></p></label></h4>
                            <div class="d-flex justify-content-end">
							<input type="number" name="curriculum1" id="curriculum12"  value="0" onkeyup="calculate_naac_grade_curriculum()"><br>
                            </div>
							<div id="label5" class="label5"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/5.png"></div>	
							<a onclick="changeup5()"><label for="curriculum1" style="font-size:20px;"><b>1.3.3</b> <h4><p style="color:#800000 "> Percentage of Programmes that have components of field projects / research projects / internships during last five years <b>(5)</b></p></label></h4>
							<div class="d-flex justify-content-end"> 
                            <label> Output 1:</label><input type="text" name="curriculum1" id="curriculum130"  value="0"disabled onkeyup="calculate_naac_grade_curriculum()"><br>
							<label> Output 2:</label><input type="text" name="curriculum1" id="curriculum13"  value="0"disabled onkeyup="calculate_naac_grade_curriculum()"><br>
							</div>  <br>
							<div id="label6" class="label6"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/6.png"></div>	<br>
							<h5><p style="color: #0000cc"><i class="bi bi-dot"> Total Number of Programs that have components of fields / research projects internship during the last five years:			<input onkeyup="academic133()" id="text11"type="text"></i></p><br></h5>
							<h5><p style="color: #0000cc"><i class="bi bi-dot">Enter Number of Programs offered during the last five years:			<input onkeyup="academic133()" id="text22" type="text"></i></p></h5>
						</form>

						  <br>

						  <form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
                            <label for="feedback1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator – 1.4 Feedback System (20)</h3></label>
							<input type="number" name="feedback1" id="criteria_feedback"  value="0"disabled ><br><br>
                            <a onclick="changeup6()"><label for="feedback1" style="font-size:20px;"><b>1.4.1</b><h4><p style="color:#800000 ">  Structured feedback for curriculum and its transactions is regularly obtained from stakeholders like Students, Teachers, Employers, Alumni, Academic peers etc., and Feedback processes of the institution may be classified as follows:<b>(20)</b></p></label></a></h4>
							<div class="d-flex justify-content-end">
						<input type="number" name="feedback1" id="feedback1"  value="0" onkeyup="calculate_naac_grade_feedback()"><br>
						</div> 
						<div id="label7" class="label7"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/7.png"></div>     
					</form>
<!-- <br> -->

                    <div class="crit" align="center">
						<h3><p style="color:#e60000" >Calculated Criterion I:</p></h3>
						<table>
							<tr>
						<th><p style="color:#00802b";>1.1 Curriculum Design and Development:</th><th><input type="number" value="50" id="cri11" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri11_credit"  onkeyup="calculateCir1()"></th>
						</tr>
						<tr>
						<th><p style="color:#00802b";>1.2 Academic Flexibility </th><th><input type="number" value="30" id="cri12" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri12_credit" onkeyup="calculateCir1()"></th>
						</tr>
						<tr>
						<th><p style="color:#00802b";>1.3 Curriculum Enrichment</th><th> <input type="number" value="50" id="cri13" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri13_credit" onkeyup="calculateCir1()"></th>
						</tr>
						<tr>
						<th><p style="color:#00802b";>1.4 Feedback System </th><th><input type="number" value="20" id="cri14" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri14_credit" onkeyup="calculateCir1()"></th>
						<br>
						</tr></table><br><br>
						<p align="center"><label for="" >Result</label>
						<input type="number" id="cri1_result" value="0" disabled></p>
						<br>
					</div>
</form>
<br>				
</div>


<!--criterion 2-->
				<a class="btn fw-bold"  style="font-size:25px" onclick="change1()"><p><i class="bi bi-caret-right-fill">Criterion 2 – Teaching-Learning and Evaluation (200)</i></p></a>
    			<input type="number" name="criteria02" id="criteria02" value="0"  disabled><br>
				<div  id="change1"class="w-75 ms-5 border " style="display:none">
						
					  <form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="enrolment1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 2.1 Student Enrolment and Profile (10)</h3></label>
						<input type="number" name="enrolment1" id="criteria_enrolment" onkeyup="criteria2()"  value="0"disabled ><br><br>
					
						<a onclick="changeup7()"><label for="enrolment1" style="font-size:20px;"><b>2.1.1</b><h4> <p style="color:#800000 "> Enrollment Percentage<b>(5)</b></p></label></h4>
						<div class="d-flex justify-content-end">
						<label for="html">Output 1:</label><input type="number"  name="enrolment1" id="enrolment110"  value="0"disabled onkeyup="calculate_naac_grade_enrolment()">
						<label for="html">Output 2:</label><input type="number"  name="enrolment1" id="enrolment11"  value="0"disabled onkeyup="calculate_naac_grade_enrolment()">
						</div><br>
						<div id="label8" class="label8"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/8.png"></div>
						<h5><p style="color: #0000cc"><i class="bi bi-dot"> Total Number of seats filled yearwise:			<input onkeyup="academic211()" id="text45"type="text"></i></p><br>
						<p style="color: #0000cc"><i class="bi bi-dot">Enter Number of sanctioned seats yearwise:			<input onkeyup="academic211()" id="text46" type="text"></i></p></h5>
						<a onclick="changeup8()"><label for="enrolment1" style="font-size:20px;"><b>2.1.2 </b><h4><p style="color:#800000  "> Percentage of seats filled against reserved categories (SC, ST, OBC, etc.) as per applicable reservation policy for the first year admission year-wise during the last five years<b>(5)</b></p></label></h4>
						<div class="d-flex justify-content-end ">
						<label for="html">Output 1:</label><input type="number" name="enrolment1" id="enrolment120" value="0" disabled onkeyup="calculate_naac_grade_enrolment()"><br>
						<label for="html">Output 2:</label><input type="number" name="enrolment1" id="enrolment12" value="0" disabled onkeyup="calculate_naac_grade_enrolment()"><br>
						</div><br>
						<div id="label9" class="label9"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/9.png"></div>
						<h5><p style="color: #0000cc"> Total Number of students admitted against the reserv ed categories:			<input onkeyup="academic212()" id="text47"type="text"></i></p><br>
						<p style="color: #0000cc">Enter Number of seats earmarked for reserved category as per GOI or State Government Rule:			<input onkeyup="academic212()" id="text48" type="text"></i></p></h5>
					  </form>
			  
				<br>
					  <form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="diversity1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator -2.2 Catering to Student Diversity (20)</h3></label>
						<input type="number" name="diversity1" id="criteria_diversity"onkeyup="criteria2()"  value="0"disabled ><br><br>
						<a onclick="changeup9()"><label for="diversity1" style="font-size:20px;"><b>2.2.1 </b><h4><p style="color:#800000 "> The institution assesses the learning levels of the students and organises special Programmes to cater to differential learning needs of the student<b>(15)</b></p></label></h4>
						<div class="d-flex justify-content-end">
						<input type="number" name="diversity1" id="diversity11"  value="0" onkeyup="calculate_naac_grade_diversity()"><br>
						</div>
						<div id="label10" class="label10"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/10.png"></div>
						<a onclick="changeup10()"><label for="diversity1" style="font-size:20px;"><b>2.2.2 </b><h4><p style="color:#800000  "> Student - Full time teacher ratio (Data for the latest completed academic year)<b>(5)</b></p></label></h4>
						<div class="d-flex justify-content-end">
						<input type="number" name="diversity1" id="diversity12"  value="0" onkeyup="calculate_naac_grade_diversity()"><br>
						   </div>
						   <div id="label11" class="label11"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/11.png"></div>
					  </form>


					<br>
					  <form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="teaching1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 2.3 Teaching-Learning Process (20)</h3></label>
						<input type="number" name="teaching1" id="criteria_teaching" onkeyup="criteria2()"  value="0" disabled><br><br>
						<a onclick="changeup11()"><label for="teaching1" style="font-size:20px;"><b>2.3.1</b> <h4><p style="color:#800000 "> Student centric methods, such as experiential learning, participative learning and problem solving methodologies are used for enhancing learning experience and teachers use ICT-enabled tools including online resources for effective teaching learning process<b>(10)</b></p></label></h4>
						<div class="d-flex justify-content-end">
						<input type="number" name="teaching1" id="teaching11"  value="0" onkeyup="calculate_naac_grade_teaching()"><br>
						</div>
						<div id="label12" class="label12"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/12.png"></div>
						<a onclick="changeup12()"><label for="teaching1" style="font-size:20px;"><b>2.3.2</b> <h4><p style="color:#800000 "> The institution adopts effective Mentor-Mentee Schemes to address academics and student-psychological issues<b>(10)</b></p></label></h4>
						<div class="d-flex justify-content-end">
						<input type="number" name="teaching1" id="teaching12"  value="0" onkeyup="calculate_naac_grade_teaching()"><br> 
						</div> 
						<div id="label13" class="label13"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/13.png"></div>
					</form>

					  <br>

					  <form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="profile1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 2.4 Teacher Profile and Quality (60)</h3></label>
						<input type="number" name="profile1" id="criteria_profile"onkeyup="criteria2()" value="0"disabled ><br><br>
						<a onclick="changeup13()"><label for="profile1" style="font-size:20px;"><b>2.4.1</b><h4><p style="color:#800000 "> Percentage of full time teachers appointed against the number of sanctioned posts during the last five years<b>(10)</b></p></label></h4>
						<div class="d-flex justify-content-end">
					<label> Output 1:</label><input type="number" name="profile1" id="profile110" value="0" disabled onkeyup="calculate_naac_grade_profile()"><br>
					<label> Output 2:</label><input type="number" name="profile1" id="profile11" value="0" disabled onkeyup="calculate_naac_grade_profile()"><br>
					</div><br>
					<div id="label14" class="label14"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/14.png"></div>
					<h5><p style="color: #0000cc"><i class="bi bi-dot">(2.1)Number of full time teachers during last five years (latest 𝑐𝑜𝑚𝑝𝑙𝑒𝑡𝑒𝑑 𝑎𝑐𝑎𝑑𝑒𝑚𝑖𝑐 year):			<input onkeyup="profile241()" id="text51"type="text"></i></p><br>
					<p style="color: #0000cc"><i class="bi bi-dot"> Toatl Number of sanctioned posts:			<input onkeyup="profile241()" id="text52" type="text"></i></p></h5>
					<a onclick="changeup14()"><label for="profile1" style="font-size:20px;"><b>2.4.2</b><h4><p style="color:#800000 "> Percentage of full time teachers with Ph.D./D.M/M.Ch./D.N.B/Superspeciality/L.L.D/D.S.C/D.Litt. during the last five years<b>(40)</b></p></label></h4>
						<div class="d-flex justify-content-end">
					<label>Output 1: </label><input type="number" name="profile1" id="profile120"  value="0" disabled onkeyup="calculate_naac_grade_profile()"><br>
					<label>Output 2: </label><input type="number" name="profile1" id="profile12"  value="0" disabled onkeyup="calculate_naac_grade_profile()"><br>
					</div><br>
					<div id="label15" class="label15"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/15.png"></div>
					<h5><p style="color: #0000cc"><i class="bi bi-dot">Number of full time teachers with Ph.D./D.M/M.Ch./D.N.B Superspeciality/L.L.D/D.S.C/D.Litt:		<input onkeyup="profile242()" id="text53"type="text"></i></p><br>
					<p style="color: #0000cc"><i class="bi bi-dot"> (𝟐.𝟐) Number of Full−time teachers in the institutions:			<input onkeyup="profile242()" id="text54" type="text"></i></p></h5>
					<a onclick="changeup15()"><label for="profile1" style="font-size:20px;"><b>2.4.3</b><h4><p style="color:#800000 "> Average teaching experience of full time teachers (Data to be provided only for the latest completed academic year, in number of years)<b>(10)</b></p></label></h4>
						<div class="d-flex justify-content-end">
					<label> Output 1: </label><input type="number" name="profile1" id="profile130"  value="0" disabled onkeyup="calculate_naac_grade_profile()"><br>
					<label> Output 2: </label><input type="number" name="profile1" id="profile13"  value="0" disabled onkeyup="calculate_naac_grade_profile()"><br>
					</div> <br>
					<div id="label16" class="label16"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/16.png"></div> 
					<h5><p style="color: #0000cc"><i class="bi bi-dot">Total teaching experience of full time teachers:		<input onkeyup="profile243()" id="text55"type="text"></i></p><br>
					<p style="color: #0000cc"><i class="bi bi-dot"> 2.1 Number of full time teachers (latest completed year):			<input onkeyup="profile243()" id="text56" type="text"></i></p> </h5>
				</form>

				<br>

				<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="process1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 2.5 Evaluation Process and Reforms (30)</h3></label>
						<input type="number" name="process1" id="criteria_process"onkeyup="criteria2()"  value="0" disabled><br><br>
						<a onclick="changeup16()"><label for="process1" style="font-size:20px;"><b>2.5.1</b><h4><p style="color:#800000 "> Average number of days from the date of last semester-end/ year- end examination till the last date of declaration of results year-wise during the last five years<b>(10)</b></p></label></h4>
						<div class="d-flex justify-content-end">
					<label> Output 1: </label><input type="number" name="process1" id="process110" disabled value="0" onkeyup="calculate_naac_grade_process()"><br>
					<label> Output 2: </label><input type="number" name="process1" id="process11" disabled value="0" onkeyup="calculate_naac_grade_process()"><br>
					</div>
					<div>
						<br>
						<table>
							<h3><tr><th>Assessment <br> Year:</th><th><input type="number"></th><th><input type="number"></th><th><input type="number" ></th><th><input type="number"></th><th><input type="number"></th></tr>
							<tr><th>Number <br>of year:</th><th><input type="number" id="a2511" onkeyup="calculateCir25110()"></th><th><input type="number" id="a2512" onkeyup="calculateCir25110()"></th><th><input type="number" id="a2513" onkeyup="calculateCir25110()"></th><th><input type="number" id="a2514" onkeyup="calculateCir25110()"></th><th><input type="number" id="a2515" onkeyup="calculateCir25110()"></th></tr></h3>
						</table><br>
						</div>
					<div id="label17" class="label17"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/17.png"></div>  
					<h5><p style="color: #0000cc"><i class="bi bi-dot">Total Number of days from the date of last semester − end/ year − end examination till the last date declaration of results:		<input onkeyup="process251()" id="text57"type="text"></i></p><br></h5>
					<a onclick="changeup17()"><label for="process1" style="font-size:20px;"><b>2.5.2</b><h4><p style="color:#800000 "> Percentage of student complaints/grievances about evaluation against total number of students appeared in the examinations during the last five years<b>(10)</b></p></label></h4>
					<div class="d-flex justify-content-end">
					<label> Output 1:</label><input type="number" name="process1" id="process120"  value="0"  disabled onkeyup="calculate_naac_grade_process()">
					<label> Output 2:</label><input type="number" name="process1" id="process12"  value="0"  disabled onkeyup="calculate_naac_grade_process()">
					</div><br>
					<div>
						<table>
						<tr><th>Year:</th><th><input type="number"></th><th><input type="number"></th><th><input type="number" ></th><th><input type="number"></th><th><input type="number"></th></tr>
						<tr><th>Number of<br> complaints/<br>grievances: </th><th><input type="number" id="a2521" onkeyup="calculateCir25210()"></th><th><input type="number" id="a2522" onkeyup="calculateCir25210()"></th><th><input type="number" id="a2523" onkeyup="calculateCir25210()"></th><th><input type="number" id="a2524" onkeyup="calculateCir25210()"></th><th><input type="number" id="a2525" onkeyup="calculateCir25210()"></th></tr>
						<tr><th>Number of<br> students <br>appeared in <br>the examinations </th><th><input type="number" id="a25201" onkeyup="calculateCir252100()"></th><th><input type="number" id="a25202" onkeyup="calculateCir252100()"></th><th><input type="number" id="a25203" onkeyup="calculateCir252100()"></th><th><input type="number" id="a25204" onkeyup="calculateCir252100()"></th><th><input type="number" id="a25205" onkeyup="calculateCir252100()"></th></tr>
</table>
</div>
					<div id="label18" class="label18"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/18.png"><br><img src="./img/19.png"></div> 
					<h5><p style="color: #0000cc"><i class="bi bi-dot">Total Number of complaints or grievances about evaluation:		<input onkeyup="process252()" id="text58"type="text"></i></p><br>
					<p style="color: #0000cc"><i class="bi bi-dot">Total Number of students appeared in the examination:		<input onkeyup="process252()" id="text59"type="text"></i></p><br> </h5>
					<a onclick="changeup18()"><label for="process1" style="font-size:20px;"><b>2.5.3</b><h4><p style="color:#800000 ">Status of automation of Examination division along with approved Examination Manual/ordinance <br>
					A. 100% automation of entire division & implementation of Examination Management System (EMS) <br>
					B. Only student registration, Hall ticket issue & Result Processing <br>
					C. Only student registration and result processing<br>
					 D. Only result processing E. Only manual methodology<b>(10)</b></p></label></h4>
						<div class="d-flex justify-content-end">
					<input type="number" name="process1" id="process13" value="0" onkeyup="calculate_naac_grade_process()"><br>
					</div> 
					<div id="label19" class="label19"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/20.png"></div>  
					</form> 
					
					<br>
					  <form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="student1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 2.6 Student Performance and Learning Outcomes (30)</h3></label>
						<input type="number" name="student1" id="criteria_student" onkeyup="criteria2()"  value="0" disabled ><br><br>
						<a onclick="changeup19()"><label for="student1" style="font-size:20px;"><b>2.6.1</b><h4> <p style="color:#800000 "> The institution has stated learning outcomes (Program and Course outcomes)/graduate attributes which are integrated into the assessment process and widely publicized through the website and other documents and the attainment of the same are evaluated by the institution<b>(15)</b></p></label></h4>
						<div class="d-flex justify-content-end">
						<input type="number" name="student1" id="student11"  value="0" onkeyup="calculate_naac_grade_student()"><br>
						</div>
						<div id="label20" class="label20"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/21.png"></div>
						<a onclick="changeup20()"><label for="student1" style="font-size:20px;"><b>2.6.2</b><h4> <p style="color:#800000 "> Pass percentage of students (excluding backlog students) (Data to be provided only for the latest completed academic year)<b>(15)</b></p></label></h4>
						<div class="d-flex justify-content-end">
						<label> Output 1: </label><input type="number" name="student1" id="student120"  value="0" disabled onkeyup="calculate_naac_grade_student()"><br> 
						<label> Output 2: </label><input type="number" name="student1" id="student12"  value="0" disabled onkeyup="calculate_naac_grade_student()"><br> 
						</div> <br>
						<div id="label21" class="label21"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/20.png"></div>
						<h5><p style="color: #0000cc"><i class="bi bi-dot">Total number of final year students who passed in the university examination:		<input onkeyup="student262()" id="text60"type="text"></i></p><br>
					<p style="color: #0000cc"><i class="bi bi-dot">(1. 2) Number of final year - outgoing students (latest completed year):		<input onkeyup="student262()" id="text61"type="text"></i></p><br> </h5>
						</form>

						<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
                            <label for="survey1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 2.7 Student Satisfaction Survey (30)</h3></label>
							<input type="number" name="survey1" id="criteria_survey"onkeyup="criteria2()"  value="0" disabled><br><br>
                            <a onclick="changeup21()"><label for="survey1" style="font-size:20px;"><b>2.7.1</b><h4><p style="color:#800000 ">  Online Student Satisfaction Survey regarding the teaching-learning process.<b>(30)</b></h4></p></label>
							<div class="d-flex justify-content-end">
						<input type="number" name="survey1" id="survey1"  value="0" onkeyup="calculate_naac_grade_survey()"><br>
						</div>   
						<div id="label22" class="label22"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/21.png"></div>   
					</form>

					<div align="center" class="crit">
						<h3><p style="color:#e60000";>Calculated Criterion II:</p></h3>
						<table>
							<tr>
							<th><p style="color:#00802b";>2.1 Student Enrolment and Profile:</th><th><input type="number" value="10" id="cri21" disabled></th>
							<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri21_credit" onkeyup="calculateCir2()"></th>
</tr><tr>
						<th><p style="color:#00802b";>2.2 Catering to Student Diversity:</th><th>  <input type="number" value="20" id="cri22" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri22_credit" onkeyup="calculateCir2()"></th>
</tr><tr>
						<th><p style="color:#00802b";>2.3 Teaching-Learning Process:</th><th> <input type="number" value="20" id="cri23" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri23_credit" onkeyup="calculateCir2()"></th>
</tr><tr>
						<th><p style="color:#00802b";>2.4 Teacher Profile and Quality: </th><th><input type="number" value="60" id="cri24" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri24_credit" onkeyup="calculateCir2()"></th>
</tr><tr>
						<th><p style="color:#00802b";>2.5 Evaluation Process and Reforms :</th><th> <input type="number" value="30" id="cri25" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri25_credit" onkeyup="calculateCir2()"></th>
</tr><tr>
						<th><p style="color:#00802b";>2.6 Student Performance and Learning Outcomes: </th><th><input type="number" value="30" id="cri26" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri26_credit" onkeyup="calculateCir2()"></th>
</tr><tr>
						<th><p style="color:#00802b";>2.7 Student Satisfaction System </th><th><input type="number" value="30" id="cri27" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri27_credit" onkeyup="calculateCir2()"></th>
</tr></table>
<br>
<br>
						<p align="center"><label for="">Result</label>
						<input type="number" id="cri2_result" value="0" disabled>
						<br>
					</div>
</form>
<br>
				
</div>


<!--criterion 3-->
			<a class="btn fw-bold"  style="font-size:25px"  onclick="change2()"><p><i class="bi bi-caret-right-fill">Criterion 3 – Research, Innovations and Extension (250)</i></p></a>
    					<input type="number" name="criteria03" id="criteria03"  value="0" disabled><br>
						<div  id="change2"class="w-75 ms-5 border " style="display:none">
						
					 	<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="research1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 3.1 Promotions of Research and Facilities (20)</h3></label>
						<input type="number" name="research1" id="criteria_research" onkeyup="criteria3()"  value="0" disabled ><br><br>
					
						<a onclick="changeup22()"><label for="research1" style="font-size:20px;"><b>3.1.1</b> <h4><p style="color:#800000 "> The institution’s Research facilities are frequently updated and there is a well defined policy for promotion of research which is uploaded on the institutional website and implemented<b>(2)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number"  name="research1" id="research11"  value="0" onkeyup="calculate_naac_grade_research()"><br>
							</div>
							<div id="label23" class="label23"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/24.png"></div>   
							<a onclick="changeup23()"><label for="research1" style="font-size:20px;"><b>3.1.2 </b><h4><p style="color:#800000  "> The institution provides seed money to its teachers for research (average per year; INR in Lakhs)<b>(3)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<label>Output 1:</label><input type="number" name="research1" id="research120" value="0" disabled onkeyup="calculate_naac_grade_research()"><br>
						<label>Output 2:</label><input type="number" name="research1" id="research12" value="0" disabled onkeyup="calculate_naac_grade_research()"><br>
						</div>
						<div>
						<br>
						<table>
							<tr><th>Year:</th><th><input type="number"></th><th><input type="number"></th><th><input type="number" ></th><th><input type="number"></th><th><input type="number"></th></tr>
							<tr><th>Sanctioned:</th><th><input type="number" id="a3121" onkeyup="calculateCir31211()"></th><th><input type="number" id="a3122" onkeyup="calculateCir31211()"></th><th><input type="number" id="a3123" onkeyup="calculateCir31211()"></th><th><input type="number" id="a3124" onkeyup="calculateCir31211()"></th><th><input type="number" id="a3125" onkeyup="calculateCir31211()"></th></tr>
						</table>
<br>
						</div>
						   <div id="label24" class="label24"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/25.png"></div> 
						   <h5><p style="color: #0000cc"><i class="bi bi-dot">Total Amount of Speed Money:		<input onkeyup="research312()" id="text71"type="text"></i></p><br> </h5> 
						   <a onclick="changeup24()"><label for="research1" style="font-size:20px;"><b>3.1.3</b> <h4><p style="color:#800000 "> Percentage of teachers receiving national/ international fellowship/financial support by various agencies for advanced <br> studies/ research during the last five years<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<label>Output 1:</label><input type="number"  name="research1" id="research130" value="0"  disabled onkeyup="calculate_naac_grade_research()"><br>
						<label>Output 2:</label><input type="number"  name="research1" id="research13" value="0"  disabled onkeyup="calculate_naac_grade_research()"><br>
							</div>
							<div>
						<br>
						<table>
							<tr><th>Year:</th><th><input type="number"></th><th><input type="number"></th><th><input type="number" ></th><th><input type="number"></th><th><input type="number"></th></tr>
							<tr><th>Number of teachers:</th><th><input type="number" id="a3131" onkeyup="calculateCir31311()"></th><th><input type="number" id="a3132" onkeyup="calculateCir31311()"></th><th><input type="number" id="a3133" onkeyup="calculateCir31311()"></th><th><input type="number" id="a3134" onkeyup="calculateCir31311()"></th><th><input type="number" id="a3135" onkeyup="calculateCir31311()"></th></tr>
</table>
<br>
						</div>
							<div id="label25" class="label25"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/26.png"><img src="./img/27.png"></div>  
							<h5><p style="color: #0000cc"><i class="bi bi-dot">Total number of teachers who received national/ international fellowship/ financial support by various agencies for advanced studies/research during the last five years:		<input onkeyup="research313()" id="text62"type="text"></i></p><br>   
							<p style="color: #0000cc"><i class="bi bi-dot">(2.2 Total number of full time teachers (without repeat count) ):		<input onkeyup="research313()" id="text63"type="text"></i></p><br></h5>  
							<a onclick="changeup25()"><label for="research1" style="font-size:20px;"><b>3.1.4 </b><h4><p style="color:#800000  "> Percentage of JRFs, SRFs among the enrolled PhD scholars in the institution during the last five years<b>(10)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<label>Output 1:</label><input type="number" name="research1" id="research140"  value="0" disabled onkeyup="calculate_naac_grade_research()"><br>
						<label>Output 2:</label><input type="number" name="research1" id="research14"  value="0" disabled onkeyup="calculate_naac_grade_research()"><br>
						   </div>
						   <div id="label26" class="label26"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/28.png"></div> 
						   <h5><p style="color: #0000cc"><i class="bi bi-dot">Total no. JRF + SRF during last five years:		<input onkeyup="research314()" id="text64"type="text"></i></p><br> </h5>  
						   <h5><p style="color: #0000cc"><i class="bi bi-dot">No. of phd Scholars enrolled during last five years:		<input onkeyup="research314()" id="text65"type="text"></i></p><br> </h5>
 						</form>

<br>
					  <form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="mobilization1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 3.2 Resource Mobilization for Research (40)</h3></label>
						<input type="number" name="mobilization1" id="criteria_mobilization" onkeyup="criteria3()"  value="0" disabled ><br><br>
						<a onclick="changeup26()"><label for="mobilization1" style="font-size:20px;"><b>3.2.1</b> <h4><p style="color:#800000 ">Research funding received by the institution and its faculties through Government and non-government sources such as industry, corporate houses, international bodies for research project, Endowment Research Chairs during the last five years (INR in Lakhs)<b>(25)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="mobilization1" id="mobilization11"  value="0" onkeyup="calculate_naac_grade_mobilization()"><br>
						</div>
						<div id="label27" class="label27"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/30.png"><img src="./img/31.png"></div>
						<a onclick="changeup27()"><label for="mobilization1" style="font-size:20px;"><b>3.2.2</b> <h4><p style="color:#800000 ">Number of research projects per teacher funded by government, non- government , industry, corporate houses, international bodies during the last five years<b>(15)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<label>Output 1:</label><input type="number" name="mobilization1" id="mobilization120"  value="0" disabled onkeyup="calculate_naac_grade_mobilization()">
						<label>Output 2:</label><input type="number" name="mobilization1" id="mobilization12"  value="0" disabled onkeyup="calculate_naac_grade_mobilization()"> 
						</div> 
						<div id="label28" class="label28"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/32.png"></div>
						<h5><p style="color: #0000cc"><i class="bi bi-dot">Total number of research projects funded by government and non - government industry, corporate houses, international bodies during the last five years:		<input onkeyup="mobilization322()" id="text72"type="text"></i></p><br>   
						<p style="color: #0000cc"><i class="bi bi-dot">(2.2 Number of full time terachers (without repeat count) during the last five years):		<input onkeyup="mobilization322()" id="text73"type="text"></i></p><br>  </h5>
</form>
						<br>
					  <form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="ecosystem1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 3.3 Innovation Ecosystem (20)</h3></label>
						<input type="number" name="ecosystem1" id="criteria_ecosystem" onkeyup="criteria3()"  value="0" disabled ><br><br>
						<a onclick="changeup28()"><label for="ecosystem1" style="font-size:20px;"><b>3.3.1</b> <h4><p style="color:#800000 ">Institution has created an ecosystem for innovations, Indian Knowledge System (IKS) including awareness about IPR, establishment of IPR cell, Incubation centre and other initiatives for the creation and transfer of technology/knowledge and the outcomes of the same are evident<b>(15)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="ecosystem1" id="ecosystem11"  value="0" onkeyup="calculate_naac_grade_ecosystem()"><br>
						</div>
						<div id="label29" class="label29"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/33.png"></div>
						<a onclick="changeup29()"><label for="ecosystem1" style="font-size:20px;"><b>3.3.2</b> <h4><p style="color:#800000 ">Number of awards received for research/innovations by the institution/teachers/research scholars/students during the last five years<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="ecosystem1" id="ecosystem12"  value="0" onkeyup="calculate_naac_grade_ecosystem()"><br> 
						</div> 
						<div id="label30" class="label30"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/34.png"></div>
						</form>

						<br>
					  <form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="awards1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicators - 3.4 Research Publications and Awards (120)</h3></label>
						<input type="number" name="awards1" id="criteria_awards" onkeyup="criteria3()"  value="0" disabled ><br><br>
						<a onclick="changeup30()"><label for="awards1" style="font-size:20px;"><b>3.4.1</b><h4> <p style="color:#800000 ">The institution ensures implementation of its stated Code of Ethics for research<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="awards1" id="awards11" value="0" onkeyup="calculate_naac_grade_awards()"><br>
						</div>
						<div id="label31" class="label31"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/35.png"></div>
						<a onclick="changeup31()"><label for="awards1" style="font-size:20px;"><b>3.4.2</b><h4> <p style="color:#800000 ">Number of Patents awarded during the last five years<b>(15)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<label>Output 1:</label><input type="number" name="awards1" id="awards120"  value="0" disabled onkeyup="calculate_naac_grade_awards()"> 
						<label>Output 2:</label><input type="number" name="awards1" id="awards12"  value="0" disabled onkeyup="calculate_naac_grade_awards()">
						</div> 
						<div id="label32" class="label32"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/36.png"></div>
						<h5><p style="color: #0000cc"><i class="bi bi-dot">Number of Patents:		<input onkeyup="awards342()" id="text740"type="text"></i></p><br>   </h5>
						<a onclick="changeup32()"><label for="awards1" style="font-size:20px;"><b>3.4.3</b><h4> <p style="color:#800000 ">Number of Ph.Ds awarded per recognized guide during the last five ears<b>(15)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<label>Output 1:</label><input type="number" name="awards1" id="awards130"  value="0" disabled onkeyup="calculate_naac_grade_awards()">
						<label>Output 2:</label><input type="number" name="awards1" id="awards13"  value="0" disabled onkeyup="calculate_naac_grade_awards()"> 
						</div>
						<div id="label33" class="label33"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px;"> <img src="./img/37.png"></div> 
						<h5><p style="color: #0000cc"><i class="bi bi-dot">Number of Ph.D degrees awarded during the last five years:		<input onkeyup="awards343()" id="text74"type="text"></i></p><br>   
						<p style="color: #0000cc"><i class="bi bi-dot">Number of Teachers recognised as guides during the last five years:		<input onkeyup="awards343()" id="text75"type="text"></i></p><br>  </h5>
						<a onclick="changeup33()"><label for="awards1" style="font-size:20px;"><b>3.4.4</b><h4> <p style="color:#800000 ">Number of research papers published per teacher in the Journals as notified on UGC CARE list during the last five years<b>(20)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<label>Output 1:</label><input type="number" name="awards1" id="awards140"  value="0" disabled onkeyup="calculate_naac_grade_awards()"> 
						<label>Output 2:</label><input type="number" name="awards1" id="awards14"  value="0" disabled onkeyup="calculate_naac_grade_awards()">
						</div>
						<div>
							<br>
						<table>
							<tr><th>Year:</th><th><input type="number"></th><th><input type="number"></th><th><input type="number" ></th><th><input type="number"></th><th><input type="number"></th></tr>
							<tr><th>Number:</th><th><input type="number" id="a3441" onkeyup="calculateCir34411()"></th><th><input type="number" id="a3442" onkeyup="calculateCir34411()"></th><th><input type="number" id="a3443" onkeyup="calculateCir34411()"></th><th><input type="number" id="a3444" onkeyup="calculateCir34411()"></th><th><input type="number" id="a3445" onkeyup="calculateCir34411()"></th></tr>
</table>
<br>
						</div>
						<div id="label34" class="label34"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px;"> <img src="./img/38.png"></div>
						<h5><p style="color: #0000cc"><i class="bi bi-dot">Total Number of publications in UGC CARE list of journals during the last five years:		<input onkeyup="awards344()" id="text1111"type="text"></i></p><br>   
						<p style="color: #0000cc"><i class="bi bi-dot">(2.2 Number of full time teachers (without repeat count)during the last five years):		<input onkeyup="awards344()" id="text1112"type="text"></i></p><br>  </h5> 
						<a onclick="changeup34()"><label for="awards1" style="font-size:20px;"><b>3.4.5</b><h4> <p style="color:#800000 ">Number of books and chapters in edited volumes published per teacher during the last five years <b>(10)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<label>Output 1:</label><input type="number" name="awards1" id="awards150"  value="0" disabled onkeyup="calculate_naac_grade_awards()"><br> 
						<label>Output 2:</label><input type="number" name="awards1" id="awards15"  value="0" disabled onkeyup="calculate_naac_grade_awards()"><br> 
						</div> 
<div>
<br>
						<table>
							<tr><th>Year:</th><th><input type="number"></th><th><input type="number"></th><th><input type="number" ></th><th><input type="number"></th><th><input type="number"></th></tr>
							<tr><th>Number:</th><th><input type="number" id="a3451" onkeyup="calculateCir34412()"></th><th><input type="number" id="a3452" onkeyup="calculateCir34412()"></th><th><input type="number" id="a3453" onkeyup="calculateCir34412()"></th><th><input type="number" id="a3454" onkeyup="calculateCir34412()"></th><th><input type="number" id="a3455" onkeyup="calculateCir34412()"></th></tr>
</table>
<br>
</div>
						<div id="label35" class="label35"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/39.png"></div>
						<h5><p style="color: #0000cc"><i class="bi bi-dot">Total number of books and chapters in edited volumes , books published during last five years:		<input onkeyup="awards345()" id="text76"type="text"></i></p><br>   
						<p style="color: #0000cc"><i class="bi bi-dot">(2.2 Number of full time teachers(without repeat count)during the last five years):		<input onkeyup="awards345()" id="text77"type="text"></i></p><br> </h5> 
						<a onclick="changeup35()"><label for="awards1" style="font-size:20px;"><b>3.4.6</b><h4> <p style="color:#800000 ">E-content is developed by teachers : <br>1. For e-PG-Pathshala <br>2. For CEC (Undergraduate) <br> 3. For SWAYAM <br> 4. For other MOOCs platforms <br> 5. Any other Government Initiatives <br> 6. For Institutional LMS<b>(15)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="awards1" id="awards16"  value="0" onkeyup="calculate_naac_grade_awards()"><br> 
						</div>
						<div id="label36" class="label36"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/40.png"></div> 
						<a onclick="changeup36()"><label for="awards1" style="font-size:20px;"><b>3.4.7</b> <h4><p style="color:#800000 ">Bibliometrics of the publications during the last five years based on average Citation Index in Scopus/ Web of Science/PubMed<b>(20)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<label>Output 1:</label><input type="number" name="awards1" id="awards170"  value="0" disabled onkeyup="calculate_naac_grade_awards()"><br>
						<label>Output 2:</label><input type="number" name="awards1" id="awards17"  value="0" disabled onkeyup="calculate_naac_grade_awards()"><br>  
						</div> 
						<div id="label37" class="label37"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/41.png"></div>
						<h5><p style="color: #0000cc"><i class="bi bi-dot">Total number of Citation in SCOPUS in five years + Total number of Citation in Web of Science in five years:		<input onkeyup="awards347()" id="text78"type="text"></i></p><br>   
						<p style="color: #0000cc"><i class="bi bi-dot">Total number of Publication in SCOPUS in five years + Total number of Publication in Web of Science in five years:		<input onkeyup="awards347()" id="text79"type="text"></i></p><br> </h5> 
						<a onclick="changeup37()"><label for="awards1" style="font-size:20px;"><b>3.4.8</b> <h4><p style="color:#800000 ">Bibliometrics of the publications during the last five years based on Scopus/ Web of Science – h-Index of the University<b>(20)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<label>Output 1:</label><input type="number" name="awards1" id="awards180"  value="0" disabled onkeyup="calculate_naac_grade_awards()"><br> 
						<label>Output 2:</label><input type="number" name="awards1" id="awards18"  value="0" disabled onkeyup="calculate_naac_grade_awards()"><br> 
						</div> 
						<div id="label38" class="label38"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/42.png"></div>
						<h5><p style="color: #0000cc">h - Index of Scopus:		<input onkeyup="awards348()" id="text90"type="text"></i></p><br>   
						<p style="color: #0000cc">h - index of Web of Science in last five years:		<input onkeyup="awards348()" id="text91"type="text"></i></p><br> </h5> 
						</form>


						<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
                            <label for="consultancy1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicators - 3.5 Consultancy (20)</h3></label>
							<input type="number" name="consultancy1" id="criteria_consultancy"onkeyup="criteria3()"  value="0" disabled><br><br>
                            <a onclick="changeup38()"><label for="consultancy1" style="font-size:20px;"><b>3.5.1</b><h4><p style="color:#800000 ">Revenue generated from consultancy and corporate training during the last five years (INR in Lakhs)<b>(20)</b></p></h4></label>
							<div class="d-flex justify-content-end">
						<input type="number" name="consultancy1" id="consultancy1"  value="0"  onkeyup="calculate_naac_grade_consultancy()"><br>
						</div> 
						<div id="label39" class="label39"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/43.png"></div>     
					</form>

						<br>
					  <form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="activities1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicators - 3.6 Extension Activities (20)</h3></label>
						<input type="number" name="activities1" id="criteria_activities" onkeyup="criteria3()"  value="0" disabled ><br><br>
						<a onclick="changeup39()"><label for="activities1" style="font-size:20px;"><b>3.6.1</b><h4> <p style="color:#800000 ">Extension activities in the neighborhood community in terms of impactand sensitizing the students to social issues and holistic development and awards received if any (Showcase at least four case studies to the peer team)<b>(10)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="activities1" id="activities11"  value="0" onkeyup="calculate_naac_grade_activities()"><br>
						</div>
						<div id="label40" class="label40"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/44.png"></div>
						<a onclick="changeup40()"><label for="activities1" style="font-size:20px;"><b>3.6.2</b> <h4><p style="color:#800000 ">Number of extension and outreach programs conducted through organized forums by the institution during the last five years<b>(10)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="activities1" id="activities12"  value="0" onkeyup="calculate_naac_grade_activities()"><br> 
						</div> 
						<div id="label41" class="label41"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/45.png"></div>
						</form>

						<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
                            <label for="collaboration1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 3.7 Collaboration (10)</h3></label>
							<input type="number" name="collaboration1" id="criteria_collaboration" onkeyup="criteria3()" value="0" disabled ><br><br>
                            <a onclick="changeup41()"><label for="collaboration1" style="font-size:20px;"><b>3.7.1</b><h4><p style="color:#800000 "> Number of functional MoUs /linkage with institutions/ industries in India and abroad for internship, on-the-job training, project work, student / faculty exchange and collaborative research during the last five years<b>(10)</b></p></h4></label>
							<div class="d-flex justify-content-end">
						<input type="number" name="collaboration1" id="collaboration1"  value="0" onkeyup="calculate_naac_grade_collaboration()"><br>
						</div>
						<div id="label42" class="label42"class="w-25" style="display:none"><h5><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/46.png"></div>      
					</form>
					
					<div align="center" class="crit"><br>
						<h3><p style="color:#e60000";>Calculated Criterion 3:</p></h3><br>
						<table><tr>
						<th><p style="color:#00802b";>3.1 Promotions of Research and Facilities:</th><th><input type="number" value="20" id="cri31" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri31_credit" onkeyup="calculateCir3()"></th>
</tr><tr>
						<th><p style="color:#00802b";>3.2 Resource Mobilization for Research: </th><th> <input type="number" value="40" id="cri32" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri32_credit" onkeyup="calculateCir3()"></th>
</tr><tr>
						<th><p style="color:#00802b";>3.3 Innovation Ecosystem:</th><th> <input type="number" value="20" id="cri33" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri33_credit" onkeyup="calculateCir3()"></th>
</tr><tr>
						<th><p style="color:#00802b";>3.4 Research Publications and Awards :</th><th> <input type="number" value="120" id="cri34" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri34_credit" onkeyup="calculateCir3()"></th>
</tr><tr>
						<th><p style="color:#00802b";>3.5 Consultancy: </th><th><input type="number" value="20" id="cri35" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri35_credit" onkeyup="calculateCir3()"></th>
</tr><tr>
						<th><p style="color:#00802b";>3.6 Extension Activities:</th><th> <input type="number" value="20" id="cri36" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri36_credit" onkeyup="calculateCir3()"></th>
</tr><tr>
						<th><p style="color:#00802b";>3.7 Collaboration:</th><th> <input type="number" value="10" id="cri37" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri37_credit" onkeyup="calculateCir3()"></th>
</tr></table>
<br><br>
						<p align="center"><label for="">Result</label>
						<input type="number" id="cri3_result" value="0" disabled></p>
						<br>
					</div>
</form>
<br>
					</div>

<!--criterion 4-->
			<a class="btn fw-bold"  style="font-size:25px"  onclick="change3()"><p><i class="bi bi-caret-right-fill">Criterion 4 – Infrastructure and Learning Resources (100)</i></p></a>
    					<input type="number" name="criteria04" id="criteria04"  value="0" disabled><br>
						<div  id="change3"class="w-75 ms-5 border " style="display:none">
						
					 			<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
									<label for="physical1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 4.1 Physical Facilities (30)</h3></label>
									<input type="number" name="physical1" id="criteria_physical" onkeyup="criteria4()"  value="0" disabled><br><br>
					
									<a onclick="changeup42()"><label for="physical1" style="font-size:20px;"><b>4.1.1</b> <h4><p style="color:#800000 ">The institution has adequate infrastructure facilities for <br> a. teaching - learning. viz., classrooms, laboratories, <br> b. ICT enabled facilities such as smart classes, LMS etc. <br> c. Facilities for cultural and sports activities , yoga centre, games (indoor and outdoor) gymnasium, auditorium etc.<b>(20)</b></p></h4></label>
									<div class="d-flex justify-content-end">
										<input type="number"  name="physical1" id="physical11"  value="0" onkeyup="calculate_naac_grade_physical()"><br>
									</div>
									<div id="label43" class="label43"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/47.png"></p></div>
									<a onclick="changeup43()"><label for="physical1" style="font-size:20px;"><b>4.1.2 </b><h4><p style="color:#800000  ">Percentage of expenditure excluding salary, for infrastructure development and augmentation during the last five years (INR in Lakhs)<b>(10)</b></p></h4></label>
									<div class="d-flex justify-content-end">
										<label>Output 1:</label><input type="number" name="physical1" id="physical120"  value="0" disabled onkeyup="calculate_naac_grade_physical()">
										<label>Output 2:</label><input type="number" name="physical1" id="physical12"  value="0" disabled onkeyup="calculate_naac_grade_physical()"><br>
						   			</div>
									   <div>
<br>
						<table>
							<tr><th>Year:</th><th><input type="number"></th><th><input type="number"></th><th><input type="number" ></th><th><input type="number"></th><th><input type="number"></th></tr>
							<tr><th>Number:</th><th><input type="number" id="a4121" onkeyup="calculateCir34122()"></th><th><input type="number" id="a4122" onkeyup="calculateCir34122()"></th><th><input type="number" id="a4123" onkeyup="calculateCir34122()"></th><th><input type="number" id="a4124" onkeyup="calculateCir34122()"></th><th><input type="number" id="a4125" onkeyup="calculateCir34122()"></th></tr>
</table>
<br>
</div>
									   <div id="label44" class="label44"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/48.png"></p></div>
									   <h5><p style="color: #0000cc"><i class="bi bi-dot">Total Expenditure for infrastructure augmentation excluding salary:		<input onkeyup="physical412()" id="text111"type="text"></i></p><br>   
										<p style="color: #0000cc"><i class="bi bi-dot">3.1 Total expenditure excluding salary :		<input onkeyup="physical412()" id="text112"type="text"></i></p><br>  </h5>
								</form>

								<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
									<label for="library1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 4.2 Library as a Learning Resource (20)</h3></label>
									<input type="number" name="library1" id="criteria_library" onkeyup="criteria4()"  value="0" disabled><br><br>
					
									<a onclick="changeup44()"><label for="library1" style="font-size:20px;"><b>4.2.1</b> <h4> <p style="color:#800000 ">Library is automated with digital facilities using Integrated Library Management System (ILMS), adequate subscription to e-resources and journals are made. The library is optimally used by the faculty and students<b>(15)</b></p></h4></label>
									<div class="d-flex justify-content-end">
										<input type="number"  name="library1" id="library11"  value="0" onkeyup="calculate_naac_grade_library()"><br>
									</div>
									<div id="label45" class="label45"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/49.png"></p></div>
									<a onclick="changeup45()"><label for="library1" style="font-size:20px;"><b>4.2.2 </b> <h4><p style="color:#800000  ">Percentage expenditure for purchase of books/ e-books and subscription to journals/e-journals during the last five years (INR in Lakhs)<b>(5)</b></p></h4></label>
									<div class="d-flex justify-content-end">
									<label> Output 1:</label><input type="number" name="library1" id="library120"  value="0"  disabled onkeyup="calculate_naac_grade_library()"><br>
									<label> Output 2:</label><input type="number" name="library1" id="library12"  value="0"  disabled onkeyup="calculate_naac_grade_library()"><br>
						   			</div>
									<div> <br>
									<table>
											<tr><th>Year:</th><th><input type="number"></th><th><input type="number"></th><th><input type="number" ></th><th><input type="number"></th><th><input type="number"></th></tr>
											<tr><th>INR in <br>lakhs:</th><th><input type="number" id="a4221" onkeyup="calculateCir34222()"></th><th><input type="number" id="a4222" onkeyup="calculateCir34222()"></th><th><input type="number" id="a4223" onkeyup="calculateCir34222()"></th><th><input type="number" id="a4224" onkeyup="calculateCir34222()"></th><th><input type="number" id="a4225" onkeyup="calculateCir34222()"></th></tr>
									</table> <br>
									</div>
									   <div id="label46" class="label46"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/50.png"></div>
									  <h5> <p style="color: #0000cc"><i class="bi bi-dot">Total expenditure for purchase of books, ebooks and subscriptions:		<input onkeyup="library422()" id="text113"type="text"></i></p><br>   
										<p style="color: #0000cc"><i class="bi bi-dot">3.1 Total expenditure excluding salary :		<input onkeyup="library422()" id="text114"type="text"></i></p><br> </h5> 
								</form>

								<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
									<label for="it1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator – 4.3 IT Infrastructure (30)</h3></label>
									<input type="number" name="it1" id="criteria_it" onkeyup="criteria4()"  value="0" disabled ><br><br>
						
									<a onclick="changeup46()"><label for="it1" style="font-size:20px;"><b>4.3.1</b> <h4><p style="color:#800000 ">Institution frequently updates its IT facilities and provides sufficient bandwidth for internet connection<b>(15)</b></p></h4></label>
									<div class="d-flex justify-content-end">
										<input type="number"  name="it1" id="it11"  value="0" onkeyup="calculate_naac_grade_it()"><br>
									</div>
									<div id="label47" class="label47"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/52.png"></div>
									<a onclick="changeup47()"><label for="it1" style="font-size:20px;"><b>4.3.2 </b><h4><p style="color:#800000  ">Student - Computer ratio (Data to be provided only for the latest completed academic year)<b>(10)</b></p></h4></label>
									<div class="d-flex justify-content-end">
									<label> Output 1: </label>	<input type="number" name="it1" id="it120" value="0" disabled onkeyup="calculate_naac_grade_it()"><br>
									<label> Output 2: </label>	<input type="number" name="it1" id="it12" value="0" disabled onkeyup="calculate_naac_grade_it()"><br>
									</div>
									<div id="label48" class="label48"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/53.png"></div>
									<h5><p style="color: #0000cc"><i class="bi bi-dot">Total number of computers available for student use:		<input onkeyup="it432()" id="text115"type="text"></i></p><br>   
									<p style="color: #0000cc"><i class="bi bi-dot">1.2: Number of students on rolls (latest compleated academic year):		<input onkeyup="it432()" id="text116"type="text"></i></p><br>  </h5>
									<a onclick="changeup48()"><label for="it1" style="font-size:20px;"><b>4.3.3 </b><h4><p style="color:#800000  ">Institution has the following Facilities for e-content and other resource development<b>(5)</b></p></h4></label>
									<div class="d-flex justify-content-end">
										<input type="number" name="it1" id="it13"  value="0" onkeyup="calculate_naac_grade_it()"><br>
									</div>
									<div id="label49" class="label49"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/54.png"><img src="./img/55.png"></div>
								</form>

								<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
									<label for="campus1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 4.4 Maintenance of Campus Infrastructure (20)</h3></label>
									<input type="number" name="campus1" id="criteria_campus" onkeyup="criteria4()"  value="0" disabled ><br><br>
									
									<a onclick="changeup49()"><label for="campus1" style="font-size:20px;"><b>4.4.1</b><h4> <p style="color:#800000 ">Percentage expenditure incurred on maintenance of physical facilities and academic support facilities excluding salary component during the last five years<b>(10)</b></p></h4></label>
									<div class="d-flex justify-content-end">
										<label>Output 1:</label><input type="number"  name="campus1" id="campus110"  value="0" disabled onkeyup="calculate_naac_grade_campus()"><br>
										<label>Output 2:</label><input type="number"  name="campus1" id="campus11"  value="0" disabled onkeyup="calculate_naac_grade_campus()"><br>
									</div>
									<div> <br>
									<table>
											<tr><th>Year:</th><th><input type="number"></th><th><input type="number"></th><th><input type="number" ></th><th><input type="number"></th><th><input type="number"></th></tr>
											<tr><th>INR in <br>lakhs:</th><th><input type="number" id="a4411" onkeyup="calculateCir44110()"></th><th><input type="number" id="a4412" onkeyup="calculateCir34222()"></th><th><input type="number" id="a4413" onkeyup="calculateCir34222()"></th><th><input type="number" id="a4414" onkeyup="calculateCir34222()"></th><th><input type="number" id="a4415" onkeyup="calculateCir34222()"></th></tr>
									</table> <br>
									</div>
									<div id="label50" class="label50"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/56.png"></p></div>
									<h5><p style="color: #0000cc"><i class="bi bi-dot">Total expenditure on maintenance of physical and academic support facilities excluding salary component:		<input onkeyup="campus441()" id="text117"type="text"></i></p><br>   
									<p style="color: #0000cc"><i class="bi bi-dot">13.1 Total expenditure excluding salary component:		<input onkeyup="campus441()" id="text118"type="text"></i></p><br>  </h5>
									<a onclick="changeup50()"><label for="campus1" style="font-size:20px;"><b>4.4.2 </b><h4><p style="color:#800000  ">There are established systems and procedures for maintaining and utilising physical, academic and support facilities - laboratory, library, sports complex, computers, classrooms etc.<b>(10)</b></p></h4></label>
									<div class="d-flex justify-content-end">
										<input type="number" name="campus1" id="campus12"  value="0" onkeyup="calculate_naac_grade_campus()"><br>
									</div>
									<div id="label51" class="label51"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/57.png"></p></div>
								</form>
								<div align="center" class="crit"><br>
						<h3><p style="color:#e60000";>Calculated Criterion 4:</p></h3><br>
						<table><tr>
						<th><p style="color:#00802b";>4.1 Physical Facilities:</th><th><input type="number" value="30" id="cri41" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri41_credit" onkeyup="calculateCir4()"></th>
</tr><tr>
						<th><p style="color:#00802b";>4.2 Library as a Learning Resource: </th><th> <input type="number" value="20" id="cri42" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri42_credit" onkeyup="calculateCir4()"></th>
</tr><tr>
						<th><p style="color:#00802b";>4.3 IT Infrastructure:</th><th> <input type="number" value="30" id="cri43" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4): </th><th><input type="number" value="0" placeholder="Add Credit" id="cri43_credit" onkeyup="calculateCir4()"></th>
</tr><tr>
						<th><p style="color:#00802b";>4.4 Maintenance of Campus Infrastructure: </th><th><input type="number" value="20" id="cri44" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri44_credit" onkeyup="calculateCir4()"></th>
</tr></table><br><br>
						<p align="center"><label for="">Result</label>
						<input type="number" id="cri4_result" value="0" disabled></p>
						<br>
					</div>
				</div>

						
<!--criterion 5-->
<a class="btn fw-bold"  style="font-size:25px"  onclick="change4()"><p><i class="bi bi-caret-right-fill">Criterion 5 - Student Support and Progression (100)</i></p></a>
    					<input type="number" name="criteria05" id="criteria05"  value="0" disabled><br>
						<div  id="change4"class="w-75 ms-5 border " style="display:none">
						
					 	<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="support1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 5.1 Student Support (30)</h3></label>
						<input type="number" name="support1" id="criteria_support" onkeyup="criteria5()"  value="0" disabled ><br><br>
					
						<a onclick="changeup51()"><label for="support1" style="font-size:20px;"><b>5.1.1</b> <h4><p style="color:#800000 ">Percentage of students benefited by scholarships and freeships provided by the institution, Government and non-government bodies, industries, individuals, philanthropists during the last five years<b>(15)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number"  name="support1" id="support11"  value="0" disabled onkeyup="calculate_naac_grade_support()"><br>
							</div>
							<div id="label52" class="label52"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/58.png"><img src="./img/59.png"></p></div><br>
							<h5><p style="color: #0000cc"><i class="bi bi-dot">Total number of students benefited by scholarships and freeships by institution, government and non-government agencies:		<input onkeyup="support511()" id="text119"type="text"></i></p><br>   
							<p style="color: #0000cc"><i class="bi bi-dot">1.1 Total number of students on rolls:		<input onkeyup="support511()" id="text120"type="text"></i></p><br>  </h5>
						<a onclick="changeup52()"><label for="support1" style="font-size:20px;"><b>5.1.2 </b><h4><p style="color:#800000  ">Efforts taken by the institution to provide career counseling including e-counseling and guidance for competitive examinations during the last five years<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="support1" id="support12"  value="0" onkeyup="calculate_naac_grade_support()"><br>
						   </div>
						   <div id="label53" class="label53"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "><img src="./img/60.png"> </p></div>
						<a onclick="changeup53()"><label for="support1" style="font-size:20px;"><b>5.1.3 </b><h4><p style="color:#800000  ">Following Capacity development and skills enhancement initiatives are undertaken by the institution for: <br> 1. Soft skills <br> 2. Language and communication skills <br> 3. Life skills (Yoga, physical fitness, health and hygiene, self-employment and entrepreneurial skills) <br> 4. Awareness of trends in technology<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="support1" id="support13"  value="0" onkeyup="calculate_naac_grade_support()"><br>
						   </div>
						   <div id="label54" class="label54"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "><img src="./img/61.png"> </p></div>
						<a onclick="changeup54()"><label for="support1" style="font-size:20px;"><b>5.1.4</b><h4><p style="color:#800000  ">The Institution adopts the following for redressal of student grievances including sexual harassment and ragging cases <br> 1. Implementation of guidelines of statutory/regulatory bodies <br> 2. Organisation-wide awareness and undertakings on policies with zero tolerance <br> 3. Mechanisms for submission of online/offline students’ grievances <br> 4. Timely redressal of the grievances through appropriate committees<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="support1" id="support14"  value="0" onkeyup="calculate_naac_grade_support()"><br>
						   </div>
						   <div id="label55" class="label55"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/62.png"></p></div>
						</form> 

						<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="progression1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 5.2 Student Progression (45)</h3></label>
						<input type="number" name="progression1" id="criteria_progression" onkeyup="criteria5()" disabled value="0" ><br><br>
					
						<a onclick="changeup55()"><label for="progression1" style="font-size:20px;"><b>5.2.1</b><h4> <p style="color:#800000 ">Percentage of placement of outgoing students during the last five years<b>(15)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number"  name="progression1" id="progression11"  value="0" onkeyup="calculate_naac_grade_progression()"><br>
							</div>
							<div id="label56" class="label56"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/63.png"><img src="./img/64.png"></p></div><br>
							<!-- <p style="color: #0000cc">Total number of outgoing students placed:		<input onkeyup="progression521()" id="text131"type="text"></p><br>   
							<p style="color: #0000cc">(1.2 Total number of outgoing final year students):		<input onkeyup="progression521()" id="text132"type="text"></p><br> 
							<p style="color: #0000cc">(5.2.2.1 Total progressed to higer education):		<input onkeyup="progression521()" id="text133"type="text"></p><br>   -->
						<a onclick="changeup56()"><label for="progression1" style="font-size:20px;"><b>5.2.2 </b><h4><p style="color:#800000  ">Percentage of graduated students who have progressed to higher education year-wise during last five years<b>(15)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="progression1" id="progression12"  value="0" onkeyup="calculate_naac_grade_progression()"><br>
						   </div>
						   <div id="label57" class="label57"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "><img src="./img/65.png"> </p></div>
						<a onclick="changeup57()"><label for="progression1" style="font-size:20px;"><b>5.2.3 </b><h4><p style="color:#800000  ">Percentage of students qualifying in state/National/International level Examination during last five years (eg. SLET, NET, UPSC etc) <b>(15)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="progression1" id="progression13"  value="0" disabled onkeyup="calculate_naac_grade_progression()"><br>
						   </div>
						   <div id="label58" class="label58"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/66.png"></p></div>
						   <h5><p style="color: #0000cc"><i class="bi bi-dot">Number of students qualifying in state/National/International level Examination:		<input onkeyup="progression523()" id="text140"type="text"></i></p><br>   
							<p style="color: #0000cc"><i class="bi bi-dot">1.2 Total final year -  outgoing students :		<input onkeyup="progression523()" id="text141"type="text"></i></p><br> </h5> 
						</form> 

						<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="participation1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 5.3 Student Participation and Activities (15)</h3></label>
						<input type="number" name="participation1" id="criteria_participation" onkeyup="criteria5()"  value="0" disabled ><br><br>
					
						<a onclick="changeup58()"><label for="participation1" style="font-size:20px;"><b>5.3.1</b><h4> <p style="color:#800000 ">Number of awards/medals won by students for outstanding performance in sports/cultural activities at inter-university/state/national/international events (award for a team event should be counted as one) during the last five years<b>(5)</b></p><h4></label>
						<div class="d-flex justify-content-end">
						<input type="number"  name="participation1" id="participation11"  value="0" onkeyup="calculate_naac_grade_participation()"><br>
							</div>
							<div id="label59" class="label59"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/67.png"></p></div>
						<a onclick="changeup59()"><label for="participation1" style="font-size:20px;"><b>5.3.2 </b><h4><p style="color:#800000  ">Presence of Student Council and its activities for institutional development and student welfare.<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="participation1" id="participation12"  value="0" onkeyup="calculate_naac_grade_participation()"><br>
						   </div>
						   <div id="label60" class="label60"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/68.png"></p></div>
						   <a onclick="changeup60()"><label for="participation1" style="font-size:20px;"><b>5.3.3 </b><h4><p style="color:#800000  ">The institution conducts /organizes following activities <br>1. Sports competitions/events <br>2.Cultural competitions/events <br> 3. Technical fest/academic fests <br> 4. Any other events through active clubs and forums<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="participation1" id="participation13"  value="0" onkeyup="calculate_naac_grade_participation()"><br>
						   </div>
						   <div id="label61" class="label61"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/69.png"><img src="./img/70.png"></p></div>
						</form>

						<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="alumni1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 5.4 Alumni Engagement (10)</h3></label>
						<input type="number" name="alumni1" id="criteria_alumni" onkeyup="criteria5()"  value="0" disabled ><br><br>
					
						<a onclick="changeup61()"><label for="alumni1" style="font-size:20px;"><b>5.4.1</b> <h4><p style="color:#800000 ">Alumni contribution during the last five years (INR in lakhs)to the University through registered Alumni Association<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number"  name="alumni1" id="alumni11"  value="0" onkeyup="calculate_naac_grade_alumni()"><br>
							</div>
							<div id="label62" class="label62"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/71.png"></p></div>
						<a onclick="changeup62()"><label for="alumni1" style="font-size:20px;"><b>5.4.2 </b><h4><p style="color:#800000  ">Alumni contributes and engages significantly to the development of University through academic and other support system<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="alumni1" id="alumni12"  value="0" onkeyup="calculate_naac_grade_alumni()"><br>
						   </div>
						   <div id="label63" class="label63"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/72.png"></p></div>
						   </form>

						<div align="center" class="crit">
						<h3><p style="color:#e60000";>Calculated Criterion 5:</p></h3>
						<table><tr>
						<th><p style="color:#00802b";>5.1 Student Support: </th><th><input type="number" value="30" id="cri51" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4): </th><th><input type="number" value="0" placeholder="Add Credit" id="cri51_credit" onkeyup="calculateCir5()"></th>
						</tr><tr>
						<th><p style="color:#00802b";>5.2 Student Progression: </th><th> <input type="number" value="45" id="cri52" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4): </th><th><input type="number" value="0" placeholder="Add Credit" id="cri52_credit" onkeyup="calculateCir5()"></th>
						</tr><tr>
						<th><p style="color:#00802b";>5.3 Student Participation and Activities: </th><th><input type="number" value="15" id="cri53" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4): </th><th><input type="number" value="0" placeholder="Add Credit" id="cri53_credit" onkeyup="calculateCir5()"></th>
						</tr><tr>
						<th><p style="color:#00802b";>5.4 Alumni Engagement: </th><th> <input type="number" value="10" id="cri54" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4): </th><th><input type="number" value="0" placeholder="Add Credit" id="cri54_credit" onkeyup="calculateCir5()"></th>
						</tr></table><br><br>
						<p align="center"><label for="">Result</label>
						<input type="number" id="cri5_result" value="0" disabled></p>
					</div>
						</div>

<!--criterion 6-->
<a class="btn fw-bold"  style="font-size:25px"  onclick="change5()"><p><i class="bi bi-caret-right-fill">Criterion 6 – Governance, Leadership and Management (100)</i></p></a>
    					<input type="number" name="criteria06" id="criteria06"  value="0" disabled><br>
						<div  id="change5"class="w-75 ms-5 border " style="display:none">

						
						<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
                            <label for="leadership1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 6.1 Institutional Vision and Leadership (15)</h3></label>
							<input type="number" name="leadership1" id="criteria_leadership"onkeyup="criteria6()" disabled value="0" ><br><br>
                            <a onclick="changeup63()"><label for="leadership1" style="font-size:20px;"><b>6.1.1</b><h4><p style="color:#800000 ">The Institutional governance and leadership are in accordance with Vision and mission of the institution and it is visible in various institutional practices such as NEP implementation, sustained institutional growth, de-centralization, participation in the institutional governance and in their Short term/ Long term institutional perspective plan.<b>(15)</b></p></h4></label>
							<div class="d-flex justify-content-end">
						<input type="number" name="leadership1" id="leadership1"  value="0" onkeyup="calculate_naac_grade_leadership()"><br>
						</div> 
						<div id="label64" class="label64"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/73.png"></p></div>     
					</form>

					<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
									<label for="strategy1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 6.2 Strategy Development and Deployment (10)</h3></label>
									<input type="number" name="strategy1" id="criteria_strategy" onkeyup="criteria6()" disabled value="0" ><br><br>
									
									<a onclick="changeup64()"><label for="strategy1" style="font-size:20px;"><b>6.2.1</b> <h4><p style="color:#800000 ">The institutional perspective plan is effectively deployed and function of the Institutional bodies are effective and efficient as visible from policies, administrative set-up, appointment, service rules, procedures etc.<b>(5)</b></p></h4></label>
									<div class="d-flex justify-content-end">
										<input type="number"  name="strategy1" id="strategy11"  value="0" onkeyup="calculate_naac_grade_strategy()"><br>
									</div>
									<div id="label65" class="label65"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/74.png"></p></div>     
									<a onclick="changeup65()"><label for="strategy1" style="font-size:20px;"><b>6.2.2 </b><h4><p style="color:#800000  ">Institution Implements e-governance in its operations<b>(5)</b></p></h4></label>
									<div class="d-flex justify-content-end">
										<input type="number" name="strategy1" id="strategy12"  value="0" onkeyup="calculate_naac_grade_strategy()"><br>
									</div>
									<div id="label66" class="label66"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/75.png"></p></div>     
								</form>

						<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="empowerment1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 6.3 Faculty Empowerment Strategies (25)</h3></label>
						<input type="number" name="empowerment1" id="criteria_empowerment" onkeyup="criteria6()" disabled value="0" ><br><br>
					
						<a onclick="changeup66()"><label for="empowerment1" style="font-size:20px;"><b>6.3.1</b> <h4><p style="color:#800000 ">Number of awards/medals won by students for outstanding performance in sports/cultural activities at inter-university/state/national/international events (award for a team event should be counted as one) during the last five years<b>(4)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number"  name="empowerment1" id="empowerment11"  value="0" onkeyup="calculate_naac_grade_empowerment()"><br>
							</div>
							<div id="label67" class="label67"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/76.png"></p></div>     
							<a onclick="changeup67()"><label for="empowerment1" style="font-size:20px;"><b>6.3.2 </b><h4><p style="color:#800000  ">Presence of Student Council and its activities for institutional development and student welfare.<b>(15)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="empowerment1" id="empowerment12" disabled value="0" onkeyup="calculate_naac_grade_empowerment()"><br>
						   </div>
						   <div id="label68" class="label68"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/77.png"></p></div> 
						   <h5><p style="color: #0000cc"><i class="bi bi-dot">Total number of teachers provided with financial support to attend conferences, workshops and towards membership fee of professional bodies:		<input onkeyup="empowerment632()" id="text142"type="text"></i></p><br>   
							<p style="color: #0000cc"><i class="bi bi-dot">(2.1) Total number of full time teachers:		<input onkeyup="empowerment632()" id="text143"type="text"></i></p><br>  </h5>    
						   <a onclick="changeup68()"><label for="empowerment1" style="font-size:20px;"><b>6.3.3 </b><h4><p style="color:#800000  ">The institution conducts /organizes following activities <b>(6)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="empowerment1" id="empowerment13" disabled value="0" onkeyup="calculate_naac_grade_empowerment()"><br>
						   </div>
						   <div id="label69" class="label69"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/78.png"></p></div>  <br>
						   <h5><p style="color: #0000cc"><i class="bi bi-dot">Total number of teaching staff attending such Programmes:		<input onkeyup="empowerment633()" id="text144"type="text"></i></p><br>   
							<p style="color: #0000cc"><i class="bi bi-dot">(2.1)Total number of full time teachers:		<input onkeyup="empowerment633()" id="text145"type="text"></i></p><br> </h5>        
						</form>

						<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="ffinancial1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator – 6.4 Financial Management and Resource Mobilization (20)</h3></label>
						<input type="number" name="ffinancial1" id="criteria_ffinancial" onkeyup="criteria6()" disabled  value="0" ><br><br>
					
						<a onclick="changeup69()"><label for="ffinancial1" style="font-size:20px;"><b>6.4.1</b> <h4><p style="color:#800000 ">Number of awards/medals won by students for outstanding performance in sports/cultural activities at inter-university/state/national/international events (award for a team event should be counted as one) during the last five years<b>(4)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number"  name="ffinancial1" id="ffinancial11"  value="0" onkeyup="calculate_naac_grade_ffinancial()"><br>
							</div>
							<div id="label70" class="label70"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/79.png"></p></div>
							<a onclick="changeup70()"><label for="ffinancial1" style="font-size:20px;"><b>6.4.2 </b><h4><p style="color:#800000  ">Funds / Grants received from government bodies/non government and philanthropists during the last five years for development and maintenance of infrastructure (not covered under Criteria III and V ) (INR in Lakhs)<b>(12)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="ffinancial1" id="ffinancial12"  value="0" onkeyup="calculate_naac_grade_ffinancial()"><br>
						   </div>
						   <div id="label71" class="label71"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/80.png"></p></div>
						   <a onclick="changeup71()"><label for="ffinancial1" style="font-size:20px;"><b>6.4.3 </b><h4><p style="color:#800000  ">Institution regularly conducts internal and external financial audits<b>(4)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="ffinancial1" id="ffinancial13"  value="0" onkeyup="calculate_naac_grade_ffinancial()"><br>
						   </div>
						   <div id="label72" class="label72"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/81.png"></p></div>
						</form>

						<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="assurance1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 6.5 Internal Quality Assurance System (IQAS) (30)</h3></label>
						<input type="number" name="assurance1" id="criteria_assurance" onkeyup="criteria6()" disabled  value="0" ><br><br>
					
						<a onclick="changeup72()"><label for="assurance1" style="font-size:20px;"><b>6.5.1</b> <h4><p style="color:#800000 ">Internal Quality Assurance Cell (IQAC)/ Internal Quality Assurance System (IQAS) has contributed significantly for institutionalizing the quality assurance strategies and processes, by constantly reviewing the teaching- learning process, structures & methodologies of operations and learning outcomes, at periodic intervals<b>(10)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number"  name="assurance1" id="assurance11"  value="0" onkeyup="calculate_naac_grade_assurance()"><br>
							</div>
							<div id="label73" class="label73"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/82.png"></p></div>
							<a onclick="changeup73()"><label for="assurance1" style="font-size:20px;"><b>6.5.2 </b><h4><p style="color:#800000  ">Institution has adopted the following for Quality assurance: <br> 1. Academic and Administrative Audit (AAA) and follow up action taken <br> 2.Conferences, Seminars, Workshops on quality conducted <br>  3. Collaborative quality initiatives with other institution(s) <br> 4.Orientation programme on quality issues for teachers and students<br> 5. Participation in NIRF and other recognized ranking like Shanghai Ranking, QS Ranking Times Ranking etc <br> 6.Any other quality audit recognized by state, national or international agencies <b>(10)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="assurance1" id="assurance12"  value="0" onkeyup="calculate_naac_grade_assurance()"><br>
						   </div>
						   <div id="label74" class="label74"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/83.png"></p></div>
						   <a onclick="changeup74()"><label for="assurance1" style="font-size:20px;"><b>6.5.3 </b><h4><p style="color:#800000  ">ncremental improvements made for the preceding five years with regard to quality (in case of first cycle NAAC A/A)<b>(10)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="assurance1" id="assurance13"  value="0" onkeyup="calculate_naac_grade_assurance()"><br>
						   </div>
						   <div id="label75" class="label75"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/84.png"></p></div>
						   <div align="center" class="crit"><br>
						<h3><p style="color:#e60000";>Calculated Criterion 6:</p></h3><br>
						<table>
							<tr>
						<th><p style="color:#00802b";>6.1 Institutional Vision and Leadership:</th><th><input type="number" value="15" id="cri61" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri61_credit" onkeyup="calculateCir6()"></th>
</tr><tr>
						<th><p style="color:#00802b";>6.2 Strategy Development and Deployment: </th><th> <input type="number" value="10" id="cri62" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4): </th><th><input type="number" value="0" placeholder="Add Credit" id="cri62_credit" onkeyup="calculateCir6()"></th>
</tr><tr>
						<th><p style="color:#00802b";>6.3 Faculty Empowerment Strategies: </th><th><input type="number" value="25" id="cri63" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri63_credit" onkeyup="calculateCir6()"></th>
</tr><tr>
						<th><p style="color:#00802b";>6.4 Financial Management and Resource Mobilization:</th><th> <input type="number" value="20" id="cri64" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri64_credit" onkeyup="calculateCir6()"></th>
</tr><tr>
						<th><p style="color:#00802b";>6.5 Internal Quality Assurance System (IQAS): </th><th><input type="number" value="30" id="cri65" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4): </th><th><input type="number" value="0" placeholder="Add Credit" id="cri65_credit" onkeyup="calculateCir6()"></th>
</tr></table><br><br>
						<p align="center"><label for="">Result</label>
						<input type="number" id="cri6_result" value="0" disabled></p>
						<br>
					</div>
						</form>
</div>

<!--criterion 7-->
<a class="btn fw-bold"  style="font-size:25px"  onclick="change6()"><p><i class="bi bi-caret-right-fill">Criterion 7 - Institutional Values and Best Practices (100)</i></p></a>
    					<input type="number" name="criteria07" id="criteria07"  value="0" disabled><br>
						<div  id="change6"class="w-75 ms-5 border " style="display:none">

						
						<br>
					  <form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
						<label for="social1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 7.1 Institutional Values and Social Responsibilities (50)</h3></label>
						<input type="number" name="social1" id="criteria_social" onkeyup="criteria7()" disabled value="0" ><br><br>
						<a onclick="changeup75()"><label for="social1" style="font-size:20px;"><b>7.1.1</b><h4> <p style="color:#800000 ">Institution has initiated Gender audit and measure for the promotion of gender equity<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="social1" id="social11" value="0" onkeyup="calculate_naac_grade_social()"><br>
						</div>
						<div id="label76" class="label76"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/85.png"><img src="./img/95.png"></p></div>
						<a onclick="changeup76()"><label for="social1" style="font-size:20px;"><b>7.1.2</b><h4> <p style="color:#800000 ">The Institution has facilities for alternate sources of energy and energy conservation measures 1. Solar energy <br> 2. Biogas plant <br> 3. Wheeling to the Grid <br> 4. Sensor-based energy conservation <br> 5. Use of LED bulbs/ power efficient equipment 6. Wind will or any other clean green energy<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="social1" id="social12"  value="0" onkeyup="calculate_naac_grade_social()"><br> 
						</div> 
						<div id="label77" class="label77"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/86.png"></p></div>
						<a onclick="changeup77()"><label for="social1" style="font-size:20px;"><b>7.1.3</b> <h4><p style="color:#800000 ">Describe the facilities in the Institution for the management of the following types of degradable and non-degradable waste (within 500 words)<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="social1" id="social13"  value="0" onkeyup="calculate_naac_grade_social()"><br> 
						</div> 
						<div id="label78" class="label78"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/87.png"></p></div>
						<a onclick="changeup78()"><label for="social1" style="font-size:20px;"><b>7.1.4</b><h4> <p style="color:#800000 ">Water conservation facilities available in the Institution: <br> 1. Rainwater harvesting <br> 2. Borewell /Open well recharge <br> 3. Construction of tanks and bunds <br> 4. Wastewater recycling <br> 5. Maintenance of water bodies and distribution system in the campus<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="social1" id="social14"  value="0" onkeyup="calculate_naac_grade_social()"><br> 
						</div> 
						<div id="label79" class="label79"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/88.png"></p></div>
						<a onclick="changeup79()"><label for="social1" style="font-size:20px;"><b>7.1.5</b> <h4><p style="color:#800000 ">Green campus initiatives<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="social1" id="social15"  value="0" onkeyup="calculate_naac_grade_social()"><br> 
						</div> 
						<div id="label80" class="label80"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/89.png"></p></div>
						<a onclick="changeup80()"><label for="social1" style="font-size:20px;"><b>7.1.6</b><h4> <p style="color:#800000 ">Quality audits on environment and energy are regularly undertaken by the institution<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="social1" id="social16"  value="0" onkeyup="calculate_naac_grade_social()"><br> 
						</div>
						<div id="label81" class="label81"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/90.png"><img src="./img/96.png"></p></div> 
						<a onclick="changeup81()"><label for="social1" style="font-size:20px;"><b>7.1.7</b><h4> <p style="color:#800000 ">The Institution has friendly, barrier free environment<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="social1" id="social17"  value="0" onkeyup="calculate_naac_grade_social()"><br> 
						</div> 
						<div id="label82" class="label82"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/91.png"></p></div>
						<a onclick="changeup82()"><label for="social1" style="font-size:20px;"><b>7.1.8</b> <h4><p style="color:#800000 ">Describe the Institutional efforts/initiatives in providing an inclusive environment i.e., tolerance and harmony towards cultural, regional, linguistic, communal, socio-economic and such other diversities (within 500 words)<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="social1" id="social18"  value="0" onkeyup="calculate_naac_grade_social()"><br> 
						</div>
						<div id="label83" class="label83"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/92.png"></p></div> 
						<a onclick="changeup83()"><label for="social1" style="font-size:20px;"><b>7.1.9</b><h4> <p style="color:#800000 ">Sensitization of students and employees of the Institution to the constitutional obligations: values, rights, duties and responsibilities of citizens<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="social1" id="social19"  value="0" onkeyup="calculate_naac_grade_social()"><br> 
						</div> 
						<div id="label84" class="label84"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/93.png"></p></div>
						<a onclick="changeup84()"><label for="social1" style="font-size:20px;"><b>7.1.10</b><h4> <p style="color:#800000 ">The Institution has a prescribed code of conduct for students, teachers, administrators and other staff and conducts periodic programmes in this regard.<b>(5)</b></p></h4></label>
						<div class="d-flex justify-content-end">
						<input type="number" name="social1" id="social110"  value="0" onkeyup="calculate_naac_grade_social()"><br> 
						</div> 
						<div id="label85" class="label85"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/94.png"></p></div>
						</form>

						<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
                            <label for="best1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 7.2 Best Practices (30)</h3></label>
							<input type="number" name="best1" id="criteria_best"onkeyup="criteria7()" disabled value="0" ><br><br>
                            <a onclick="changeup85()"><label for="best1" style="font-size:20px;"><b>7.2.1</b><h4><p style="color:#800000 ">Describe two Best practices successfully implemented by the Institution as per the NAAC format provided in the Manual.<b>(30)</b></p></h4></label>
							<div class="d-flex justify-content-end">
						<input type="number" name="best1" id="best1"  value="0" onkeyup="calculate_naac_grade_best()"><br>
						</div>
						<div id="label86" class="label86"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/97.png"><img src="./img/98.png"><img src="./img/99.png"></p></div>      
					</form>

					<form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
                            <label for="distinctiveness1" style="font-size:10px;"><h3><i class="bi bi-forward-fill"></i>            Key Indicator - 7.3 Institutional Distinctiveness (20)</h3></label>
							<input type="number" name="distinctiveness1" id="criteria_distinctiveness"onkeyup="criteria7()" disabled value="0" ><br><br>
                            <a onclick="changeup86()"><label for="distinctiveness1" style="font-size:20px;"><b>7.3.1</b><h4><p style="color:#800000 ">Portray the performance of the Institution in one area distinctive to its priority and thrust within 1000 word<b>(30)</b></p></h4></label>
							<div class="d-flex justify-content-end">
						<input type="number" name="distinctiveness1" id="distinctiveness1"  value="0" onkeyup="calculate_naac_grade_distinctiveness()"><br>
						</div>   
						<div id="label87" class="label87"class="w-25" style="display:none"><p style="color:#ff0000; padding-left: 50px; "> <img src="./img/100.png"></p></div> 
						<div align="center" class="crit"><br>
						<h3><p style="color:#e60000";>Calculated Criterion 7:</p></h3><br>
						<table><tr>
						<th><p style="color:#00802b";>7.1 Institutional Values and Social Responsibilities: </th><th><input type="number" value="50" id="cri71" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri71_credit" onkeyup="calculateCir7()"></th>
</tr><tr>
						<th><p style="color:#00802b";>7.2 Best Practices: </th><th> <input type="number" value="30" id="cri72" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri72_credit" onkeyup="calculateCir7()"></th>
</tr><tr>
						<th><p style="color:#00802b";>7.3 Institutional Distinctiveness:</th><th> <input type="number" value="20" id="cri73" disabled></th>
						<th><p style="color:#00802b";>Key Aspect Grade Points (0 to 4):</th><th><input type="number" value="0" placeholder="Add Credit" id="cri73_credit" onkeyup="calculateCir7()"></th>
</tr></table><br><br>
						<p align="center"><label for="">Result</label>
						<input type="number" id="cri7_result" value="0" disabled></p>
						<br>
					</div>  
					</form>
</div>

<!--criterion total-->
<br>
<a class="btn fw-bold"  style="font-size:25px"  ><i class="bi bi-chevron-double-right" ; style="color:#cc0000">Total Criteria:</i></a>
    					<input type="number" name="criteria08" id="criteria08"  value="0" disabled><br>
						<div  id="changetotal"class="w-75 ms-5 border " style="display:none"></div>
<a class="btn fw-bold"  style="font-size:25px"  ><i class="bi bi-chevron-double-right"; style="color:#cc0000">Total Grade:</i></a>
<input type="number" name="totalGread" id="totalGread"  value="0" disabled><br>
<a class="btn fw-bold"  style="font-size:25px"  ><i class="bi bi-chevron-double-right"; style="color:#cc0000">Grade:</i></a>
<input type="text" name="Grade" id="Grade"  value="0" disabled><br>
</html>
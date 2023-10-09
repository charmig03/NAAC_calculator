	function change(){
		
 	 if (document.getElementById('change').style.display === "none") {
    	document.getElementById('change').style.display = "block";
	
 	 } else {
		document.getElementById('change').style.display =  "none";
 	 }
    }
    function calculate_naac_grade_design(){
		var criteria1 = parseInt(document.getElementById('criteria11').value);
        var criteria2 = parseInt(document.getElementById('criteria12').value);
		var total_marks = criteria1 + criteria2;
		document.getElementById('criteria_design').value= total_marks;
		criteria1_fun();
	}
	
    function calculate_naac_grade_academic(temp){
		// var criteria1 = parseInt(document.getElementById('academic1').value);
		document.getElementById('criteria_academic').value = temp;
	}
	function academic121(){
		var abc1 = parseInt(document.getElementById('text1').value);
		var abc2 = parseInt(document.getElementById('text2').value);
		var q = Math.ceil((abc1 / abc2) * 100);
		document.getElementById('academic10').value = q;
		if(q >= 30)
		{
			document.getElementById('academic1').value = 30;
		}
		else{
			document.getElementById('academic1').value = q;
		}
		// criteria1_fun();
		calculate_naac_grade_academic();
	}


    function calculate_naac_grade_curriculum(){
		var curriculum1 = parseInt(document.getElementById('curriculum11').value);
        var curriculum2 = parseInt(document.getElementById('curriculum12').value);
		var curriculum3 = parseInt(document.getElementById('curriculum13').value);
		var total_marks = curriculum1 + curriculum2 + curriculum3;
		document.getElementById('criteria_curriculum').value= total_marks;
		criteria1_fun();
	}


	function academic133(){
		var abc11 = parseInt(document.getElementById('text11').value);
		var abc12 = parseInt(document.getElementById('text22').value);
		var r = Math.ceil((abc11 / abc12) * 100);
		document.getElementById('curriculum130').value = r;
		if(r >= 5)
		{
			document.getElementById('curriculum13').value = 5;
		}
		else{
			document.getElementById('curriculum13').value = r;
		}
		// criteria1_fun();
		calculate_naac_grade_curriculum();
	}


    function calculate_naac_grade_feedback(){
		var feedback1 = parseInt(document.getElementById('feedback1').value);
		document.getElementById('criteria_feedback').value= feedback1;
		criteria1_fun();
	}
    
	function criteria1_fun(){
		var curricularAspects1 = parseInt(document.getElementById('criteria_design').value);
        var curricularAspects2 = parseInt(document.getElementById('criteria_academic').value);
		var curricularAspects3 = parseInt(document.getElementById('criteria_curriculum').value);
		var curricularAspects4 = parseInt(document.getElementById('criteria_feedback').value);
		var total_marks = curricularAspects1 + curricularAspects2 + curricularAspects3 + curricularAspects4;
		document.getElementById('criteria01').value= total_marks;
		 criteriatotal_fun();
	}

	function calculateCir1(){
		var cri11 = parseInt(document.getElementById('cri11').value);
		var cri12 = parseInt(document.getElementById('cri12').value);
		var cri13 = parseInt(document.getElementById('cri13').value);
		var cri14 = parseInt(document.getElementById('cri14').value);

		var cri11_credit = parseInt(document.getElementById('cri11_credit').value);
		var cri12_credit = parseInt(document.getElementById('cri12_credit').value);
		var cri13_credit = parseInt(document.getElementById('cri13_credit').value);
		var cri14_credit = parseInt(document.getElementById('cri14_credit').value);
		var cri1_result = ((cri11*cri11_credit)+(cri12*cri12_credit)+(cri13*cri13_credit)+(cri14*cri14_credit))
		
		if(cri1_result > 0 ){
			document.getElementById('cri1_result').value = cri1_result;
			totalGread();
		}
	}






	
	function change1(){
		
		if (document.getElementById('change1').style.display === "none") {
		  document.getElementById('change1').style.display = "block";
	  
		} else {
		  document.getElementById('change1').style.display =  "none";
		}
	}
    function calculate_naac_grade_enrolment(){
		var enrolment1 = parseInt(document.getElementById('enrolment11').value);
        var enrolment2 = parseInt(document.getElementById('enrolment12').value);
		var total_marks = enrolment1 + enrolment2;
		document.getElementById('criteria_enrolment').value= total_marks;
		criteria2_fun();
	}


	function academic211(){
		var xyz21 = parseInt(document.getElementById('text45').value);
		var xyz22 = parseInt(document.getElementById('text46').value);
		var f = Math.ceil((xyz21 / xyz22) * 100);
		document.getElementById('enrolment110').value = f;
		if(f >= 5)
		{
			document.getElementById('enrolment11').value = 5;
		}
		else{
			document.getElementById('enrolment11').value = f;
		}
		
		// criteria1_fun();
		calculate_naac_grade_enrolment();
	}
	// function academic2110(){
	// 	var xyz21 = parseInt(document.getElementById('text45').value);
	// 	var xyz22 = parseInt(document.getElementById('text46').value);
	// 	var f = Math.ceil((xyz21 / xyz22) * 100);
	// 	// criteria1_fun();
	// 	calculate_naac_grade_enrolment();
	// }
	function academic212(){
		var xyz23 = parseInt(document.getElementById('text47').value);
		var xyz24 = parseInt(document.getElementById('text48').value);
		var a = Math.ceil((xyz23 / xyz24) * 100);
		document.getElementById('enrolment120').value = a;
		if(a >= 5)
		{
			document.getElementById('enrolment12').value = 5;
		}
		else{
			document.getElementById('enrolment12').value = a;
		}
		// criteria1_fun();
		calculate_naac_grade_enrolment();
	}


    function calculate_naac_grade_diversity(){
		var diversity1 = parseInt(document.getElementById('diversity11').value);
        var diversity2 = parseInt(document.getElementById('diversity12').value);
		var total_marks = diversity1 + diversity2;
		document.getElementById('criteria_diversity').value= total_marks;
		criteria2_fun();
	}
    function calculate_naac_grade_teaching(){
		var teaching1 = parseInt(document.getElementById('teaching11').value);
        var teaching2 = parseInt(document.getElementById('teaching12').value);
		var total_marks = teaching1 + teaching2;
		document.getElementById('criteria_teaching').value= total_marks;
		criteria2_fun();
	}
    function calculate_naac_grade_profile(){
		var profile1 = parseInt(document.getElementById('profile11').value);
        var profile2 = parseInt(document.getElementById('profile12').value);
		var profile3 = parseInt(document.getElementById('profile13').value);
		var total_marks = profile1 + profile2 + profile3;
		document.getElementById('criteria_profile').value= total_marks;
		criteria2_fun();
	}

	function profile241(){
		var xyz31 = parseInt(document.getElementById('text51').value);
		var xyz32 = parseInt(document.getElementById('text52').value);
		var s = Math.ceil((xyz31 / xyz32) * 100);
		document.getElementById('profile110').value = s;
		if(s >= 10)
		{
			document.getElementById('profile11').value = 10;
		}
		else{
			document.getElementById('profile11').value = s;
		}
		// criteria1_fun();
		calculate_naac_grade_profile();
	}

	function profile242(){
		var xyz33 = parseInt(document.getElementById('text53').value);
		var xyz34 = parseInt(document.getElementById('text54').value);
		var w = Math.ceil((xyz33 / xyz34) * 100);
		document.getElementById('profile120').value = w;
		if(w >= 40)
		{
			document.getElementById('profile12').value = 40;
		}
		else{
			document.getElementById('profile12').value = w;
		}
		// criteria1_fun();
		calculate_naac_grade_profile();
	}
	function profile243(){
		var xyz35 = parseInt(document.getElementById('text55').value);
		var xyz36 = parseInt(document.getElementById('text56').value);
		var v = Math.ceil(xyz35 / xyz36);
		document.getElementById('profile130').value = v;
		if(v >= 10)
		{
			document.getElementById('profile13').value = 10;
		}
		else{
			document.getElementById('profile13').value = v;
		}
		// criteria1_fun();
		calculate_naac_grade_profile();
	}


    
	function calculate_naac_grade_process(){
		var process1 = parseInt(document.getElementById('process11').value);
        var process2 = parseInt(document.getElementById('process12').value);
		var process3 = parseInt(document.getElementById('process13').value);
		var total_marks = process1 + process2 + process3;
		document.getElementById('criteria_process').value= total_marks;
		criteria2_fun();
	}

	function calculateCir25110(){
		var a2511 = parseInt(document.getElementById('a2511').value);
		var a2512 = parseInt(document.getElementById('a2512').value);
		var a2513 = parseInt(document.getElementById('a2513').value);
		var a2514 = parseInt(document.getElementById('a2514').value);
		var a2515 = parseInt(document.getElementById('a2515').value);
		var total_marks = a2511 + a2512 + a2513 + a2514 + a2515;
		document.getElementById('text57').value= total_marks;

		 if(text57 > 0 ){
			document.getElementById('text57').value = total_marks;
			calculate_naac_grade_process();
		}
	}
	function process251(){
		var xyz37 = parseInt(document.getElementById('text57').value);
		var x = Math.ceil(xyz37 / 5);
		document.getElementById('process110').value = x;
		if(x >= 10)
		{	
			document.getElementById('process11').value = 10;
		}
		else{
			document.getElementById('process11').value = x;
		}
		// criteria1_fun();
		calculate_naac_grade_process();
	}

	function calculateCir25210(){
		var a2521 = parseInt(document.getElementById('a2521').value);
		var a2522 = parseInt(document.getElementById('a2522').value);
		var a2523 = parseInt(document.getElementById('a2523').value);
		var a2524 = parseInt(document.getElementById('a2524').value);
		var a2525 = parseInt(document.getElementById('a2525').value);
		var total_marks = a2521 + a2522 + a2523 + a2524 + a2525;
		document.getElementById('text58').value= total_marks;

		 if(text58 > 0 ){
			document.getElementById('text58').value = total_marks;
			calculate_naac_grade_process();
		}
	}
	function calculateCir252100(){
		var a25201 = parseInt(document.getElementById('a25201').value);
		var a25202 = parseInt(document.getElementById('a25202').value);
		var a25203 = parseInt(document.getElementById('a25203').value);
		var a25204 = parseInt(document.getElementById('a25204').value);
		var a25205 = parseInt(document.getElementById('a25205').value);
		var total_marks = a25201 + a25202 + a25203 + a25204 + a25205;
		document.getElementById('text59').value= total_marks;

		 if(text59 > 0 ){
			document.getElementById('text59').value = total_marks;
			calculate_naac_grade_process();
		}
	}
	function process252(){
		var xyz38 = parseInt(document.getElementById('text58').value);
		var xyz39 = parseInt(document.getElementById('text59').value);
		var aa = Math.ceil((xyz38 / xyz39) * 100);
		document.getElementById('process120').value = aa;
		if(aa >= 10)
		{
			document.getElementById('process12').value = 10;
		}
		else{
			document.getElementById('process12').value = aa;
		}
		// criteria1_fun();
		calculate_naac_grade_process();
	}

    function calculate_naac_grade_student(){
		var student1 = parseInt(document.getElementById('student11').value);
        var student2 = parseInt(document.getElementById('student12').value);
		var total_marks = student1 + student2;
		document.getElementById('criteria_student').value= total_marks;
		criteria2_fun();
	}

	function student262(){
		var xyz40 = parseInt(document.getElementById('text60').value);
		var xyz41 = parseInt(document.getElementById('text61').value);
		var bb = Math.ceil((xyz40 / xyz41) * 100);
		document.getElementById('student120').value = bb;
		if(bb >= 15)
		{
			document.getElementById('student12').value = 15;
		}
		else{
			document.getElementById('student12').value = bb;
		}
		// criteria1_fun();
		calculate_naac_grade_student();
	}

    function calculate_naac_grade_survey(){
		var survey1 = parseInt(document.getElementById('survey1').value);
		document.getElementById('criteria_survey').value= survey1;
		criteria2_fun();
	}

    function criteria2_fun(){
		var teachingLearningandEvaluation1 = parseInt(document.getElementById('criteria_enrolment').value);
        var teachingLearningandEvaluation2 = parseInt(document.getElementById('criteria_diversity').value);
		var teachingLearningandEvaluation3 = parseInt(document.getElementById('criteria_teaching').value);
		var teachingLearningandEvaluation4 = parseInt(document.getElementById('criteria_profile').value);
		var teachingLearningandEvaluation5 = parseInt(document.getElementById('criteria_process').value);
		var teachingLearningandEvaluation6 = parseInt(document.getElementById('criteria_student').value);
		var teachingLearningandEvaluation7 = parseInt(document.getElementById('criteria_survey').value);
		var total_marks = teachingLearningandEvaluation1 + teachingLearningandEvaluation2 + teachingLearningandEvaluation3 + teachingLearningandEvaluation4 + teachingLearningandEvaluation5 + teachingLearningandEvaluation6 + teachingLearningandEvaluation7;
		document.getElementById('criteria02').value= total_marks;
		 criteriatotal_fun();
	}


	function calculateCir2(){
		var cri21 = parseInt(document.getElementById('cri21').value);
		var cri22 = parseInt(document.getElementById('cri22').value);
		var cri23 = parseInt(document.getElementById('cri23').value);
		var cri24 = parseInt(document.getElementById('cri24').value);
		var cri25 = parseInt(document.getElementById('cri25').value);
		var cri26 = parseInt(document.getElementById('cri26').value);
		var cri27 = parseInt(document.getElementById('cri27').value);

		var cri21_credit = parseInt(document.getElementById('cri21_credit').value);
		var cri22_credit = parseInt(document.getElementById('cri22_credit').value);
		var cri23_credit = parseInt(document.getElementById('cri23_credit').value);
		var cri24_credit = parseInt(document.getElementById('cri24_credit').value);
		var cri25_credit = parseInt(document.getElementById('cri25_credit').value);
		var cri26_credit = parseInt(document.getElementById('cri26_credit').value);
		var cri27_credit = parseInt(document.getElementById('cri27_credit').value);
		var cri2_result = ((cri21*cri21_credit)+(cri22*cri22_credit)+(cri23*cri23_credit)+(cri24*cri24_credit)+(cri25*cri25_credit)+(cri26*cri26_credit)+(cri27*cri27_credit))
		
		if(cri2_result > 0 ){
			document.getElementById('cri2_result').value = cri2_result;
			totalGread();
		}
	}







		  function change2(){
		
		if (document.getElementById('change2').style.display === "none") {
		  document.getElementById('change2').style.display = "block";
	  
		} else {
		  document.getElementById('change2').style.display =  "none";
		}
	}
    function calculate_naac_grade_research(){
		var research1 = parseInt(document.getElementById('research11').value);
        var research2 = parseInt(document.getElementById('research12').value);
		var research3 = parseInt(document.getElementById('research13').value);
		var research4 = parseInt(document.getElementById('research14').value);
		var total_marks = research1 + research2 + research3 + research4;
		document.getElementById('criteria_research').value= total_marks;
		criteria3_fun();
	}

	function calculateCir31211(){
		var a3121 = parseInt(document.getElementById('a3121').value);
		var a3122 = parseInt(document.getElementById('a3122').value);
		var a3123 = parseInt(document.getElementById('a3123').value);
		var a3124 = parseInt(document.getElementById('a3124').value);
		var a3125 = parseInt(document.getElementById('a3125').value);
		var total_marks = a3121 + a3122 + a3123 + a3124 + a3125;
		document.getElementById('text71').value= total_marks;

		 if(text71 > 0 ){
			document.getElementById('text71').value = total_marks;
			calculate_naac_grade_awards();
		}
	}
	function research312(){
		var xyz42 = parseInt(document.getElementById('text71').value);
		var j = Math.ceil(xyz42 / 5);
		document.getElementById('research120').value = j;
		if(j >= 3)
		{
			document.getElementById('research12').value = 3;
		}
		else{
			document.getElementById('research12').value = j;
		}
		// criteria1_fun();
		calculate_naac_grade_research();
	}

	function calculateCir31311(){
		var a3131 = parseInt(document.getElementById('a3131').value);
		var a3132 = parseInt(document.getElementById('a3132').value);
		var a3133 = parseInt(document.getElementById('a3133').value);
		var a3134 = parseInt(document.getElementById('a3134').value);
		var a3135 = parseInt(document.getElementById('a3135').value);
		var total_marks = a3131 + a3132 + a3133 + a3134 + a3135;
		document.getElementById('text62').value= total_marks;

		 if(text62 > 0 ){
			document.getElementById('text62').value = total_marks;
			calculate_naac_grade_awards();
		}
	}
	function research313(){
		var xyz43 = parseInt(document.getElementById('text62').value);
		var xyz44 = parseInt(document.getElementById('text63').value);
		var  h = Math.ceil((xyz43 / xyz44) * 100);
		document.getElementById('research130').value = h;
		if(h >= 5)
		{
			document.getElementById('research13').value = 5;
		}
		else{
			document.getElementById('research13').value = h;
		}
		// criteria1_fun();
		calculate_naac_grade_research();
	}
	function research314(){
		var xyz45 = parseInt(document.getElementById('text64').value);
		var xyz46 = parseInt(document.getElementById('text65').value);
		var o = Math.ceil((xyz45 / xyz46) * 100);
		document.getElementById('research140').value = o;
		if(o >= 10)
		{
			document.getElementById('research14').value = 10;
		}
		else{
			document.getElementById('research14').value = h;
		}
		// criteria1_fun();
		calculate_naac_grade_research();
	}

	function calculate_naac_grade_mobilization(){
		var mobilization1 = parseInt(document.getElementById('mobilization11').value);
        var mobilization2 = parseInt(document.getElementById('mobilization12').value);
		var total_marks = mobilization1 + mobilization2;
		document.getElementById('criteria_mobilization').value= total_marks;
		criteria3_fun();
	}
	function mobilization322(){
		var xyz47 = parseInt(document.getElementById('text72').value);
		var xyz48 = parseInt(document.getElementById('text73').value);
		var p = Math.ceil(xyz47 / xyz48);
		document.getElementById('mobilization120').value = p;
		if(p >= 10)
		{
			document.getElementById('mobilization12').value = 10;
		}
		else{
			document.getElementById('mobilization12').value = p;
		}
		// criteria1_fun();
		calculate_naac_grade_mobilization();
	}

	function calculate_naac_grade_ecosystem(){
		var ecosystem1 = parseInt(document.getElementById('ecosystem11').value);
        var ecosystem2 = parseInt(document.getElementById('ecosystem12').value);
		var total_marks = ecosystem1 + ecosystem2;
		document.getElementById('criteria_ecosystem').value= total_marks;
		criteria3_fun();
	}

	function calculate_naac_grade_awards(){
		var awards1 = parseInt(document.getElementById('awards11').value);
        var awards2 = parseInt(document.getElementById('awards12').value);
		var awards3 = parseInt(document.getElementById('awards13').value);
		var awards4 = parseInt(document.getElementById('awards14').value);
        var awards5 = parseInt(document.getElementById('awards15').value);
		var awards6 = parseInt(document.getElementById('awards16').value);
		var awards7 = parseInt(document.getElementById('awards17').value);
        var awards8 = parseInt(document.getElementById('awards18').value);
		var total_marks = awards1 + awards2 + awards3 + awards4 + awards5 + awards6 + awards7 + awards8;
		document.getElementById('criteria_awards').value= total_marks;
		criteria3_fun();
	}


	function awards342(){
		var xyz111 = parseInt(document.getElementById('text740').value);
		var d = Math.ceil(xyz111 / 10);
		// criteria1_fun();
		document.getElementById('awards120').value = d;
		if(d >= 15)
		{
			document.getElementById('awards12').value = 15;
		}
		else{
			document.getElementById('awards12').value = d;
		}
		calculate_naac_grade_awards();
	}


	function awards343(){
		var xyz49 = parseInt(document.getElementById('text74').value);
		var xyz50 = parseInt(document.getElementById('text75').value);
		var c = Math.ceil(xyz49 / xyz50);
		// criteria1_fun();
		document.getElementById('awards130').value = c;
		if(c >= 15)
		{
			document.getElementById('awards13').value = 15;
		}
		else{
			document.getElementById('awards13').value = c;
		}
		calculate_naac_grade_awards();
	}


	function calculateCir34411(){
		var a3441 = parseInt(document.getElementById('a3441').value);
		var a3442 = parseInt(document.getElementById('a3442').value);
		var a3443 = parseInt(document.getElementById('a3443').value);
		var a3444 = parseInt(document.getElementById('a3444').value);
		var a3445 = parseInt(document.getElementById('a3445').value);
		var total_marks = a3441 + a3442 + a3443 + a3444 + a3445;
		document.getElementById('text1111').value= total_marks;

		 if(text1111 > 0 ){
			document.getElementById('text1111').value = total_marks;
			calculate_naac_grade_awards();
		}
	}

	function awards344(){
		var xyz4911 = parseInt(document.getElementById('text1111').value);
		var xyz5011 = parseInt(document.getElementById('text1112').value);
		var f = Math.ceil(xyz4911 / xyz5011); 
		// criteria1_fun();
		document.getElementById('awards140').value = f;
		if(f >= 20)
		{
			document.getElementById('awards14').value = 20;
		}
		else{
			document.getElementById('awards14').value = f;
		}
		calculate_naac_grade_awards();
	}

	function calculateCir34412(){
		var a3451 = parseInt(document.getElementById('a3451').value);
		var a3452 = parseInt(document.getElementById('a3452').value);
		var a3453 = parseInt(document.getElementById('a3453').value);
		var a3454 = parseInt(document.getElementById('a3454').value);
		var a3455 = parseInt(document.getElementById('a3455').value);
		var total_marks = a3451 + a3452 + a3453 + a3454 + a3455;
		document.getElementById('text76').value= total_marks;

		 if(text76 > 0 ){
			document.getElementById('text76').value = total_marks;
			calculate_naac_grade_awards();
		}
	}

	function awards345(){
		var xyz51 = parseInt(document.getElementById('text76').value);
		var xyz52 = parseInt(document.getElementById('text77').value);
		var g = Math.ceil(xyz51 / xyz52);
		document.getElementById('awards150').value = g;
		if(g >= 10)
		{
			document.getElementById('awards15').value = 10;
		}
		else{
			document.getElementById('awards15').value = g;
		}
		// criteria1_fun();
		calculate_naac_grade_awards();
	}
	function awards347(){
		var xyz53 = parseInt(document.getElementById('text78').value);
		var xyz54 = parseInt(document.getElementById('text79').value);
		var h = Math.ceil(xyz53 / xyz54);
		document.getElementById('awards170').value = h;
		if(h >= 20)
		{
			document.getElementById('awards17').value = 20;
		}
		else{
			document.getElementById('awards17').value = h;
		}
		// criteria1_fun();
		calculate_naac_grade_awards();
	}
	function awards348(){
		var xyz60 = parseInt(document.getElementById('text90').value);
		var xyz61 = parseInt(document.getElementById('text91').value);
		var i = Math.ceil((xyz60 + xyz61) / 2);
		document.getElementById('awards180').value = i;
		if(i >= 20)
		{
			document.getElementById('awards18').value = 20;
		}
		else{
			document.getElementById('awards18').value = i;
		}
		// criteria1_fun();
		calculate_naac_grade_awards();
	}

	function calculate_naac_grade_consultancy(){
		var consultancy1 = parseInt(document.getElementById('consultancy1').value);
		document.getElementById('criteria_consultancy').value= consultancy1;
		criteria3_fun();
	}

	function calculate_naac_grade_activities(){
		var activities1 = parseInt(document.getElementById('activities11').value);
        var activities2 = parseInt(document.getElementById('activities12').value);
		var total_marks = activities1 + activities2;
		document.getElementById('criteria_activities').value= total_marks;
		criteria3_fun();
	}

	function calculate_naac_grade_collaboration(){
		var collaboration1 = parseInt(document.getElementById('collaboration1').value);
		document.getElementById('criteria_collaboration').value= collaboration1;
		criteria3_fun();
	}
    function criteria3_fun(){
		var researchInnovationsandExtension1 = parseInt(document.getElementById('criteria_research').value);
        var researchInnovationsandExtension2 = parseInt(document.getElementById('criteria_mobilization').value);
		var researchInnovationsandExtension3 = parseInt(document.getElementById('criteria_ecosystem').value);
		var researchInnovationsandExtension4 = parseInt(document.getElementById('criteria_awards').value);
		var researchInnovationsandExtension5 = parseInt(document.getElementById('criteria_consultancy').value);
		var researchInnovationsandExtension6 = parseInt(document.getElementById('criteria_activities').value);
		var researchInnovationsandExtension7 = parseInt(document.getElementById('criteria_collaboration').value);
		var total_marks = researchInnovationsandExtension1 + researchInnovationsandExtension2 + researchInnovationsandExtension3 + researchInnovationsandExtension4 + researchInnovationsandExtension5 +researchInnovationsandExtension6 + researchInnovationsandExtension7;
		document.getElementById('criteria03').value= total_marks;
		 criteriatotal_fun();
	}


	function calculateCir3(){
		var cri31 = parseInt(document.getElementById('cri31').value);
		var cri32 = parseInt(document.getElementById('cri32').value);
		var cri33 = parseInt(document.getElementById('cri33').value);
		var cri34 = parseInt(document.getElementById('cri34').value);
		var cri35 = parseInt(document.getElementById('cri35').value);
		var cri36 = parseInt(document.getElementById('cri36').value);
		var cri37 = parseInt(document.getElementById('cri37').value);

		var cri31_credit = parseInt(document.getElementById('cri31_credit').value);
		var cri32_credit = parseInt(document.getElementById('cri32_credit').value);
		var cri33_credit = parseInt(document.getElementById('cri33_credit').value);
		var cri34_credit = parseInt(document.getElementById('cri34_credit').value);
		var cri35_credit = parseInt(document.getElementById('cri35_credit').value);
		var cri36_credit = parseInt(document.getElementById('cri36_credit').value);
		var cri37_credit = parseInt(document.getElementById('cri37_credit').value);
		var cri3_result = ((cri31*cri31_credit)+(cri32*cri32_credit)+(cri33*cri33_credit)+(cri34*cri34_credit)+(cri35*cri35_credit)+(cri36*cri36_credit)+(cri37*cri37_credit))
		
		if(cri3_result > 0 ){
			document.getElementById('cri3_result').value = cri3_result;
			totalGread();
		}
	}




		  function change3(){
		
		if (document.getElementById('change3').style.display === "none") {
		  document.getElementById('change3').style.display = "block";
	  
		} else {
		  document.getElementById('change3').style.display =  "none";
		}
		  }
	
	function calculate_naac_grade_physical(){
		var physical1 = parseInt(document.getElementById('physical11').value);
        var physical2 = parseInt(document.getElementById('physical12').value);
		var total_marks = physical1 + physical2;
		document.getElementById('criteria_physical').value= total_marks;
		criteria4_fun();
	}

	function calculateCir34122(){
		var a4121 = parseInt(document.getElementById('a4121').value);
		var a4122 = parseInt(document.getElementById('a4122').value);
		var a4123 = parseInt(document.getElementById('a4123').value);
		var a4124 = parseInt(document.getElementById('a4124').value);
		var a4125 = parseInt(document.getElementById('a4125').value);
		var total_marks = a4121 + a4122 + a4123 + a4124 + a4125;
		document.getElementById('text111').value= total_marks;

		 if(text111 > 0 ){
			document.getElementById('text111').value = total_marks;
			calculate_naac_grade_awards();
		}
	}
	function physical412(){
		var xyz62 = parseInt(document.getElementById('text111').value);
		var xyz63 = parseInt(document.getElementById('text112').value);
		var p = Math.ceil((xyz62 / xyz63) * 100);
		document.getElementById('physical120').value = p;
		if(p >= 10)
		{
			document.getElementById('physical12').value = 10;
		}
		else{
			document.getElementById('physical12').value = p;
		}
		// criteria1_fun();
		calculate_naac_grade_physical();
	}


	function calculate_naac_grade_library(){
		var library1 = parseInt(document.getElementById('library11').value);
        var library2 = parseInt(document.getElementById('library12').value);
		var total_marks = library1 + library2;
		document.getElementById('criteria_library').value= total_marks;
		criteria4_fun();
	}

	function calculateCir34222(){
		var a4221 = parseInt(document.getElementById('a4221').value);
		var a4222 = parseInt(document.getElementById('a4222').value);
		var a4223 = parseInt(document.getElementById('a4223').value);
		var a4224 = parseInt(document.getElementById('a4224').value);
		var a4225 = parseInt(document.getElementById('a4225').value);
		var total_marks = a4221 + a4222 + a4223 + a4224 + a4225;
		document.getElementById('text113').value= total_marks;

		 if(text113 > 0 ){
			document.getElementById('text113').value = total_marks;
			calculate_naac_grade_library();
		}
	}
	function library422(){
		var xyz64 = parseInt(document.getElementById('text113').value);
		var xyz65 = parseInt(document.getElementById('text114').value);
		var cc = Math.ceil((xyz64 / xyz65) * 100);
		document.getElementById('library120').value = cc;
		if(cc >= 5)
		{
			document.getElementById('library12').value = 5;
		}
		else{
			document.getElementById('library12').value = cc;
		}
		// criteria1_fun();
		calculate_naac_grade_library();
	}

	function calculate_naac_grade_it(){
		var it1 = parseInt(document.getElementById('it11').value);
        var it2 = parseInt(document.getElementById('it12').value);
		var it3 = parseInt(document.getElementById('it13').value);
		var total_marks = it1 + it2 + it3;
		document.getElementById('criteria_it').value= total_marks;
		criteria4_fun();
	}
	function it432(){
		var xyz66 = parseInt(document.getElementById('text115').value);
		var xyz67 = parseInt(document.getElementById('text116').value);
		var dd = Math.ceil(xyz66 / xyz67);
		document.getElementById('it120').value = dd;
		if(dd >= 10)
		{
			document.getElementById('it12').value = 10;
		}
		else{
			document.getElementById('it12').value = dd;
		}
		// criteria1_fun();
		calculate_naac_grade_it();
	}

	function calculate_naac_grade_campus(){
		var campus1 = parseInt(document.getElementById('campus11').value);
        var campus2 = parseInt(document.getElementById('campus12').value);
		var total_marks = campus1 + campus2;
		document.getElementById('criteria_campus').value= total_marks;
		criteria4_fun();
	}

	// function calculateCir4411(){
	// 	var a4411 = parseInt(document.getElementById('a4221').value);
	// 	var a4412 = parseInt(document.getElementById('a4222').value);
	// 	var a4413 = parseInt(document.getElementById('a4223').value);
	// 	var a4414 = parseInt(document.getElementById('a4224').value);
	// 	var a4415 = parseInt(document.getElementById('a4225').value);
	// 	var total_marks = a4221 + a4222 + a4223 + a4224 + a4225;
	// 	document.getElementById('text113').value= total_marks;

	// 	 if(text113 > 0 ){
	// 		document.getElementById('text113').value = total_marks;
	// 		calculate_naac_grade_library();
	// 	}
	// }
	function campus441(){
		var xyz68 = parseInt(document.getElementById('text117').value);
		var xyz69 = parseInt(document.getElementById('text118').value);
		document.getElementById('campus11').value = Math.ceil((xyz68 / xyz69) * 100);
		// criteria1_fun();
		calculate_naac_grade_campus();
	}

	function criteria4_fun(){
		var resources1 = parseInt(document.getElementById('criteria_physical').value);
        var resources2 = parseInt(document.getElementById('criteria_library').value);
		var resources3 = parseInt(document.getElementById('criteria_it').value);
		var resources4 = parseInt(document.getElementById('criteria_campus').value);
		var total_marks = resources1 + resources2 + resources3 + resources4;
		document.getElementById('criteria04').value= total_marks;
		 criteriatotal_fun();
	}

	function calculateCir4(){
		var cri41 = parseInt(document.getElementById('cri41').value);
		var cri42 = parseInt(document.getElementById('cri42').value);
		var cri43 = parseInt(document.getElementById('cri43').value);
		var cri44 = parseInt(document.getElementById('cri44').value);

		var cri41_credit = parseInt(document.getElementById('cri41_credit').value);
		var cri42_credit = parseInt(document.getElementById('cri42_credit').value);
		var cri43_credit = parseInt(document.getElementById('cri43_credit').value);
		var cri44_credit = parseInt(document.getElementById('cri44_credit').value);
		var cri4_result = ((cri41*cri41_credit)+(cri42*cri42_credit)+(cri43*cri43_credit)+(cri44*cri44_credit))
		
		if(cri4_result > 0 ){
			document.getElementById('cri4_result').value = cri4_result;
			totalGread();
		}
	}


	function change4(){
		
		if (document.getElementById('change4').style.display === "none") {
		  document.getElementById('change4').style.display = "block";
	  
		} else {
		  document.getElementById('change4').style.display =  "none";
		}
	}
	function calculate_naac_grade_support(){
		var support1 = parseInt(document.getElementById('support11').value);
        var support2 = parseInt(document.getElementById('support12').value);
		var support3 = parseInt(document.getElementById('support13').value);
		var support4 = parseInt(document.getElementById('support14').value);
		var total_marks = support1 + support2 + support3 + support4;
		document.getElementById('criteria_support').value= total_marks;
		criteria5_fun();
	}
	function support511(){
		var xyz70 = parseInt(document.getElementById('text119').value);
		var xyz71 = parseInt(document.getElementById('text120').value);
		document.getElementById('support11').value = Math.ceil((xyz70 / xyz71) * 100);
		// criteria1_fun();
		calculate_naac_grade_support();
	}

	function calculate_naac_grade_progression(){
		var progression1 = parseInt(document.getElementById('progression11').value);
        var progression2 = parseInt(document.getElementById('progression12').value);
		var progression3 = parseInt(document.getElementById('progression13').value);
		var total_marks = progression1 + progression2 + progression3;
		document.getElementById('criteria_progression').value= total_marks;
		criteria5_fun();
	}
	// function progression521(){
	// 	var xyz81 = parseInt(document.getElementById('text131').value);
	// 	var xyz82 = parseInt(document.getElementById('text132').value);
	// 	var xyz83 = parseInt(document.getElementById('text133').value);
	// 	document.getElementById('progression11').value = Math.ceil((xyz81 / (xyz82 - xyz83)) * 100);
	// 	// criteria1_fun();
	// 	calculate_naac_grade_progression();
	// }

	function progression523(){
		var xyz90 = parseInt(document.getElementById('text140').value);
		var xyz91 = parseInt(document.getElementById('text141').value);
		document.getElementById('progression13').value = Math.ceil((xyz90 / xyz91) * 100);
		// criteria1_fun();
		calculate_naac_grade_progression();
	}

	function calculate_naac_grade_participation(){
		var participation1 = parseInt(document.getElementById('participation11').value);
        var participation2 = parseInt(document.getElementById('participation12').value);
		var participation3 = parseInt(document.getElementById('participation13').value);
		var total_marks = participation1 + participation2 + participation3;
		document.getElementById('criteria_participation').value= total_marks;
		criteria5_fun();
	}
	function calculate_naac_grade_alumni(){
		var alumni1 = parseInt(document.getElementById('alumni11').value);
        var alumni2 = parseInt(document.getElementById('alumni12').value);
		var total_marks = alumni1 + alumni2;
		document.getElementById('criteria_alumni').value= total_marks;
		criteria5_fun();
	}
	function criteria5_fun(){
		var studentSupportandProgression1 = parseInt(document.getElementById('criteria_support').value);
        var studentSupportandProgression2 = parseInt(document.getElementById('criteria_progression').value);
		var studentSupportandProgression3 = parseInt(document.getElementById('criteria_participation').value);
		var studentSupportandProgression4 = parseInt(document.getElementById('criteria_alumni').value);
		var total_marks = studentSupportandProgression1 + studentSupportandProgression2 + studentSupportandProgression3 + studentSupportandProgression4;
		document.getElementById('criteria05').value= total_marks;
		 criteriatotal_fun();
	}

	function calculateCir5(){
		var cri51 = parseInt(document.getElementById('cri51').value);
		var cri52 = parseInt(document.getElementById('cri52').value);
		var cri53 = parseInt(document.getElementById('cri53').value);
		var cri54 = parseInt(document.getElementById('cri54').value);

		var cri51_credit = parseInt(document.getElementById('cri51_credit').value);
		var cri52_credit = parseInt(document.getElementById('cri52_credit').value);
		var cri53_credit = parseInt(document.getElementById('cri53_credit').value);
		var cri54_credit = parseInt(document.getElementById('cri54_credit').value);
		var cri5_result = ((cri51*cri51_credit)+(cri52*cri52_credit)+(cri53*cri53_credit)+(cri54*cri54_credit))
		
		if(cri5_result > 0 ){
			document.getElementById('cri5_result').value = cri5_result;
			totalGread();
		}
	}


	function change5(){
		
		if (document.getElementById('change5').style.display === "none") {
		  document.getElementById('change5').style.display = "block";
	  
		} else {
		  document.getElementById('change5').style.display =  "none";
		}
	}
	function calculate_naac_grade_leadership(){
		var leadership1 = parseInt(document.getElementById('leadership1').value);
		document.getElementById('criteria_leadership').value= leadership1;
		criteria6_fun();
	}
	function calculate_naac_grade_strategy(){
		var strategy1 = parseInt(document.getElementById('strategy11').value);
        var strategy2 = parseInt(document.getElementById('strategy12').value);
		var total_marks = strategy1 + strategy2;
		document.getElementById('criteria_strategy').value= total_marks;
		criteria6_fun();
	}
	function calculate_naac_grade_empowerment(){
		var empowerment1 = parseInt(document.getElementById('empowerment11').value);
        var empowerment2 = parseInt(document.getElementById('empowerment12').value);
		var empowerment3 = parseInt(document.getElementById('empowerment13').value);
		var total_marks = empowerment1 + empowerment2 + empowerment3;
		document.getElementById('criteria_empowerment').value= total_marks;
		criteria6_fun();
	}
	function empowerment632(){
		var xyz92 = parseInt(document.getElementById('text142').value);
		var xyz93 = parseInt(document.getElementById('text143').value);
		document.getElementById('empowerment12').value = Math.ceil((xyz92 / xyz93) * 100);
		// criteria1_fun();
		calculate_naac_grade_empowerment();
	}
	function empowerment633(){
		var xyz94 = parseInt(document.getElementById('text144').value);
		var xyz95 = parseInt(document.getElementById('text145').value);
		document.getElementById('empowerment13').value = Math.ceil((xyz94 / xyz95) * 100);
		// criteria1_fun();
		calculate_naac_grade_empowerment();
	}

	function calculate_naac_grade_ffinancial(){
		var ffinancial1 = parseInt(document.getElementById('ffinancial11').value);
        var ffinancial2 = parseInt(document.getElementById('ffinancial12').value);
		var ffinancial3 = parseInt(document.getElementById('ffinancial13').value);
		var total_marks = ffinancial1 + ffinancial2 + ffinancial3;
		document.getElementById('criteria_ffinancial').value= total_marks;
		criteria6_fun();
	}
	function calculate_naac_grade_assurance(){
		var assurance1 = parseInt(document.getElementById('assurance11').value);
        var assurance2 = parseInt(document.getElementById('assurance12').value);
		var assurance3 = parseInt(document.getElementById('assurance13').value);
		var total_marks = assurance1 + assurance2 + assurance3;
		document.getElementById('criteria_assurance').value= total_marks;
		criteria6_fun();
	}
	function criteria6_fun(){
		var governance1 = parseInt(document.getElementById('criteria_leadership').value);
        var governance2 = parseInt(document.getElementById('criteria_strategy').value);
		var governance3 = parseInt(document.getElementById('criteria_empowerment').value);
		var governance4 = parseInt(document.getElementById('criteria_ffinancial').value);
		var governance5 = parseInt(document.getElementById('criteria_assurance').value);
		var total_marks = governance1 + governance2 + governance3 + governance4 + governance5;
		document.getElementById('criteria06').value= total_marks;
		 criteriatotal_fun();
	}
	
	function calculateCir6(){
		var cri61 = parseInt(document.getElementById('cri61').value);
		var cri62 = parseInt(document.getElementById('cri62').value);
		var cri63 = parseInt(document.getElementById('cri63').value);
		var cri64 = parseInt(document.getElementById('cri64').value);
		var cri65 = parseInt(document.getElementById('cri65').value);

		var cri61_credit = parseInt(document.getElementById('cri61_credit').value);
		var cri62_credit = parseInt(document.getElementById('cri62_credit').value);
		var cri63_credit = parseInt(document.getElementById('cri63_credit').value);
		var cri64_credit = parseInt(document.getElementById('cri64_credit').value);
		var cri65_credit = parseInt(document.getElementById('cri65_credit').value);
		var cri6_result = ((cri61*cri61_credit)+(cri62*cri62_credit)+(cri63*cri63_credit)+(cri64*cri64_credit)+(cri65*cri65_credit))
		
		if(cri6_result > 0 ){
			document.getElementById('cri6_result').value = cri6_result;
			totalGread();
		}
	}

	function change6(){
		
		if (document.getElementById('change6').style.display === "none") {
		  document.getElementById('change6').style.display = "block";
	  
		} else {
		  document.getElementById('change6').style.display =  "none";
		}
	}
	function calculate_naac_grade_social(){
		var social1 = parseInt(document.getElementById('social11').value);
        var social2 = parseInt(document.getElementById('social12').value);
		var social3 = parseInt(document.getElementById('social13').value);
        var social4 = parseInt(document.getElementById('social14').value);
		var social5 = parseInt(document.getElementById('social15').value);
        var social6 = parseInt(document.getElementById('social16').value);
		var social7 = parseInt(document.getElementById('social17').value);
        var social8 = parseInt(document.getElementById('social18').value);
		var social9 = parseInt(document.getElementById('social19').value);
        var social10 = parseInt(document.getElementById('social110').value);
		var total_marks = social1 + social2 + social3 + social4 + social5 + social6 + social7 + social8 + social9 + social10;
		document.getElementById('criteria_social').value= total_marks;
		criteria7_fun();
	}
	function calculate_naac_grade_best(){
		var best1 = parseInt(document.getElementById('best1').value);
		document.getElementById('criteria_best').value= best1;
		criteria7_fun();
	}
	function calculate_naac_grade_distinctiveness(){
		var distinctiveness1 = parseInt(document.getElementById('distinctiveness1').value);
		document.getElementById('criteria_distinctiveness').value= distinctiveness1;
		criteria7_fun();
	}
	function criteria7_fun(){
		var institutionalValues1 = parseInt(document.getElementById('criteria_social').value);
        var institutionalValues2 = parseInt(document.getElementById('criteria_best').value);
		var institutionalValues3 = parseInt(document.getElementById('criteria_distinctiveness').value);
		var total_marks = institutionalValues1 + institutionalValues2 + institutionalValues3;
		document.getElementById('criteria07').value= total_marks;
		 criteriatotal_fun();
	}
	function calculateCir7(){
		var cri71 = parseInt(document.getElementById('cri71').value);
		var cri72 = parseInt(document.getElementById('cri72').value);
		var cri73 = parseInt(document.getElementById('cri73').value);

		var cri71_credit = parseInt(document.getElementById('cri71_credit').value);
		var cri72_credit = parseInt(document.getElementById('cri72_credit').value);
		var cri73_credit = parseInt(document.getElementById('cri73_credit').value);
		var cri7_result = ((cri71*cri71_credit)+(cri72*cri72_credit)+(cri73*cri73_credit))
		
		if(cri7_result > 0 ){
			document.getElementById('cri7_result').value = cri7_result;
			totalGread();
		}
	}


	function changetotal(){
		
		if (document.getElementById('changetotal').style.display === "none") {
		  document.getElementById('changetotal').style.display = "block";
	  
		} else {
		  document.getElementById('changetotal').style.display =  "none";
		}
	}
	function criteriatotal_fun(){
		var naac1 = parseInt(document.getElementById('criteria01').value);
        var naac2 = parseInt(document.getElementById('criteria02').value);
		var naac3 = parseInt(document.getElementById('criteria03').value);
		var naac4 = parseInt(document.getElementById('criteria04').value);
		var naac5 = parseInt(document.getElementById('criteria05').value);
		var naac6 = parseInt(document.getElementById('criteria06').value);
		var naac7 = parseInt(document.getElementById('criteria07').value);
		var total_marks = naac1 + naac2 + naac3 + naac4 + naac5 + naac6 + naac7;
		document.getElementById('criteria08').value= total_marks;
	}


	function changeup(){
		if (document.getElementById('label1').style.display === "none") {
		  document.getElementById('label1').style.display = "block";
	  
		} else {
		  document.getElementById('label1').style.display =  "none";
		}
	}
	
	function changeup1(){
		if (document.getElementById('label2').style.display === "none") {
		  document.getElementById('label2').style.display = "block";
	  
		} else {
		  document.getElementById('label2').style.display =  "none";
		}
	}

	function changeup2(){
		if (document.getElementById('label3').style.display === "none") {
		  document.getElementById('label3').style.display = "block";
	  
		} else {
		  document.getElementById('label3').style.display =  "none";
		}
	}
	function changeup3(){
		if (document.getElementById('label4').style.display === "none") {
		  document.getElementById('label4').style.display = "block";
	  
		} else {
		  document.getElementById('label4').style.display =  "none";
		}
	}
	function changeup4(){
		if (document.getElementById('label5').style.display === "none") {
		  document.getElementById('label5').style.display = "block";
	  
		} else {
		  document.getElementById('label5').style.display =  "none";
		}
	}
	function changeup5(){
		if (document.getElementById('label6').style.display === "none") {
		  document.getElementById('label6').style.display = "block";
	  
		} else {
		  document.getElementById('label6').style.display =  "none";
		}
	}
	function changeup6(){
		if (document.getElementById('label7').style.display === "none") {
		  document.getElementById('label7').style.display = "block";
	  
		} else {
		  document.getElementById('label7').style.display =  "none";
		}
	}
	function changeup7(){
		if (document.getElementById('label8').style.display === "none") {
		  document.getElementById('label8').style.display = "block";
	  
		} else {
		  document.getElementById('label8').style.display =  "none";
		}
	}
	function changeup8(){
		if (document.getElementById('label9').style.display === "none") {
		  document.getElementById('label9').style.display = "block";
	  
		} else {
		  document.getElementById('label9').style.display =  "none";
		}
	}
	function changeup9(){
		if (document.getElementById('label10').style.display === "none") {
		  document.getElementById('label10').style.display = "block";
	  
		} else {
		  document.getElementById('label10').style.display =  "none";
		}
	}
	function changeup10(){
		if (document.getElementById('label11').style.display === "none") {
		  document.getElementById('label11').style.display = "block";
	  
		} else {
		  document.getElementById('label11').style.display =  "none";
		}
	}
	function changeup11(){
		if (document.getElementById('label12').style.display === "none") {
		  document.getElementById('label12').style.display = "block";
	  
		} else {
		  document.getElementById('label12').style.display =  "none";
		}
	}
	function changeup12(){
		if (document.getElementById('label13').style.display === "none") {
		  document.getElementById('label13').style.display = "block";
	  
		} else {
		  document.getElementById('label13').style.display =  "none";
		}
	}
	function changeup13(){
		if (document.getElementById('label14').style.display === "none") {
		  document.getElementById('label14').style.display = "block";
	  
		} else {
		  document.getElementById('label14').style.display =  "none";
		}
	}
	function changeup14(){
		if (document.getElementById('label15').style.display === "none") {
		  document.getElementById('label15').style.display = "block";
	  
		} else {
		  document.getElementById('label15').style.display =  "none";
		}
	}
	function changeup15(){
		if (document.getElementById('label16').style.display === "none") {
		  document.getElementById('label16').style.display = "block";
	  
		} else {
		  document.getElementById('label16').style.display =  "none";
		}
	}
	function changeup16(){
		if (document.getElementById('label17').style.display === "none") {
		  document.getElementById('label17').style.display = "block";
	  
		} else {
		  document.getElementById('label17').style.display =  "none";
		}
	}
	function changeup17(){
		if (document.getElementById('label18').style.display === "none") {
		  document.getElementById('label18').style.display = "block";
	  
		} else {
		  document.getElementById('label18').style.display =  "none";
		}
	}
	function changeup18(){
		if (document.getElementById('label19').style.display === "none") {
		  document.getElementById('label19').style.display = "block";
	  
		} else {
		  document.getElementById('label19').style.display =  "none";
		}
	}
	function changeup19(){
		if (document.getElementById('label20').style.display === "none") {
		  document.getElementById('label20').style.display = "block";
	  
		} else {
		  document.getElementById('label20').style.display =  "none";
		}
	}
	function changeup20(){
		if (document.getElementById('label21').style.display === "none") {
		  document.getElementById('label21').style.display = "block";
	  
		} else {
		  document.getElementById('label21').style.display =  "none";
		}
	}
	function changeup21(){
		if (document.getElementById('label22').style.display === "none") {
		  document.getElementById('label22').style.display = "block";
	  
		} else {
		  document.getElementById('label22').style.display =  "none";
		}
	}
	function changeup22(){
		if (document.getElementById('label23').style.display === "none") {
		  document.getElementById('label23').style.display = "block";
	  
		} else {
		  document.getElementById('label23').style.display =  "none";
		}
	}
	function changeup23(){
		if (document.getElementById('label24').style.display === "none") {
		  document.getElementById('label24').style.display = "block";
	  
		} else {
		  document.getElementById('label24').style.display =  "none";
		}
	}
	function changeup24(){
		if (document.getElementById('label25').style.display === "none") {
		  document.getElementById('label25').style.display = "block";
	  
		} else {
		  document.getElementById('label25').style.display =  "none";
		}
	}
	function changeup25(){
		if (document.getElementById('label26').style.display === "none") {
		  document.getElementById('label26').style.display = "block";
	  
		} else {
		  document.getElementById('label26').style.display =  "none";
		}
	}
	function changeup26(){
		if (document.getElementById('label27').style.display === "none") {
		  document.getElementById('label27').style.display = "block";
	  
		} else {
		  document.getElementById('label27').style.display =  "none";
		}
	}
	function changeup27(){
		if (document.getElementById('label28').style.display === "none") {
		  document.getElementById('label28').style.display = "block";
	  
		} else {
		  document.getElementById('label28').style.display =  "none";
		}
	}
	function changeup28(){
		if (document.getElementById('label29').style.display === "none") {
		  document.getElementById('label29').style.display = "block";
	  
		} else {
		  document.getElementById('label29').style.display =  "none";
		}
	}
	function changeup29(){
		if (document.getElementById('label30').style.display === "none") {
		  document.getElementById('label30').style.display = "block";
	  
		} else {
		  document.getElementById('label30').style.display =  "none";
		}
	}
	function changeup30(){
		if (document.getElementById('label31').style.display === "none") {
		  document.getElementById('label31').style.display = "block";
	  
		} else {
		  document.getElementById('label31').style.display =  "none";
		}
	}
	function changeup31(){
		if (document.getElementById('label32').style.display === "none") {
		  document.getElementById('label32').style.display = "block";
	  
		} else {
		  document.getElementById('label32').style.display =  "none";
		}
	}
	function changeup32(){
		if (document.getElementById('label33').style.display === "none") {
		  document.getElementById('label33').style.display = "block";
	  
		} else {
		  document.getElementById('label33').style.display =  "none";
		}
	}
	function changeup33(){
		if (document.getElementById('label34').style.display === "none") {
		  document.getElementById('label34').style.display = "block";
	  
		} else {
		  document.getElementById('label34').style.display =  "none";
		}
	}
	function changeup34(){
		if (document.getElementById('label35').style.display === "none") {
		  document.getElementById('label35').style.display = "block";
	  
		} else {
		  document.getElementById('label35').style.display =  "none";
		}
	}
	function changeup35(){
		if (document.getElementById('label36').style.display === "none") {
		  document.getElementById('label36').style.display = "block";
	  
		} else {
		  document.getElementById('label36').style.display =  "none";
		}
	}
	function changeup36(){
		if (document.getElementById('label37').style.display === "none") {
		  document.getElementById('label37').style.display = "block";
	  
		} else {
		  document.getElementById('label37').style.display =  "none";
		}
	}
	function changeup37(){
		if (document.getElementById('label38').style.display === "none") {
		  document.getElementById('label38').style.display = "block";
	  
	} else {
		  document.getElementById('label38').style.display =  "none";
		}
	}
	function changeup38(){
		if (document.getElementById('label39').style.display === "none") {
		  document.getElementById('label39').style.display = "block";
	  
		} else {
		  document.getElementById('label39').style.display =  "none";
		}
	}
	function changeup39(){
		if (document.getElementById('label40').style.display === "none") {
		  document.getElementById('label40').style.display = "block";
	  
		} else {
		  document.getElementById('label40').style.display =  "none";
		}
	}
	function changeup40(){
		if (document.getElementById('label41').style.display === "none") {
		  document.getElementById('label41').style.display = "block";
	  
		} else {
		  document.getElementById('label41').style.display =  "none";
		}
	}
	function changeup41(){
		if (document.getElementById('label42').style.display === "none") {
		  document.getElementById('label42').style.display = "block";
	  
		} else {
		  document.getElementById('label42').style.display =  "none";
		}
	}
	function changeup42(){
		if (document.getElementById('label43').style.display === "none") {
		  document.getElementById('label43').style.display = "block";
	  
		} else {
		  document.getElementById('label43').style.display =  "none";
		}
	}
	function changeup43(){
		if (document.getElementById('label44').style.display === "none") {
		  document.getElementById('label44').style.display = "block";
	  
		} else {
		  document.getElementById('label44').style.display =  "none";
		}
	}
	function changeup44(){
		if (document.getElementById('label45').style.display === "none") {
		  document.getElementById('label45').style.display = "block";
	  
		} else {
		  document.getElementById('label45').style.display =  "none";
		}
	}
	function changeup45(){
		if (document.getElementById('label46').style.display === "none") {
		  document.getElementById('label46').style.display = "block";
	  
		} else {
		  document.getElementById('label46').style.display =  "none";
		}
	}
	function changeup46(){
		if (document.getElementById('label47').style.display === "none") {
		  document.getElementById('label47').style.display = "block";
	  
		} else {
		  document.getElementById('label47').style.display =  "none";
		}
	}
	function changeup47(){
		if (document.getElementById('label48').style.display === "none") {
		  document.getElementById('label48').style.display = "block";
	  
		} else {
		  document.getElementById('label48').style.display =  "none";
		}
	}
	function changeup48(){
		if (document.getElementById('label49').style.display === "none") {
		  document.getElementById('label49').style.display = "block";
	  
		} else {
		  document.getElementById('label49').style.display =  "none";
		}
	}
	function changeup49(){
		if (document.getElementById('label50').style.display === "none") {
		  document.getElementById('label50').style.display = "block";
	  
		} else {
		  document.getElementById('label50').style.display =  "none";
		}
	}
	function changeup50(){
		if (document.getElementById('label51').style.display === "none") {
		  document.getElementById('label51').style.display = "block";
	  
		} else {
		  document.getElementById('label51').style.display =  "none";
		}
	}
	function changeup51(){
		if (document.getElementById('label52').style.display === "none") {
		  document.getElementById('label52').style.display = "block";
	  
		} else {
		  document.getElementById('label52').style.display =  "none";
		}
	}
	function changeup52(){
		if (document.getElementById('label53').style.display === "none") {
		  document.getElementById('label53').style.display = "block";
	  
		} else {
		  document.getElementById('label53').style.display =  "none";
		}
	}
	function changeup53(){
		if (document.getElementById('label54').style.display === "none") {
		  document.getElementById('label54').style.display = "block";
	  
		} else {
		  document.getElementById('label54').style.display =  "none";
		}
	}
	function changeup54(){
		if (document.getElementById('label55').style.display === "none") {
		  document.getElementById('label55').style.display = "block";
	  
		} else {
		  document.getElementById('label55').style.display =  "none";
		}
	}
	function changeup55(){
		if (document.getElementById('label56').style.display === "none") {
		  document.getElementById('label56').style.display = "block";
	  
		} else {
		  document.getElementById('label56').style.display =  "none";
		}
	}
	function changeup56(){
		if (document.getElementById('label57').style.display === "none") {
		  document.getElementById('label57').style.display = "block";
	  
		} else {
		  document.getElementById('label57').style.display =  "none";
		}
	}
	function changeup57(){
		if (document.getElementById('label58').style.display === "none") {
		  document.getElementById('label58').style.display = "block";
	  
		} else {
		  document.getElementById('label58').style.display =  "none";
		}
	}
	function changeup58(){
		if (document.getElementById('label59').style.display === "none") {
		  document.getElementById('label59').style.display = "block";
	  
		} else {
		  document.getElementById('label59').style.display =  "none";
		}
	}
	function changeup59(){
		if (document.getElementById('label60').style.display === "none") {
		  document.getElementById('label60').style.display = "block";
	  
		} else {
		  document.getElementById('label60').style.display =  "none";
		}
	}
	function changeup60(){
		if (document.getElementById('label61').style.display === "none") {
		  document.getElementById('label61').style.display = "block";
	  
		} else {
		  document.getElementById('label61').style.display =  "none";
		}
	}
	function changeup61(){
		if (document.getElementById('label62').style.display === "none") {
		  document.getElementById('label62').style.display = "block";
	  
		} else {
		  document.getElementById('label62').style.display =  "none";
		}
	}
	function changeup62(){
		if (document.getElementById('label63').style.display === "none") {
		  document.getElementById('label63').style.display = "block";
	  
		} else {
		  document.getElementById('label63').style.display =  "none";
		}
	}
	function changeup63(){
		if (document.getElementById('label64').style.display === "none") {
		  document.getElementById('label64').style.display = "block";
	  
		} else {
		  document.getElementById('label64').style.display =  "none";
		}
	}
	function changeup64(){
		if (document.getElementById('label65').style.display === "none") {
		  document.getElementById('label65').style.display = "block";
	  
		} else {
		  document.getElementById('label65').style.display =  "none";
		}
	}
	function changeup65(){
		if (document.getElementById('label66').style.display === "none") {
		  document.getElementById('label66').style.display = "block";
	  
		} else {
		  document.getElementById('label66').style.display =  "none";
		}
	}
	function changeup66(){
		if (document.getElementById('label67').style.display === "none") {
		  document.getElementById('label67').style.display = "block";
	  
		} else {
		  document.getElementById('label67').style.display =  "none";
		}
	}
	function changeup67(){
		if (document.getElementById('label68').style.display === "none") {
		  document.getElementById('label68').style.display = "block";
	  
		} else {
		  document.getElementById('label68').style.display =  "none";
		}
	}
	function changeup68(){
		if (document.getElementById('label69').style.display === "none") {
		  document.getElementById('label69').style.display = "block";
	  
		} else {
		  document.getElementById('label69').style.display =  "none";
		}
	}
	function changeup69(){
		if (document.getElementById('label70').style.display === "none") {
		  document.getElementById('label70').style.display = "block";
	  
		} else {
		  document.getElementById('label70').style.display =  "none";
		}
	}
	function changeup70(){
		if (document.getElementById('label71').style.display === "none") {
		  document.getElementById('label71').style.display = "block";
	  
		} else {
		  document.getElementById('label71').style.display =  "none";
		}
	}
	function changeup71(){
		if (document.getElementById('label72').style.display === "none") {
		  document.getElementById('label72').style.display = "block";
	  
		} else {
		  document.getElementById('label72').style.display =  "none";
		}
	}
	function changeup72(){
		if (document.getElementById('label73').style.display === "none") {
		  document.getElementById('label73').style.display = "block";
	  
		} else {
		  document.getElementById('label73').style.display =  "none";
		}
	}
	function changeup73(){
		if (document.getElementById('label74').style.display === "none") {
		  document.getElementById('label74').style.display = "block";
	  
		} else {
		  document.getElementById('label74').style.display =  "none";
		}
	}
	function changeup74(){
		if (document.getElementById('label75').style.display === "none") {
		  document.getElementById('label75').style.display = "block";
	  
		} else {
		  document.getElementById('label75').style.display =  "none";
		}
	}
	function changeup75(){
		if (document.getElementById('label76').style.display === "none") {
		  document.getElementById('label76').style.display = "block";
	  
		} else {
		  document.getElementById('label76').style.display =  "none";
		}
	}
	function changeup76(){
		if (document.getElementById('label77').style.display === "none") {
		  document.getElementById('label77').style.display = "block";
	  
		} else {
		  document.getElementById('label77').style.display =  "none";
		}
	}
	function changeup77(){
		if (document.getElementById('label78').style.display === "none") {
		  document.getElementById('label78').style.display = "block";
	  
		} else {
		  document.getElementById('label78').style.display =  "none";
		}
	}
	function changeup78(){
		if (document.getElementById('label79').style.display === "none") {
		  document.getElementById('label79').style.display = "block";
	  
		} else {
		  document.getElementById('label79').style.display =  "none";
		}
	}
	function changeup79(){
		if (document.getElementById('label80').style.display === "none") {
		  document.getElementById('label80').style.display = "block";
	  
		} else {
		  document.getElementById('label80').style.display =  "none";
		}
	}
	function changeup80(){
		if (document.getElementById('label81').style.display === "none") {
		  document.getElementById('label81').style.display = "block";
	  
		} else {
		  document.getElementById('label81').style.display =  "none";
		}
	}
	function changeup81(){
		if (document.getElementById('label82').style.display === "none") {
		  document.getElementById('label82').style.display = "block";
	  
		} else {
		  document.getElementById('label82').style.display =  "none";
		}
	}
	function changeup82(){
		if (document.getElementById('label83').style.display === "none") {
		  document.getElementById('label83').style.display = "block";
	  
		} else {
		  document.getElementById('label83').style.display =  "none";
		}
	}
	function changeup83(){
		if (document.getElementById('label84').style.display === "none") {
		  document.getElementById('label84').style.display = "block";
	  
		} else {
		  document.getElementById('label84').style.display =  "none";
		}
	}
	function changeup84(){
		if (document.getElementById('label85').style.display === "none") {
		  document.getElementById('label85').style.display = "block";
	  
		} else {
		  document.getElementById('label85').style.display =  "none";
		}
	}
	function changeup85(){
		if (document.getElementById('label86').style.display === "none") {
		  document.getElementById('label86').style.display = "block";
	  
		} else {
		  document.getElementById('label86').style.display =  "none";
		}
	}
	function changeup86(){
		if (document.getElementById('label87').style.display === "none") {
		  document.getElementById('label87').style.display = "block";
	  
		} else {
		  document.getElementById('label87').style.display =  "none";
		}
	}
	
	function totalGread(){
		var cri1_result = parseInt(document.getElementById('cri1_result').value);
		var cri2_result = parseInt(document.getElementById('cri2_result').value);
		var cri3_result = parseInt(document.getElementById('cri3_result').value);
		var cri4_result = parseInt(document.getElementById('cri4_result').value);
		var cri5_result = parseInt(document.getElementById('cri5_result').value);
		var cri6_result = parseInt(document.getElementById('cri6_result').value);
		var cri7_result = parseInt(document.getElementById('cri7_result').value);
		var totalgrad  = (cri1_result+cri2_result+cri3_result+cri4_result+cri5_result+cri6_result+cri7_result) / 1000;
		
		if(totalgrad > 0){
			document.getElementById('totalGread').value = totalgrad;
			getGrade(totalgrad);
		}
	}


	function getGrade(value){
		if(value >= 3.51 && value <= 4.00){
		  document.getElementById('Grade').value = 'A++ - Accredited';
		}
		else if (value >= 3.26 && value < 3.50) {
		  document.getElementById('Grade').value = 'A+ - Accredited';
		}
		else if (value >= 3.01 && value < 3.25) {
		  document.getElementById('Grade').value = 'A- Accredited';
		}
		else if (value >= 2.76 && value < 3.00) {
		  document.getElementById('Grade').value = 'B++ - Accredited';
		}
		else if (value >= 2.51 && value < 2.75) {
		  document.getElementById('Grade').value = 'B+ - Accredited';
		}
		else if (value >= 2.01 && value < 2.50) {
			document.getElementById('Grade').value = 'B - Accredited';
		  }
		else if (value >= 1.51 && value < 2.00) {
			document.getElementById('Grade').value = 'C - Accredited';
	   	}
		else if (value <= 1.50) {
		  document.getElementById('Grade').value = 'D -  Not Accredited';
		}
	  }
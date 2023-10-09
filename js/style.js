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
	}

	function calculate_naac_grade_academic(){
		var criteria1 = parseInt(document.getElementById('academic1').value);
		document.getElementById('criteria_academic').value= criteria1;
	}

	function calculate_naac_grade_curriculum(){
		var curriculum1 = parseInt(document.getElementById('curriculum11').value);
        var curriculum2 = parseInt(document.getElementById('curriculum12').value);
		var curriculum3 = parseInt(document.getElementById('curriculum13').value);
		var total_marks = curriculum1 + curriculum2 + curriculum3;
		document.getElementById('criteria_curriculum').value= total_marks;
	}

	function calculate_naac_grade_feedback(){
		var feedback1 = parseInt(document.getElementById('feedback1').value);
		document.getElementById('criteria_feedback').value= feedback1;
	}


	function criteria1(){
		var curricularAspects1 = parseInt(document.getElementById('criteria_design').value);
        var curricularAspects2 = parseInt(document.getElementById('criteria_academic').value);
		var curricularAspects3 = parseInt(document.getElementById('criteria_curriculum').value);
		var curricularAspects4 = parseInt(document.getElementById('criteria_feedback').value);
		var total_marks = curricularAspects1 + curricularAspects2 + curricularAspects3 + curricularAspects4;
		document.getElementById('criteria01').value= total_marks;
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
	}

	function calculate_naac_grade_diversity(){
		var diversity1 = parseInt(document.getElementById('diversity11').value);
        var diversity2 = parseInt(document.getElementById('diversity12').value);
		var total_marks = diversity1 + diversity2;
		document.getElementById('criteria_diversity').value= total_marks;
	}

	function calculate_naac_grade_teaching(){
		var teaching1 = parseInt(document.getElementById('teaching11').value);
        var teaching2 = parseInt(document.getElementById('teaching12').value);
		var total_marks = teaching1 + teaching2;
		document.getElementById('criteria_teaching').value= total_marks;
	}
	
	function calculate_naac_grade_profile(){
		var profile1 = parseInt(document.getElementById('profile11').value);
        var profile2 = parseInt(document.getElementById('profile12').value);
		var profile3 = parseInt(document.getElementById('profile13').value);
		var total_marks = profile1 + profile2 + profile3;
		document.getElementById('criteria_profile').value= total_marks;
	}

	function calculate_naac_grade_process(){
		var process1 = parseInt(document.getElementById('process11').value);
        var process2 = parseInt(document.getElementById('process12').value);
		var process3 = parseInt(document.getElementById('process13').value);
		var total_marks = process1 + process2 + process3;
		document.getElementById('criteria_process').value= total_marks;
	}

	function calculate_naac_grade_student(){
		var student1 = parseInt(document.getElementById('student11').value);
        var student2 = parseInt(document.getElementById('student12').value);
		var total_marks = student1 + student2;
		document.getElementById('criteria_student').value= total_marks;
	}

	function calculate_naac_grade_survey(){
		var survey1 = parseInt(document.getElementById('survey1').value);
		document.getElementById('criteria_survey').value= survey1;
	}

	function criteria2(){
		var teachingLearningandEvaluation1 = parseInt(document.getElementById('criteria_enrolment').value);
        var teachingLearningandEvaluation2 = parseInt(document.getElementById('criteria_diversity').value);
		var teachingLearningandEvaluation3 = parseInt(document.getElementById('criteria_teaching').value);
		var teachingLearningandEvaluation4 = parseInt(document.getElementById('criteria_profile').value);
		var teachingLearningandEvaluation5 = parseInt(document.getElementById('criteria_process').value);
		var teachingLearningandEvaluation6 = parseInt(document.getElementById('criteria_student').value);
		var teachingLearningandEvaluation7 = parseInt(document.getElementById('criteria_survey').value);
		var total_marks = teachingLearningandEvaluation1 + teachingLearningandEvaluation2 + teachingLearningandEvaluation3 + teachingLearningandEvaluation4 + teachingLearningandEvaluation5 + teachingLearningandEvaluation6 + teachingLearningandEvaluation7;
		document.getElementById('criteria02').value= total_marks;
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
	}

	function calculate_naac_grade_mobilization(){
		var mobilization1 = parseInt(document.getElementById('mobilization11').value);
        var mobilization2 = parseInt(document.getElementById('mobilization12').value);
		var total_marks = mobilization1 + mobilization2;
		document.getElementById('criteria_mobilization').value= total_marks;
	}

	function calculate_naac_grade_ecosystem(){
		var ecosystem1 = parseInt(document.getElementById('ecosystem11').value);
        var ecosystem2 = parseInt(document.getElementById('ecosystem12').value);
		var total_marks = ecosystem1 + ecosystem2;
		document.getElementById('criteria_ecosystem').value= total_marks;
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
	}
	function calculate_naac_grade_consultancy(){
		var consultancy1 = parseInt(document.getElementById('consultancy1').value);
		document.getElementById('criteria_consultancy').value= consultancy1;
	}

	function calculate_naac_grade_activities(){
		var activities1 = parseInt(document.getElementById('activities11').value);
        var activities2 = parseInt(document.getElementById('activities12').value);
		var total_marks = activities1 + activities2;
		document.getElementById('criteria_activities').value= total_marks;
	}

	function calculate_naac_grade_collaboration(){
		var collaboration1 = parseInt(document.getElementById('collaboration1').value);
		document.getElementById('criteria_collaboration').value= collaboration1;
	}

	function criteria3(){
		var researchInnovationsandExtension1 = parseInt(document.getElementById('criteria_research').value);
        var researchInnovationsandExtension2 = parseInt(document.getElementById('criteria_mobilization').value);
		var researchInnovationsandExtension3 = parseInt(document.getElementById('criteria_ecosystem').value);
		var researchInnovationsandExtension4 = parseInt(document.getElementById('criteria_awards').value);
		var researchInnovationsandExtension5 = parseInt(document.getElementById('criteria_consultancy').value);
		var researchInnovationsandExtension6 = parseInt(document.getElementById('criteria_activities').value);
		var researchInnovationsandExtension7 = parseInt(document.getElementById('criteria_collaboration').value);
		var total_marks = researchInnovationsandExtension1 + researchInnovationsandExtension2 + researchInnovationsandExtension3 + researchInnovationsandExtension4 + researchInnovationsandExtension5 +researchInnovationsandExtension6 + teachingLearningandEvaluation7;
		document.getElementById('criteria03').value= total_marks;
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
		}
		function calculate_naac_grade_library(){
			var library1 = parseInt(document.getElementById('library11').value);
			var library2 = parseInt(document.getElementById('library12').value);
			var total_marks = library1 + library2;
			document.getElementById('criteria_library').value= total_marks;
		}
		function calculate_naac_grade_it(){
			var it1 = parseInt(document.getElementById('it11').value);
			var it2 = parseInt(document.getElementById('it12').value);
			var it2 = parseInt(document.getElementById('it12').value);
			var total_marks = it1 + it2 + it3;
			document.getElementById('criteria_it').value= total_marks;
		}
		function calculate_naac_grade_campus(){
			var campus1 = parseInt(document.getElementById('campus11').value);
			var campus2 = parseInt(document.getElementById('campus12').value);
			var total_marks = campus1 + campus2;
			document.getElementById('criteria_campus').value= total_marks;
		}

function criteria4(){
		var infrastructureandLearningResources1 = parseInt(document.getElementById('criteria_physical').value);
        var infrastructureandLearningResources2 = parseInt(document.getElementById('criteria_library').value);
		var infrastructureandLearningResources3 = parseInt(document.getElementById('criteria_it').value);
		var infrastructureandLearningResources4 = parseInt(document.getElementById('criteria_campus').value);
		var total_marks = infrastructureandLearningResources1 + infrastructureandLearningResources2 + infrastructureandLearningResources3 + infrastructureandLearningResources4;
		document.getElementById('criteria04').value= total_marks;
	}


	function change4(){
		
		if (document.getElementById('change4').style.display === "none") {
		  document.getElementById('change4').style.display = "block";
	  
		} else {
		  document.getElementById('change4').style.display =  "none";
		}
		  } 
		  

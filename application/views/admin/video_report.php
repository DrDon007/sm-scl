<?php
     
     $count=0; 

     $score = array();		
	 $StartTime = array();
	 $EndTime = array();
	 $TimeSpent = array();
	 $User = array();
	 $user_id = array();


	 for($i=0;$i<$count;$i++)
	 {
		 // $question_id[$i]=$rv['question_id'];
		 $score[$i]=$res[$i]['score'];
		 $StartTime[$i]=$res[$i]['StartTime'];
		 $EndTime[$i]=$res[$i]['EndTime'];
		 $TimeSpent[$i]=$res[$i]['TimeSpent'];
		 $User[$i]=$res[$i]['User'];
		 $user_id[$i]=$res[$i]['user_id'];
		 
	 }
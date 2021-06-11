

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   	<!-- jQuery -->
	<!-- <script src="../js/jquery-1.12.3.min.js"></script> -->
	
	<script src="<?=base_url()?>js/jquery-1.12.3.min.js"></script>

	<!-- Skeleton CSS & Featherlight -->
	<link rel="stylesheet" href="<?=base_url()?>css/normalize.css">
	<link rel="stylesheet" href="<?=base_url()?>/css/skeleton.css">
	<link rel="stylesheet" href="<?=base_url()?>css/featherlight.css">
	<script src="<?=base_url()?>js/featherlight.js"></script>

	<!-- Interaction CSS -->
	<link rel="stylesheet" href="<?=base_url()?>css/index.css">

	<!-- GreenSock -->
	<script src="<?=base_url()?>js/TweenMax.min.js"></script>
    <title>BALA BHARATHI VIDYALAYAM</title>
</head>
<body>
	<?php
		foreach ($res as $r => $rv) 
		{
			$video=$rv['lacture_video'];
			// $question_id=$rv['question_id'];
			$question[]=$rv['question'];
			$opt_a[]=$rv['opt_a'];
			$opt_b[]=$rv['opt_b'];
			$opt_c[]=$rv['opt_c'];
			$opt_d[]=$rv['opt_d'];
			$video_timing[]=$rv['video_timing'];
			// $correct=$rv['correct'];
		}

		$vt1=$video_timing[0];
		$vt2=$video_timing[1];
		$vt3=$video_timing[2];
		$vt4=$video_timing[3];
		$vt5=$video_timing[4];

		$question1=$question[0];
		$question2=$question[1];
		$question3=$question[2];
		$question4=$question[3];
		$question5=$question[4];

		// if(is_numeric($video_timing[0])){
		// 	$vt1=$video_timing[0];
			
		// }else{
		// 	$vt1=abc;
		// }


		// if(is_numeric($video_timing[1])){
		// 	$vt2=$video_timing[1];
			
		// }else{
		// 	$vt2=abc;
		// }


		// if(is_numeric($video_timing[2])){
		// 	$vt3=$video_timing[2];
			
		// }else{
		// 	$vt3=abc;
		// }


		// if(is_numeric($video_timing[3])){
		// 	$vt4=$video_timing[3];
			
		// }else{
		// 	$vt4=abc;
		// }


        // if(is_numeric($video_timing[4])){
		// 	$vt5=$video_timing[4];
			
		// }else{
		// 	$vt5=abc;
		// }


		$opt1_a=$opt_a[0];
		$opt2_a=$opt_a[1];
		$opt3_a=$opt_a[2];
		$opt4_a=$opt_a[3];
		$opt5_a=$opt_a[4];

		$opt1_b=$opt_b[0];
		$opt2_b=$opt_b[1];
		$opt3_b=$opt_b[2];
		$opt4_b=$opt_b[3];
		$opt5_b=$opt_b[4];

		$opt1_c=$opt_c[0];
		$opt2_c=$opt_c[1];
		$opt3_c=$opt_c[2];
		$opt4_c=$opt_c[3];
		$opt5_c=$opt_c[4];

		$opt1_d=$opt_d[0];
		$opt2_d=$opt_d[1];
		$opt3_d=$opt_d[2];
		$opt4_d=$opt_d[3];
		$opt5_d=$opt_d[4];





		
        


	?>
    <div id="container">
		<div class="row videoArea">
		<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/1pOstnFhges" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
			<video id="video1" controls autoplay="true">
			<source src="<?=base_url()?>students/video/lacture_video_download/<?=$video?>" type="video/mp4">	

				<!-- <iframe id=”player” type=”text/html” width=”640″ height=”390″ src=”http://www.youtube.com/embed/M7lc1UVf-VE?enablejsapi=1&origin=http://example.com” frameborder=”0″></iframe> -->
				Your browser does not support the video tag.
			</video>
		</div>
            <div class="lightbox popUpQuestion1"> 
                <h4>Question 1</h4>
                <p><?=$question1?></p>
                <br>
			<input class="q1" type="radio" name="Question1" value="opt_a"><?=$opt1_a?><br>
			<input class="q1" type="radio" name="Question1" value="opt_b"><?=$opt1_b?><br>
			<input class="q1" type="radio" name="Question1" value="opt_c"><?=$opt1_c?><br>
			<input class="q1" type="radio" name="Question1" value="opt_d"><?=$opt1_d?><br>
			</div>	
		<div class="lightbox popUpQuestion2">
			<h4>Question 2</h4>
			<p><?=$question2?></p>
			<br>
			<input class="q2" type="radio" name="Question2" value="opt_a"><?=$opt2_a?><br>
			<input class="q2" type="radio" name="Question2" value="opt_b"><?=$opt2_b?><br>
			<input class="q2" type="radio" name="Question2" value="opt_c"><?=$opt2_c?><br>
			<input class="q2" type="radio" name="Question2" value="opt_d"><?=$opt2_d?><br>
		</div>
		<div class="lightbox popUpQuestion3">
			<h4>Question 3</h4>
			<p><?=$question3?></p>
			<br>
			<input class="q3" type="radio" name="Question3" value="opt_a"><?=$opt3_a?><br>
			<input class="q3" type="radio" name="Question3" value="opt_b"><?=$opt3_b?><br>
			<input class="q3" type="radio" name="Question3" value="opt_c"><?=$opt3_c?><br>
			<input class="q3" type="radio" name="Question3" value="opt_d"><?=$opt3_d?><br>
		</div>
		<div class="lightbox popUpQuestion4"> 
                <h4>Question 4</h4>
                <p><?=$question4?></p>
                <br>
			<input class="q4" type="radio" name="Question4" value="opt_a"><?=$opt4_a?>
			<input class="q4" type="radio" name="Question4" value="opt_b"><?=$opt4_b?>
			<input class="q4" type="radio" name="Question4" value="opt_c"><?=$opt4_c?>
			<input class="q4" type="radio" name="Question4" value="opt_d"><?=$opt4_d?>
			</div>
			<div class="lightbox popUpQuestion5"> 
                <h4>Question 5</h4>
                <p><?=$question5?></p>
                <br>
			<input class="q5" type="radio" name="Question5" value="opt_a"><?=$opt5_a?>
			<input class="q5" type="radio" name="Question5" value="opt_b"><?=$opt5_b?>
			<input class="q5" type="radio" name="Question5" value="opt_c"><?=$opt5_c?>
			<input class="q5" type="radio" name="Question5" value="opt_d"><?=$opt5_d?>
			</div>
		
		<div class="lightbox final">
		<h4> Thanks For Watching Video</h4>
		<form action="<?php echo site_url('students/video/form_data')?>" id="videoFrm" name="videoFrm" method="POST"> 
		<input id="st" type="text" name="StartTime" value="" hidden><br>
		<input id="et" type="text" name="EndTime" value="" hidden><br>
		<input id="ts" type="text" name="TimeSpent" value="" hidden><br>
		<input id="sc" type="text" name="score" value="" hidden><br>
		<input type="submit" name="submit" class="submit">
		</div>

	</div>
	</form>
</body>
</html>

<script type="text/javascript">
var video1;
var question1Asked = false;
var question2Asked = false;
var question3Asked = false;
var question4Asked = false;
var question5Asked = false;
var score = 0;
var EndTime;
var startTime;

$(document).ready(function(){
	$.featherlight.defaults.afterClose = playPauseVideo;
	video1 = $('#video1');
	$(video1).on('timeupdate', function(){
		var currentTime = Math.round(this.currentTime);
        var choicePart1 = <?=$vt1?>;
	    var choicePart2 = <?=$vt2?>;
        var choicePart3 = <?=$vt3?>;
		var choicePart4 = <?=$vt4?>;
		var choicePart5 = <?=$vt5?>;
        
		if(currentTime == 0){
			 startTime = new Date();
		}
         
        if(currentTime == choicePart1 && question1Asked == false){
			question1Asked = true;
			video1[0].pause();
			$.featherlight($('.popUpQuestion1'))
			$('.q1').click(function(){
				let answer1 = $("input[type='radio'][name='Question1']:checked").val();
			    $.featherlight.current().close();
			    if (answer1 == "Good"){
				  score = score+30 
			  }   
			  })
		}
        if(currentTime == choicePart2 && question2Asked == false){
			question2Asked = true;
			video1[0].pause();
			$.featherlight($('.popUpQuestion2'))
			$('.q2').click(function(){
				let answer2 = $("input[type='radio'][name='Question2']:checked").val();
				$.featherlight.current().close();
				if (answer2 == "5Star"){
				  score = score+30 
			  }  
			  })
		}
		if(currentTime == choicePart3 && question3Asked == false){
			question3Asked = true;
			video1[0].pause();
			$.featherlight($('.popUpQuestion3'))
			$('.q3').click(function(){
				let answer3 = $("input[type='radio'][name='Question3']:checked").val();
				$.featherlight.current().close();
				if (answer3 == "5Star"){
				  score = score+30 
			  }  
			  })
		}
		if(currentTime == choicePart4 && question4Asked == false){
			question4Asked = true;
			video1[0].pause();
			$.featherlight($('.popUpQuestion4'))
			$('.q4').click(function(){
				let answer4 = $("input[type='radio'][name='Question4']:checked").val();
				$.featherlight.current().close();
				if (answer2 == "5Star"){
				  score = score+30 
			  }  
			  })
		}
        if(currentTime == choicePart5 && question5Asked == false){
			question5Asked = true;
			video1[0].pause();
			$.featherlight($('.popUpQuestion5'))
			$('.q5').click(function(){
				let answer5 = $("input[type='radio'][name='Question5']:checked").val();
				$.featherlight.current().close();
				if (answer5 == "Yes"){
				  score = score+30 
			  }			
			  })
		};
	});
});


$('#video1').bind('ended',function(){

var EndTime = new Date();
console.log("Your score is: " + score)
console.log("Video Start Time: " + startTime)
console.log("Video End Time: " + EndTime)
date1 = startTime
date2 =EndTime

         var res = Math.abs(date1 - date2) / 1000;
         
         // get total days between two dates
         var days = Math.floor(res / 86400);                      
         
         // get hours        
         var hours = Math.floor(res / 3600) % 24;         
         
         // get minutes
         var minutes = Math.floor(res / 60) % 60;  
     
         // get seconds
         var seconds = res % 60;
        
		TimeSpent = hours +  " hours" + ":" + minutes + " minutes" + ":" + seconds + " seconds" 
        console.log(TimeSpent)
		document.getElementById("st").value = startTime;
		document.getElementById("et").value = EndTime;
		document.getElementById("ts").value = TimeSpent;
		document.getElementById("sc").value = score;
        
		$.featherlight($('.final'))
			$('.submit').click(function(){
				
			
			$.featherlight.current().close();
        

	    
    });
        
});




function secondsToHms(d) {
	d = Number(d);
	var h = Math.floor(d / 3600);
	var m = Math.floor(d % 3600 / 60);
	var s = Math.floor(d % 3600 % 60);
	return ((h > 0 ? h + ":" + (m < 10 ? "0" : "") : "") + m + ":" + (s < 10 ? "0" : "") + s); 
}

function playPauseVideo(popUp){
	if(video1[0].paused){
		video1[0].play();
	} else{
		video1[0].pause();
		$.featherlight($(popUp));
	}
}

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

</script>

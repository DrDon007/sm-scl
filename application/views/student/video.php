<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   	<!-- jQuery -->
	<script src="../js/jquery-1.12.3.min.js"></script>

	<!-- Skeleton CSS & Featherlight -->
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/skeleton.css">
	<link rel="stylesheet" href="../css/featherlight.css">
	<script src="../js/featherlight.js"></script>

	<!-- Interaction CSS -->
	<link rel="stylesheet" href="../css/index.css">

	<!-- GreenSock -->
	<script src="../js/TweenMax.min.js"></script>
    <title>BALA BHARATHI VIDYALAYAM</title>
</head>
<body>
    <div id="container">
		<div class="row videoArea">
			<video id="video1" controls autoplay="true">
				<source src="../video/video1.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>
		<form method="GET">
		<div class="lightbox popUpQuestion1"> 
			<h4>Question 1</h4>
			<p>How the video feels</p>
			<br>
			<input class="q1" type="radio" name="Question1" value="Good">Good<br>
			<input class="q1" type="radio" name="Question1" value="Bad">Bad<br>
			<input class="q1" type="radio" name="Question1" value="Poor">Poor<br>
			</div>
	
		<div class="lightbox popUpQuestion2">
			<h4>Question 2</h4>
			<p>Rate The Video</p>
			<br>
			<input class="q2" type="radio" name="Question2" value="5Star">5Star<br>
			<input class="q2" type="radio" name="Question2" value="4Star">4Star<br>
			<input class="q2" type="radio" name="Question2" value="3Star">3Star<br>
		</div>
		<div class="lightbox popUpQuestion3">
			<h4>Question 3</h4>
			<p>Have you got something  from the video?</p>
			<br>
			<input class="q3" type="radio" name="Question3" value="Yes">Yes<br>
			<input class="q3" type="radio" name="Question3" value="No">No<br>
			<input class="q3" type="radio" name="Question3" value="Can't say">can't say<br>
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
var score = 0;
var EndTime;
var startTime;

$(document).ready(function(){
	$.featherlight.defaults.afterClose = playPauseVideo;
	video1 = $('#video1');
	$(video1).on('timeupdate', function(){
		var currentTime = Math.round(this.currentTime);
        var choicePart = 10;
	    var choicePart1 = 20;
        var choicePart3 = 30;
        
		if(currentTime == 0){
			 startTime = new Date();
		}
         
        if(currentTime == choicePart && question1Asked == false){
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
        if(currentTime == choicePart1 && question2Asked == false){
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
				if (answer3 == "Yes"){
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
        
		console.log("Time Spent on video: " + hours +  " hours" + ":" + minutes + " minutes" + ":" + seconds + " seconds" )

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

</script>


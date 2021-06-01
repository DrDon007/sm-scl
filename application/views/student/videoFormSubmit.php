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
    <div id="container">
		<div class="row videoArea" id="video1">
			<video id="video1" controls autoplay="true">
            <!-- <iframe width="853" height="480" src="https://www.youtube.com/embed/hxhBVPrZ3Ao" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                <source src="<?=base_url()?>video/video1.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>
            <div class="lightbox popUpQuestion1"> 
                <h4>Question 1</h4>
                <p>How the video feels</p>
                <br>
			<input class="q1" type="radio" name="Question2" value="Good">Good<br>
			<input class="q1" type="radio" name="Question2" value="Bad">Bad<br>
			<input class="q1" type="radio" name="Question2" value="Poor">Poor<br>
	
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
				setCookie("answer1",answer1,1)
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
				setCookie("answer2",answer2,1)
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
				setCookie("answer3",answer3,1)
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


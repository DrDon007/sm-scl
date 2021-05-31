
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
		<!-- <div class="lightbox popUpQuestion01"> 
			<h4></h4>
			<p style="margin-bottom:20px;">Are You Ready to start ?</p>
			
			<input class="startVideo" type="button" name="startBtn" value="Start">
		</div> -->
	</div>
	
    <div id="container">
		<div class="row videoArea">
			<video id="video1" controls autoplay="true">
				<source src="../video/video1.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>
		<form action="<?php echo site_url('students/video/data')?>" id="videoFrm" name="videoFrm" method="post">
            <div class="lightbox popUpQuestion1"> 
                <h4>Question 1</h4>
                <p>How the video feels</p>
                <br>
                <input  type="radio" name="Question1" value="Good">Good<br>
                <input  type="radio" name="Question1" value="Bad">Bad<br>
                <input  type="radio" name="Question1" value="Poor">Poor<br>
				<input type="submit" class="button" value="submit">
				<!-- <button type="submit" class="btn">submit</button> -->
            </div>
        </form>
            <!-- <div class="lightbox popUpQuestion2">
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
            </div> -->
            <!-- <div class="lightbox warning">
            <h4>Wrong Answer,Try again</h4>
            <button class="ok" name="okay" color="blue">Okay</button>
            </div> -->
        </form>
	</div>
	<!-- </form> -->
</body>
</html>

<script type="text/javascript">
	var video1;
	var statrVar=false;
	var question1Asked = false;
	var question2Asked = false;
	var question3Asked = false;

	function sessionCreate()
	{
		

	}

	$(document).ready(function()
	{
		$.featherlight.defaults.afterClose = playPauseVideo;
		video1 = $('#video1');     
		$(video1).on('timeupdate', function()
		{
			var currentTime = Math.round(this.currentTime);
			var choicePart01 = 0;
			var choicePart = 2;
			var choicePart1 = 5;
			var choicePart3 = 8;

			// if(currentTime == choicePart01 && statrVar == false)
			// {
			// 	statrVar = true;
			// 	video1[0].pause();
			// 	$.featherlight($('.popUpQuestion01'))
			// 	$('.startVideo').click(function()
			// 	{
			// 		// sessionCreate();	
			// 		$.featherlight.current().close();  
			// 	})
			// }

			if(currentTime == choicePart && question1Asked == false){
			question1Asked = true;
			video1[0].pause();
			$.featherlight($('.popUpQuestion1'))
			$('.q1').click(function()
			{
	          let answer1 = $("input[type='radio'][name='Question1']:checked").val();
			  setCookie("answer1",answer1,1)
			  $.featherlight.current().close();

			})
		}

        // if(currentTime == choicePart1 && question2Asked == false){
		// 	question2Asked = true;
		// 	video1[0].pause();
		// 	$.featherlight($('.popUpQuestion2'))
		// 	$('.q2').click(function(){
		// 		let answer2 = $("input[type='radio'][name='Question2']:checked").val();
		// 		// setCookie("answer2",answer2,1)
		// 		$.featherlight.current().close();  
		// 	  })
		// }
        // if(currentTime == choicePart3 && question3Asked == false)
		// {
		// 	question3Asked = true;
		// 	video1[0].pause();
		// 	$.featherlight($('.popUpQuestion3'))
		// 	$('.q3').click(function()
		// 	{
		// 		let answer3 = $("input[type='radio'][name='Question3']:checked").val();
		// 		// setCookie("answer3",answer3,1)
		// 		$.featherlight.current().close();
  
		// 	})
		// }


		});
	});


	function secondsToHms(d) 
	{
		d = Number(d);
		var h = Math.floor(d / 3600);
		var m = Math.floor(d % 3600 / 60);
		var s = Math.floor(d % 3600 % 60);
		return ((h > 0 ? h + ":" + (m < 10 ? "0" : "") : "") + m + ":" + (s < 10 ? "0" : "") + s); 
	}

	function playPauseVideo(popUp)
	{
		if(video1[0].paused)
		{
			video1[0].play();
		} 
		else
		{
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

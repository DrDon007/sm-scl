
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
            <div class="lightbox popUpQuestion1"> 
                <h4>Question 1</h4>
                <p>How the video feels</p>
                <br>
				<input class="q1" type="radio" name="Question1" value="Good">Good<br>
                <input class="q1" type="radio" name="Question1" value="Bad">Bad<br>
                <input class="q1" type="radio" name="Question1" value="Poor">Poor<br>				
				<!-- <button type="button" class="btn" onclick="save()">submit</button> -->
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
             <div class="lightbox popUpQuestion01"> 
			<h4></h4>
			<p style="margin-bottom:20px;">course completed ?</p>
			
			<input class="submitResponse" type="button" name="startBtn" value="Submit">
		</div>
        </form>
	</div>
</body>
</html>

<script type="text/javascript">
	
	var video1;
	var statrVar=false;
	var question1Asked = false;
	var question2Asked = false;
	var question3Asked = false;
    var answer1=null;
			var answer2=null;
			var answer3=null;
	$(document).ready(function()
	{
		$.featherlight.defaults.afterClose = playPauseVideo;
		video1 = $('#video1');     
		$(video1).on('timeupdate', function()
		{
			var currentTime = Math.round(this.currentTime);
			var choicePart01 = 10;
			var choicePart = 2;
			var choicePart1 = 5;
			var choicePart3 = 8;
			
			if(currentTime == choicePart && question1Asked == false)
            {
                question1Asked = true;
                video1[0].pause();
                $.featherlight($('.popUpQuestion1'))
                $('.q1').click(function()
                {
                answer1 = $("input[type='radio'][name='Question1']:checked").val();
                setCookie("answer1",answer1,1)
                $.featherlight.current().close();

                })
		    }

            if(currentTime == choicePart1 && question2Asked == false)
            {
                question2Asked = true;
                video1[0].pause();
                $.featherlight($('.popUpQuestion2'))
                $('.q2').click(function(){
                    answer2 = $("input[type='radio'][name='Question2']:checked").val();
                    // setCookie("answer2",answer2,1)
                    $.featherlight.current().close();  
                })
		    }
            if(currentTime == choicePart3 && question3Asked == false)
            {
                question3Asked = true;
                video1[0].pause();
                $.featherlight($('.popUpQuestion3'))
                $('.q3').click(function()
                {
                    answer3 = $("input[type='radio'][name='Question3']:checked").val();
                    // setCookie("answer3",answer3,1)
                    $.featherlight.current().close();
    
                })
            }

            if(currentTime == choicePart01 && statrVar == false)
			{
				statrVar = true;
				video1[0].pause();
				$.featherlight($('.popUpQuestion01'))
				$('.submitResponse').click(function()
				{
					// sessionCreate();	
                    save(answer1,answer2,answer3);
					$.featherlight.current().close();  
				})
			}
		
		
		});
	});

	function save(answer1,answer2,answer3)
		{
			var ans1=answer1;
			var ans2=answer2;
			var ans3=answer3;
			// var answer1 = $("input[type='radio'][name='Question1']:checked").val();
			$.ajax({
				type: 'POST',
				url: '<?=base_url('Students/video/data1')?>',
				data: {'ans1': ans1,'ans2': ans2,'ans3': ans3},
				success: function(response) 
				{
					// $('#result').html(response);
				}
			});
		}
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

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

<?php
$count=0;
$video='';
foreach($res as $r => $rv) 
{
	$video=$rv['lacture_youtube_url'];
	$count++;
}
$video_timing=array();		
$opt_a=array();
$opt_b=array();
$opt_c=array();
$opt_d=array();
$correct=array();
$question_id=array();

for($i=0;$i<$count;$i++)
{
	// $question_id[$i]=$rv['question_id'];
	$question[$i]=$res[$i]['question'];
	$opt_a[$i]=$res[$i]['opt_a'];
	$opt_b[$i]=$res[$i]['opt_b'];
	$opt_c[$i]=$res[$i]['opt_c'];
	$opt_d[$i]=$res[$i]['opt_d'];
	$video_timing[$i]=$res[$i]['video_timing'];			
	$correct[$i]=$res[$i]['correct'];
}

		function get_youtube_id_from_url($url)
{
    if (stristr($url,'youtu.be/'))
        {preg_match('/(https:|http:|)(\/\/www\.|\/\/|)(.*?)\/(.{11})/i', $url, $final_ID); return $final_ID[4]; }
    else 
        {@preg_match('/(https:|http:|):(\/\/www\.|\/\/|)(.?)\/(embed\/|watch.?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $IDD); return $IDD[5]; }
}

$video_id = get_youtube_id_from_url($video);

?>

<body>

    <div id="container">
		<div class="row videoArea">
		<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/1pOstnFhges" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

			<iframe id="player" width="560" height="315" class="trackable-video" src="https://www.youtube.com/embed/<?=$video_id?>?autoplay=0&enablejsapi=1"></iframe>


			<!-- <iframe width="560" height="315" id="video" class="trackable-video" src="https://www.youtube.com/embed/kOEDG3j1bjs?enablejsapi=1&html5=1&" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
		</div>
		<?php
		{
			for($i=0;$i<$count;$i++)
			{
			?>
				 <div class="lightbox popUpQuestion<?=$i+1?>"> 
					<h4>Question <?=$i+1?></h4>
					<p><?=$question[$i]?></p>
					<br>
					<input class="q<?=$i+1?>" type="radio" name="Question<?=$i+1?>" value="opt_a"><?=$opt_a[$i]?>
					<input class="q<?=$i+1?>" type="radio" name="Question<?=$i+1?>" value="opt_b"><?=$opt_b[$i]?>
					<input class="q<?=$i+1?>" type="radio" name="Question<?=$i+1?>" value="opt_c"><?=$opt_c[$i]?>
					<input class="q<?=$i+1?>" type="radio" name="Question<?=$i+1?>" value="opt_d"><?=$opt_d[$i]?>	
				</div>
			<?php
			}
		}
		?>
		
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



<script>



   (function() {

	   var time, rate, remainingTime;
  var stopPlayAt1 = 6; // Stop play at time in seconds
  var stopPlayAt2 = 10;
  var stopPlayAt3 = 14;
  var stopPlayAt4 = 19;
  let count = <?php echo json_encode($count); ?>;
    // console.log(count);
  <?php
		{
			for($i=0;$i<$count;$i++)
			{
			?>
				var question<?=$i+1?>Asked = false;

			<?php
			}
		}
		?>
  var  stopPlayTimer;   // Reference to settimeout call

 
  var tag = document.createElement("script");                             // This code loads the IFrame Player API code asynchronously.
  tag.src = "//www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName("script")[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player;
  window.onYouTubeIframeAPIReady = function() {
    player = new YT.Player("player", {
      "events": {
        "onReady": onPlayerReady,
        "onStateChange": onPlayerStateChange
      }
    });
  }

  // The API will call this function when the video player is ready.
  // This automatically starts the video playback when the player is loaded.
  function onPlayerReady(event) {
    // event.target.playVideo();
  }

  // The API calls this function when the player's state changes.
  function onPlayerStateChange(event) {
    
    clearTimeout(stopPlayTimer);
    if (event.data == YT.PlayerState.PLAYING) {
      time = player.getCurrentTime();
      // Add .4 of a second to the time in case it's close to the current time
      // (The API kept returning ~9.7 when hitting play after stopping at 10s)


      if (time   < stopPlayAt1) {
        rate = player.getPlaybackRate();
        remainingTime = (stopPlayAt1 - time) / rate;
        stopPlayTimer = setTimeout(pauseVideo1, remainingTime * 1000);
	  }
	  if (time   < stopPlayAt2) {
        rate = player.getPlaybackRate();
        remainingTime = (stopPlayAt2 - time) / rate;
        stopPlayTimer = setTimeout(pauseVideo2, remainingTime * 1000);
      }
	  if (time  < stopPlayAt3) {
        rate = player.getPlaybackRate();
        remainingTime = (stopPlayAt3 - time) / rate;
        stopPlayTimer = setTimeout(pauseVideo3, remainingTime * 1000);
      }
	  if (time  < stopPlayAt4) {
        rate = player.getPlaybackRate();
        remainingTime = (stopPlayAt4 - time) / rate;
        stopPlayTimer = setTimeout(pauseVideo4, remainingTime * 1000);
      }
	  if (time  < stopPlayAt5) {
        rate = player.getPlaybackRate();
        remainingTime = (stopPlayAt5 - time) / rate;
        stopPlayTimer = setTimeout(pauseVideo5, remainingTime * 1000);
      }
    }
  }

  
  function pauseVideo1() {
	// currentTime = Math.round(player.getCurrentTime());
	// console.log(time);
    time1 = player.getCurrentTime();
	// console.log(time1)
	// time = Math.round(player.getCurrentTime());
	// console.log(time);
if( ( time1 > (stopPlayAt1 - 0.5) && time1 < stopPlayAt1 ) &&  question1Asked == false ){
	player.pauseVideo();
	$.featherlight($('.popUpQuestion1'))
	     question1Asked = true; 
	$('.q1').click(function(){
		$.featherlight.current().close();
		player.playVideo();
	});
}
  }
  function pauseVideo2() {
	// currentTime = Math.round(player.getCurrentTime());
	// console.log(time);
    time1 = player.getCurrentTime();
	// console.log(time1)
	time = Math.round(player.getCurrentTime());
	// console.log(time);
if(question2Asked == false && ( time1 > (stopPlayAt2 - 0.5) && time1 < stopPlayAt2)){
	player.pauseVideo();
		question2Asked = true; 
	$.featherlight($('.popUpQuestion2'))
	$('.q2').click(function(){
		$.featherlight.current().close();
		player.playVideo();
	});
}
  }

  function pauseVideo3() {
	// currentTime = Math.round(player.getCurrentTime());
	// console.log(time);
    time1 = player.getCurrentTime();
	// console.log(time1)
	time = Math.round(player.getCurrentTime());
	// console.log(time);
if(question3Asked == false && ( time1 > (stopPlayAt3 - 0.5) && time1 < stopPlayAt3)){
	player.pauseVideo();
		question3Asked = true; 
	$.featherlight($('.popUpQuestion3'))
	$('.q3').click(function(){
		$.featherlight.current().close();
		player.playVideo();
	});
}
  }
  function pauseVideo4() {
	// currentTime = Math.round(player.getCurrentTime());
	// console.log(time);
     time1 = player.getCurrentTime();
	// console.log(time1)
	time = Math.round(player.getCurrentTime());
	// console.log(time);

if(question4Asked == false && ( time1 > (stopPlayAt4 - 0.5) && time1 < stopPlayAt4)){
	player.pauseVideo();
		question4Asked = true; 
	$.featherlight($('.popUpQuestion4'))
	$('.q4').click(function(){
		$.featherlight.current().close();
		player.playVideo();
	});
}
  }
  function pauseVideo5() {
	// currentTime = Math.round(player.getCurrentTime());
	// console.log(time);
     time1 = player.getCurrentTime();
	// console.log(time1)
	time = Math.round(player.getCurrentTime());
	// console.log(time);

if(question5Asked == false && ( time1 > (stopPlayAt5 - 0.5) && time1 < stopPlayAt5)){
	player.pauseVideo();
		question5Asked = true; 
	$.featherlight($('.popUpQuestion5'))
	$('.q5').click(function(){
		$.featherlight.current().close();
		player.playVideo();
	});
}
  }
})();

</script>


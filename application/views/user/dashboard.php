<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

<?php 

foreach($res2 as $r2=> $rv2) 
	{
		$count1++;
	}

  for($j=0;$j<$count1;$j++)
	{
		$id[$j]=$res2[$j]['id'];
    $class[$j] = $res2[$j]['class'];
    $type[$j] = $res2[$j]['type'];
    $name[$j] = $res2[$j]['name'];
    $date[$j] = $res2[$j]['date'];
	}
  $sub_attendence = array();
  for($j=0;$j<$count1;$j++)
  {
  if($id[$j] == $student['id']){
    array_push($sub_attendence,$name[$j],$date[$j]);
  }
}

foreach($res3 as $r3=> $rv3) 
	{
		$count1++;
	}

  for($j=0;$j<$count1;$j++)
	{
		$id[$j]=$res3[$j]['id'];
    $event_title[$j] = $res3[$j]['event_title'];
    $event_description[$j] = $res3[$j]['event_description'];
    $start_date[$j] = $res3[$j]['start_date'];
    $end_date[$j] = $res3[$j]['end_date'];
	}






foreach($res1 as $r1 => $rv1) 
	{
		$count1++;
	}

  for($j=0;$j<$count1;$j++)
	{
		$response[$j]=$res1[$j]['return_response'];
    $class[$j] = $res1[$j]['class'];
    $title[$j] = $res1[$j]['title'];
    $surname[$j] = $res1[$j]['surname'];
    $name[$j] = $res1[$j]['name'];
    $date[$j] = $res1[$j]['date'];
    $response[$j] = json_decode($response[$j]);
	}

  $classes = array();
  for($j=0;$j<$count1;$j++)
  {
  if($class[$j] == $student['class']){
    array_push($classes,$title[$j],$surname[$j],$name[$j],$response[$j]->join_url,$date[$j]);
  }
}


foreach($res as $r => $rv) 
	{
		$count++;
	}

   $birthdays = array();

  for($i=0;$i<$count;$i++)
	{
		$dob[$i]=$res[$i]['dob'];
    $class[$i] = $res[$i]['class'];
    $firstname[$i] = $res[$i]['firstname'];
	}


  for($i=0;$i<$count;$i++)
  {
  if($class[$i] == $student['class']){
    array_push($birthdays,$firstname[$i]);
  }
  }

  if(count($birthdays) >= 4){

    $birthday_count = 4;

 }else{
   $birthday_count = count($birthdays);
 }


?>

<style type="text/css">
.html,body{
    background-color:#E5E5E5;
}
.left{
    width:80%;
    height:1000px;
}
.right{
    background: #F1F5FF;
border-radius: 0px 15px 15px 0px;
height:1000px;

}
.welcome{
padding-left:5px;
font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 24px;
line-height: 0px;
letter-spacing: 0.01em;
color: #535353;
}

.notice_bar{
  background: #48B5B9;
border-radius: 3px;
width: 1%;
margin-top:5%;
height: 80%;
margin-left:3%;
}

.zoom_link{
  width:50%;
  height:30%
  /* font-size:0.9vw; */
  word-wrap:break-word;
  overflow:hidden;
}

.notice0{
    background: #FADADD;
border-radius: 0px 15px 15px 0px;
height:80px;
margin:10px 20px 10px 0px;
width:30%;
font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 21px;
letter-spacing: 0.01em;

color: #535353;
}

.notice1{
    background: #FFEACA;
border-radius: 0px 15px 15px 0px;
height:80px;
margin:10px 20px 10px 0px;
width:30%;
font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 21px;
letter-spacing: 0.01em;
color: #535353;
}

.notice2{
    background: rgba(182, 231, 238, 0.48);
border-radius: 0px 15px 15px 0px;
height:80px;
margin:10px 20px 10px 0px;
width:30%;
font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 21px;
letter-spacing: 0.01em;
color: #535353;

}

.grades{
    height:300px;
    background: #FFFFFF;
border-radius: 4px;
margin-top:10px;
}
.event{
  margin-left:10%;
  width:80%;
  height:12%;
  background: #FFFFFF;
border-radius: 0px 15px 15px 0px;
}
.event1{
  margin-left:10%;
  width:80%;
  height:12%;
  margin-top:10%;
  background: #FFFFFF;
border-radius: 0px 15px 15px 0px;
}
.attendence{
    height:300px;
    background: #FFFFFF;
border-radius: 4px;
margin-top:10px;
/* margin:10px 20px 10px 0px; */
}
.attendence1{
    background: #FFFFFF;
clear: both;
/* width: 100%; */
height:100px;
}
.birthdays{
    background: #FFFFFF;
border-radius: 0px 15px 15px 0px;
height:350px;
margin-top: 30px;
margin-left:20px;
width: 80%;
font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 12px;
line-height: 70px;
padding-left:10px;
letter-spacing: 0.01em;
color: #535353;
}

.text_birth,.notice_text,table{
    font-family: Poppins;
font-style: normal;
font-weight: bold;
font-size: 14px;
line-height: 40px;
letter-spacing: 0.01em;
margin-left:10px;
color: #999696;
}

.upcoming_text{
  font-family: Poppins;
font-style: normal;
font-weight: bold;
font-size: 14px;
line-height: 40px;
letter-spacing: 0.01em;
margin-left:22px;
color: #999696;
}
}

.timetable{
    background: #FFFFFF;
border-radius: 4px;
height:160px;
margin:10px 20px 10px 0px;
}
.subjects{
  background: #F1F5FF;
border-radius: 20px;
text-align:center;
padding-right:70px;
/* transform: matrix(0, -1, 1, -0.01, 0, 0); */
/* height:60%;
width:60%; */
}
.classes{
    background: #FFFFFF;
border-radius: 4px;
height:230px;
margin:10px 20px 10px 0px;
}

.notice{

    background: #298693;
border-radius: 0px 15px 15px 0px;
height:300px;
margin-top:100%;
}
.att_per{
    border: 1px solid #FF9F04;
    width:48%;
    height:50px;
border-radius: 25%;
float:left;
}
.top_att{
    width:50%;
    height:50px;
    background: #FFEACA;
border-radius: 25%;
float:right;
}

.progress-minibar{
    margin-top: 40px;
    height: 5px!important;
    margin-bottom: 0;
    float: right;
    width: 75%;
}
.table>thead>tr>th {
    padding-top:30px !important;
}
</style>
<div class="content-wrapper">
<div class="container-fluid">
<h3 class="welcome"><?php echo "Hi," . " " . $student['firstname'] . " " . $student['lastname']; ?></h3>
  <div class="row">
    <div class="col-md-9">



  <?php 
   foreach ($notificationlist as $key => $notification) { 
    $count2++;
   }
    

 
   for($j=0;$j<$count2;$j++)
   {
     $message[$j]=$notificationlist[$j]['message'];
     $title[$j] = $notificationlist[$j]['title'];
     $date[$j] = $notificationlist[$j]['date'];
   }

  for($i=0;$i<=2;$i++){?>

    
    <div class="col-xs-3 notice<?php echo $i?>" >
  
    <?php echo $message[$i]; ?>
    <?php echo $date[$i]; ?>
  </div>

 <?php }?>


<div class="col-md-6 grades">
<h4 class="text_birth">Grades</h4>
<canvas id="myChart" style="max-width: 500px;"></canvas>
</div>
<div class="col-md-6 attendence">
    <div class="attendence1">
<h4 class="text_birth">Attendence</h4>
<div class="rounded-pill att_per">
</div>

<div class="rounded-pill top_att">
<h4 class="text_birth">Top Attendence</h4>
</div>
</div>

                 
             <div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td style="width:20%">Telugu</td>
      <td>
        <div class="progress progress-minibar">
            <div class="progress-bar progress-bar-aqua" style="width:60%"></div>
          </div>
      </td>
    </tr>

    <tr>
        <td style="width:20%">Physics</td>
        <td>
          <div class="progress progress-minibar">
              <div class="progress-bar progress-bar-aqua" style="width:60%"></div>
            </div>
        </td>
      </tr>

      <tr>
        <td style="width:20%">English</td>
        <td>
          <div class="progress progress-minibar">
              <div class="progress-bar progress-bar-aqua" style="width:60%"></div>
            </div>
        </td>
      </tr>

      <tr>
        <td style="width:20%">Maths</td>
        <td>
          <div class="progress progress-minibar">
              <div class="progress-bar progress-bar-aqua" style="width:60%"></div>
            </div>
        </td>
      </tr>

      <tr>
        <td style="width:20%">Science</td>
        <td style="width:80%">
          <div class="progress progress-minibar">
              <div class="progress-bar progress-bar-aqua" style="width:60%"></div>
            </div>
        </td>
      </tr>

 
  </tbody>
</table>


</div>
</div>


<div class="col-md-12 classes">
<h4 class="text_birth">Classes</h4>
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Class title</th>
      <th scope="col">Date&Time</th>
      <th scope="col">Subject/Topic</th>
      <th scope="col">Teacher</th>
      <th scope="col">Meeting Link</th>
      <th scope="col">Join </th>
    </tr>
  </thead>
  <tbody>


   
    <?php
     $subject = array();
     $today = date('l');
     foreach ($timetable as $tm_key => $tm_value){
     foreach ($timetable[$tm_key] as $tm_k => $tm_kue){
       if($tm_key == $today){
         if(! in_array($tm_kue->subject_name,$subject))
          array_push($subject,$tm_kue->subject_name);
       }
     }
   }
    $t=date('d-m-Y');  
  ?>

    <?php if(empty($classes)){?>
       <tr>
       <td scope="row"><?php  echo "No classes scheduled yet";?></td>
     </tr>
     <?php
     
    }
    else
    { 
      for($i=0;$i<2;$i++){
    ?>
    <tr>
      <th scope="row"><?php echo $title[$i]; ?></th>
      <td><?php echo $date[$i]?></td>
      <td><?php echo $title[$i] ?></td>
      <td><?php echo $name[$i]." ".$surname[$i] ?></td>
      <td style="width:30%">
           <div class="zoom_link" > <?php echo $response[$i]->join_url ?></div>
    </td>
    </tr>
   <?php }} ?>

   <?php 
   
  //  for($i=0;$i<3;$i++){
  //    echo $date[$i];
  //    echo $title[$i];
  //    echo $name[$i]." ".$surname[$i]; 
  //    echo $response[$i]->join_url; 
  //  }
   
   
   ?>



  </tbody>
</table>
</div>



</div>  
<div class="col-md-12 timetable">
<h4 class="text_birth">Time Table</h4>


<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Time Table<img style="width:10%;height:10%"  src="<?php echo base_url()?>images/vector1.png"></th>
          <th scope="col">9:05-9:45</th>
          <th scope="col">9:50-10:30</th>
          <th scope="col">10:40-11:20</th>
          <th scope="col">11:30-12:10</th>
          <th scope="col">12:20-1:00</th>
          <!-- <th scope="col"></th>
          <th scope="col"></th> -->
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><?php echo date('l');?></th>
          <?php for($w=0;$w<=count($subject);$w++){?>
            <td><div class="subjects">
              <?php echo $subject[$w];?></div></td>
         <?php } ?>
        </tr>
      </tbody>
    </table>
    </div>
</div>  
    </div>
    <div class="col-md-3 right">
        <div class="birthdays">
            <h4 class="text_birth">Birthdays</h4>
  

          <?php 
                for($i=0;$i<$birthday_count;$i++){?>
                  
                  <img style="width:15%;height:15%; border-radius:50%;"  src="<?php echo base_url()?>uploads/student_images/no_image.png">
                  <?php echo $birthdays[$i] ?>
                 <img style="width:10%;height:10% float:right; clear:right"  src="<?php echo base_url()?>images/birthday.png"><br>
                
             <?php   }
          ?>
        </div>


        <h4 class="upcoming_text">upcoming</h4>
        <div class="col-sm-3 event">
          <div class="col-sm-3 notice_bar">

          </div>
          <?php 
 
        $timestamp = strtotime($start_date);
         $start_day = date('D', $timestamp);

         $timestamp1 = strtotime($end_date);
         $end_date = date('D', $timestamp1);
          
          
          for($i=0;$i<2;$i++){
          $result[$i] = date("M jS, Y", strtotime($start_date[$i]));
          $result[$i] = substr($result[$i],0,5);
          // echo $result[$i];
          }?>
                </div>

                <div class="col-sm-3 event1">
                <div class="col-sm-3 notice_bar">

</div>
                </div>       

        <div class="notice">
        <h4 class="notice_text" >Notice Board</h4>
        
      </div>


    </div>
  </div>
</div>
    </div>









  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
datasets: [{
data: [12, 19, 3, 5, 2, 3],
backgroundColor: [
'rgba(255, 99, 132, 0.2)',
'rgba(54, 162, 235, 0.2)',
'rgba(255, 206, 86, 0.2)',
'rgba(75, 192, 192, 0.2)',
'rgba(153, 102, 255, 0.2)',
'rgba(255, 159, 64, 0.2)'
],
borderColor: [
'rgba(255,99,132,1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
'rgba(75, 192, 192, 1)',
'rgba(153, 102, 255, 1)',
'rgba(255, 159, 64, 1)'
],
borderWidth: 0
}]
},
// options: {
// scales: {
// yAxes: [{
// ticks: {
// beginAtZero: true
// }
// }]
// }
// }
});
// options:optionsBar,
var options = {
    cornerRadius: 20,
};
</script>    
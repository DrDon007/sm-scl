<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php 

   
foreach($res7 as $r7 => $rv7) 
{
  $count1++;
}                                                                    //english subject wise attendence queries

for($j=0;$j<$count1;$j++)
{
   $total_english_classes=$rv7['english_total_count'];
 }


foreach($res8 as $r8 => $rv8) 
{
  $count1++;
}

   $english_present_classes=$rv8['english_present_count'];

   $english_attendence_per = ($english_present_classes / $total_english_classes) * 100;
   $english_attendence_per = round($english_attendence_per,2);



   foreach($res9 as $r9 => $rv9) 
   {
     $count1++;
   }                                                                    //science subject wise attendence queries
   
   for($j=0;$j<$count1;$j++)
   {
      $total_science_classes=$rv9['science_total_count'];
    }
   
   
   foreach($res10 as $r10 => $rv10) 
   {
     $count1++;
   }
   
      $science_present_classes=$rv10['science_present_count'];
   
      $science_attendence_per = ($science_present_classes / $total_science_classes) * 100;
      $science_attendence_per = round($science_attendence_per,2);




   
      foreach($res13 as $r13 => $rv13) 
      {
        $count1++;
      }                                                                    //hindi subject wise attendence queries
      
      for($j=0;$j<$count1;$j++)
      {
         $total_hindi_classes=$rv13['hindi_total_count'];
       }
      
      
      foreach($res14 as $r14 => $rv14) 
      {
        $count1++;
      }
      
         $hindi_present_classes=$rv14['hindi_present_count'];
      
         $hindi_attendence_per = ($hindi_present_classes / $total_hindi_classes) * 100;
         $hindi_attendence_per = round($hindi_attendence_per,2);


      
         foreach($res11 as $r11 => $rv11) 
         {
           $count1++;
         }                                                                    //telugu subject wise attendence queries
         
         for($j=0;$j<$count1;$j++)
         {
            $total_telugu_classes=$rv11['telugu_total_count'];
          }
         
         
         foreach($res12 as $r12 => $rv12) 
         {
           $count1++;
         }
         
            $telugu_present_classes=$rv12['telugu_present_count'];
         
            $telugu_attendence_per = ($telugu_present_classes / $total_telugu_classes) * 100;
            $telugu_attendence_per = round($telugu_attendence_per,2);
      

        

        
            foreach($res15 as $r15 => $rv15) 
      {
        $count1++;
      }                                                                    //maths subject wise attendence queries
      
      for($j=0;$j<$count1;$j++)
      {
         $total_maths_classes=$rv15['maths_total_count'];
       }
      
      
      foreach($res16 as $r16 => $rv16) 
      {
        $count1++;
      }
      
         $maths_present_classes=$rv16['maths_present_count'];
      
         $maths_attendence_per = ($maths_present_classes / $total_maths_classes) * 100;
         $maths_attendence_per = round($maths_attendence_per,2);



         foreach($res6 as $r6 => $rv6) 
         {
           $count1++;
         }

        
         for($j=0;$j<$count1;$j++)
         {
          $total_classes_top[$j]=$res6[$j]['top_count'];
          $first_name_top[$j]=$res6[$j]['firstname'];
          $id[$j] = $res6[$j]['id']; 
          }
     
     $max_id = array_keys($total_classes_top,max($total_classes_top));


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




  foreach ($res5 as $r5=> $rv5) { 
    $count2++;
   }
    
 
   for($j=0;$j<$count2;$j++)
   {
    $presented_classes=$rv5['presented_count'];
    
   }


   foreach ($res4 as $r4=> $rv4) { 
    $count2++;

}
 
   for($j=0;$j<$count2;$j++)
   {
     $total_classes=$rv4['attendence_count'];
    
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
    $date1[$j] = $res1[$j]['date'];
    $response[$j] = json_decode($response[$j]);
	}

  $classes = array();
  for($j=0;$j<$count1;$j++)
  {
  if($class[$j] == $student['class']){
    array_push($classes,$title[$j],$surname[$j],$name[$j],$response[$j]->join_url,$date1[$j]);
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
height:830px;
/* margin-top:-15px; */
}

.no_of_classes{
  font-size:10px;
  float:right;
  width:20%;
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
/* height: 7vh; */
margin-left:3%;
}

.zoom_link{
  width:50%;
  height:30%
  /* font-size:0.9vw; */
  word-wrap:break-word;
  overflow:hidden;
}

@media screen(min-width: 480px) {
  .event_tit{
    font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 12px;
line-height: 18px;
letter-spacing: 0.01em;
margin-bottom:20%;

color: #535353;
text-align:center;
  }
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
display:inline-block;
/* position: absolute; */
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
display:inline-block;
}

.notice2{
    background: rgba(182, 231, 238, 0.48);
border-radius: 0px 15px 15px 0px;
height:80px;
margin:10px 20px 10px 0px;
width:30%;
display:inline-block;
font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 21px;
letter-spacing: 0.01em;
color: #535353;

}
.event_tit{
  font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 12px;
line-height: 18px;
letter-spacing: 0.01em;

color: #535353;
text-align:center;
}
.event_des{
  font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 10px;
line-height: 15px;
letter-spacing: 0.01em;
text-align:center;
color: #999696;
}
.your_attendence{
  font-family: Poppins;
font-style: normal;
/* font-weight: 600; */
font-size: 12px;
/* line-height: 18px; */
letter-spacing: 0.01em;
text-align:center;
/* padding-bottom:5%; */
color: #7C7C7C;
}

.student_attendence{
  font-family: Poppins;
font-style: normal;
font-weight: bold;
font-size: 18px;
/* line-height: 27px; */
text-align:center;
padding-top:2%;
/* identical to box height */


color: #FF9F04;
}

.grades{
    height:300px;
    background: #FFFFFF;
border-radius: 4px;
margin-top:10px;
}

.event_text{
  font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 12px;
margin-right:60%;
line-height: 18px;
/* text-align: center; */
letter-spacing: 0.01em;
color: #535353;
}

.event_text1{
  font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 12px;
margin-right:60%;
margin-top:25%;
line-height: 18px;
/* text-align: center; */
letter-spacing: 0.01em;
color: #535353;
}

.event{
  margin-left:10%;
  width:75%;
  /* height:8vh; */
  background: #FFFFFF;
border-radius: 0px 15px 15px 0px;
float:right;
margin-top:0%;

}
.event1{
  margin-left:10%;
  width:75%;
  /* height:8vh; */
  margin-top:5%;
  background: #FFFFFF;
border-radius: 0px 15px 15px 0px;
float:right;
}
.upcoming1_text{
  font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 10px;
line-height: 15px;
/* identical to box height */

text-align: center;
letter-spacing: 0.01em;

color: #999696;
}
.attendence{
    height:300px;
    background: #FFFFFF;
border-radius: 4px;
margin-top:10px;
margin-left:10px;
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
height:280px;
margin-left:20px;
width: 80%;
font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 12px;
line-height: 55px;
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
font-size: 16px;
line-height: 28px;
letter-spacing: 0.01em;
margin-left:22px;
color: #999696;
}
}

.classes1{
    background: #FFFFFF;
border-radius: 4px;
height:230px;
padding-top:20px;
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
height:265px;
margin:10px 20px 10px 0px;
}

.noticeboard{

    background: #298693;
border-radius: 0px 15px 15px 0px;
height:20%;
margin-top:35%;
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
  <div class="col-sm-4 student_attendence">
    <?php 
    $attendance_percentage = ($presented_classes/$total_classes) * 100 ;
    echo round($attendance_percentage ,2) . "%" ;
    ?>
  </div>
  <div class="col-sm-8 your_attendence">
    <h5>Your Attendence</h5>
  </div>
</div>

<div class="rounded-pill top_att">
  <div class="col-sm-4 student_attendence">
    <?php 
    $attendance_percentage1 = (max($total_classes_top)/$total_classes) * 100 ;
    echo round($attendance_percentage1 ,2) . "%" ;
    ?>
  </div>
  <div class="col-sm-8 your_attendence">
    <h5><?php echo ucfirst($first_name_top[$max_id[0]]) . " "?> Attended</h5>
  </div>
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
            <div class="progress-bar progress-bar-aqua" style="width:<?php echo $telugu_attendence_per?>%"></div>
          </div>
      </td>
    </tr>

    <tr>
        <td style="width:20%">Hindi</td>
        <td>
          <div class="progress progress-minibar">
              <div class="progress-bar progress-bar-aqua" style="width:<?php echo $hindi_attendence_per?>%"></div>
            </div>
        </td>
      </tr>

      <tr>
        <td style="width:20%">English</td>
        <td>
          <div class="progress progress-minibar">
              <div class="progress-bar progress-bar-aqua" style="width:<?php echo $english_attendence_per?>%" ></div>
            </div>
        </td>
      </tr>
      <tr>
        <td style="width:20%">Maths</td>
        <td>
          <div class="progress progress-minibar">
              <div class="progress-bar progress-bar-aqua" style="width:<?php echo $maths_attendence_per?>%"></div>
            </div>
        </td>
      </tr>

      <tr>
        <td style="width:20%">Science</td>
        <td style="width:80%">
          <div class="progress progress-minibar">
              <div class="progress-bar progress-bar-aqua" style="width:<?php echo $science_attendence_per?>%"></div>
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
      // for($i=0;$i<count($classes);$i++){
    ?>
    <tr>
      <th scope="row"><?php echo $res1[0]['title']  ?></th>
      <td><?php echo $date1[0]?></td>
      <td><?php echo $res1[0]['title'] ?></td>
      <td><?php echo $name[0]." ".$surname[0] ?></td>
      <td style="width:30%">
           <div class="zoom_link" > <?php echo $response[0]->join_url ?></div>
    </td>
    </tr>


    <tr>
      <th scope="row"><?php echo $res1[1]['title']  ?></th>
      <td><?php echo $date1[1]?></td>
      <td><?php echo $res1[1]['title'] ?></td>
      <td><?php echo $name[1]." ".$surname[1] ?></td>
      <td style="width:30%">
           <div class="zoom_link" > <?php echo $response[1]->join_url ?></div>
    </td>
    </tr>


   <?php }
  // } ?>

  </tbody>
</table>
</div>



</div>  
<div class="col-md-12 classes">
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
                  
                  <img style="width:10%;height:10%; border-radius:50%;"  src="<?php echo base_url()?>uploads/student_images/no_image.png">
                  <?php echo $birthdays[$i] ?>
                 <img style="width:10%;height:10% float:right; clear:right"  src="<?php echo base_url()?>images/birthday.png"><br>
                
             <?php   }
          ?>
        </div>


        <?php 

        $str_date = array();
 
 $timestamp = strtotime($start_date);
  $start_day = date('D', $timestamp);

  $timestamp1 = strtotime($end_date);
  $end_date = date('D', $timestamp1);
   
   for($i=0;$i<2;$i++){
   $result[$i] = date("M jS, Y", strtotime($start_date[$i]));
   $time[$i] = date("M jS, Y", strtotime($end_date[$i]));
   $result[$i] = substr($result[$i],0,5);
   $time[$i] =  substr($result[$i],5,10);
   array_push($str_date,$result[$i],$time[$i]);

   }
   ?>
        
        <h4 class="upcoming_text">upcoming</h4>
        <h5 class="event_text"><?php echo $result[0] . "," . date('l',strtotime($result[0]))   ?></h5>
        <div class="col-sm-8 event">
          <div class="col-sm-3 notice_bar"></div>
          <h5 class="event_tit" ><?php echo $event_title[0]  ?></h5>
          <h5 class="event_des"><?php echo $event_description[0]?></h5>
                </div>
                <h5 class="event_text1"><?php echo $result[1] . "," . date('l',strtotime($result[1]))   ?></h5>             
                <div class="col-sm-8 event1">
                <div class="col-sm-3 notice_bar"></div>
                <h5 class="text-nowrap event_tit"><?php echo $event_title[1]  ?></h5><br>
                <h5 class="event_des"><?php echo $event_description[1]  ?></h5>
                </div>       

        <div class="col-lg-12 noticeboard">
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
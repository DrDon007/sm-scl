<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .bs-example{
    	margin: 20px;
    }
    h1,h3,h4{
        text-align: center;
      }
      #sign{
    margin-top:30px;
    text-align: right;
    margin-right: 100px;
}  
dl{
    width:2000px;
    height:770px;
}
dd,dt{
    font-size:27px;
}
h5{
    font-size:30px;
}
hr{
    border-top :dashed 2.5px #000 !important;
}

#declaration {
    margin-top:50px;
    line-height: 2em;
    }
#permission{
    text-align: left;
} 

#sign3{
    text-align: right;
    margin-right: 100px;
} 

input[type="checkbox"]{
    width: 20px;
    height: 20px;
}


#image{
   margin-right: 50px;
  }

#container{

    margin-left: 10px;
    margin-top:50px
}
  
ul{
    display: inline-block;
    list-style-type: none;
    margin-left: 0;
    font-size:25px;
}
li{
    float: left;
    margin-left: 20px;
    margin-right: 20px;
    font-size:25px;
}
#dob{
    margin-top:50px;
}
#dob1{
    margin-top:60px;
}

.grid {

    display:grid;
    grid-gap:1px;
    grid-template-columns:repeat(2,1fr);
    font-size:25px;
}
div >div{
    padding: 10px;
    background-color:#ccc;
    font-size:25px;
}


</style>

<?php

           
foreach($res as $r => $rv) 
{
    	$id=$rv['id'];
	$fname=$rv['firstname'];

    $lname=$rv['lastname'];


    $adnum = $rv['admission_no'];

    $roll = $rv['roll_no'];

    $admissiondate = $rv['admission_date'];

    $rte = $rv['rte'];

   $mobileno = $rv['mobileno'];

    $email = $rv['email'];

    $state = $rv['state'];

    $city = $rv['city'];

     $pincode = $rv['pincode'];

     $religion = $rv['religion'];
     $permanent_address= $rv['permanent_address'];
     $current_address= $rv['current_address'];

     $caste = $rv['cast'];

         $dob = $rv['dob'];
         $age = $rv['age'];
         $educatqual = $rv['educational_qualification'];
         $mother_tongue = $rv['mother_tongue'];

    $gender = $rv['gender'];
    $aadharnum = $rv['adhar_no'];
    $samagraid = $rv['samagra_id'];
    $bank_account_no = $rv['bank_account_no'];
    $bank_name = $rv['bank_name'];
    $ifsc_code = $rv['ifsc_code'];
    $blood_group =$rv['blood_group'];
    $measure_date = $rv['as_on_date'];
    $guardian = $rv['guardian_is'];
    $father_name = $rv['father_name'];
    $father_occupation = $rv['father_occupation'];
    $father_phone = $rv['father_phone'];
    $mother_name = $rv['mother_name'];
    $mother_occupation = $rv['mother_occupation'];
    $mother_phone = $rv['mother_phone'];
    $guardian_name = $rv['guardian_name'];
    $guardian_occupation = $rv['guardian_occupation'];
    $guardian_phone = $rv['guardian_phone'];
    $height = $rv['height'];
    $weight = $rv['weight'];
    $name = $fname. " ".$lname;
    $previous_school =$rv['previous_school'];
    $stu_pic = $rv['image'];
    $father_pic = $rv['father_pic'];
    $mother_pic = $rv['mother_pic'];
    $guardian_email = $rv['guardian_email'];
    $measurement_date = $rv['measurement_date'];
    $category = $rv['category_id'];
    $image = $rv['image'];
    $class = $rv['class'];
    $personal_identification_marks1 =$rv['personal_identification_marks_1'];
    $personal_identification_marks2 =$rv['personal_identification_marks_2'];


    $personal_identification_marks = $personal_identification_marks1. " ," .$personal_identification_marks2;

    if($category == "1"){
        $category = "OC";
    }else if($category = "2"){
        $category = "BC-A";
    }else if($category = "9"){
        $category = "BC-B";
    }else if($category = "10"){
        $category = "BC-C";
    }else if($category = "11"){
        $category = "BC-D";
    }else if($category = "12"){
        $category = "SC";
    }else if($category = "13"){
        $category = "ST";
    }else{
        $category = "BC-E";
    }

}

$dob_in_words = date("M jS, Y",strtotime("$dob"));

?>




<h1>SCHOOL ADMISSION FORM</h1>
      


<h3>Admission No.: <?php echo $adnum?></h3>


<img src="<?=base_url()?>/<?=$image?>" width=150 height=150  id="image"  align="right" type="image" />





<div class="bs-example">
    <dl  class="row">
        <dt class="col-sm-3">1. Name of the student:</dt>
        <dd class="col-sm-9"><?php echo $name?></dd>
        <dt class="col-sm-3">2. Father / Guardian:</dt>
        <dd class="col-sm-9"><?php echo $father_name?></dd>
        <dt class="col-sm-3">3.  Mother Name:</dt>
        <dd class="col-sm-9"><?php echo $mother_name?></dd>
        <dt class="col-sm-3">4.  Aadhar No:</dt>
        <dd class="col-sm-9"><?php echo $aadharnum?></dd>
        <dt class="col-sm-3">5.  Cell No:.</dt>
        <dd class="col-sm-9"><?php echo $guardian_phone?></dd>
        <dt class="col-sm-3">6. Educational Qualification : </dt>
        <dd class="col-sm-9"><?php echo $educatqual?></dd>
        <dt class="col-sm-3">7.  Occupation :</dt>
        <dd class="col-sm-9"><?php echo $father_occupation?></dd>
        <dt class="col-sm-3"> 8.  Date of Birth :</dt>
        <dd class="col-sm-9"><?php echo $dob?></dd>
        <dt class="col-sm-3">9.  Age :</dt>
        <dd class="col-sm-9"><?php echo $age?></dd>
        <dt class="col-sm-3">10.  Caste & Sub Caste :</dt>
        <dd class="col-sm-9"><?php echo $caste?></dd>
        <dt class="col-sm-3">11. Religion & Nationality :</dt>
        <dd class="col-sm-9"><?php echo $religion?></dd>
        <dt class="col-sm-3">12. Mother tongue  :</dt>
        <dd class="col-sm-9"><?php echo $mother_tongue?></dd>
        <dt class="col-sm-3">13. Previous studied class & T.C No :</dt>
        <dd class="col-sm-9"><?php echo $previous_school?></dd>
        <dt class="col-sm-3">14. Class to be admitted :</dt>
        <dd class="col-sm-9"><?php echo $class?></dd>
        <dt class="col-sm-3">15. Date of Joining :</dt>
        <dd class="col-sm-9"><?php echo $admissiondate?></dd>
        <dt class="col-sm-3">16. Personal identification marks:</dt>
        <dd class="col-sm-9"><?php echo $personal_identification_marks?></dd>
        <dt class="col-sm-3">17. Present address</dt>
        <dd class="col-sm-9"><?php echo $current_address?></dd>
    </dl>






<!-- <p> 1.  Name of the student : <?php echo $name?> </p>
<p> 2.  Father / Guardian : <?php echo $father_name?> </p>
<p> 3.  Mother Name : <?php echo $mother_name?> </p>
<p> 4.  Aadhar No : <?php echo $aadharnum?> </p>
<p> 5.  Cell No. : <?php echo $guardian_phone?> </p>
<p> 6.  Educational Qualification : <?php echo $educatqual?> </p>
<p> 7.  Occupation : <?php echo $father_occupation?> </p>
<p> 8.  Date of Birth : <?php echo $dob?> </p>
<p> 9.  Age : <?php echo $age?> </p>
<p> 10.  Caste & Sub Caste : <?php echo $caste?> </p>
<p> 11.  Religion & Nationality : <?php echo $religion?> </p>
<p> 12. Mother tongue  : <?php echo $mother_tongue?> </p>
<p> 13. Previous studied class & T.C No : <?php echo $previous_school?> </p>
<p> 14. Class to be admitted : <?php echo $class?> </p>
<p> 15. Date of Joining : <?php echo $admissiondate?> </p>
<p> 16. Personal identification marks: <?php echo $personal_identification_marks?> </p>
<p> 17. Present address : <?php echo $currentAddress?> </p>     -->
</div>

<div id="dob1">

<h4>Date of Birth</h4>
</div>
<div id=dob>


<h5>Mr./Mrs.  <?php echo $name ?>S/o./ D/o. <?php echo $father_name ?> born in <?php echo $dob ?> in words <?php echo $dob_in_words ?> in village  <?php echo $permanent_address ?> <h5>

</div>
<div id="sign">
    <h5>Parents signature</h5>
</div>


<div id="declaration">

<h5> I promise to abide by the Rules.Regulations and Orders of the School. if excluded my admission will be cancelled are removed by enrolling for study in any other school.I also declare that the statements i have made in the application are correct and complete </h5>


</div>



<div id="sign">
    <h5>Signature of candidate</h5>
</div>

<div id="declaration">

<h5>I hereby that the information given is true to the best of my knowledge</h5>


</div>

<div id="sign">
    <h5>Signature of the parent</h5>
</div>

<h4>(For Office Use)<h4>

<div id="office">
<div id="permission"> 
        <h5>Admission is Granted/Rejected</h5>
</div>
<div id="sign3">
    <h5>Head Master</h5>
</div>      
</div>  

<h4>(Enclosed copies)<h4>

<div id="container">

    <ul>
        <li><input type=checkbox> Transfer Certificate</li>
        <li><input type=checkbox> Study Certificate</li>
        <li><input type=checkbox> Caste Certificate</li>
        <li><input type=checkbox> Marks Memo</li>
        
</ul>
</div>

<hr />

<h4>Parents copy</h4>

<div class="grid">
    <div>Name Of the student  :<?php echo $name?></div>
    <div>Admission Number  :<?php echo $adnum?></div>  
    <div>Father Name  :<?php echo $father_name?></div>  
    <div>Aadhar card  :<?php echo $aadharnum?></div>  
    <div>Class  :<?php echo $class?></div>
    <div>Signature of Head Master</div>   
    <div>Phone Number  :<?php echo $mobileno?></div>  
        


<script>

window.print();
</script>

  

      



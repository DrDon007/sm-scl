<!DOCTYPE html>
<?php  $currency_symbol=$this->customlib->getSchoolCurrencyFormat();  ?>
<style type="text/css">
  .borderwhite{border-top-color: #fff !important;}
  .box-header>.box-tools {display: none;}
  .sidebar-collapse #barChart{height: 100% !important;}
  .sidebar-collapse #lineChart{height: 100% !important;}
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="content-wrapper" style="min-height: 946px;">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <!-- Respomsive slider -->
    <link href="<?php echo base_url(); ?>/css/responsive-calendar.css" rel="stylesheet">

    <h3 style="font-family:poppins;color:#535353 font-weight: 600;font-size: 24px;line-height: 36px; padding-left:15px;">Dashboard</h3>


    
    <div class="container-fluid">
    <div class="row">
  <div class="col-md-9">

  

  <?php 
  $bar_chart = true;
  $line_chart = true;
           if($this->module_lib->hasActive('fees_collection')){ 
          if($this->rbac->hasPrivilege('fees_awaiting_payment_widegts','can_view')){
            ?>
                <div class="col-xs-3">
                    <div class="div1">
                <p class="inner-text"><?php echo $this->lang->line('fees')." ".$this->lang->line('awaiting')." ".$this->lang->line('payment');?> </br>
                <span class="inner-text1"><?php echo $total_paid; ?>/<?php echo $total_fees?></span>
                </p>
               </div>
               </div>
             
           

            <?php
          } }
          ?>
          
      <?php 
      if($this->module_lib->hasActive('front_office')){
      if($this->rbac->hasPrivilege('conveted_leads_widegts','can_view')){

            ?>
        <div class="col-xs-3">
            <div class="div2">
                <p class="inner-text"> <?php echo $this->lang->line('converted')." ".$this->lang->line('leads')?></br>
                <span class="inner-text1"><?php  echo $total_complete+0; ?>/<?php echo $total_enquiry; ?></span>
               </p>
               </div>
               </div>
          <?php 
        } }
          if($this->rbac->hasPrivilege('staff_present_today_widegts','can_view')){

            ?>
            <div class="col-xs-3">
                <div class="div3">
                <p class="inner-text"><?php echo $this->lang->line('staff').' '.$this->lang->line('present').' '.$this->lang->line('today'); ?></br>
                <span class="inner-text1"><?php echo $Staffattendence_data+0; ?>/<?php echo $getTotalStaff_data; ?></span>
               </p> 
               </div>
               </div>
            <?php
          }
           if($this->module_lib->hasActive('student_attendance')){
            if($this->rbac->hasPrivilege('student_present_today_widegts','can_view')){
            ?>
            

           <div class="col-xs-3">
               <div class="div4">
                <p class="inner-text"><?php echo $this->lang->line('student').' '.$this->lang->line('present').' '.$this->lang->line('today'); ?></br>
                <span class="inner-text1"> <?php echo 0+$attendence_data['total_half_day']+$attendence_data['total_late']+$attendence_data['total_present'];?>/<?php echo $total_students ; ?></span>
               </p>
               </div>
               </div>
          <?php } }?>



            

          <div class="col-md-12">


                                <div class="expense_graph">
                                <h3 class="box-title"><?php echo $this->lang->line('fees_collection_&_expenses_for_session'); ?> <?php echo $this->setting_model->getCurrentSessionName(); ?></h3>

                                <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                            <div class="box-body">
                                      <div class="chart">
                                        <canvas id="lineChart" height="95"></canvas>
                                      </div>  
                                    </div>
                                        </div>
                                        </div>



          </div>


          <div class="row">


     <div class="col-md-6">  
                             <div class="enquiry1">
                             <p class="text_enquiry">Enquiry</p>
                             </div>

     </div>

     <div class="col-md-6">  
                             <div class="fees_collection">
                             <p class="text_enquiry">Fees Collection</p>
                                  <canvas id="barChart" height="205"></canvas>
                             </div>

     </div>


     </div>



  </div>


  <div class="col-md-3">
      
  <!-- <div class="rightbar"> -->
      <!-- Responsive calendar - START -->
    	<div class="responsive-calendar">
        <div class="controls">
            <h4><span data-head-year></span> <span data-head-month></span></h4>
        </div><hr/>
        <div class="day-headers">
          <div class="day header">Mon</div>
          <div class="day header">Tue</div>
          <div class="day header">Wed</div>
          <div class="day header">Thu</div>
          <div class="day header">Fri</div>
          <div class="day header">Sat</div>
          <div class="day header">Sun</div>
        </div>
        <div class="days" data-group="days">
          
        </div>
      </div>
      <!-- Responsive calendar - END -->
      <div class="notice">
        <p class="notice_text" >Notice Board</p>
      </div>
    <!-- </div> -->

    
    <script src="<?php echo base_url(); ?>/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/responsive-calendar.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".responsive-calendar").responsiveCalendar({
          time: '2021-09',
          events: {
            "2013-04-30": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},
            "2013-04-26": {"number": 1, "url": "http://w3widgets.com"}, 
            "2013-05-03":{"number": 1}, 
            "2013-06-12": {}}
        });
      });
    </script>








  </div>
</div>



    </div>



    


    <style>
    canvas {
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
  }
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<!-- <script src="<?php echo base_url() ?>backend/js/Chart.min.js"></script>
<script src="<?php echo base_url() ?>backend/js/utils.js"></script> -->
<script type="text/javascript">
 
// new Chart(document.getElementById("doughnut-chart"), {
//     type: 'doughnut',
//     data: {
//       labels: [<?php foreach($incomegraph as $value){ ?>"<?php echo $value['income_category'];?>", <?php } ?> ],
//       datasets: [
//         {
//           label: "Income",
//           backgroundColor: [<?php $s=1; foreach($incomegraph as $value){ ?>"<?php echo incomegraphColors($s++);?>", <?php if($s==8){ $s=1; }} ?> ],
//           data: [<?php $s=1; foreach($incomegraph as $value){ ?><?php echo $value['total'];?>, <?php } ?>]
//         }
//       ]
//     },
//      options: {
//                 responsive: true,
//                 circumference: Math.PI,
//                 rotation: -Math.PI,
//                 legend: {
//                     position: 'top',
//                 },
//                 title: {
//                     display: true,
                    
//                 },
//                 animation: {
//                     animateScale: true,
//                     animateRotate: true
//                 }
//             }
// });

// new Chart(document.getElementById("doughnut-chart1"), {
//     type: 'doughnut',
//     data: {
//       labels: [<?php foreach($expensegraph as $value){ ?>"<?php echo $value['exp_category'];?>", <?php } ?>],
//       datasets: [
//         {
//           label: "Population (millions)",
//           backgroundColor: [<?php $ss=1;foreach($expensegraph as $value){ ?>"<?php echo expensegraphColors($ss++); ?>", <?php if($ss==8){ $ss=1; }} ?>],
//           data: [<?php foreach($expensegraph as $value){ ?><?php echo $value['total'];?>, <?php } ?>]
//         }
//       ]
//     },
//    options: {
//                 responsive: true,
//                 circumference: Math.PI,
//                 rotation: -Math.PI,
//                 legend: {
//                     position: 'top',
//                 },
//                 title: {
//                     display: true,
                   
//                 },
//                 animation: {
//                     animateScale: true,
//                     animateRotate: true
//                 }
//             }
// });

<?php 
  if(($this->module_lib->hasActive('fees_collection'))){
    ?>
    $(function () {
        var areaChartOptions = {
            showScale: true,
            scaleShowGridLines: false,
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleGridLineWidth: 1,
            scaleShowHorizontalLines: true,
            scaleShowVerticalLines: true,
            bezierCurve: true,
            bezierCurveTension: 0.3,
            pointDot: false,
            pointDotRadius: 4,
            pointDotStrokeWidth: 1,
            pointHitDetectionRadius: 20,
            datasetStroke: true,
            datasetStrokeWidth: 2,
            datasetFill: true,

            maintainAspectRatio: true,
            responsive: true
        };
        var bar_chart = "<?php echo $bar_chart ?>";
        var line_chart = "<?php echo $line_chart ?>";
        if (line_chart) {


            var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
            var lineChart = new Chart(lineChartCanvas);
            var lineChartOptions = areaChartOptions;
            lineChartOptions.datasetFill = false;
            var yearly_collection_array = <?php echo json_encode($yearly_collection) ?>;
            var yearly_expense_array = <?php echo json_encode($yearly_expense) ?>;
            var total_month = <?php echo json_encode($total_month) ?>;
            var areaChartData_expense_Income = {
                labels: total_month,
                datasets: [
                    {
                        label: "Expense",
                        fillColor: " rgba(255, 135, 135, 0.33)",
                        strokeColor: " rgba(255, 135, 135, 0.33)",
                        pointColor: "rgba(233, 30, 99, 0.9)",
                        pointStrokeColor: "#c1c7d1",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: yearly_expense_array
                    },
                    {
                        label: "Collection",
                        fillColor: "rgba(41,134,147,1)",
                        strokeColor: "rgba(41,134,147,1)",
                        pointColor: "rgba(102, 170, 24, 0.9)",
                        pointStrokeColor: "rgba(41,134,147,1)",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(60,141,188,1)",
                        data: yearly_collection_array
                    }
                ]
            };


            lineChart.Line(areaChartData_expense_Income, lineChartOptions);
        }

        var current_month_days = <?php echo json_encode($current_month_days) ?>;
        var days_collection = <?php echo json_encode($days_collection) ?>;
        var days_expense = <?php echo json_encode($days_expense) ?>;

        var areaChartData_classAttendence = {
            labels: current_month_days,
            datasets: [
                {
                    label: "Electronics",
                    fillColor: "rgba(72,181,185,1)",
                    strokeColor: "rgba(72,181,185,1)",
                    pointColor: "rgba(72,181,185,1)",
                    pointStrokeColor: "#c1c7d1",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: days_collection
                },
                {
                    label: "Digital Goods",
                    fillColor: "rgba(233, 30, 99, 0.9)",
                    strokeColor: "rgba(233, 30, 99, 0.9)",
                    pointColor: "rgba(233, 30, 99, 0.9)",
                    pointStrokeColor: "rgba(233, 30, 99, 0.9)",
                    pointHighlightFill: "rgba(233, 30, 99, 0.9)",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: days_expense
                }
            ]
        };
        if (bar_chart) {
            var barChartCanvas = $("#barChart").get(0).getContext("2d");
            var barChart = new Chart(barChartCanvas);

            var barChartData = areaChartData_classAttendence;
            barChartData.datasets[1].fillColor = "rgba(233, 30, 99, 0.9)";
            barChartData.datasets[1].strokeColor = "rgba(233, 30, 99, 0.9)";
            barChartData.datasets[1].pointColor = "rgba(233, 30, 99, 0.9)";
            var barChartOptions = {
                scaleBeginAtZero: true,
                scaleShowGridLines: true,
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleGridLineWidth: 1,
                scaleShowHorizontalLines: false,
                scaleShowVerticalLines: false,
                barShowStroke: true,
                barStrokeWidth: 2,
                barValueSpacing: 5,
                barDatasetSpacing: 1,                
                responsive: true,
                maintainAspectRatio: true
            };
            barChartOptions.datasetFill = false;
            barChart.Bar(barChartData, barChartOptions);
        }
    });
    

    <?php
  }
?>
   

    $(document).ready(function () {

        $(document).on('click', '.close_notice', function () {
            var data = $(this).data();

 
            $.ajax({
                type: "POST",
                url: base_url + "admin/notification/read",
                data: {'notice': data.noticeid},
                dataType: "json",
                success: function (data) {
                    if (data.status == "fail") {

                        errorMsg(data.msg);
                    } else {
                        successMsg(data.msg);
                    }

                }
            });


        });
    });
</script>


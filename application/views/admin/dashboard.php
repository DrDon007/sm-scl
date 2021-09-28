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
    <section class="content">
       <div class="">
     
            <?php if($mysqlVersion && $sqlMode && strpos($sqlMode->mode,'ONLY_FULL_GROUP_BY') !== FALSE){ ?>
              <div class="alert alert-danger">
                Smart School may not work properly because ONLY_FULL_GROUP_BY is enabled, consult with your hosting provider to disable ONLY_FULL_GROUP_BY in sql_mode configuration.
              </div>
              <?php } ?>

                <?php
				$show=false;
				$role          = $this->customlib->getStaffRole();
        $role_id= json_decode($role)->id;
                foreach ($notifications as $notice_key => $notice_value) {
					
					if($role_id==7){
					$show=true;	
					}elseif(date($this->customlib->getSchoolDateFormat()) >= date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($notice_value->publish_date))){
						$show=true;
					}
					if($show){
                    ?>

                    <div class="dashalert alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="alertclose close close_notice" data-dismiss="alert" aria-label="Close" data-noticeid="<?php echo $notice_value->id; ?>"><span aria-hidden="true">&times;</span></button>

                        <a href="<?php echo site_url('admin/notification') ?>"><?php echo $notice_value->title; ?></a>
                    </div>

                    <?php
                }}
                ?>

            </div> 
            <h3 style="font-family:poppins;color:#535353 font-weight: 600;font-size: 24px;line-height: 36px; padding-left:15px;">Dashboard</h3>
        <div class="row">
          <?php 
           if($this->module_lib->hasActive('fees_collection')){ 
          if($this->rbac->hasPrivilege('fees_awaiting_payment_widegts','can_view')){
            ?>
         <div class="main">
         <div class="sub-main">
                <div class="div1">
                <p class="inner-text"><?php echo $this->lang->line('fees')." ".$this->lang->line('awaiting')." ".$this->lang->line('payment');?> </br>
                <span class="inner-text1"><?php echo $total_paid; ?>/<?php echo $total_fees?></span>
                </p>
               </div>
             
           

            <?php
          } }
          ?>
          
      <?php 
      if($this->module_lib->hasActive('front_office')){
      if($this->rbac->hasPrivilege('conveted_leads_widegts','can_view')){

            ?>
        <div class="div2">
                <p class="inner-text"> <?php echo $this->lang->line('converted')." ".$this->lang->line('leads')?></br>
                <span class="inner-text1"><?php  echo $total_complete+0; ?>/<?php echo $total_enquiry; ?></span>
               </p>
               </div>
          <?php 
        } }
          if($this->rbac->hasPrivilege('staff_present_today_widegts','can_view')){

            ?>
            <div class="div3">
                <p class="inner-text"><?php echo $this->lang->line('staff').' '.$this->lang->line('present').' '.$this->lang->line('today'); ?></br>
                <span class="inner-text1"><?php echo $Staffattendence_data+0; ?>/<?php echo $getTotalStaff_data; ?></span>
               </p> 
               </div>
            <?php
          }
           if($this->module_lib->hasActive('student_attendance')){
            if($this->rbac->hasPrivilege('student_present_today_widegts','can_view')){
            ?>
            

           <div class="div4">
                <p class="inner-text"><?php echo $this->lang->line('student').' '.$this->lang->line('present').' '.$this->lang->line('today'); ?></br>
                <span class="inner-text1"> <?php echo 0+$attendence_data['total_half_day']+$attendence_data['total_late']+$attendence_data['total_present'];?>/<?php echo $total_students ; ?></span>
               </p>
               </div>
          <?php } }?>
            </div>
            </div>
           </div><!--./row--> 
            

          <div class="row">
              <?php 
              $bar_chart = true;

                        if (($this->module_lib->hasActive('fees_collection')) || ($this->module_lib->hasActive('expense'))) {
                            if ($this->rbac->hasPrivilege('fees_collection_and_expense_monthly_chart', 'can_view')) {
                               
                                $div_rol = 3;
                                $userdata = $this->customlib->getUserData();


                                ?>  
                    
                               <!-- <div class="expense_graph">
                                <div class="box box1-primary borderwhite">
                                    <div class="box-header with-border">
                                    <p class="text_fees" >Income & Expenses</p>   
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>

                                    <div class="box-body">
                                      <div class="chart">
                                      <canvas id="barChart" height="298" width="943" style="width: 755px; height: 239px;"></canvas>                                      </div>  
                                    </div>
                                   
                                </div>
                                </div> -->
                                <div class="expense_graph">
                                <div class="box box-primary borderwhite">
                                    <div class="box-header with-border">
                                    <h3 class="box-title"><?php echo $this->lang->line('fees_collection_&_expenses_for_session'); ?> <?php echo $this->setting_model->getCurrentSessionName(); ?></h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>

                                    <div class="box-body">
                                      <div class="chart">
                                        <canvas id="lineChart" height="95"></canvas>
                                      </div>  
                                    </div>
                                   
                                </div>
                            </div>


                          <div class="bottom">
                              <div class="enquiry1">
                              <p class="text_enquiry">Enquiry</p>

                              </div>
                              <div class="fees_collection">
                                  <p class="text_enquiry">Fees Collection</p>
                                  <canvas id="barChart" height="205"></canvas>
                                  
                              </div>
                          <div style="clear: both;"></div>
                          </div>
           
              <?php }  }?>
              <?php
               if($this->module_lib->hasActive('income')){ 
               if($this->rbac->hasPrivilege('income_donut_graph','can_view')){
                ?>
        
             <?php } }
                ?>
          </div><!--./row--> 

           <div class="row">
             <?php
                  $line_chart = true;
                            if (($this->module_lib->hasActive('fees_collection')) || ($this->module_lib->hasActive('expense'))) { if ($this->rbac->hasPrivilege('fees_collection_and_expense_yearly_chart', 'can_view')) {
                                $div_rol = 3;
                                
                                ?>
                          
        
              <?php 
                        }  } 
                        if($this->module_lib->hasActive('expense')){ 
                        ?>
            <?php   if($this->rbac->hasPrivilege('expense_donut_graph','can_view')){ ?>
         
          <?php } }?>
          </div><!--./row-->

          

           
      <div class="row">    
         
          
           <?php
            if($this->module_lib->hasActive('fees_collection')){ 
            if($this->rbac->hasPrivilege('fees_overview_widegts','can_view')){
            ?>
           
            <?php
           } }
            if($this->module_lib->hasActive('front_office')){
           if($this->rbac->hasPrivilege('enquiry_overview_widegts','can_view')){
            ?>
           

            <?php
           }}
      
            if($this->module_lib->hasActive('library')){
 if($this->rbac->hasPrivilege('book_overview_widegts','can_view')){
            ?>
             

          
<?php } }
     if($this->module_lib->hasActive('student_attendance')){
    if($this->rbac->hasPrivilege('today_attendance_widegts','can_view')){
      ?>
     
      <?php
    } }


            $currency_symbol = $this->customlib->getSchoolCurrencyFormat();
         
            $div_col = 12;
            $div_rol = 12;
            $bar_chart = true;
            $line_chart = true;
            if ($this->rbac->hasPrivilege('staff_role_count_widget', 'can_view')) {
                $div_col = 9;
                $div_rol = 12;
            }

            $widget_col = array();
            if ($this->rbac->hasPrivilege('Monthly fees_collection_widget', 'can_view')) {
                $widget_col[0] = 1;
                $div_rol = 3;
            }

            if ($this->rbac->hasPrivilege('monthly_expense_widget', 'can_view')) {
                $widget_col[1] = 2;
                $div_rol = 3;
            }

            if ($this->rbac->hasPrivilege('student_count_widget', 'can_view')) {
                $widget_col[2] = 3;
                $div_rol = 3;
            }
            $div = sizeof($widget_col);
            if (!empty($widget_col)) {
                $widget = 12 / $div;
            } else {

                $widget = 12;
            }
            ?> 


      <div class="row">

          
            <?php if ($this->rbac->hasPrivilege('staff_role_count_widget', 'can_view')) {
              // print_r($roles);
                ?>

      
            <?php } ?>
          </div><!--./row-->
            
       

           
                    
           
         

        </div><!--./row-->


</div>
<div id="newEventModal" class="modal fade " role="dialog">
    <div class="modal-dialog modal-dialog2 modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo "Add New Event"; ?></h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <form role="form"  id="addevent_form" method="post" enctype="multipart/form-data" action="">
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1"><?php echo $this->lang->line('event'); ?> <?php echo $this->lang->line('title'); ?></label><small class="req"> *</small>
                            <input class="form-control" name="title" id="input-field"> 
                            <span class="text-danger"><?php echo form_error('title'); ?></span>

                        </div>

                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1"><?php echo $this->lang->line('description'); ?></label>
                            <textarea name="description" class="form-control" id="desc-field"></textarea></div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1"><?php echo $this->lang->line('event'); ?> <?php echo $this->lang->line('date'); ?></label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" autocomplete="off" name="event_dates" class="form-control pull-right" id="date-field">
                            </div>
                              <!-- <input class="form-control" type="text" autocomplete="off"  name="event_dates" id="date-field"> --></div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1"><?php echo $this->lang->line('event'); ?> <?php echo $this->lang->line('color'); ?></label>
                            <input type="hidden" name="eventcolor" autocomplete="off" id="eventcolor" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <?php //print_r($event_colors)  ?>

                            <?php
                            $i = 0;
                            $colors = '';
                            foreach ($event_colors as $color) {
                                $color_selected_class = 'cpicker-small';
                                if ($i == 0) {
                                    $color_selected_class = 'cpicker-big';
                                }
                                $colors .= "<div class='calendar-cpicker cpicker " . $color_selected_class . "' data-color='" . $color . "' style='background:" . $color . ";border:1px solid " . $color . "; border-radius:100px'></div>";
                                //   echo $colors ;
                                $i++;
                            }
                            echo '<div class="cpicker-wrapper">';
                            echo $colors;
                            echo '</div>';
                            ?>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1"><?php echo $this->lang->line('event'); ?> <?php echo $this->lang->line('type'); ?></label>
                            <br/>
                            <label class="radio-inline">

                                <input type="radio" name="event_type" value="public" id="public"><?php echo $this->lang->line('public'); ?>
                            </label>
                            <label class="radio-inline">

                                <input type="radio" name="event_type" value="private" checked id="private"><?php echo $this->lang->line('private'); ?>
                            </label>
                            <label class="radio-inline">

                                <input type="radio" name="event_type" value="sameforall" id="public"><?php echo $this->lang->line('all'); ?> <?php echo json_decode($role)->name; ?>
                            </label>
                            <label class="radio-inline">

                                <input type="radio" name="event_type" value="protected" id="public"><?php echo $this->lang->line('protected'); ?>
                            </label> </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="submit" class="btn btn-primary submit_addevent pull-right" value="<?php echo $this->lang->line('save'); ?>"></div> </form>
                </div>

            </div>
        </div>
    </div>
</div>  
<div id="viewEventModal" class="modal fade " role="dialog">
    <div class="modal-dialog modal-dialog2 modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $this->lang->line('edit') ?> <?php echo $this->lang->line('event') ?></h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <form role="form"   method="post" id="updateevent_form"  enctype="multipart/form-data" action="" >
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1"><?php echo $this->lang->line('event') ?><?php echo $this->lang->line('title') ?></label>
                            <input class="form-control" name="title" placeholder="Event Title" id="event_title"> 
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1"><?php echo $this->lang->line('description') ?></label>
                            <textarea name="description" class="form-control" placeholder="Event Description" id="event_desc"></textarea></div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1"><?php echo $this->lang->line('event') ?><?php echo $this->lang->line('date') ?></label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" autocomplete="off" name="eventdates" class="form-control pull-right" id="eventdates">
                            </div>
                              <!-- <input class="form-control" type="text" autocomplete="off" name="eventdates" placeholder="Event Dates" id="eventdates"> --></div>
                        <input type="hidden" name="eventid" id="eventid">
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1"><?php echo $this->lang->line('event') ?><?php echo $this->lang->line('color') ?></label>
                            <input type="hidden" name="eventcolor" autocomplete="off" placeholder="Event Color" id="event_color" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <?php //print_r($event_colors)  ?>

                            <?php
                            $i = 0;
                            $colors = '';
                            foreach ($event_colors as $color) {
                                $colorid = trim($color, "#");
                                // print_r($colorid);
                                $color_selected_class = 'cpicker-small';
                                if ($i == 0) {
                                    $color_selected_class = 'cpicker-big';
                                }
                                $colors .= "<div id=" . $colorid . " class='calendar-cpicker cpicker " . $color_selected_class . "' data-color='" . $color . "' style='background:" . $color . ";border:1px solid " . $color . "; border-radius:100px'></div>";
                                //   echo $colors ;
                                $i++;
                            }
                            echo '<div class="cpicker-wrapper selectevent">';
                            echo $colors;
                            echo '</div>';
                            ?>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1"><?php echo $this->lang->line('event') ?><?php echo $this->lang->line('type') ?></label>
                            <label class="radio-inline">

                                <input type="radio" name="eventtype" value="public" id="public"><?php echo $this->lang->line('public') ?>
                            </label>
                            <label class="radio-inline">

                                <input type="radio" name="eventtype" value="private" id="private"><?php echo $this->lang->line('private') ?> 
                            </label>
                            <label class="radio-inline">

                                <input type="radio" name="eventtype" value="sameforall" id="public"><?php echo $this->lang->line('all') ?> <?php echo json_decode($role)->name; ?>
                            </label>
                            <label class="radio-inline">

                                <input type="radio" name="eventtype" value="protected" id="public"><?php echo $this->lang->line('protected') ?> 
                            </label>
                        </div>

                        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">

                            <input type="submit" class="btn btn-primary submit_update pull-right" value="<?php echo $this->lang->line('save'); ?>">
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                            <?php if ($this->rbac->hasPrivilege('calendar_to_do_list', 'can_delete')) { ?>
                                <input type="button" id="delete_event" class="btn btn-primary submit_delete pull-right" value="<?php echo $this->lang->line('delete'); ?>">
<?php } ?>
                        </div>       
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>  
<div class="rightbar">
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
    </div>
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





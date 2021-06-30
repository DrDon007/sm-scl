<html >
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">           
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <meta http-equiv="Cache-control" content="no-cache">
            <meta name="theme-color" content="#424242" />
         <link href="http://localhost/gitSm-scl/sm-scl/uploads/school_content/admin_small_logo/1.png" rel="shortcut icon" type="image/x-icon">
            
            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/dist/css/jquery.mCustomScrollbar.min.css">
                <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/dist/css/style-main.css">
            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/dist/themes/blue/skins/skin-darkblue.css">
            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/dist/themes/blue/ss-main-darkblue.css">
            
            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/dist/css/font-awesome.min.css">
            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/dist/css/ionicons.min.css">
            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/plugins/iCheck/flat/blue.css">
            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/plugins/morris/morris.css">
            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/plugins/datepicker/datepicker3.css">
            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/plugins/colorpicker/bootstrap-colorpicker.css">

            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/plugins/daterangepicker/daterangepicker-bs3.css">
            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/dist/css/custom_style.css">
            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/datepicker/css/bootstrap-datetimepicker.css">
            <!--file dropify-->
            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/dist/css/dropify.min.css">
            <!--file nprogress-->
            <link href="http://localhost/gitSm-scl/sm-scl/backend/dist/css/nprogress.css" rel="stylesheet">

            <!--print table-->
            <link href="http://localhost/gitSm-scl/sm-scl/backend/dist/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
            <link href="http://localhost/gitSm-scl/sm-scl/backend/dist/datatables/css/buttons.dataTables.min.css" rel="stylesheet">
            <link href="http://localhost/gitSm-scl/sm-scl/backend/dist/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
            <!--print table mobile support-->
            <link href="http://localhost/gitSm-scl/sm-scl/backend/dist/datatables/css/responsive.dataTables.min.css" rel="stylesheet">
            <link href="http://localhost/gitSm-scl/sm-scl/backend/dist/datatables/css/rowReorder.dataTables.min.css" rel="stylesheet">

            <!--language css-->
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
            <link rel="stylesheet" type="text/css" href="http://localhost/gitSm-scl/sm-scl/backend/dist/css/bootstrap-select.min.css">


            <script src="http://localhost/gitSm-scl/sm-scl/backend/custom/jquery.min.js"></script>
            <script src="http://localhost/gitSm-scl/sm-scl/backend/dist/js/moment.min.js"></script>
            <script src="http://localhost/gitSm-scl/sm-scl/backend/datepicker/js/bootstrap-datetimepicker.js"></script>
            <script src="http://localhost/gitSm-scl/sm-scl/backend/plugins/colorpicker/bootstrap-colorpicker.js"></script>
            <script src="http://localhost/gitSm-scl/sm-scl/backend/datepicker/date.js"></script>
            <script src="http://localhost/gitSm-scl/sm-scl/backend/dist/js/jquery-ui.min.js"></script>
            <script src="http://localhost/gitSm-scl/sm-scl/backend/js/school-custom.js"></script>
            <script src="http://localhost/gitSm-scl/sm-scl/backend/js/school-admin-custom.js"></script>
            <script src="http://localhost/gitSm-scl/sm-scl/backend/js/sstoast.js"></script>
            
            <!-- fullCalendar -->
            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/fullcalendar/dist/fullcalendar.min.css">
            <link rel="stylesheet" href="http://localhost/gitSm-scl/sm-scl/backend/fullcalendar/dist/fullcalendar.print.min.css" media="print">
        


            <script type="text/javascript">
                var baseurl = "http://localhost/gitSm-scl/sm-scl/";
                var chk_validate="";

            </script>
        
        <style type="text/css">
                span.flag-icon.flag-icon-us{text-orientation: mixed;}
                .school-logo{margin:5px auto;width:100px;padding:3px;}
        </style>
    </head>
<div class="content-wrapper" style="min-height: 946px;">
       <section class="content">
        <div class="row">
            <div class="col-md-3"> 
                <div class="box box-primary"  <?php
                if ($student["is_active"] == "no") {
                    echo "style='background-color:#f0dddd;'";
                }
                ?>>
                    <div class="box-body box-profile">
                        <img style="float:left" class="school-logo img-responsive" src="<?=base_url();?>./uploads/school_content/admin_small_logo/1.png" alt="school logo">
                        <img style="float:right" class="profile-user-img img-responsive" src="<?php
                        if (!empty($student['image'])) {
                            echo base_url() . $student['image'];
                        } else {
                            echo base_url() . "uploads/student_images/no_image.png";
                        }
                        ?>" alt="User profile picture">
                        <br><br>
                        <h3 class="profile-username text-center">BALA BHARATHI VIDYALAYAM</h3>                        
                        <h2 class="profile-username text-center" style="color:blue;">Details of - <?php echo $student['firstname'] . " " . $student['lastname']; ?> </h2>

                        <ul class="list-group list-group-unbordered" style="list-style-type: none;">
                            <?php
                            if ($student['is_active'] == 'no') {                              ?>
                                <li class="list-group-item listnoback">
                                    <b><?php echo $this->lang->line('disable')." ".$this->lang->line('reason') ?>:</b> <span class="pull-right text-aqua"><?php echo $reason_data['reason'] ?></span>
                                </li>
                                <li class="list-group-item listnoback">
                                    <b><?php  echo $this->lang->line('disable')." ".$this->lang->line('note') ?>:</b> <span class="pull-right text-aqua"><?php echo $student['dis_note'] ?></span>
                                </li>
                            <?php } ?> 
                            <li class="list-group-item listnoback">
                                <b><?php echo $this->lang->line('admission_no'); ?>:</b> <a class="pull-right text-aqua"><?php echo $student['admission_no']; ?></a>
                            </li>
                        <?php 
                            if ($sch_setting->roll_no) { ?> 
                            <li class="list-group-item listnoback">
                                <b><?php echo $this->lang->line('roll_no'); ?>:</b> <a class="pull-right text-aqua"><?php echo $student['roll_no']; ?></a>
                            </li>
                            <?php 
                        } ?>
                            <li class="list-group-item listnoback">
                                <b><?php echo $this->lang->line('class'); ?>:</b> <a class="pull-right text-aqua"><?php echo $student['class'] . " (" . $session . ")"; ?></a>
                            </li>
                            <li class="list-group-item listnoback">
                                <b><?php echo $this->lang->line('section'); ?>:</b> <a class="pull-right text-aqua"><?php echo $student['section']; ?></a>
                            </li>
                            <?php if ($sch_setting->rte) { ?>
                            <li class="list-group-item listnoback">
                                <b><?php echo $this->lang->line('rte'); ?></b> :<a class="pull-right text-aqua"><?php echo $student['rte']; ?></a>
                            </li>
                            <?php } ?>
                            <li class="list-group-item listnoback">
                                <b><?php echo $this->lang->line('gender'); ?>:</b> <a class="pull-right text-aqua"><?php echo $this->lang->line(strtolower($student['gender'])); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
                if (!empty($siblings)) {
                    ?>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><?php echo $this->lang->line('sibling'); ?></h3>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body">
                            <?php
                            foreach ($siblings as $sibling_key => $sibling_value) {
                                ?>
                                <div class="box box-widget widget-user-2">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div class="siblingview">
                                        <img class="" src="<?php echo base_url() . $sibling_value->image; ?>" alt="User Avatar">
                                        <h4><a href="<?php echo site_url('student/view/' . $sibling_value->id) ?>"><?php echo $sibling_value->firstname . " " . $sibling_value->lastname ?></a></h4>
                                    </div>
                                    <div class="box-footer no-padding">
                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item">
                                                <b><?php echo $this->lang->line('admission_no'); ?></b> <a class="pull-right text-aqua"><?php echo $sibling_value->admission_no; ?></a>
                                            </li>
                                            <li class="list-group-item">
                                                <b><?php echo $this->lang->line('class'); ?></b> <a class="pull-right text-aqua"><?php echo $sibling_value->class; ?></a>
                                            </li> 
                                            <li class="list-group-item">
                                                <b><?php echo $this->lang->line('section'); ?></b> <a class="pull-right text-aqua"><?php echo $sibling_value->section; ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <?php
                }
                ?>
 
            </div>
            <div class="col-md-9">

                <div class="nav-tabs-custom theme-shadow">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true"><?php echo $this->lang->line('profile'); ?></a></li>                       
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="activity">                        
                            <div class="tshadow mb25 bozero">
                                <div class="table-responsive around10 pt0">
                                    <table class="table table-hover table-striped tmb0">
                                        <tbody> 
                                            <?php if ($sch_setting->admission_date) {  ?>
                                            <tr>
                                                <td>Admission Date</td>
                                                <td>                                          
                                                    <?php
                                                    if (!empty($student['admission_date'])) {
                                                        echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($student['admission_date']));
                                                    }
                                                    ?></td>
                                            </tr>
                                            <?php } ?>
                                            <tr>
                                                <td><?php echo $this->lang->line('date_of_birth'); ?></td>
                                                <td><?php
                                                    if (!empty($student['dob'])) {
                                                        echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($student['dob']));
                                                    }
                                                    ?></td>
                                            </tr>
                                            <?php if ($sch_setting->category) {  ?>
                                            <tr>
                                                <td><?php echo $this->lang->line('category'); ?></td>
                                                <td>
                                                    <?php
                                                    foreach ($category_list as $value) {
                                                        if ($student['category_id'] == $value['id']) {
                                                            echo $value['category'];
                                                        }
                                                    }
                                                    ?>                                         
                                                </td>
                                            </tr>
                                            <?php } if ($sch_setting->mobile_no) {  ?>
                                            <tr>
                                                <td><?php echo $this->lang->line('mobile_no'); ?></td>
                                                <td><?php echo $student['mobileno']; ?></td>
                                            </tr>
                                            <?php } if ($sch_setting->cast) {  ?>
                                            <tr>
                                                <td><?php echo $this->lang->line('cast'); ?></td>
                                                <td><?php echo $student['cast']; ?></td>
                                            </tr>
                                            <?php } if ($sch_setting->religion) {  ?>
                                            <tr>
                                                <td><?php echo $this->lang->line('religion'); ?></td>
                                                <td><?php echo $student['religion']; ?></td>
                                            </tr>
                                            <?php } if ($sch_setting->student_email) {  ?>
                                            <tr>
                                                <td><?php echo $this->lang->line('email'); ?></td>
                                                <td><?php echo $student['email']; ?></td>
                                            </tr>
                                            <?php } ?>
                                            <?php
                                            $cutom_fields_data = get_custom_table_values($student['id'], 'students');
                                            if (!empty($cutom_fields_data)) {
                                                foreach ($cutom_fields_data as $field_key => $field_value) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $field_value->name; ?></td>
                                                        <td>
                                                            <?php
                                                            if (is_string($field_value->field_value) && is_array(json_decode($field_value->field_value, true)) && (json_last_error() == JSON_ERROR_NONE)) {
                                                                $field_array = json_decode($field_value->field_value);
                                                                echo "<ul class='student_custom_field'>";
                                                                foreach ($field_array as $each_key => $each_value) {
                                                                    echo "<li>" . $each_value . "</li>";
                                                                }
                                                                echo "</ul>";
                                                            } else {
                                                                $display_field = $field_value->field_value;

                                                                if ($field_value->type == "link") {
                                                                    $display_field = "<a href=" . $field_value->field_value . " target='_blank'>" . $field_value->field_value . "</a>";
                                                                }
                                                                echo $display_field;
                                                            }
                                                            ?>
                                                        </td> 
                                                    </tr>

                                                    <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div> 
                            </div> 
                            <div class="tshadow mb25 bozero">   
                                <h3 class="pagetitleh2"><?php echo $this->lang->line('address'); ?> <?php echo $this->lang->line('detail'); ?></h3>
                                <div class="table-responsive around10 pt0">  
                                    <table class="table table-hover table-striped tmb0"><tbody>
                                            <?php 
                                            if ($sch_setting->current_address) 
                                            { 
                                                ?>
                                                <tr>
                                                    <td><?php echo $this->lang->line('current_address'); ?></td>
                                                    <td><?php echo $student['current_address']; ?></td>
                                                </tr>
                                            <?php 
                                            } 
                                            if ($sch_setting->permanent_address) 
                                            { 
                                                ?>
                                                <tr>
                                                    <td><?php echo $this->lang->line('permanent_address'); ?></td>
                                                    <td><?php echo $student['permanent_address']; ?></td>
                                                </tr>
                                            <?php 
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
                            <div class="tshadow mb25 bozero">      
                                <h3 class="pagetitleh2"><?php echo $this->lang->line('parent'); ?> / <?php echo $this->lang->line('guardian_details'); ?> </h3>
                                <div class="table-responsive around10 pt10">
                                    <table class="table table-hover table-striped tmb0">
                                        <?php if ($sch_setting->father_name) {  ?>
                                        <tr>
                                            <td><?php echo $this->lang->line('father_name'); ?></td>
                                            <td><?php echo $student['father_name']; ?></td>
                                            <td rowspan="3"><img class="profile-user-img img-responsive img-circle" src="<?php
                                                if (!empty($student["father_pic"])) {
                                                    echo base_url() . $student["father_pic"];
                                                } else {
                                                    echo base_url() . "uploads/student_images/no_image.png";
                                                }
                                                ?>" ></td>
                                        </tr>
                                        <?php } if ($sch_setting->father_phone) {  ?>
                                        <tr>
                                            <td><?php echo $this->lang->line('father_phone'); ?></td>
                                            <td><?php echo $student['father_phone']; ?></td>
                                        </tr>
                                        <?php } if ($sch_setting->father_occupation) { ?>
                                        <tr>
                                            <td><?php echo $this->lang->line('father_occupation'); ?></td>
                                            <td><?php echo $student['father_occupation']; ?></td>
                                        </tr>
                                        <?php } if ($sch_setting->mother_name) {?>
                                        <tr>
                                            <td><?php echo $this->lang->line('mother_name'); ?></td>
                                            <td><?php echo $student['mother_name']; ?></td>
                                            <td rowspan="3"><img class="profile-user-img img-responsive img-circle" src="<?php
                                                if (!empty($student["mother_pic"])) {
                                                    echo base_url() . $student["mother_pic"];
                                                } else {
                                                    echo base_url() . "uploads/student_images/no_image.png";
                                                }
                                                ?>" ></td>
                                        </tr>
                                        <?php } if ($sch_setting->mother_phone) { ?>
                                        <tr>
                                            <td><?php echo $this->lang->line('mother_phone'); ?></td>
                                            <td><?php echo $student['mother_phone']; ?></td>

                                        </tr>
                                        <?php } if ($sch_setting->mother_occupation) { ?>
                                        <tr>
                                            <td><?php echo $this->lang->line('mother_occupation'); ?></td>
                                            <td><?php echo $student['mother_occupation']; ?></td>
                                        </tr>
                                        <?php } ?>
                                        <tr>
                                            <td><?php echo $this->lang->line('guardian_name'); ?></td>
                                            <td><?php echo $student['guardian_name']; ?></td>
                                            <td rowspan="3"><img class="profile-user-img img-responsive img-circle" src="<?php
                                                if (!empty($student["guardian_pic"])) {
                                                    echo base_url() . $student["guardian_pic"];
                                                } else {
                                                    echo base_url() . "uploads/student_images/no_image.png";
                                                }
                                                ?>" ></td>
                                        </tr>
                                        <?php  if ($sch_setting->guardian_email) { ?>
                                        <tr>
                                            <td><?php echo $this->lang->line('guardian_email'); ?></td>
                                            <td><?php echo $student['guardian_email']; ?></td>
                                        </tr>
                                        <?php } if ($sch_setting->guardian_relation) { ?>
                                        <tr>
                                            <td><?php echo $this->lang->line('guardian_relation'); ?></td>
                                            <td><?php echo $student['guardian_relation']; ?></td>
                                        </tr>
                                        <?php } ?>
                                        <tr style="margin-bottom:5px;padding-bottom:5px;">
                                            <td><?php echo $this->lang->line('guardian_phone'); ?></td>
                                            <td><?php echo $student['guardian_phone']; ?></td>
                                            <td rowspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $this->lang->line('guardian_occupation'); ?></td>
                                            <td><?php echo $student['guardian_occupation']; ?></td>
                                            <td rowspan="3"></td>                                            
                                        </tr>
                                        <?php if ($sch_setting->guardian_address) { ?>
                                        <tr>
                                            <td><?php echo $this->lang->line('guardian_address'); ?></td>
                                            <td><?php echo $student['guardian_address']; ?></td>
                                            <td rowspan="3"></td>                                            
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                                <?php if ($sch_setting->route_list) { ?>
                                <?php
                                if ($this->module_lib->hasActive('transport')) {

                                if ($student['vehroute_id'] != 0) {
                                    ?>
                            <div class="tshadow mb25  bozero">    
                                        <h3 class="pagetitleh2"><?php echo $this->lang->line('route') . " " . $this->lang->line('details') ?></h3>

                                        <div class="table-responsive around10 pt0">
                                            <table class="table table-hover table-striped tmb0">
                                                <tbody>

                                                    <tr>
                                                        <td><?php echo $this->lang->line('route'); ?></td>
                                                        <td><?php echo $student['route_title']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('vehicle_no'); ?></td>
                                                        <td><?php echo $student['vehicle_no']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('driver_name'); ?></td>
                                                        <td><?php echo $student['driver_name']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('driver_contact'); ?></td>
                                                        <td><?php echo $student['driver_contact']; ?></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                            </div> 

                                    <?php
                                }
                                } }
                                ?>
                                <?php if ($sch_setting->hostel_id) { 
                                if ($this->module_lib->hasActive('hostel')) {

                                    if ($student['hostel_room_id'] != 0) {
                                        ?>
                            <div class="tshadow mb25  bozero">    
                                <h3 class="pagetitleh2"><?php echo $this->lang->line('hostel') . " " . $this->lang->line('details') ?></h3>
                                        <div class="table-responsive around10 pt10">
                                            <table class="table table-hover table-striped tmb0">
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('hostel'); ?></td>
                                                        <td><?php echo $student['hostel_name']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('room_no'); ?></td>
                                                        <td><?php echo $student['room_no']; ?></td>
                                                    </tr>   
                                                    <tr>
                                                        <td  class="col-md-4"><?php echo $this->lang->line('room_type'); ?></td>
                                                        <td  class="col-md-5"><?php echo $student['room_type']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                            </div> 

                                    <?php
                                    }
                                } }
                                ?>


                            <div class="tshadow mb25 bozero">      
                                <h3 class="pagetitleh2"><?php echo $this->lang->line('miscellaneous_details'); ?></h3>
                                <div class="table-responsive around10 pt10">
                                    <table class="table table-hover table-striped tmb0">
                                        <tbody>
                                            <?php if ($sch_setting->is_blood_group) { ?>
                                            <tr>
                                                <td  class="col-md-4"><?php echo $this->lang->line('blood_group'); ?></td>
                                                <td  class="col-md-5"><?php echo $student['blood_group']; ?></td>
                                                <td rowspan="3"></td>
                                            </tr>
                                            <?php } if ($sch_setting->is_student_house) { ?>
                                            <tr>
                                                <td  class="col-md-4"><?php echo $this->lang->line('house'); ?></td>
                                                <td  class="col-md-5"><?php echo $student['house_name']; ?></td>
                                                <td rowspan="3"></td>
                                            </tr>
                                            <?php } if ($sch_setting->student_height) {  ?>
                                            <tr>
                                                <td  class="col-md-4"><?php echo $this->lang->line('height'); ?></td>
                                                <td  class="col-md-5"><?php echo $student['height']; ?></td>
                                                <td rowspan="3"></td>
                                            </tr>
                                            <?php } if ($sch_setting->student_weight) { ?>
                                            <tr>
                                                <td  class="col-md-4"><?php echo $this->lang->line('weight'); ?></td>
                                                <td  class="col-md-5"><?php echo $student['weight']; ?></td>
                                                <td rowspan="3"></td>
                                            </tr>
                                            <?php } if ($sch_setting->measurement_date) { ?>
                                            <tr>
                                                <td  class="col-md-4"><?php echo $this->lang->line('measurement_date'); ?></td>
                                                <td  class="col-md-5"><?php
                                                    if (!empty($student['measurement_date'])) {
                                                        echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($student['measurement_date']));
                                                    }
                                                    ?></td>
                                                     <td rowspan="3"></td>
                                            </tr>
                                            <?php } if ($sch_setting->previous_school_details) {  ?>
                                            <tr>
                                                <td  class="col-md-4"><?php echo $this->lang->line('previous_school_details'); ?></td>
                                                <td  class="col-md-5"><?php echo $student['previous_school']; ?></td>
                                            </tr>
                                            <?php } if ($sch_setting->national_identification_no) { ?>
                                            <tr>
                                                <td  class="col-md-4"><?php echo $this->lang->line('national_identification_no'); ?></td>
                                                <td  class="col-md-5"><?php echo $student['adhar_no']; ?></td>
                                            </tr>
                                            <?php } if ($sch_setting->local_identification_no) { ?>
                                            <tr>
                                                <td  class="col-md-4"><?php echo $this->lang->line('local_identification_no'); ?></td>
                                                <td class="col-md-5"><?php echo $student['samagra_id']; ?></td>
                                            </tr>
                                            <?php } if ($sch_setting->bank_account_no) { ?>
                                            <tr>
                                                <td  class="col-md-4"><?php echo $this->lang->line('bank_account_no'); ?></td>
                                                <td class="col-md-5"><?php echo $student['bank_account_no']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-4"><?php echo $this->lang->line('bank_name'); ?></td>
                                                <td class="col-md-5"><?php echo $student['bank_name']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-4"><?php echo $this->lang->line('ifsc_code'); ?></td>
                                                <td class="col-md-5"><?php echo $student['ifsc_code']; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
                    </div>                      
                        
                </div>
            </div>
        </div>                                                                           
    </section>
</div>

<script type="text/javascript">
    $("#myTimelineButton").click(function () {
        $("#reset").click();
        $('.transport_fees_title').html("<b><?php echo $this->lang->line('add'); ?> <?php echo $this->lang->line('timeline'); ?></b>");
        $('#myTimelineModal').modal({
            backdrop: 'static',
            keyboard: false,
            show: true

        });
    });
    $(".myTransportFeeBtn").click(function () {
        $("span[id$='_error']").html("");
        $('#transport_amount').val("");
        $('#transport_amount_discount').val("0");
        $('#transport_amount_fine').val("0");
        var student_session_id = $(this).data("student-session-id");
        $('.transport_fees_title').html("<b>Upload Document</b>");
        $('#transport_student_session_id').val(student_session_id);
        $('#myTransportFeesModal').modal({
            backdrop: 'static',
            keyboard: false,
            show: true

        });
    });



</script>
<div class="modal fade" id="myTimelineModal" role="dialog">
    <div class="modal-dialog modal-sm400">      
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title title transport_fees_title"></h4>
            </div>
            <div class="">
                <div class="">
                   

                    <form  id="timelineform" name="timelineform" method="post"  enctype="multipart/form-data">
                         <div class="modal-body pt0 pb0">
                            <?php echo $this->customlib->getCSRF(); ?>
                            <div id='timeline_hide_show' class="row">                                                    
                                <input type="hidden" name="student_id" value="<?php echo $student["id"] ?>" id="student_id">
                                
                                <div class=" col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('title'); ?></label><small class="req"> *</small>
                                        <input id="timeline_title" name="timeline_title" placeholder="" type="text" class="form-control"  />
                                        <span class="text-danger"><?php echo form_error('timeline_title'); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('date'); ?></label><small class="req"> *</small>
                                        <input id="timeline_date" value="<?php echo set_value('timeline_date', date($this->customlib->getSchoolDateFormat())); ?>" name="timeline_date" placeholder="" type="text" class="form-control"  />
                                        <span class="text-danger"><?php echo form_error('timeline_date'); ?></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('description'); ?></label>
                                        <textarea id="timeline_desc" name="timeline_desc" placeholder=""  class="form-control"></textarea>
                                        <span class="text-danger"><?php echo form_error('description'); ?></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('attach_document'); ?></label>
                                        <div class=""><input id="timeline_doc_id" name="timeline_doc" placeholder="" type="file"  class="filestyle form-control" data-height="40"  value="<?php echo set_value('timeline_doc'); ?>" />
                                            <span class="text-danger"><?php echo form_error('timeline_doc'); ?></span></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="labeltopmb0"><?php echo $this->lang->line('visible'); ?></label>
                                        <input id="visible_check" checked="checked" name="visible_check" value="yes" placeholder="" type="checkbox"   />

                                    </div>
                                </div>
                              </div>
                            </div>  
                              <div class="modal-footer">
                                <button type="submit"  class="btn btn-info pull-right"><?php echo $this->lang->line('save'); ?></button>
                                <button type="reset" id="reset" style="display: none"  class="btn btn-info pull-right">Reset</button>
                            </div>  
                            
                           
                        </form>
                                     
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myTransportFeesModal" role="dialog">
    <div class="modal-dialog modal-sm400">      
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title title text-center transport_fees_title"></h4>
            </div>
            <div class="">
                <div class="">
                    <div class="">
                        <input  type="hidden" class="form-control" id="transport_student_session_id"  value="0" readonly="readonly"/>
                        <form id="form1" action="<?php echo site_url('student/create_doc') ?>"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                            <?php echo $this->customlib->getCSRF(); ?>
                         <div class="modal-body pt0 pb0">   
                            <div id='upload_documents_hide_show'>                                                    
                                <input type="hidden" name="student_id" value="<?php echo $student_doc_id; ?>" id="student_id">
                                <h4><?php echo $this->lang->line('upload_documents1'); ?></h4>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('title'); ?><small class="req" > *</small></label>
                                        <input id="first_title" name="first_title" placeholder="" type="text" class="form-control"  value="<?php echo set_value('first_title'); ?>" />
                                        <span class="text-danger"><?php echo form_error('first_title'); ?></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('documents'); ?><small class="req" > *</small></label>
                                        <div class=""><input id="first_doc_id" name="first_doc" placeholder="" type="file"  class="filestyle form-control" data-height="40"  value="<?php echo set_value('first_doc'); ?>" />
                                            <span class="text-danger"><?php echo form_error('first_doc'); ?></span></div>
                                    </div>

                                
                            </div>
                         </div>  
                            <div class="modal-footer" style="clear:both">
                                <!-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><?php //echo $this->lang->line('cancel'); ?></button> -->
                                <button type="submit" class="btn btn-info pull-right"><?php echo $this->lang->line('save'); ?></button>
                            </div>

                        </form>
                    </div>                 
                </div>
            </div>
        </div>
    </div>
</div>

<div id="scheduleModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title_logindetail"></h4>
            </div>
            <div class="modal-body_logindetail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="disable_modal" tabindex="-1" role="dialog" aria-labelledby="evaluation" style="padding-left: 0 !important">
    <div class="modal-dialog " role="document">
        <div class="modal-content modal-media-content">
            <div class="modal-header modal-media-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="box-title" ><?php echo $this->lang->line('disable') . " " . $this->lang->line('student') ?></h4>
            </div>
            <form role="form" id="disable_form" method="post" enctype="multipart/form-data" action="">

                <div class="modal-body pt0 pb0" >
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 paddlr">
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="pwd"><?php echo $this->lang->line('reason'); ?></label><small class="req"> *</small>
                                        <input type="hidden" name="student_id" id="disstudent_id" >
                                        <select class="form-control" name="reason">
                                            <option value=""><?php echo $this->lang->line('select') ?></option>
                                            <?php
                                            foreach ($reason as $value) {
                                                ?>
                                                <option value="<?php echo $value['id'] ?>"><?php echo $value['reason'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="pwd"><?php echo $this->lang->line('note'); ?></label>
                                        <textarea name="note" class="form-control"></textarea>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="box-footer">

                    <div class="pull-right paddA10">
                        <button class="btn btn-info pull-right"  data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please wait" value=""><?php echo $this->lang->line('save'); ?></button>

                    </div>
            </form>
        </div>
    </div>
</div>
</div>

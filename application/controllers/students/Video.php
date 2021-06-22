<?php
if(!defined('BASEPATH'))
   exit('No direct script access allowed');

   class Video extends Student_Controller
   {
       public function index()
       { 
            $this->load->model('Video_model');
            $data['res']=$this->Video_model->getAllQuestions();
            $this->load->view('student/video',$data);  
       }

       public function form_data()
       {
            $this->load->model('Video_model');
            $score = $this->input->POST('score');
            $TimeSpent = $this->input->POST('TimeSpent');
            $StartTime = $this->input->POST('StartTime');
            $EndTime = $this->input->POST('EndTime');
            $video_id = $this->input->POST('video_id');            
            // $User =$this->session->userdata['student']['username'];
            $User =$this->session->userdata['student']['student_id'];
            // $User =$this->session->userdata['student']['adm_number'];
            $this->Video_model->insert_summary($score,$TimeSpent,$StartTime,$EndTime,$User,$video_id);
            redirect('user/syllabus');
       }

       public function lacture_video_download($doc)
       {
           $this->load->helper('download');
          $filepath = "./uploads/syllabus_attachment/lacture_video/" . $this->uri->segment(4);
         
           $data     = file_get_contents($filepath);
           $name     = $this->uri->segment(4);
           force_download($name, $data);
       }

       public function check()
       {
            // $User =  $this->session->userdata(‘student_id’);
          //    $User =$this->session->userdata['student']['username'];
          //   echo $User;
          $openlacture_video    = $this->uri->segment(4);
          $lacture_video=$_POST['lacture_video'];
          $this->load->model('Video_model');
          if(!empty($lacture_video))
          {                 
               $data['res']=$this->Video_model->checkGetdata($lacture_video);
               $this->load->view('student/video',$data); 
          }
          if(!empty($openlacture_video))
          {
               $data['res']=$this->Video_model->checkGetdata($openlacture_video);
               $this->load->view('student/video',$data); 
          }
          
       }   
     
   }


?>
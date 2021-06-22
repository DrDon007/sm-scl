<?php
if(!defined('BASEPATH'))
   exit('No direct script access allowed');

   class Video extends Student_Controller
   {
       public function index()
       { 
            $this->load->model('Video_model');
            $data['res']=$this->Video_model->getLatest();
            $this->load->view('student/video',$data); 
       }

       public function form_data()
       {
            $this->load->model('Video_model');
            $score = $this->input->POST('score');
            $TimeSpent = $this->input->POST('TimeSpent');
            $StartTime = $this->input->POST('StartTime');
            $EndTime = $this->input->POST('EndTime');
            $User =$this->session->userdata['student']['username'];
            $this->Video_model->insert_summary($score,$TimeSpent,$StartTime,$EndTime,$User);
            redirect('user/user/dashboard');
       }

       public function check()
       {
            // $User =  $this->session->userdata(‘student_id’);
          //    $User =$this->session->userdata['student']['username'];
          //   echo $User;
          // $query = $this->db->get('subject_syllabus');

          // $query = $this->db->select('id')->limit(1)->get('subject_syllabus');
          // $this->load->model('Video_model');
          // $data=$this->Video_model->getLatest();
          // //   $this->load->view('student/video',$data);  
          //   echo $data;
       
           

         
       }
       public function lacture_video_download($doc)
       {
           $this->load->helper('download');
           $filepath = "./uploads/syllabus_attachment/lacture_video/" . $this->uri->segment(4);
         
           $data     = file_get_contents($filepath);
           $name     = $this->uri->segment(4);
           force_download($name, $data);
       }

   }


?>
<?php
if(!defined('BASEPATH'))
   exit('No direct script access allowed');

   class Video extends Student_Controller
   {
       public function index()
       { 
            $this->load->model('Video_model');
            $data['res']=$this->Video_model->getdata();
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
             $User =$this->session->userdata['student']['username'];
            echo $User;
       }

   }


?>
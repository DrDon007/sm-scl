<?php
if(!defined('BASEPATH'))
   exit('No direct script access allowed');

   class Video extends Student_Controller
   {
       public function index()
       { 
            $this->load->view('student/videoFormSubmit');  
       }

       public function data()
       {
          $this->load->model('Video_model');          
          $q1 = $this->input->post("ans1");
          $this->Video_model->insert_data($q1);
       }

       public function data1()
       {
          $this->load->model('Video_model');          
          $q1 = $this->input->post("ans1");
          $q2 = $this->input->post("ans2");
          $q3 = $this->input->post("ans3");
          $this->Video_model->insert_data1($q1,$q2,$q3);
       }

      public function form_data()
      {
        $this->load->model('Video_model');
        $score = $this->input->POST('score');
        $TimeSpent = $this->input->POST('TimeSpent');
        $StartTime = $this->input->POST('StartTime');
        $EndTime = $this->input->POST('EndTime');
        $s= $this->session->userdata('student');
        $username= $s['username'];
        $this->Video_model->insert_summary($score,$TimeSpent,$StartTime,$EndTime,$username);
        redirect('user/user/dashboard');
     }

     public function check()
     {
        $s= $this->session->userdata('student');
        $userid= $s['student_id'];
        $username= $s['username'];
        echo $username;
     }
   }

?>
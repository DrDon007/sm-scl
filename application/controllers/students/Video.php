<?php
if(!defined('BASEPATH'))
   exit('No direct script access allowed');

   class Video extends Student_Controller
   {
       public function index()
       { 
            $this->load->view('student/video');  
       }
       public function form_data(){
          $this->load->model('video_model');
          $data = array(
              "q1" => $this->input->get('Question1'),
              "q2" => $this->input->get('Question2'),
              "q3" => $this->input->get('Question3'),
          );
          $this->Video_model->insert_data($data);
       }
     
   }

?>
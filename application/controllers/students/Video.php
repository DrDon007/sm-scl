<?php
if(!defined('BASEPATH'))
   exit('No direct script access allowed');

   class Video extends Student_Controller
   {
       public function index()
       { 
            $this->load->view('student/video');  
       }

       public function data()
       {
        // echo "p";
          $this->load->model('Video_model');          
        //   $q1=$_COOKIE['answer1'];
          $q1 = $this->input->post('Question1');
        //   var_dump($q1);
        //   $res= 
          $this->Video_model->insert_data($q1);
        //   echo $res;
       }

       public function check()
       {
           echo "p";
       }
     
   }

?>
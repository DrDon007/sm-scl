<?php
if(!defined('BASEPATH'))
   exit('No direct script access allowed');

   class Video_report extends Admin_Controller
   {
       public function index()
       { 
        $this->load->model('Video_report_model');
         $data['res'] = $this->Video_report_model->getReport(); 
         $this->load->view('admin/video_report',$data); 
       }      
   }

?>
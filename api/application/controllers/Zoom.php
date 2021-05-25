<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Zoom extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('mailer');
        $this->load->library(array('customlib', 'enc_lib'));
        $this->load->model(array('Zoom_model','auth_model', 'route_model', 'student_model', 'setting_model', 'attendencetype_model', 'studentfeemaster_model', 'feediscount_model', 'teachersubject_model', 'timetable_model', 'user_model', 'examgroup_model', 'webservice_model', 'grade_model', 'librarymember_model', 'bookissue_model', 'homework_model', 'event_model', 'vehroute_model', 'timeline_model', 'module_model', 'paymentsetting_model', 'customfield_model', 'subjecttimetable_model', 'onlineexam_model', 'leave_model', 'chatuser_model', 'conference_model', 'syllabus_model'));
    }

    // ---------------------------------------------
    public function updateConferenceDetails()
    {
        $method = $this->input->server('REQUEST_METHOD');
        if($method !='POST') 
        {
            json_output(400, array('status' => 400, 'message' => 'Bad request.'));
        }
        else 
        {
            $response['status'] = 200;
            $data       = array();
            $params     = json_decode(file_get_contents('php://input'), true);
            $student_id=$params['student_id'];
            $conference_id = $params['conference_id'];
            $login_datetime = $params['login_datetime'];
            $logout_datetime = $params['logout_datetime'];
            $details = array(
                    'conference_id' =>  $conference_id,
                    'student_id' =>  $student_id,
                    'login_datetime' => $login_datetime,
                    'logout_datetime' => $logout_datetime
            );
            // echo $conference_id;
            $result=$this->Zoom_model->updateConferenceDetails($details);
            $data['result_array'] = $result;
            json_output($response['status'], $data);
        }
    }
    // ---------------------------------------------

}
?>

<?php
class Video_model extends MY_model
{

    function insert_summary($score,$TimeSpent,$StartTime,$EndTime,$User,$video_id)
    {
        $sql="INSERT INTO `summary`(`score`,`StartTime`,`EndTime`,`TimeSpent`,`User`,`VideoId`) VALUES ($score,'$StartTime','$EndTime','$TimeSpent','$User','$video_id')";
        $rs=$this->db->query($sql);
        return $rs;    
    }

    function getdata()
    {
        $sql="SELECT ss.`lacture_video`,iv.video_timing,iv.question_id ,iv.subject_syllabus_id,q.question,q.opt_a,q.opt_b,q.opt_c,q.opt_d,q.opt_e,q.correct,q.class,q.section,q.subject_id FROM `subject_syllabus` ss INNER JOIN `intractive_video_question` iv ON ss.id=iv.subject_syllabus_id INNER JOIN questions q ON iv.question_id=q.id";
        // $sql="SELECT ss.`id`, ss.`lacture_video`,iv.video_timing,iv.question_id ,iv.subject_syllabus_id FROM `subject_syllabus` ss INNER JOIN `intractive_video_question` iv ON ss.id=iv.subject_syllabus_id";
        // $sql="SELECT ss.`id`,ss.`lacture_video`,ss.`question_id`, ss.`video_timing` ,q.question,q.opt_a,q.opt_b,q.opt_c,q.opt_d,q.opt_e,q.correct FROM `subject_syllabus` ss INNER JOIN questions q ON q.id=ss.question_id";
        $rs=$this->db->query($sql);
        return $rs->result_array();    
    }

    function getAllQuestions()
    {
        $row = $this->db->select("*")->limit(1)->order_by('id',"DESC")->get("subject_syllabus")->row();
        // return $row->id;
        $latest_id = $row->id;

        $sql="SELECT ss.`lacture_video`,iv.video_timing,iv.question_id ,iv.subject_syllabus_id,q.question,q.opt_a,q.opt_b,q.opt_c,q.opt_d,q.opt_e,q.correct,q.class,q.section,q.subject_id FROM `subject_syllabus` ss INNER JOIN `intractive_video_question` iv ON ss.id=iv.subject_syllabus_id INNER JOIN questions q ON iv.question_id=q.id where ss.id=".$latest_id;
        $rs=$this->db->query($sql);
        return $rs->result_array();    
    }

    public function checkGetdata($lacture_video)
    {         
        $sql="SELECT ss.id,ss.`lacture_video`,iv.video_timing,iv.question_id ,iv.subject_syllabus_id,q.question,q.opt_a,q.opt_b,q.opt_c,q.opt_d,q.opt_e,q.correct,q.class,q.section,q.subject_id FROM `subject_syllabus` ss INNER JOIN `intractive_video_question` iv ON ss.id=iv.subject_syllabus_id INNER JOIN questions q ON iv.question_id=q.id where ss.`lacture_video`='$lacture_video'";
        $rs=$this->db->query($sql);
        return $rs->result_array();
    }

    // function getReport()
    // {
    //     $q = "SELECT * FROM `summary` ";  
    //     $res = $this->db->query($q);
    //     return $res->result_array(); 

    // }

}
?>
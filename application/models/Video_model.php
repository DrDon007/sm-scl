<?php
class Video_model extends MY_model
{
// function insert_data($q1){

//     $sql="INSERT INTO `results`(`q1`,`q2`,`q3`) VALUES ('$q1','$s2','$s3','$s4')";

// }
    function insert_summary($score,$TimeSpent,$StartTime,$EndTime,$User)
    {
        $sql="INSERT INTO `summary`(`score`,`StartTime`,`EndTime`,`TimeSpent`,`User`) VALUES ($score,'$StartTime','$EndTime','$TimeSpent','$User')";
        $rs=$this->db->query($sql);
        return $rs;    
    }

    function getdata()
    {
        $sql="SELECT ss.`id`,ss.`lacture_video`,ss.`question_id`, ss.`video_timing` ,q.question,q.opt_a,q.opt_b,q.opt_c,q.opt_d,q.opt_e,q.correct FROM `subject_syllabus` ss INNER JOIN questions q ON q.id=ss.question_id";
        $rs=$this->db->query($sql);
        return $rs->result_array();    
    }
}
?>
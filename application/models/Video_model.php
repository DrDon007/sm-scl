<?php
class Video_model extends MY_model
{
// function insert_data($q1){

//     $sql="INSERT INTO `results`(`q1`,`q2`,`q3`) VALUES ('$q1','$s2','$s3','$s4')";

// }
function insert_summary($score,$TimeSpent,$StartTime,$EndTime,$User){


    $sql="INSERT INTO `summary`(`score`,`StartTime`,`EndTime`,`TimeSpent`,`User`) VALUES ($score,'$StartTime','$EndTime','$TimeSpent','$User')";
       $rs=$this->db->query($sql);
       return $rs;
   
}
}
?>
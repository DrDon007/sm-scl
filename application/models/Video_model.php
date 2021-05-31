<?php
class Video_model extends MY_model
{
function insert_data($q1){

    $sql="INSERT INTO `results`(`q1`,`q2`,`q3`) VALUES ('$q1','$s2','$s3','$s4')";

}
function insert_summary($score,$TimeSpent,$StartTime,$EndTime){


    $sql="INSERT INTO `summary`(`score`,`StartTime`,`EndTime`,`TimeSpent`) VALUES ($score,'$StartTime','$EndTime','$TimeSpent')";
       $rs=$this->db->query($sql);
       return $rs;
   
}
}
?>
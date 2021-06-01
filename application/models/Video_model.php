<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// class Video_model extends CI_Model
// {

class Video_model extends MY_model
{
    public function insert_data($q1) 
	{
       $sql="INSERT INTO `results`(`answer`) VALUES ('$q1')";
       $rs=$this->db->query($sql);
       return $rs;
    }

    public function insert_data1($q1,$q2,$q3)
    {
        $res=array('answer1'=>$q1,'answer2'=>$q2,'answer3'=>$q3);
        $res=json_encode($res);
        // for($i=0;$i<3;$i++)
        // {
            
            $sql="INSERT INTO `results`(`answer`) VALUES ('$res')";
            $this->db->query($sql);
        // }
      
        return $rs;
    }

    function insert_summary($score,$TimeSpent,$StartTime,$EndTime,$username)
    {
       $sql="INSERT INTO `summary`(`score`,`StartTime`,`EndTime`,`TimeSpent`,`User`) VALUES ($score,'$StartTime','$EndTime','$TimeSpent','$username')";
           $rs=$this->db->query($sql);
           return $rs;
       
    }
}
?>
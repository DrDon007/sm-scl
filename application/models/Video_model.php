<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// class Video_model extends CI_Model
// {

class Video_model extends MY_model
{
    public function insert_data($data) 
	{
       $sql="INSERT INTO `results`(`answer`) VALUES ('$data')";
       $rs=$this->db->query($sql);
       return $rs;
    }
}
?>
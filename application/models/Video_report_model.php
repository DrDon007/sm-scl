<?php
class Video_report_model extends MY_model
{
    function getReport()
    {

        $q = "SELECT * FROM `summary` ";  
        $res = $this->db->query($q);
        return $res->result_array(); 

    }


}
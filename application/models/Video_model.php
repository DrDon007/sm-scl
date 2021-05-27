<?php
class Video_model extends MY_model
{
function insert_data($data){

    $this->db->insert("results",$data);
    var_dump($data);

}
}
?>
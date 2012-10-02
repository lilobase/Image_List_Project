<?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class imageList_model extends CI_Model {
        
        public function get_list() {
            
            return $this->db->query('SELECT * FROM image_storage');
        }
        
    }

?>

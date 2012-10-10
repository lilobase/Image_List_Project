<?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class image_model extends CI_Model {
        
        public function getAll() {
            
            return $this->db->query('SELECT * FROM image_storage');
        }
        
        public function create($id_image, $image_name) {

           return $this->db->insert('image_storage', array('image_id' => $id_image, 'image_name' => $image_name));
           
      }
      
      public function delete($id_image) {
          
          return $this->db->delete('image_storage', array('image_id' => $id_image));
      }
        
    }

?>

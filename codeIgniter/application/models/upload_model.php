     <?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class upload_model extends CI_Model {

       public function db_insert_image ($id_image, $image_name) {

           return $this->db->insert('image_storage', array('image_id' => $id_image, 'image_name' => $image_name));
           
      }
      
      public function db_delete_image ($id_image) {
          
          return $this->db->delete('image_storage', array('image_id' => $id_image));
      }
    
}
?>


<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class imageList_controller extends CI_Controller {

    private $idImage;
    private $return_db;
    private $db_image_list;
    private $image_real_id;
    private $image_real_uri;
    private $image_array = array();

    public function __construct() {
        parent::__construct();

        $this->load->helpers('helper_image');
        $this->load->model('upload_model');
        $this->load->model('imagelist_model');
        $this->load->library('image_library');
    }

    public function index() {
        $this->aff_list();
    }

    public function aff_list() {
        $db_image_list = $this->imagelist_model->get_list();

        //setup vars
        $image_array = array();
        $error = '';
        $success = '';
        $delete = '';

        if (count($db_image_list->result()) > 0) {
            foreach ($db_image_list->result() as $row) {
                $image_db_id = $row->id;
                $image_real_id = $row->image_id;
                $image_real_name = $row->image_name;
                try {
                    $image_big_uri = $this->image_library->get($image_real_id, 400, 400);
                    $image_real_uri = $this->image_library->get($image_real_id, 300, 250, 'crop');
                } catch (Exception $e) {
                    $error = $e->getMessage();
                }
                $image_array [] = array('title' => $image_real_id, 'thumb_url' => $image_real_uri, 'id' => $image_db_id, 'big_url' => $image_big_uri, 'name' => $image_real_name);
            }
        }
        $success .= $this->session->flashdata('success');
        $error .= $this->session->flashdata('error');
        $delete .= $this->session->flashdata('delete');
        $this->load->view('meta_view', array('data' => $image_array, 'error_message' => $error, 'success_message' => $success, 'delete_message' => $delete));
    }

    public function uploadImage() {

        if ($_FILES['image']['error'] > 0) {
            $this->session->set_flashdata('error', 'Erreur dans l\'upload de l\'image');
            redirect('imagelist_controller');
        } else {

            if (empty($_POST['image_name'])) {
                $imageName = $_FILES['image']['name'];
            } else {
                $imageName = $_POST['image_name'];
            }
            try {
                $idImage = $this->image_library->upload($_FILES['image']);
                $this->upload_model->db_insert_image($idImage, $imageName);
                $this->session->set_flashdata('success', 'Upload d\'image reussit');
            } catch (Exception $e) {
                $this->session->set_flashdata('error', 'Erreur dans l\'upload de l\'image');
            }

            redirect('imagelist_controller');
        }
    }
    
    public function del_image () {
        $this->upload_model->db_delete_image($_GET['var']);
        $this->session->set_flashdata('delete', 'Suppression de l\'image reussie');
        redirect('imagelist_controller');
    }
    
}

?>

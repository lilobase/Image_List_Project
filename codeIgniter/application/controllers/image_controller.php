<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class image_controller extends CI_Controller {

    public function __construct() {
        
        parent::__construct();

        $this->load->helpers('image');
        $this->load->model('image_model');
        $this->load->library('image_library');
    }

    public function index() {
        
        $this->viewList();
        
    }

    public function viewList() {
        
        
        $imageList = $this->image_model->getAll();

        //setup vars
        $image_array = array();
        $error = array();

        if (!empty($imageList->result())) {
            
            foreach ($imageList->result() as $image) {
                
                try {
                    
                    $image_big_uri = $this->image_library->get($image->id, 400, 400);
                    $image_real_uri = $this->image_library->get($image->image_id, 300, 250, 'crop');
                    
                } catch (Exception $e) {
                    
                    $error[] = $e->getMessage();
                    
                }
                
                $image_array [] = array(
                    'thumb_url' => $image_real_uri,
                    'id' => $image->id,
                    'big_url' => $image_big_uri,
                    'name' => $image->image_name
                );
                
            }
        }
        
        $success = $this->session->flashdata('success');
        $error[] = $this->session->flashdata('error');
        
        $outputDatas = array(
            'data' => $image_array, 
            'error_message' => $error, 
            'success_message' => $success
        );
        
        $this->load->view('meta_view', $outputDatas);
    }

    public function upload() {

        if ($_FILES['image']['error'] > 0) {
            
            $this->session->set_flashdata('error', 'Erreur dans l\'upload de l\'image');
            redirect('imagelist_controller');
            
        } else {
                
            $imageName = (empty($_POST['image_name'])) ? $_FILES['image']['name'] : $_POST['image_name'];
                
            try {
                
                $idImage = $this->image_library->upload($_FILES['image']);
                $this->image_model->create($idImage, $imageName);
                $this->session->set_flashdata('success', 'Upload d\'image reussit');
                
            } catch (Exception $e) {
                
                $this->session->set_flashdata('error', 'Erreur dans l\'upload de l\'image');
                
            }

            redirect('imagelist_controller');
        }
    }
    
    public function delete() {
        
        $this->image_model->delete($_GET['id']);
        
        $this->session->set_flashdata('success', 'Suppression de l\'image reussie');
        
        redirect('imagelist_controller');
    }
    
}

?>

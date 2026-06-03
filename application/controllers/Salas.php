<?php

defined('BASEPATH') OR exit('No acceso al codigo');

/**
 * @property CI_Input $input
 * @property CI_Form_validation $form_validation
 * @property Sala_model $Sala_model
 */

class Salas extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Sala_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['salas'] = $this->Sala_model->get_all();
        $this->load->view('salas/index', $data);
    }

    public function crear(){
        $this->load->view('salas/form');
    }

    public function guardar(){

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('capacidad', 'Capacidad', 'required|numeric');

        if($this->form_validation->run() == FALSE){
            $this->crear();
        } else {

            $data = array(
                'nombre' => $this->input->post('nombre'),
                'capacidad' => $this->input->post('capacidad')
            );

            $this->Sala_model->crear($data);
            redirect('salas');
        }
    }

    public function editar($id){
        $data['sala'] = $this->Sala_model->get_by_id($id);
        $this->load->view('salas/form', $data);
    }

    public function actualizar($id){

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('capacidad', 'Capacidad', 'required|numeric');

        if($this->form_validation->run() == FALSE){
            $data['sala'] = $this->Sala_model->get_by_id($id);
            $this->load->view('salas/form', $data);
        } else {

            $data = array(
                'nombre' => $this->input->post('nombre'),
                'capacidad' => $this->input->post('capacidad')
            );

            $this->Sala_model->actualizar($id, $data);
            redirect('salas');
        }
    }

    public function eliminar($id){
        $this->Sala_model->eliminar($id);
        redirect('salas');
    }
}
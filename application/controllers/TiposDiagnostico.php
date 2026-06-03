<?php

defined('BASEPATH') OR exit('No acceso al codigo');

/**
 * @property CI_Input $input
 * @property CI_Form_validation $form_validation
 * @property TiposDiagnostico_model $TiposDiagnostico_model
 */

class TiposDiagnostico extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('TiposDiagnostico_model');
        $this->load->library('form_validation');
    }

    // READ
    public function index(){
        $data['diagnosticos'] = $this->TiposDiagnostico_model->get_all();
        $this->load->view('diagnosticos/index', $data);
    }

    // CREATE
    public function crear(){
        $this->load->view('diagnosticos/form');
    }

    public function guardar(){

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');

        if($this->form_validation->run() == FALSE){
            $this->crear();
        } else {

            $data = array(
                'nombre' => $this->input->post('nombre')
            );

            $this->TiposDiagnostico_model->crear($data);
            redirect('tiposdiagnostico');
        }
    }

    // UPDATE
    public function editar($id){
        $data['diagnostico'] = $this->TiposDiagnostico_model->get_by_id($id);
        $this->load->view('diagnosticos/form', $data);
    }

    public function actualizar($id){

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');

        if($this->form_validation->run() == FALSE){
            $data['diagnostico'] = $this->TiposDiagnostico_model->get_by_id($id);
            $this->load->view('diagnosticos/form', $data);
        } else {

            $data = array(
                'nombre' => $this->input->post('nombre')
            );

            $this->TiposDiagnostico_model->actualizar($id, $data);
            redirect('tiposdiagnostico');
        }
    }

    // DELETE
    public function eliminar($id){
        $this->TiposDiagnostico_model->eliminar($id);
        redirect('tiposdiagnostico');
    }
}
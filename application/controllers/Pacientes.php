<?php

defined('BASEPATH') OR exit('No acceso al codigo');

/**
 * @property CI_Input $input
 * @property CI_Form_validation $form_validation
 * @property Paciente_model $Paciente_model
 */


class Pacientes extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Paciente_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['pacientes'] = $this->Paciente_model->get_all();
        $this->load->view('pacientes/index', $data);
    }

    public function crear(){
        $this->load->view('pacientes/form');
    }

    public function guardar(){

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellido', 'Apellido', 'required');
        $this->form_validation->set_rules('diagnostico_id', 'Diagnóstico', 'required');

        if($this->form_validation->run() == FALSE){
            $this->crear();
        } else {

            $data = array(
                'nombre' => $this->input->post('nombre'),
                'apellido' => $this->input->post('apellido'),
                'diagnostico_id' => $this->input->post('diagnostico_id')
            );

            $this->Paciente_model->crear($data);
            redirect('pacientes');
        }
    }

    public function editar($id){
        $data['paciente'] = $this->Paciente_model->get_by_id($id);
        $this->load->view('pacientes/form', $data);
    }

    public function actualizar($id){

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellido', 'Apellido', 'required');
        $this->form_validation->set_rules('diagnostico_id', 'Diagnóstico', 'required');

        if($this->form_validation->run() == FALSE){
            $data['paciente'] = $this->Paciente_model->get_by_id($id);
            $this->load->view('pacientes/form', $data);
        } else {

            $data = array(
                'nombre' => $this->input->post('nombre'),
                'apellido' => $this->input->post('apellido'),
                'diagnostico_id' => $this->input->post('diagnostico_id')
            );

            $this->Paciente_model->actualizar($id, $data);
            redirect('pacientes');
        }
    }

    public function eliminar($id){
        $this->Paciente_model->eliminar($id);
        redirect('pacientes');
    }
}
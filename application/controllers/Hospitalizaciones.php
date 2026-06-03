<?php

defined('BASEPATH') OR exit('No acceso al codigo');

/**
 * @property CI_Input $input
 * @property CI_Form_validation $form_validation
 * @property Hospitalizacion_model $Hospitalizacion_model
 */

class Hospitalizaciones extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Hospitalizacion_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['hospitalizaciones'] = $this->Hospitalizacion_model->get_all();
        $this->load->view('hospitalizaciones/index', $data);
    }

    public function crear(){
        $this->load->view('hospitalizaciones/form');
    }

    public function guardar(){

        $this->form_validation->set_rules('paciente_id', 'Paciente', 'required');
        $this->form_validation->set_rules('sala_id', 'Sala', 'required');
        $this->form_validation->set_rules('fecha_ingreso', 'Fecha Ingreso', 'required');

        if($this->form_validation->run() == FALSE){
            $this->crear();
        } else {

            $data = array(
                'paciente_id' => $this->input->post('paciente_id'),
                'sala_id' => $this->input->post('sala_id'),
                'fecha_ingreso' => $this->input->post('fecha_ingreso'),
                'fecha_alta' => $this->input->post('fecha_alta')
            );

            $this->Hospitalizacion_model->crear($data);
            redirect('hospitalizaciones');
        }
    }

    public function editar($id){
        $data['hospitalizacion'] = $this->Hospitalizacion_model->get_by_id($id);
        $this->load->view('hospitalizaciones/form', $data);
    }

    public function actualizar($id){

        $this->form_validation->set_rules('paciente_id', 'Paciente', 'required');
        $this->form_validation->set_rules('sala_id', 'Sala', 'required');

        if($this->form_validation->run() == FALSE){
            $data['hospitalizacion'] = $this->Hospitalizacion_model->get_by_id($id);
            $this->load->view('hospitalizaciones/form', $data);
        } else {

            $data = array(
                'paciente_id' => $this->input->post('paciente_id'),
                'sala_id' => $this->input->post('sala_id'),
                'fecha_ingreso' => $this->input->post('fecha_ingreso'),
                'fecha_alta' => $this->input->post('fecha_alta')
            );

            $this->Hospitalizacion_model->actualizar($id, $data);
            redirect('hospitalizaciones');
        }
    }

    public function eliminar($id){
        $this->Hospitalizacion_model->eliminar($id);
        redirect('hospitalizaciones');
    }
}
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
        $this->load->model('Paciente_model');
        $this->load->model('Sala_model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['hospitalizaciones'] = $this->Hospitalizacion_model->getAll();
        $this->load->view('hospitalizaciones/index', $data);
    }

    public function crear()
    {
        $data['pacientes'] = $this->Paciente_model->get_all();
        $data['salas'] = $this->Sala_model->getAll();

        $this->load->view('hospitalizaciones/form', $data);
    }

    public function guardar()
    {
        $data = array(
            'paciente_id'   => $this->input->post('paciente_id'),
            'sala_id'       => $this->input->post('sala_id'),
            'fecha_ingreso' => $this->input->post('fecha_ingreso'),
            'fecha_alta'    => $this->input->post('fecha_alta')
        );

        $this->Hospitalizacion_model->crear($data);

        redirect('hospitalizaciones');
    }

    public function editar($id)
    {
        $data['hospitalizacion'] = $this->Hospitalizacion_model->get_by_id($id);
        $data['pacientes'] = $this->Paciente_model->get_all();
        $data['salas'] = $this->Sala_model->getAll();

        $this->load->view('hospitalizaciones/form', $data);
    }

    public function actualizar($id)
    {
        $this->form_validation->set_rules('paciente_id', 'Paciente', 'required');
        $this->form_validation->set_rules('sala_id', 'Sala', 'required');

        if($this->form_validation->run() == FALSE){
            $data['hospitalizacion'] = $this->Hospitalizacion_model->get_by_id($id);
            $data['pacientes'] = $this->Paciente_model->get_all();
            $data['salas'] = $this->Sala_model->getAll();

            $this->load->view('hospitalizaciones/form', $data);
        } else {
            $data = array(
                'paciente_id'   => $this->input->post('paciente_id'),
                'sala_id'       => $this->input->post('sala_id'),
                'fecha_ingreso' => $this->input->post('fecha_ingreso'),
                'fecha_alta'    => $this->input->post('fecha_alta')
            );

            $this->Hospitalizacion_model->actualizar($id, $data);

            redirect('hospitalizaciones');
        }
    }

    public function eliminar($id)
    {
        $this->Hospitalizacion_model->eliminar($id);
        redirect('hospitalizaciones');
    }
}
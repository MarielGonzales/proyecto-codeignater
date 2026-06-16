<?php

class Hospitalizacion_model extends CI_Model
{
    private $tabla = 'Hospitalizaciones';

    public function getAll()
    {
        $this->db->select('
        h.id,
        CONCAT(p.nombre, " ", p.apellido) AS paciente,
        s.nombre AS sala,
        h.fecha_ingreso,
        h.fecha_alta
    ');

    $this->db->from('hospitalizaciones h');
    $this->db->join('pacientes p', 'p.id = h.paciente_id');
    $this->db->join('salas s', 's.id = h.sala_id');

    return $this->db->get()->result_array();
    }

  

    public function get_by_id($id){
        return $this->db->where('id', $id)
                        ->get($this->tabla)
                        ->row_array();
    }

    public function crear($data){
        return $this->db->insert($this->tabla, $data);
    }

    public function actualizar($id, $data){
        $this->db->where('id', $id);
        return $this->db->update($this->tabla, $data);
    }

    public function eliminar($id){
        $this->db->where('id', $id);
        return $this->db->delete($this->tabla);
    }
}
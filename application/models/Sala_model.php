<?php

class Sala_model extends CI_Model
{
    private $tabla = 'Salas';

    public function get_all(){
        return $this->db->get($this->tabla)->result_array();
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
        return $this->db->where('id', $id)
                        ->delete($this->tabla);
    }
}
<?php

class Sala_model extends CI_Model
{
    private $tabla = 'salas';

    public function getAll()
    {
        return $this->db->get($this->tabla)->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->tabla, ['id' => $id])->row_array();
    }

    public function insert($data)
    {
        return $this->db->insert($this->tabla, $data);
    }

    public function update($id, $data)
    {
        return $this->db->update($this->tabla, $data, ['id' => $id]);
    }

    public function delete($id)
    {
        return $this->db->delete($this->tabla, ['id' => $id]);
    }
}
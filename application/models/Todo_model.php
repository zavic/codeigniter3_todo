<?php
class Todo_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function get_todos($id = FALSE)
  {
    if ($id === FALSE) {
      $query = $this->db->get('todos');
      return $query->result_array();
    }

    $query = $this->db->get_where('todos', array('id' => $id));
    return $query->row_array();
  }

  public function create_todo($data)
  {
    return $this->db->insert('todos', $data);
  }

  public function update_todo($id, $data)
  {
    $this->db->where('id', $id);
    return $this->db->update('todos', $data);
  }

  public function delete_todo($id)
  {
    $this->db->where('id', $id);
    return $this->db->delete('todos');
  }
}

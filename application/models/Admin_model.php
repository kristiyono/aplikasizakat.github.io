<?php

/**
 *
 */
class Admin_model extends CI_Model
{
  function __construct()
  {
    $this->load->database();
  }

  public function Match($data)
  {
    $this->db->select('*')->where($data);
    $ab = $this->db->get('users');

    if ($ab->num_rows() == 1) {
      return $ab->result_array();
    } else {
      return FALSE;
    }

  }

  public function List($value)
  {
    $this->db->select('*')->where('status',$value);
    $ab = $this->db->get('data_zakat');
    if ($ab->num_rows() > 0) {
      return $ab->result_array();
    } else {
      return FALSE;
    }
  }

  public function GetTotal($value)
  {
    $ab = $this->db->query("SELECT SUM(nominal) as total FROM `data_zakat` where status = 'DITERIMA'");
    if ($ab->num_rows() > 0) {
      return $ab->result_array();
    } else {
      return FALSE;
    }
  }

  public function Delete($id)
  {
    $this->db->where('id_activity',$id);
    $del = $this->db->delete('data_zakat');
    if ($del) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function Diterima($id)
  {
    $change = array('status' => 'DITERIMA');
    $this->db->where('id_activity',$id);
    $ab = $this->db->update('data_zakat',$change);
    if ($ab) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function saveBank($bank,$rek)
  {
    $data = array('nama_bank' => $bank, 'rekening'=> $rek);
    $insert = $this->db->insert('bank',$data);
    if ($insert) {
      return TRUE;
    } else {
      return FALSE;
    }

  }

}

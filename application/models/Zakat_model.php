<?php

/**
 *
 */
class Zakat_model extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function GotoDataZakat($data)
  {
    $a = $this->db->insert('data_zakat',$data);
    if ($a) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function GetBank()
  {
    $ba = $this->db->select('*')->order_by('nama_bank','ASC')
          ->get('bank');
    if ($ba->num_rows() > 0) {
      return $ba->result_array();
    } else {
      return FALSE;
    }
  }

  public function GetRekening($namabank)
  {
    $this->db->select('*')->where('nama_bank',$namabank);
          $ba = $this->db->get('bank');
    if ($ba->num_rows() > 0) {
      return $ba->result_array();
    } else {
      return FALSE;
    }
  }
}

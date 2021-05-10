<?php
 /**
  *
  */
 class Zakat extends CI_Controller
 {

   public function pembayaran()
   {
     $ar = array('nama' =>$this->input->post('nama'),'email' =>$this->input->post('email'),'notelp' =>$this->input->post('notelp'),
      'nominal' =>$this->input->post('nominal'),'jzakat' =>$this->input->post('jenis'),'metode'=>$this->input->post('metode'),'bank'=>$this->input->post('pilihbank'));
     $save = $this->zakat_model->GotoDataZakat($ar);
     if ($save) {
       $this->session->set_flashdata('nominal',$this->input->post('nominal'));
       $this->session->set_flashdata('bank',$this->input->post('pilihbank'));
       redirect('halamanku/afterbayar');
     } else {
       redirect(base_url());
     }

   }

 }

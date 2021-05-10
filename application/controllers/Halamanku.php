<?php

 /**
  *
  */
 class Halamanku extends CI_Controller
 {

   public function Home($page='first_page')
   {
       if (!file_exists(APPPATH.'views/fitur/'.$page.'.php')) {
         show_404();
       }

       $data['title'] = 'Zakatinaja - Badan Zakat Indonesia';
       $this->load->view('templates/header',$data);
       $this->load->view('fitur/'.$page);
       $this->load->view('templates/footer');
   }

   public function kelompok($page='about')
   {
       if (!file_exists(APPPATH.'views/fitur/'.$page.'.php')) {
         show_404();
       }

       $data1['title'] = 'Tentang Kami';
       $this->load->view('templates/header',$data1);
       $this->load->view('fitur/'.$page);
       $this->load->view('templates/footer');
   }

   public function bayar($page='bayar')
   {
       if (!file_exists(APPPATH.'views/fitur/'.$page.'.php')) {
         show_404();
       }
       $data['bank'] = $this->zakat_model->GetBank();
       $data['title'] = 'Pembayaran Zakat';
       $this->load->view('templates/header',$data);
       $this->load->view('fitur/'.$page);
       $this->load->view('templates/footer');
   }

   public function afterbayar($page='sukses_isi')
   {
       if (!file_exists(APPPATH.'views/fitur/'.$page.'.php')) {
         show_404();
       }
       $bank = $this->session->flashdata('bank');
       $data['nominal'] = $this->session->flashdata('nominal');
       $data['rekening'] = $this->zakat_model->GetRekening($bank);
       $data['title'] = 'Terima Kasih Sudah Berzakat Melalui Zakatinaja';
       $this->load->view('templates/header',$data);
       $this->load->view('fitur/'.$page);
       $this->load->view('templates/footer');
   }

 }

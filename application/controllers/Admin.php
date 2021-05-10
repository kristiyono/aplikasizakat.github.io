<?php

/**
 *
 */
class Admin extends CI_Controller
{

  public function PageLogin($page = 'login')
  {
    if (!file_exists(APPPATH.'views/admin/'.$page.'.php')) {
      show_404();
    }
    $data['bank'] = $this->zakat_model->GetBank();
    $data['title'] = 'Login User';
    $this->load->view('templates/header',$data);
    $this->load->view('admin/'.$page);
    $this->load->view('templates/footer');
  }

    public function ProcessLog()
    {
      $data = array('username' => $this->input->post('username') ,
                    'password' => $this->input->post('password'));
      $match = $this->admin_model->Match($data);
      if ($match) {
        $data = array('session' =>'ON');
        $this->session->set_userdata($data);
        redirect('admin/notfixlist');
      } else {
        $this->session->set_flashdata('ggl_login','Login Gagal');
        redirect('admin/PageLogin');
      }
    }

    public function NotFixList($page = 'Listnotfix')
    {
      if ($this->session->userdata('session')) {
        if (!file_exists(APPPATH.'views/admin/'.$page.'.php')) {
          show_404();
        }
        $val = 'BELUM';
        $data['dataOrder'] = $this->admin_model->List($val);
        $data['title'] = 'Daftar Zakat belum Diterima';
        $this->load->view('templates/head_admin',$data);
        $this->load->view('admin/'.$page);
        $this->load->view('templates/foot_admin');
      } else {
        redirect(base_url());
      }
    }

    public function FixList($page = 'Listfix')
    {
      if ($this->session->userdata('session')) {
        if (!file_exists(APPPATH.'views/admin/'.$page.'.php')) {
          show_404();
        }
        $val = 'DITERIMA';
        $data['total'] = $this->admin_model->GetTotal($val);
        $data['dataOrder'] = $this->admin_model->List($val);
        $data['title'] = 'Daftar Zakat Diterima';
        $this->load->view('templates/head_admin',$data);
        $this->load->view('admin/'.$page);
        $this->load->view('templates/foot_admin');
      } else {
        redirect(base_url());
      }
    }

    public function deleteOrder($id)
    {
      if ($this->session->userdata('session')) {
        $delete = $this->admin_model->Delete($id);
        if ($delete) {
          redirect('admin/notfixlist');
        } else {
          redirect('admin/notfixlist');
        }
      } else {
        redirect(base_url());
      }
    }

    public function Diterima($id)
    {
      if ($this->session->userdata('session')) {
        $diterima = $this->admin_model->Diterima($id);
        if ($diterima) {
          redirect('admin/notfixlist');
        } else {
          redirect('admin/notfixlist');
        }
      } else {
        redirect(base_url());
      }
    }

    public function CreateBank($page = 'createbank')
    {
      if ($this->session->userdata('session')) {
        if (!file_exists(APPPATH.'views/admin/'.$page.'.php')) {
          show_404();
        }
        $data['title'] = 'Membuat List Bank';
        $this->load->view('templates/head_admin',$data);
        $this->load->view('admin/'.$page);
        $this->load->view('templates/foot_admin');
      } else {
        redirect(base_url());
      }
    }

    public function saveBank()
    {
      if ($this->session->userdata('session')) {
        $save = $this->admin_model->SaveBank($this->input->post('nama_bank'),$this->input->post('rekening'));
        if ($save) {
          $this->session->set_flashdata('suksesCrt','Data Bank Telah Terbuat');
          redirect('admin/CreateBank');
        } else {
          $this->session->set_flashdata('gglCrt','Data Bank Gagal Terbuat');
          redirect('admin/CreateBank');
        }
      } else {
        redirect(base_url());
      }
    }

    public function Logout()
    {
      $this->session->unset_userdata('session');
      redirect(base_url());
    }



}

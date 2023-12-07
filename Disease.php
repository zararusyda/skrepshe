<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Disease extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); // Assuming ParentClass has a constructor, adjust accordingly

        $CI =& get_instance(); // Get the CodeIgniter instance

        if (!$CI->session->userdata('user')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['penyakit'] = $this->db->get('penyakit')->result();
        $this->load->view('penyakit/disease_view', $data);
    }

    public function edit()
    {
        $this->load->view('penyakit/edit_disease');
    }

    public function edit_penyakit()
    {

        $this->load->view('penyakit/disease_view');
    }

    public function tambah()
    {

        $this->load->view('penyakit/add_disease');
    }

    public function tambah_penyakit()
    {
        $this->load->model('M_Disease');

        $query = $this->M_Disease->insert();

        $data['penyakit'] = $this->db->get('penyakit')->result();
        $this->load->view('penyakit/disease_view', $data);

    }

    public function hapus()
    {

        $this->load->view('penyakit/disease_view');
    }

    public function hapus_penyakit($id)
    {
        $id = array('id' => $id);
        $this->load->model('M_Disease');
        $this->M_Disease->Delete('penyakit', $id);

        redirect(base_url('Disease'), 'refresh');
    }
}
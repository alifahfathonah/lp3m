<?php

class Judul extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('judul_m', 'judul');
    }

    public function index()
    {
        echo "error controller";
    }
   
    public function view()
    {
        $query = $this->judul->get();
        $data = array (
            'header' => 'Master Judul',
            'judul' => $query->result()
        );

        $this->load->view('_header', $data);
        $this->load->view('tampil_judul');
        $this->load->view('_footer');
    }

    public function add()
    {
        $data = array (
            'header' => 'Tambah Judul',
        );

        $this->load->view('_header');
        $this->load->view('tambah_judul');
        $this->load->view('_footer');
    }

    public function edit($id = null)
    {
        $query = $this->judul->get($id);
        $data = array (
            'header' => 'Edit Judul',
            'judul' => $query->row()
        );

        $this->load->view('_header', $data);
        $this->load->view('edit_judul');
        $this->load->view('_footer');
    }

    public function del($id = null)
    {
        $this->judul->del($id);
        redirect ('judul/view');
    }

    public function process()
    {
        if(isset($_POST['add']))
        {
            $inputan = $this->input->post(null, TRUE);
            $this->judul->add($inputan);
        } elseif (isset($_POST[edit]))
        {
            $inputan = $this->input->post(null, TRUE);
            $this->judul->edit($inputan);
        }

        redirect ('judul/view');
    }
    
}
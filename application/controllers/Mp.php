<?php

class Mp extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('mp_m', 'mp');
    }

    public function index(){

        echo "error controller";
    }

    public function view()
    {
        $query = $this->mp->get();
        $data = array (
            'header' => 'Master Data Prosedur Mutu',
            'mp' => $query->result()
        );

        $this->load->view('_header', $data);
        $this->load->view('tampil_mp');
        $this->load->view('_footer');
    }

    public function add()
    {
        $data = array (
            'header' => 'Tambah Data Prosedur Mutu',
        );

        $this->load->view('_header');
        $this->load->view('tambah_mp');
        $this->load->view('_footer');
    }

    public function edit($id = null)
    {
        $query = $this->mp->get($id);
        $data = array (
            'header' => 'Edit MP',
            'mp' => $query->row()
        );

        $this->load->view('_header', $data);
        $this->load->view('edit_mp');
        $this->load->view('_footer');
    }

    public function del($id = null)
    {
        $this->mp->del($id);
        redirect ('mp/view');
    }

    public function process()
    {
        if(isset($_POST['add']))
        {
            $inputan = $this->input->post(null, TRUE);
            $this->mp->add($inputan);
        } elseif (isset($_POST[edit]))
        {
            $inputan = $this->input->post(null, TRUE);
            $this->mp->edit($inputan);
        }

        redirect ('mp/view');
    }
}
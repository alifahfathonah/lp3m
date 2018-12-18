<?php

class Sk extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('sk_m', 'sk');
    }

    public function index(){

        echo "error controller";
    }

    public function view()
    {
        $query = $this->sk->get();
        $data = array (
            'header' => 'Dokumen SK',
            'sk' => $query->result()
        );

        $this->load->view('_header', $data);
        $this->load->view('tampil_sk');
        $this->load->view('_footer');
    }

    public function add()
    {
        $data = array (
            'header' => 'Tambah SK',
        );

        $this->load->view('_header');
        $this->load->view('tambah_sk');
        $this->load->view('_footer');
    }

    public function edit($id = null)
    {
        $query = $this->sk->get($id);
        
        $data = array (
            'header' => 'Edit SK',
            'sk' => $query->row()
        );
        
        //$data['sk'] = $query->row_array();

        $this->load->view('_header', $data);
        $this->load->view('edit_sk');
        $this->load->view('_footer');
    }

    public function del($id = null)
    {
        $this->sk->del($id);
        redirect ('sk/view');
    }

    public function process_add()
    {
        if($this->input->post()){

            $param['no_sk'] = $this->input->post('no_sk');
            $param['nama_sk'] = $this->input->post('nama_sk');
            $param['deskripsi'] = $this->input->post('deskripsi');
            $param['tanggal_sk'] = $this->input->post('tanggal_sk');


            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 10000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('file_sk'))
            {
                    echo $this->upload->display_errors();
            }
            else
            {
                    $param['file'] = $this->upload->data()['file_name'];
            }

            $id = $this->sk->add($param);
        }

        /*
        if(isset($_POST['add']))
        {
            $inputan = $this->input->post(null, TRUE);
            $this->sk->add($inputan);

        } elseif (isset($_POST[edit]))
        {
            $inputan = $this->input->post(null, TRUE);
            $this->sk->edit($inputan);
        }
        */
        redirect ('sk/view');
    }

    
}
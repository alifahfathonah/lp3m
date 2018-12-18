<?php

class Sk_m extends CI_Model {

    public function get($id = null){

        $filter_no = $this->input->get('cari_no');
        $this->db->like('no_sk', $filter_no);

        $filter_nama = $this->input->get('cari_nama');
        $this->db->like('nama_sk', $filter_nama);

        $filter_deskripsi = $this->input->get('cari_deskripsi');
        $this->db->like('deskripsi', $filter_deskripsi);

        $filter_tanggal = $this->input->get('cari_tanggal');
        $this->db->like('tanggal_sk', $filter_tanggal);

        $filter_file = $this->input->get('cari_file');
        $this->db->like('file', $filter_file);

        $this->db->select('*');
        $this->db->from('dokumen_sk');
        if ($id != null) {
            $this->db->where('id_sk', $id);
        }

        $query = $this->db->get();
        return $query;
    }

    public function add($param)
    {
        /*
        $param = array(
            'no_sk' => $data['no_sk'],
            'nama_sk' => $data['nama_sk'],
            'deskripsi' => $data['deskripsi'],
            'tanggal_sk' => $data['tanggal_sk'],
            'file' => $data['file'],
        );
        */

        $this->db->insert('dokumen_sk', $param);
    }

    public function edit($data)
    {
        /*
        $param = array (
            'no_sk' => $data['no_sk'],
            'nama_sk' => $data['nama_sk'],
            'deskripsi' => $data['deskripsi'],
            'tanggal_sk' => $data['tanggal_sk'],
            'file' => $data['file'],
        );*/
        if($this->input->post()){
            $post['no_sk'] = $this->input->post('no_sk');
            $post['nama_sk'] = $this->input->post('nama_sk');
            $post['deskripsi'] = $this->input->post('deskripsi');
            $post['tanggal_sk'] = $this->input->post('tanggal_sk');

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
                    $post['file'] = $this->upload->data()['file_name'];
            }
        }

        $this->db->set($post);
        $this->db->where('id_sk', $data['id']);
        $this->db->update('dokumen_sk');
    }

    public function del($id){

        $this->db->where('id_sk', $id);
        $this->db->delete('dokumen_sk');
    }
}
<?php

class Mp_m extends CI_Model {

    public function get($id = null){

        //query search
        $filter_kode = $this->input->get('cari_kode');
        $this->db->like('kode', $filter_kode);

        $filter_deskripsi = $this->input->get('cari_deskripsi');
        $this->db->like('deskripsi', $filter_deskripsi);

        $this->db->select('*');
        $this->db->from('master_mp');
        if ($id != null) {
            $this->db->where('id_mp', $id);
        }

        $query = $this->db->get();
        return $query;
    }

    public function add($data)
    {
        $param = array(
            'kode' => $data['kode'],
            'deskripsi' => $data['deskripsi'],
        );

        $this->db->insert('master_mp', $param);
    }

    public function edit($data)
    {
        $param = array (
            'kode' => $data['kode'],
            'deskripsi' => $data['deskripsi'],
        );

        $this->db->set($param);
        $this->db->where('id_mp', $data['id']);
        $this->db->update('master_mp');
    }

    public function del($id){

        $this->db->where('id_mp', $id);
        $this->db->delete('master_mp');
    }
}
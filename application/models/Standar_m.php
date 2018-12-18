<?php

class Standar_m extends CI_Model {

    /* Menu Standar */
    public function get_standar($id = null)
    {   
        $filter_kode_standar = $this->input->get('cari_kode_standar');  //ambil data yang di dapat dari form bedasarkan kode
        $this->db->like('kode', $filter_kode_standar); //cari kode kemudian di tampilkan

        $filter_deskripsi_standar = $this->input->get('cari_deskripsi_standar');  //ambil data yang di dapat dari form berdasarkan deskripsi
        $this->db->like('deskripsi', $filter_deskripsi_standar);  //sari deskripsi kemudian tampilkan
        
        $this->db->select('*'); //fungsi query SELECT * FROM master_standar;
        $this->db->from('master_standar');        
        if ($id != null) {
            $this->db->where('id_standar', $id);
        } //fungsi supaya bisa menampilkan jika di table tidak ada data supaya tidak error
        
        $query_standar = $this->db->get(); //parsing data ke controler admin
        
        return $query_standar;
    }

    public function tambah_standar ($data_standar)
    {       
        $param_standar = array (
            'kode' => $data_standar['kode'],
            'deskripsi' => $data_standar['deskripsi'],
        ); //mengambil data yang dikirim oleh kontroler
        
        $this->db->insert('master_standar', $param_standar); //memasukan ke database
    }

    public function edit_standar ($data_standar)
    {       
        $param_standar = array (
            'kode' => $data_standar['kode'],
            'deskripsi' => $data_standar['deskripsi'],
        ); //mengambil data yang dikirim oleh kontroler
        
        $this->db->set($param_standar);  //update data dari variabel $param_standar        
        $this->db->where('id_standar', $data_standar['id']); //kemudian tentukan where nya yang di ambil dari form hidden       
        $this->db->update('master_standar'); //masukan ke dalam tabel
    }

    public function hapus_standar($id)
    {        
        $this->db->where('id_standar', $id); //ambil id dari kontroller sama tentuin where di database        
        $this->db->delete('master_standar'); //pilih tabel nya
    }
}
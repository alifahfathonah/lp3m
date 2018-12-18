<?php

class Standar extends CI_Controller {

    /* 
    __construct berfungsi sebagai parent jadi semua fungsi mengikuti parentnya
    */
    function __construct()
    { 
        parent::__construct(); //load parent
        $this->load->model('standar_m', 'standar'); //panggil model Admin_m trus namanya di ganti admin
    }

    /*
    Menu Master Tabel Standar
    */
    public function tampil_standar()
    {
        $query_standar = $this->standar->get_standar(); //load model admin fungsi nya get_standar
        $data_standar = array ( 
            'header' => 'Master Data Standar',
            'standar' => $query_standar->result(),
        ); //satuin variable header & standar ke variable daya standar

        
        $this->load->view('_header', $data_standar); //load tampilan header dan parsing data
        $this->load->view('tampil_standar'); //panggil halaman tampil_standar.php 
        $this->load->view('_footer'); //load tampilan footer
    }

    public function tambah_standar()
    {        
        $data_standar = array (
            'header' => 'Tambah Data Standar',
        ); //buat title halaman di atas

        $this->load->view('_header'); //load tampilan header      
        $this->load->view('tambah_standar'); //panggil halaman tambah_standar.php       
        $this->load->view('_footer'); //load tampilan footer
    }

    public function edit_standar($id = null) //penggunaan $id = null adalah supaya tidak error (id yang di dapat di address bar)
    {
        $query_standar = $this->standar->get_standar($id); //panggil fungsi get_standar di modul kemudian di masukin ke variabel $query_standar
        $data_standar = array (
            'header' => 'Edit Data Standar',
            'standar' => $query_standar->row()
        ); //buat title halaman di atas
        
        $this->load->view('_header', $data_standar); //load tampilan header dan parsing data
        $this->load->view('edit_standar'); //panggil halaman tambah_standar.php
        $this->load->view('_footer'); //load tampilan footer
    }

    public function hapus_standar($id = null) //penggunaan $id = null adalah supaya tidak error (id yang di dapat di address bar)
    {
        $this->standar->hapus_standar($id); //ambil data dari id yang ada di address bar kemudian kirim ke model
        
        redirect ('standar/tampil_standar'); //baru redirek ke tampil_standar
    }

    public function proses_standar() //fungsi proses tabel standar
    {
        if(isset($_POST['tambah_standar'])) {          //pengecekan dari proses yang dikirm tambah_standar
        
            $inputan_standar = $this->input->post(null, TRUE); //ambil variabel dari data tambah_standar.php kemudian di masukan ke $inputan_standar menggunakan XSS filter
            $this->standar->tambah_standar($inputan_standar); //kirim ke model

        } else if (isset($_POST[edit_standar])) {          //pengecekan dari proses yang dikirm edit_standar
            
            $inputan_standar = $this->input->post(null, TRUE); //ambil variabel dari data tambah_standar.php kemudian di masukan ke $inputan_standar menggunakan XSS filter
            $this->standar->edit_standar($inputan_standar); //kirim ke model

        } 
        
        redirect ('standar/tampil_standar'); //kembalikan ke halaman tampil_standar.php
    }
}
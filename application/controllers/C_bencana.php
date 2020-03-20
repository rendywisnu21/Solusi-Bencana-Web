<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_bencana extends CI_Controller {

    function __construct(){
        parent::__construct();	
        // ini adalah function untuk memuat model bernama m_data
        $this->load->model('m_data');
        $this->load->helper('url');
        }
        // method yang akan diakses pertama kali saat controller ini diakses
        function index(){
        // ini adalah variabel array $data yang memiliki index bencana, berguna untuk menyimpan data 
        $data['tb_bencana'] = $this->m_data->tampil_data()->result();
        // ini adalah baris kode yang berfungsi menampilkan v_bencana dan membawa data dari tabel bencana
        $this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_bencana', $data);
		$this->load->view('footer');
        }
        // method yang berfungsi untuk menampilkan form input bencana
        function tambah(){
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('v_inputbencana');
            $this->load->view('footer');
        }
        // method yang berfungsi untuk menambah data pada tabel bencana
        function tambah_bencana(){
            // ini adalah baris kode yang berfungsi merekam data yang diinput oleh pengguna
            $nama = $this->input->post('nama_bencana');
            $daerah = $this->input->post('daerah');
            $tahun = $this->input->post('tahun');
            $penyebab = $this->input->post('penyebab');
            $solusi = $this->input->post('solusi');
            // array yang berguna untuk menjadikan variabel diatas menjadi 1 variabel yang nantinya akan di sertakan dalam query insert
            $data = array(
                  'nama_bencana' => $nama,
                  'daerah' => $daerah,
                  'tahun' => $tahun,
                  'penyebab' => $penyebab,
                  'solusi' => $solusi
            );
            // method yang berfungsi melakukan input data ke dalam database yang mengirim 2 parameter yaitu sebuah array data dan nama tabel yang dimaksud
            $this->m_data->input_data($data,'tb_bencana');
          // kode yang berfungsi mengarahkan pengguna ke link base_url()C_bencana/index/ 
          redirect('C_bencana/index');
          }

          function hapus($id){
            // baris kode ini berisi fungsi untuk menyimpan id bencana kedalam array $where pada index array bernama 'id'
            $where = array('id_bencana' => $id);
            // kode di bawah ini untuk menjalankan query hapus yang berasal dari method hapus_data() pada model m_data
            $this->m_data->hapus_data($where,'tb_bencana');
        // kode yang berfungsi mengarakan pengguna ke link base_url()C_bencana/index/
        redirect('C_bencana/index');
        }

          function edit($id){
            // kode yang berfungsi untuk menyimpan id bencana ke dalam array $where pada index array benama id
            $where = array('id_bencana' => $id);
            // kode di bawah ini adalah kode yang mengambil data bencana berdasarkan id dan disimpan kedalam array $data dengan index bernama bencana
            $data['tb_bencana'] = $this->m_data->edit_data($where,'tb_bencana')->result();
            // kode ini memuat view edit dan membawa data hasil query diatas
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('v_editbencana', $data);
            $this->load->view('footer');
           
        }
    
        // baris kode function update adalah method yang diajalankan ketika tombol submit pada form v_editbencana ditekan, method ini berfungsi untuk merekam data, 
        // memperbarui baris database yang dimaksud, lalu mengarahkan pengguna ke controller C_bencana method index
        function update(){
            // keempat baris kode ini berfungsi untuk merekam data yang dikirim melalui method post
            $id         = $this->input->post('id_bencana');
            $nama       = $this->input->post('nama_bencana');
            $daerah     = $this->input->post('daerah');
            $tahun      = $this->input->post('tahun');
            $penyebab   = $this->input->post('penyebab');
            $solusi     = $this->input->post('solusi');
         
            // berikut ini adalah array yang berguna untuk menjadikan variabel diatas menjadi 1 variabel yang nantinya akan disertakan ke dalam query update pada model
            $data = array(
                'nama_bencana' => $nama,
                'daerah' => $daerah,
                'tahun' => $tahun,
                'penyebab' => $penyebab,
                'solusi' => $solusi
            );
         
            // kode yang berfungsi menyimpan id bencana ke dalam array $where pada index array bernama id
            $where = array(
                'id_bencana' => $id
            );
         
            // kode untuk melakukan query update dengan menjalankan method update_data() 
            $this->m_data->update_data($where, $data, 'tb_bencana');
            // baris kode yang mengerahkan pengguna ke link base_url()C_bencana/index/
            redirect('C_bencana/index');
        }
}
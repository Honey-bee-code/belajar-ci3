<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('buku_m');
        
    }

	public function index()
	{
        $query = $this->buku_m->get();
        // $data['header'] = ('Show Data Buku');
        // $data['buku'] = $query -> result();
        $data = array (
                'header' => 'Tampil Data Buku',
                'buku' => $query->result()
        );
        $this->load->view('_header', $data);
        $this->load->view('buku_tampil'); 
        $this->load->view('_footer');
    }
    
    public function proses()
    {
        if (isset($_POST['tambah'])) {
            // $judul = $this->input->post('judul');
            // $pengarang = $this->input->post('pengarang');
            $inputan = $this->input->post(null, TRUE); // true jika ingin pake XSS filter
            $this->buku_m->tambah($inputan);
        } elseif (isset($_POST['edit'])) {
            $inputan = $this->input->post(null, TRUE); // true jika ingin pake XSS filter
            $this->buku_m->edit($inputan);
        }
        redirect('buku');
    }

    public function tambah()
    {
        $data = array (
            'header' => 'Tambah Data Buku'
        );
        $this->load->view('_header', $data);
        $this->load->view('buku_tambah',);
        $this->load->view('_footer');
    }

    public function edit($id=null)
    {
        $query = $this->buku_m->get($id);
        $data = array (
            'header' => 'Edit Data Buku',
            'buku' => $query->row()
        );
        $this->load->view('_header', $data);
        $this->load->view('buku_edit');
        $this->load->view('_footer');
    }

    public function hapus($id)
    {
        $this->buku_m->hapus($id);
        redirect('buku');
    }
}

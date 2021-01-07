<?php
class Buku_m extends CI_Model {

    public function get($id = null)
    {
        // $query = $this-> db -> query("SELECT * FROM tb_buku WHERE id_buku=2");
        $this -> db -> select('*');
        $this -> db -> from('tb_buku');
        if($id != null) {
            $this -> db -> where('id_buku', $id);
        }
        $query = $this -> db -> get();
        return $query;
    }

    public function tambah($data)
    {
        $param = array(
            'judul' => $data['judul'],
            'pengarang' => $data['pengarang'],
            'tahun_terbit' => $data['tahun_terbit']
        );
        $this->db->insert('tb_buku', $param);
    }

    public function edit($data)
    {
        $param = array(
            'judul' => $data['judul'],
            'pengarang' => $data['pengarang'],
            'tahun_terbit' => $data['tahun_terbit']
        );
        $this->db->set($param);
        $this->db->where('id_buku', $data['id']);
        $this->db->update('tb_buku');
    }

    public function hapus($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete('tb_buku');
    }

}
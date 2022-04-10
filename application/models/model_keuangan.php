<?php

class model_keuangan extends CI_Model
{
    public function tambah_data($data)
    {
        $this->db->insert('tb_keuangan', $data);
    }

    public function tambah_gaji($data)
    {
        $this->db->insert('tb_gaji', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

<?php

class model_booking extends CI_Model
{
    public function tambah_data($data)
    {
        $this->db->insert('tb_booking', $data);
    }

    public function tampil_data()
    {
        $query = $this->db->get('tb_booking');
        return $query;
    }

    public function tampil_profile()
    {
        $query = $this->db->get('tb_user');
        return $query;
    }

    public function ambil_data($limit, $start)
    {
        $query = $this->db->get('tb_booking', $limit, $start)->result();
        return $query;
    }

    public function ambil_profile($limit, $start)
    {
        $query = $this->db->get('tb_user', $limit, $start)->result();
        return $query;
    }

    public function countAllPeoples()
    {
        return $this->db->get('tb_booking')->num_rows();
    }

    public function countAllProfiles()
    {
        return $this->db->get('tb_booking')->num_rows();
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

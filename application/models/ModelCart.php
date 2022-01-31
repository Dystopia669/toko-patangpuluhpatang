<?php
class ModelCart extends CI_Model
{
    public function get_all()
    {
        $query = $this->db->get('tbl_produk');
        return $query->result();
    }
}

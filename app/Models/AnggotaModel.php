<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['nama','email','jabatan', 'alamat',];
    public function insertData($data)
    {
        $this->db->table('anggota')->insert($data);
    }

    public function updateData($data)
    {
        $this->db->table('anggota')->where('id', $data['id'])->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('anggota')->where('id', $data['id'])->delete($data);
    }
}

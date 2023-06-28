<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'id_mhs';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_mhs', 'nim', 'jurusan', 'angkatan', 'email', 'foto'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nama_mhs' => 'required',
        'nim' =>  'required|is_unique[mahasiswa.nim,id_mhs,{id_mhs}]',
        'jurusan' =>  'required',
        'angkatan' =>  'required',
        'email' =>  'required|valid_email|is_unique[mahasiswa.email,id_mhs,{id_mhs}]',
        'foto' =>  'required'
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getMahasiswa($id_mhs = false)
    {
        if ($id_mhs == false) {
            return $this->findAll();
        }
        return $this->where(['id_mhs' => $id_mhs])->first();
    }
}

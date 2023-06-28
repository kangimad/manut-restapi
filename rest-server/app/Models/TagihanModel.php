<?php

namespace App\Models;

use CodeIgniter\Model;

class TagihanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tagihan';
    protected $primaryKey       = 'id_tag';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_mhs', 'id_pmb', 'nama_mhs', 'nim', 'nama_pmb', 'jumlah', 'status'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'id_mhs' => 'required',
        'id_pmb' => 'required',
        'nama_mhs' => 'required',
        'nim' => 'required',
        'nama_pmb' => 'required',
        'jumlah' => 'required',
        'status' => 'required'
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

    public function getTagihan($id_tag = false)
    {
        if ($id_tag == false) {
            return $this->findAll();
        }
        return $this->where(['id_tag' => $id_tag])->first();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranTagihanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pembayaran_tagihan';
    protected $primaryKey       = 'id_pmbtag';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_tag', 'nama_mhs', 'nama_pmb', 'nim', 'jumlah_bayar'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'id_tag' => 'required',
        'nama_pmb' => 'required',
        'nama_mhs' => 'required',
        'nim' => 'required',
        'jumlah_bayar' => 'required',
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

    public function getPembayaranTagihan($id_pmbtag = false)
    {
        if ($id_pmbtag == false) {
            return $this->findAll();
        }
        return $this->where(['id_pmbtag' => $id_pmbtag])->first();
    }
}

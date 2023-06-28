<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\PembayaranModel;

use CodeIgniter\RESTful\ResourceController;

class Tagihan extends ResourceController
{
    protected $modelName =  'App\Models\TagihanModel';

    protected $mahasiswaModel;
    protected $pembayaranModel;

    function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->pembayaranModel = new PembayaranModel();
    }



    public function index()
    {
        $data = [
            'tagihan' => $this->model->findAll(),
            'mahasiswa' => $this->mahasiswaModel->findAll(),
            'pembayaran' => $this->pembayaranModel->findAll(),

        ];
        return $this->respond([
            'status' => true,
            'data' => $data
        ], 200);
    }

    public function show($id_tag = null)
    {
        $data = [
            'tagihan' => $this->model->findAll(),
            'mahasiswa' => $this->mahasiswaModel->findAll(),
            'pembayaran' => $this->pembayaranModel->findAll(),

        ];
        return $this->respond([
            'status' => true,
            'data' => $data
        ], 200);
    }

    public function create()
    {
        $data = [
            'id_mhs' => $this->request->getVar('id_mhs'),
            'id_pmb' => $this->request->getVar('id_pmb'),
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nim' => $this->request->getVar('nim'),
            'nama_pmb' => $this->request->getVar('nama_pmb'),
            'jumlah' => $this->request->getVar('jumlah'),
            'status' => $this->request->getVar('status')
        ];

        if ($this->model->save($data)) {
            return $this->respond(['status' => true, 'message' => "Data Tagihan berhasil ditambahkan"], 200);
        } else {
            return $this->respond(['status' => false, 'errors' => $this->model->errors()], 422);
        };
    }

    public function edit($id_tag = null)
    {
        if (!$this->model->find($id_tag)) {
            return $this->respond(['status' => false, 'message' => "Data dengan ID Tagihan $id_tag tidak ditemukan"]);
        }
        return $this->model->find($id_tag);
    }

    public function update($id_tag = null)
    {
        if (!$this->model->find($id_tag)) {
            return $this->respond(['status' => false, 'message' => "Data dengan ID Tagihan $id_tag tidak ditemukan"]);
        }

        $data = [
            'id_mhs' => $this->request->getVar('id_mhs'),
            'id_pmb' => $this->request->getVar('id_pmb'),
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nim' => $this->request->getVar('nim'),
            'nama_pmb' => $this->request->getVar('nama_pmb'),
            'jumlah' => $this->request->getVar('jumlah'),
            'status' => $this->request->getVar('status'),
        ];

        if ($this->model->update($id_tag, $data)) {
            return $this->respond(['status' => true, 'message' => "Data dengan ID Tagihan $id_tag berhasil diperbarui"], 200);
        } else {
            return $this->respond(['status' => false, 'errors' => $this->model->errors()], 422);
        };
    }

    public function delete($id_tag = null)
    {
        if (!$this->model->find($id_tag)) {
            return $this->respond(['status' => false, 'message' => "Data dengan ID Tagihan $id_tag tidak ditemukan"]);
        }

        if ($this->model->delete($id_tag)) {
            return $this->respond(['status' => true, 'message' => "Data Tagihan berhasil dihapus"], 200);
        } else {
            return $this->respond(['status' => false, 'errors' => $this->model->errors()], 422);
        };
    }

    public function ambil()
    {

        $data = [
            'title' => 'Tagihan &mdash; Manut-Portal',
            'tagihan' => $this->model->findAll(),
            'mahasiswa' => $this->mahasiswaModel->findAll(),
            'pembayaran' => $this->pembayaranModel->findAll(),
        ];

        return view('tagihan/ambil', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Create tagihan &mdash; Manut-Portal',
            'mahasiswa' => $this->mahasiswaModel->findAll(),
            'pembayaran' => $this->pembayaranModel->findAll(),
        ];


        return view('tagihan/tambah', $data);
    }

    public function simpan()
    {
        $this->model->save([
            'id_mhs' => $this->request->getVar('id_mhs'),
            'id_pmb' => $this->request->getVar('id_pmb'),
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nim' => $this->request->getVar('nim'),
            'nama_pmb' => $this->request->getVar('nama_pmb'),
            'jumlah' => $this->request->getVar('jumlah'),
            'status' => $this->request->getVar('status')
        ]);

        if ($this->model->affectedRows() > 0) {
            return redirect()->to(site_url('tagihan'))->with('tambah', 'Data berhasil ditambahkan');
        }
    }

    public function hapus($id_tag)
    {
        $this->model->delete($id_tag);

        if ($this->model->affectedRows() > 0) {
            return redirect()->to(site_url('tagihan'))->with('hapus', 'Data berhasil dihapus');
        }
    }

    public function ubah($id_tag = null)
    {
        $data = [
            'title' => 'Edit Tagihan &mdash; Manut-Team',
            'tagihan' => $this->model->getTagihan($id_tag),
            'mahasiswa' => $this->mahasiswaModel->findAll(),
            'pembayaran' => $this->pembayaranModel->findAll(),
        ];


        if ($id_tag != null) {
            return view('tagihan/ubah', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function perbarui($id_tag)
    {
        $this->model->update($id_tag, [
            'id_pmb' => $this->request->getVar('id_pmb'),
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nim' => $this->request->getVar('nim'),
            'nama_pmb' => $this->request->getVar('nama_pmb'),
            'jumlah' => $this->request->getVar('jumlah'),
            'status' => $this->request->getVar('status'),
        ]);

        if ($this->model->affectedRows() > 0) {
            return redirect()->to(site_url('tagihan'))->with('ubah', 'Data berhasil diubah');
        }
    }
}

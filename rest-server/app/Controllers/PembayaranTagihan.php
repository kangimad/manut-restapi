<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\PembayaranModel;
use App\Models\TagihanModel;
use App\Models\MahasiswaModel;

class PembayaranTagihan extends ResourceController
{
    protected $modelName = 'App\Models\PembayaranTagihanModel';

    protected $mahasiswaModel;
    protected $tagihanModel;
    protected $pembayaranModel;

    function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->tagihanModel = new TagihanModel();
        $this->pembayaranModel = new PembayaranModel();
    }

    public function index()
    {
        $data = [
            'bayartag' => $this->model->findAll(),
            'mahasiswa' => $this->mahasiswaModel->findAll(),
            'pembayaran' => $this->pembayaranModel->findAll(),
            'tagihan' => $this->tagihanModel->findAll()
        ];
        return $this->respond([
            'status' => true,
            'data' => $data
        ]);
    }

    public function show($id_pmbtag = null)
    {
        $data = [
            'tagihan' => $this->model->findAll(),
            'mahasiswa' => $this->mahasiswaModel->findAll(),
            'pembayaran' => $this->pembayaranModel->findAll(),
            'tagihan' => $this->tagihanModel->findAll()
        ];
        return $this->respond([
            'status' => true,
            'data' => $data
        ], 200);
    }

    public function create()
    {
        $data = [
            'id_tag' => $this->request->getVar('id_tag'),
            'nama_pmb' => $this->request->getVar('nama_pmb'),
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nim' => $this->request->getVar('nim'),
            'jumlah_bayar' => $this->request->getVar('jumlah_bayar'),
        ];

        if ($this->model->save($data)) {
            return $this->respond(['status' => true, 'message' => "Data Pembayaran Tagihan berhasil ditambahkan"], 200);
        } else {
            return $this->respond(['status' => false, 'errors' => $this->model->errors()], 422);
        };
    }

    public function edit($id_pmbtag = null)
    {
        if (!$this->model->find($id_pmbtag)) {
            return $this->respond(['status' => false, 'message' => "Data dengan ID Pembayaran Tagihan $id_pmbtag tidak ditemukan"]);
        }
        return $this->model->find($id_pmbtag);
    }

    public function update($id_pmbtag = null)
    {
        if (!$this->model->find($id_pmbtag)) {
            return $this->respond(['status' => false, 'message' => "Data dengan ID Pembayaran Tagihan $id_pmbtag tidak ditemukan"]);
        }

        $data = [
            'id_tag' => $this->request->getVar('id_tag'),
            'nama_pmb' => $this->request->getVar('nama_pmb'),
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nim' => $this->request->getVar('nim'),
            'jumlah_bayar' => $this->request->getVar('jumlah_bayar'),
        ];

        if ($this->model->update($id_pmbtag, $data)) {
            return $this->respond(['status' => true, 'message' => "Data dengan ID Pembayaran Tagihan $id_pmbtag berhasil diperbarui"], 200);
        } else {
            return $this->respond(['status' => false, 'errors' => $this->model->errors()], 422);
        };
    }

    public function delete($id_pmbtag = null)
    {
        if (!$this->model->find($id_pmbtag)) {
            return $this->respond(['status' => false, 'message' => "Data dengan ID Pembayaran Tagihan $id_pmbtag tidak ditemukan"]);
        }

        if ($this->model->delete($id_pmbtag)) {
            return $this->respond(['status' => true, 'message' => "Data Pembayaran Tagihan berhasil dihapus"], 200);
        } else {
            return $this->respond(['status' => false, 'errors' => $this->model->errors()], 422);
        };
    }

    public function ambil()
    {
        $data = [
            'title' => 'Bayar Tagihan &mdash; Manut-Portal',
            'bayartag' => $this->model->findAll(),
            'mahasiswa' => $this->mahasiswaModel->findAll(),
            'pembayaran' => $this->pembayaranModel->findAll(),
            'tagihan' => $this->tagihanModel->findAll()
        ];

        return view('bayartagihan/ambil', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Create Bayar Tagihan &mdash; Manut-Portal',
            'mahasiswa' => $this->mahasiswaModel->findAll(),
            'pembayaran' => $this->pembayaranModel->findAll(),
            'tagihan' => $this->tagihanModel->findAll()
        ];


        return view('bayartagihan/tambah', $data);
    }

    public function simpan()
    {
        $this->model->save([
            'id_tag' => $this->request->getPost('id_tag'),
            'nama_pmb' => $this->request->getPost('nama_pmb'),
            'nama_mhs' => $this->request->getPost('nama_mhs'),
            'nim' => $this->request->getPost('nim'),
            'jumlah_bayar' => $this->request->getPost('jumlah_bayar'),
        ]);

        if ($this->model->affectedRows() > 0) {
            return redirect()->to(site_url('bayartagihan'))->with('tambah', 'Data berhasil ditambahkan');
        }
    }

    public function hapus($id_pmbtag)
    {
        $this->model->delete($id_pmbtag);

        if ($this->model->affectedRows() > 0) {
            return redirect()->to(site_url('bayartagihan'))->with('hapus', 'Data berhasil dihapus');
        }
    }

    public function ubah($id_pmbtag = null)
    {
        $data = [

            'title' => 'Edit Bayar Tagihan &mdash; Manut-Team',
            'bayartag' => $this->model->getPembayaranTagihan($id_pmbtag),
            'tagihan' => $this->tagihanModel->findAll(),
            'mahasiswa' => $this->mahasiswaModel->findAll(),
            'pembayaran' => $this->pembayaranModel->findAll(),
        ];
        if ($id_pmbtag != null) {

            // echo "<pre>";
            // var_dump($data);
            // echo "</pre>";

            return view('bayartagihan/ubah', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function perbarui($id_pmbtag)
    {
        $this->model->update($id_pmbtag, [
            'id_tag' => $this->request->getPost('id_tag'),
            'nama_pmb' => $this->request->getPost('nama_pmb'),
            'nama_mhs' => $this->request->getPost('nama_mhs'),
            'nim' => $this->request->getPost('nim'),
            'jumlah_bayar' => $this->request->getPost('jumlah_bayar'),
        ]);

        if ($this->model->affectedRows() > 0) {
            return redirect()->to(site_url('bayartagihan'))->with('ubah', 'Data berhasil diubah');
        }
    }
}

<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Pembayaran extends ResourceController
{
    protected $modelName = 'App\Models\PembayaranModel';

    public function index()
    {
        return $this->respond([
            'status' => true,
            'data' => $this->model->findAll()
        ], 200);
    }

    public function show($id_pmb = null)
    {
        return $this->respond([
            'status' => true,
            'data' => $this->model->find($id_pmb)
        ], 200);
    }

    public function create()
    {
        $data = [
            'nama_pmb' => $this->request->getVar('nama_pmb'),
            'jumlah' => $this->request->getVar('jumlah'),
        ];

        if ($this->model->save($data)) {
            return $this->respond(['status' => true, 'message' => "Data Pembayaran berhasil ditambahkan"], 200);
        } else {
            return $this->respond(['status' => false, 'errors' => $this->model->errors()], 422);
        };
    }

    public function edit($id_pmb = null)
    {
        if (!$this->model->find($id_pmb)) {
            return $this->respond(['status' => false, 'message' => "Data dengan ID Pembayaran $id_pmb tidak ditemukan"]);
        }
        return $this->model->find($id_pmb);
    }

    public function update($id_pmb = null)
    {
        if (!$this->model->find($id_pmb)) {
            return $this->respond(['status' => false, 'message' => "Data dengan ID Pembayaran $id_pmb tidak ditemukan"]);
        }

        $data = [
            'nama_pmb' => $this->request->getVar('nama_pmb'),
            'jumlah' => $this->request->getVar('jumlah'),
        ];

        if ($this->model->update($id_pmb, $data)) {
            return $this->respond(['status' => true, 'message' => "Data dengan ID Pembayaran $id_pmb berhasil diperbarui"], 200);
        } else {
            return $this->respond(['status' => false, 'errors' => $this->model->errors()], 422);
        };
    }

    public function delete($id_pmb = null)
    {
        if (!$this->model->find($id_pmb)) {
            return $this->respond(['status' => false, 'message' => "Data dengan ID Pembayaran $id_pmb tidak ditemukan"]);
        }

        if ($this->model->delete($id_pmb)) {
            return $this->respond(['status' => true, 'message' => "Data Pembayaran berhasil dihapus"], 200);
        } else {
            return $this->respond(['status' => false, 'errors' => $this->model->errors()], 422);
        };
    }

    public function ambil()
    {
        $data = [
            'title' => 'Pembayaran &mdash; Manut-Portal',
            'pembayaran' => $this->model->findAll()
        ];
        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";

        return view('pembayaran/ambil', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Create pembayaran &mdash; Manut-Portal'
        ];


        return view('Pembayaran/tambah', $data);
    }

    public function simpan()
    {
        $this->model->save([
            'nama_pmb' => $this->request->getVar('nama_pmb'),
            'jumlah' => $this->request->getVar('jumlah'),
        ]);

        if ($this->model->affectedRows() > 0) {
            return redirect()->to(site_url('pembayaran'))->with('tambah', 'Data berhasil ditambahkan');
        }
    }

    public function hapus($id_pmb)
    {
        $this->model->delete($id_pmb);

        if ($this->model->affectedRows() > 0) {
            return redirect()->to(site_url('pembayaran'))->with('hapus', 'Data berhasil dihapus');
        }
    }

    public function ubah($id_pmb = null)
    {
        $data = [
            'title' => 'Edit pembayaran &mdash; Manut-Team',
            'pembayaran' => $this->model->getpembayaran($id_pmb)
        ];
        if ($id_pmb != null) {
            return view('pembayaran/ubah', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function perbarui($id_pmb)
    {
        $this->model->update($id_pmb, [
            'nama_pmb' => $this->request->getVar('nama_pmb'),
            'jumlah' => $this->request->getVar('jumlah'),
        ]);

        if ($this->model->affectedRows() > 0) {
            return redirect()->to(site_url('pembayaran'))->with('ubah', 'Data berhasil diubah');
        }
    }
}

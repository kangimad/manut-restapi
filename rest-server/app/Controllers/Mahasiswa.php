<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use CodeIgniter\RESTful\ResourceController;

class Mahasiswa extends ResourceController
{

    protected $modelName = 'App\Models\MahasiswaModel';

    public function index()
    {
        $data = $this->model->findAll();
        return $this->respond([
            'status' => true,
            'data' => $data
        ], 200);
    }

    public function show($id_mhs = null)
    {
        $data = $this->model->findAll();
        return $this->respond([
            'status' => true,
            'data' => $data
        ], 200);
    }

    public function create()
    {
        $data = [
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nim' => $this->request->getVar('nim'),
            'jurusan' => $this->request->getVar('jurusan'),
            'angkatan' => $this->request->getVar('angkatan'),
            'email' => $this->request->getVar('email'),
            'foto' => $this->request->getVar('foto'),
        ];

        if ($this->model->save($data)) {
            return $this->respond(['status' => true, 'message' => "Data Mahasiswa berhasil ditambahkan"], 200);
        } else {
            return $this->respond(['status' => false, 'errors' => $this->model->errors()], 422);
        };
    }

    public function edit($id_mhs = null)
    {
        if (!$this->model->find($id_mhs)) {
            return $this->respond(['status' => false, 'message' => "Data dengan ID Mahasiswa $id_mhs tidak ditemukan"]);
        }
        return $this->model->find($id_mhs);
    }

    public function update($id_mhs = null)
    {
        if (!$this->model->find($id_mhs)) {
            return $this->respond(['status' => false, 'message' => "Data dengan ID Mahasiswa $id_mhs tidak ditemukan"]);
        }

        $data = [
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nim' => $this->request->getVar('nim'),
            'jurusan' => $this->request->getVar('jurusan'),
            'angkatan' => $this->request->getVar('angkatan'),
            'email' => $this->request->getVar('email'),
            'foto' => $this->request->getVar('foto'),
        ];

        if ($this->model->update($id_mhs, $data)) {
            return $this->respond(['status' => true, 'message' => "Data dengan ID Mahasiswa $id_mhs berhasil diperbarui"], 200);
        } else {
            return $this->respond(['status' => false, 'errors' => $this->model->errors()], 422);
        };
    }

    public function delete($id_mhs = null)
    {
        if (!$this->model->find($id_mhs)) {
            return $this->respond(['status' => false, 'message' => "Data dengan ID Mahasiswa $id_mhs tidak ditemukan"]);
        }

        if ($this->model->delete($id_mhs)) {
            return $this->respond(['status' => true, 'message' => "Data Mahasiswa berhasil dihapus"], 200);
        } else {
            return $this->respond(['status' => false, 'errors' => $this->model->errors()], 422);
        };
    }

    public function ambil()
    {
        $data = [
            'title' => 'Mahasiswa &mdash; Manut-Portal',
            'mahasiswa' => $this->model->findAll()
        ];

        return view('mahasiswa/ambil', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Create Mahasiswa &mdash; Manut-Portal'
        ];


        return view('mahasiswa/tambah', $data);
    }

    public function simpan()
    {
        $this->model->save([
            'nama_mhs' => $this->request->getPost('nama_mhs'),
            'nim' => $this->request->getPost('nim'),
            'jurusan' => $this->request->getPost('jurusan'),
            'angkatan' => $this->request->getPost('angkatan'),
            'email' => $this->request->getPost('email'),
            'foto' => $this->request->getPost('foto')
        ]);

        if ($this->model->affectedRows() > 0) {
            return redirect()->to(site_url('mahasiswa'))->with('tambah', 'Data berhasil ditambahkan');
        }
    }

    public function hapus($id_mhs)
    {
        $this->model->delete($id_mhs);

        if ($this->model->affectedRows() > 0) {
            return redirect()->to(site_url('mahasiswa'))->with('hapus', 'Data berhasil dihapus');
        }
    }

    public function ubah($id_mhs = null)
    {
        $data = [
            'title' => 'Edit Mahasiswa &mdash; Manut-Team',
            'mahasiswa' => $this->model->getMahasiswa($id_mhs)
        ];
        if ($id_mhs != null) {
            return view('mahasiswa/ubah', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function perbarui($id_mhs)
    {
        $this->model->update($id_mhs, [
            'nama_mhs' => $this->request->getPost('nama_mhs'),
            'nim' => $this->request->getPost('nim'),
            'jurusan' => $this->request->getPost('jurusan'),
            'angkatan' => $this->request->getPost('angkatan'),
            'foto' => $this->request->getPost('foto')
        ]);

        if ($this->model->affectedRows() > 0) {
            return redirect()->to(site_url('mahasiswa'))->with('ubah', 'Data berhasil diubah');
        }
    }
}

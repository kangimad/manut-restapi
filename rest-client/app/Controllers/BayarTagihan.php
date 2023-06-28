<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class BayarTagihan extends BaseController
{

    public function index()
    {
        $api = 'http://localhost:8080/api/pembayarantagihan';
        $response = file_get_contents($api);

        $data = [
            'title' => 'Bayar Tagihan &mdash; Manut-Payment',
            'api' => json_decode($response, true)
        ];

        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";

        return view('bayartagihan/get', $data);
    }

    public function create()
    {
        $api = 'http://localhost:8080/api/pembayarantagihan';
        $response = file_get_contents($api);

        $data = [
            'title' => 'Create Pembayaran Tagihan &mdash; Manut-Payment',
            'api' => json_decode($response, true)
        ];

        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";

        echo view('bayartagihan/add', $data);
    }

    public function save()
    {

        $pmbtag = [
            'id_tag' => $this->request->getPost('id_tag'),
            'nama_pmb' => $this->request->getPost('nama_pmb'),
            'nama_mhs' => $this->request->getPost('nama_mhs'),
            'nim' => $this->request->getPost('nim'),
            'jumlah_bayar' => $this->request->getPost('jumlah_bayar'),
        ];

        $postjson = json_encode($pmbtag, true);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:8080/api/pembayarantagihan',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $postjson,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return redirect()->to(site_url('bayartagihan'))->with('tambah', 'Data berhasil ditambahkan');
    }

    public function edit($id_pmbtag = null)
    {
        $api = 'http://localhost:8080/api/pembayarantagihan';
        $response = file_get_contents($api);

        $data = [
            $id_pmbtag,
            'title' => 'Edit Pembayaran Tagihan &mdash; Manut-Payment',
            'api' => json_decode($response)
        ];
        if ($id_pmbtag != null) {

            // echo "<pre>";
            // var_dump($data);
            // echo "</pre>";

            return view('bayartagihan/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}

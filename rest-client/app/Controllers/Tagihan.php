<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Tagihan extends BaseController
{

    public function index()
    {
        $api = 'http://localhost:8080/api/pembayarantagihan';
        $response = file_get_contents($api);

        $data = [
            'title' => 'Tagihan &mdash; Manut-Payment',
            'api' => json_decode($response, true)
        ];

        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";

        return view('tagihan/get', $data);
    }
}

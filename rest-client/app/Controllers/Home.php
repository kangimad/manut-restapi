<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home &mdash; Manut-Payment'
        ];
        return view('pages/home', $data);
    }
}

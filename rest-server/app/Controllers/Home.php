<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home &mdash; Manut-Portal'
        ];
        return view('pages/home', $data);
    }
}

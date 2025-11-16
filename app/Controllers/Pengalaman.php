<?php

namespace App\Controllers;

use App\Models\PengalamanModel;

class Pengalaman extends BaseController
{
    public function daftar()
    {
        $model = new PengalamanModel();

        $data['pengalaman'] = $model->findAll();

        return view('pengalaman_list', $data);
    }
}


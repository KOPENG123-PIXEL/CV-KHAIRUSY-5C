<?php

namespace App\Controllers;

use App\Models\BiodataModel;
use App\Models\PendidikanModel;
use App\Models\PengalamanModel;
use App\Models\KeahlianModel;
use App\Models\PortofolioModel;

class Cv extends BaseController
{
    // ===========================
    //      HALAMAN UTAMA CV
    // ===========================
    public function index()
    {
        $biodataModel      = new BiodataModel();
        $pendidikanModel   = new PendidikanModel();
        $pengalamanModel   = new PengalamanModel();
        $keahlianModel     = new KeahlianModel();
        $portofolioModel   = new PortofolioModel();

        $data = [
            'biodata'     => $biodataModel->first(),
            'pendidikan'  => $pendidikanModel->findAll(),
            'pengalaman'  => $pengalamanModel->findAll(),
            'keahlian'    => $keahlianModel->findAll(),
            'portofolio'  => $portofolioModel->findAll()
        ];

        return view('cv_view', $data);
    }

    // ===========================
    //      HALAMAN PENDIDIKAN
    // ===========================
    public function pendidikan()
    {
        $pendidikanModel = new PendidikanModel();

        $data = [
            'pendidikan' => $pendidikanModel->findAll()
        ];

        return view('pendidikan_view', $data);
    }

    // ===========================
    //      DETAIL PENDIDIKAN
    // ===========================
    public function pendidikanDetail($id = null)
    {
        $pendidikanModel = new PendidikanModel();
        $pendidikan = $pendidikanModel->find($id);

        if (!$pendidikan) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                "Data pendidikan dengan ID $id tidak ditemukan."
            );
        }

        return view('pendidikan_detail', ['pendidikan' => $pendidikan]);
    }

    // ===========================
    //      HALAMAN PENGALAMAN
    // ===========================
    public function pengalaman()
    {
        $pengalamanModel = new PengalamanModel();

        $data = [
            'pengalaman' => $pengalamanModel->findAll()
        ];

        return view('pengalaman_view', $data);
    }

    // ===========================
    //      HALAMAN KEAHLIAN
    // ===========================
    public function keahlian()
    {
        $keahlianModel = new KeahlianModel();

        $data = [
            'keahlian' => $keahlianModel->findAll()
        ];

        return view('keahlian_view', $data);
    }
}

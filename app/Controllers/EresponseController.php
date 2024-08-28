<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EresponseController extends BaseController
{
    public function index()
    {
        return view('eResponse');
    }

    public function tanya_ft()
    {
        return view('tanya_ft');
    }

    public function tambah_pengajuan()
    {
        return view('tambah_pengajuan');
    }

    public function process_tambah_pengajuan()
    {
        // Process pengajuan, e.g., save to database

        // Redirect back to Tanya FT page
        return redirect()->to('/eResponse/tanya_ft');
    }
}

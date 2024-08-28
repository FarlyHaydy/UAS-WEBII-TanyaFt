<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuanModel extends Model
{
    protected $table = 'pengajuan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'nim', 'program_studi', 'pertanyaan', 'jenis_pengajuan', 'tanggal_pengajuan', 'status', 'berkas'];
    protected $useTimestamps = true;
}


<?php

namespace App\Controllers;

use App\Models\PengajuanModel;

class Pengajuan extends BaseController
{
    public function simpan()
    {
        $pengajuanModel = new PengajuanModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'program_studi' => $this->request->getPost('program_studi'),
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'jenis_pengajuan' => 'Tanya FT',
            'tanggal_pengajuan' => date('Y-m-d H:i:s'),
            'status' => 'Diproses'
        ];

        $berkas = $this->request->getFile('berkas');
        if ($berkas && $berkas->isValid() && !$berkas->hasMoved()) {
            $berkasName = $berkas->getRandomName();
            $berkas->move(WRITEPATH . 'uploads', $berkasName);
            $data['berkas'] = $berkasName;
        }

        $pengajuanModel->save($data);
        $pengajuanId = $pengajuanModel->getInsertID();

        // Delay selama 3 detik dan otomatis akan disetujui
        sleep(3);

        // Update status to 'Disetujui'
        $pengajuanModel->update($pengajuanId, ['status' => 'Disetujui']);

        return redirect()->to(base_url('eResponse/tanya_ft'));
    }

    public function detail($id)
    {
        $pengajuanModel = new PengajuanModel();
        $pengajuan = $pengajuanModel->find($id);

        if ($pengajuan) {
            return view('detail_pengajuan', ['pengajuan' => $pengajuan]);
        }

        return redirect()->to(base_url('eResponse/tanya_ft'));
    }

    public function delete($id)
    {
        $pengajuanModel = new PengajuanModel();
        $pengajuan = $pengajuanModel->find($id);

        if ($pengajuan) {
            if (isset($pengajuan['berkas']) && file_exists(WRITEPATH . 'uploads/' . $pengajuan['berkas'])) {
                unlink(WRITEPATH . 'uploads/' . $pengajuan['berkas']);
            }
            $pengajuanModel->delete($id);
        }

        return redirect()->to(base_url('eResponse/tanya_ft'));
    }

    public function viewBerkas($filename)
    {
        $filePath = WRITEPATH . 'uploads/' . $filename;

        if (file_exists($filePath)) {
            $fileType = mime_content_type($filePath);
            header('Content-Type: ' . $fileType);
            readfile($filePath);
            exit;
        }

        return redirect()->to(base_url('eResponse/tanya_ft'));
    }

    public function tanggapan($id)
    {
        $pengajuanModel = new PengajuanModel();
        $pengajuan = $pengajuanModel->find($id);

        if ($pengajuan) {
            return view('tanggapan', ['pengajuan' => $pengajuan]);
        }

        return redirect()->to(base_url('eResponse/tanya_ft'));
    }
}

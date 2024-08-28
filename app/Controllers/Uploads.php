<?php

namespace App\Controllers;

class Uploads extends BaseController
{
    public function showFile($filename)
    {
        $path = WRITEPATH . 'uploads/' . $filename;
        if (file_exists($path)) {
            return $this->response->download($path, null);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}

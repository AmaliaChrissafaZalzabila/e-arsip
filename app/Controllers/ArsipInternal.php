<?php
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ArsipInternal_model;
 
class ArsipInternal extends BaseController
{
    public function index()
{
    $model = new ArsipInternal_model;
    $data['title']     = 'Dokumen Arsip Internal';
    $data['getDokumen'] = $model->getDokumen();

    echo view('header', $data);
    echo view('ArsipInternal_view', $data);
    echo view('footer', $data);
}


    
 
    public function add()
    {
        $model = new ArsipInternal_model;
        $data = array(
            'dokumen' => $this->request->getPost('dokumen'),
            'nomor'         => $this->request->getPost('nomor'),
            'jenis'  => $this->request->getPost('jenis'),
            'divisi'  => $this->request->getPost('divisi'),
            'tanggal'  => $this->request->getPost('tanggal'),
            'user'  => $this->request->getPost('user')
                );
        $model->saveDokumen($data);
        echo '<script>
                alert("Berhasil Menambahkan Dokumen Arsip Internal");
                window.location="' . base_url('ArsipInternal') . '"
            </script>';
    }
 
}
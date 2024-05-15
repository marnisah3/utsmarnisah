<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;
use App\Models\CustomerModel;
use CodeIgniter\HTTP\ResponseInterface;

class Anggota extends BaseController
{
    protected $anggotaModel;
    public function __construct()
    {
        $this->anggotaModel = new AnggotaModel();
    }
    public function index()
    {
        $data = [
            'active' => 'anggota',
            'judul' => 'Master Data',
            'subtitle' => 'anggota',
            'anggota' => $this->anggotaModel->findAll(),
        ];
        return view('anggota', $data);
    }

    public function insertData()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'jabatan' => $this->request->getPost('jabatan'),
            'alamat' => $this->request->getPost('alamat')
        ];

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
        $this->anggotaModel->insertData($data);
        return redirect()->to('anggota');
    }

    public function updateData($id_anggota)
    {
        $data = [
            'id' => $id_anggota,
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'jabatan' => $this->request->getPost('jabatan'),
            'alamat' => $this->request->getPost('alamat')
        ];
        
        $this->anggotaModel->updateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('anggota');
    }

    public function deleteData($id_anggota)
    {
        $data = [
            'id' => $id_anggota
        ];
        
        $this->anggotaModel->deleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('anggota');
    }

    
}

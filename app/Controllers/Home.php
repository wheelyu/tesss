<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;
class Home extends BaseController
{
    protected $db;
    protected $builder;
    public $MahasiswaModel;

    public function __construct()    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('mahasiswa');
        $this->MahasiswaModel = new MahasiswaModel();
    }
    public function index(): string
    {
        $this->builder->select();
        $query = $this->builder->get();
        $data = [
            'data_mahasiswa' => $query->getResult(),
        ];
        return view('Main', $data);
    }

    public function tambah()
    {
        return view('Tambah');
    }
    public function simpan(){
        $MahasiswaModel = new MahasiswaModel();
        $MahasiswaModel -> saveMahasiswa([
            'Nama' => $this->request->getVar('Nama'),
            'Umur' => $this->request->getVar('Umur'),
            'Prodi' => $this->request->getVar('Prodi'),
            'Asal' => $this->request->getVar('Asal'),
        ]);

        return redirect()->to(base_url('/'));
    }
    public function edit($id){
        $data = [
            'id' => $id,
        ];
        return view('Edit', $data);
    }

    public function editsubmit(){
        $id = $this->request->getVar('id');
        $data = [
            'Nama' => $this->request->getVar('Nama'),
            'Umur' => $this->request->getVar('Umur'),
            'Prodi' => $this->request->getVar('Prodi'),
            'Asal' => $this->request->getVar('Asal'),
        ];
        $this->MahasiswaModel->updateMahasiswa($data, $id); // Perubahan pada nama metode
        return redirect()->to(base_url('/'));
    }
    public function delete($id){
        $MahasiswaModel = new MahasiswaModel();
        $MahasiswaModel -> DeleteMahasiswa([
            'id' => $id,
        ]);
        return redirect()->to(base_url('/'));
    }
}

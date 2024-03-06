<?php

namespace App\Controllers;
use app\Models\MahasiswaModel;
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

    }
}

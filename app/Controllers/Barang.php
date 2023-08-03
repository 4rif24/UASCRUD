<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modelbarang;

class Barang extends BaseController
{
    public function __construct()
    {
        $this->barang = new Modelbarang();

    }

    public function index()
    {
        $data = [
            'tampildata' => $this->barang->tampildata(),
        ];
        return view('barang/viewbarang', $data);
    }

    public function tambah()
    {
        $modelkategori = new Modelkategori();
        $modelsatuan = new Modelsatuan();
        return view('barang/formtambah');

        $data = [
            'dataketegori' => $modelkategori->findAll(),
            'datasatuan' => $modelsatuan->findAll(),
        ];
        return view('barang/formtambah', $data);
    }
}

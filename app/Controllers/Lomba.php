<?php

namespace App\Controllers;

use App\Models\KategoriLombaModel;

class Lomba extends BaseController
{
    public function __construct()
    {
        $this->KategoriLombaModel = new KategoriLombaModel();
    }

    public function index()
    {
        $data['data'] = $this->KategoriLombaModel->findAll();
        // dd($data);
        return view('listLomba', $data);
    }

    public function tambahLomba()
    {
        return view('tambahLomba');
    }

    public function editLomba()
    {
        return view('editLomba');
    }

    public function hapusLomba()
    {
        return view('hapusLomba');
    }

    public function simpan()
    {
        $request = service('request');
        $data = [
            // 'key_in_migration' => $request->getVar('name_Attr'),
            'kategori_lomba'    => $this->request->getVar('namaLomba'),
            'status_lomba'     => $this->request->getVar('statusLomba')
        ];
        // dd($data);
        $this->KategoriLombaModel->insert($data);
        return redirect()->to('/admin');
    }
}

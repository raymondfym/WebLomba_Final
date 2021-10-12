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

    public function editLomba($id)
    {
        $data['data'] = $this->KategoriLombaModel->find($id);

        return view('editLomba', $data);
    }

    public function hapusLomba($id)
    {
        $this->KategoriLombaModel->delete($id);
        return redirect()->to('/admin');
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

    public function update($id)
    {
        $data = [
            // 'key_in_migration' => $request->getVar('name_Attr'),
            'kategori_lomba'    => $this->request->getVar('namaLomba'),
            'status_lomba'     => $this->request->getVar('statusLomba')
        ];
        // dd($data);
        $this->KategoriLombaModel->update($id, $data);
        return redirect()->to('/admin');
    }
}

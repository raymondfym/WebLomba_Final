<?php

namespace App\Controllers;

class Lomba extends BaseController
{
    public function index()
    {
        return view('listLomba');
    }
    public function tambahLomba()
    {
        return view('tambahLomba');
    }
    public function editLomba()
    {
        return view('editLomba');
    }
}

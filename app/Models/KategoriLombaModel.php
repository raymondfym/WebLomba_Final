<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriLombaModel extends Model
{
    protected $table                = 'kategori_lomba';
    protected $primaryKey           = 'lomba_id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['kategori_lomba', 'status_lomba'];
}

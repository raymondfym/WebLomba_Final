<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KategoriLomba extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'lomba_id'      => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'auto_increment' => true
            ],
            'kategori_lomba' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100'
            ],
            'status_lomba' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100'
            ],
        ]);
        $this->forge->addKey('lomba_id', true);
        $this->forge->createTable('kategori_lomba');
    }

    public function down()
    {
        $this->forge->dropTable('kategori_lomba');
    }
}

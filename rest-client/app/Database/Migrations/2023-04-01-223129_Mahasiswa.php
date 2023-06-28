<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_mhs' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_mhs' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nim' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique' => true,
            ],
            'jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'angkatan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_mhs', true);
        $this->forge->createTable('t_mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('t_mahasiswa');
    }
}

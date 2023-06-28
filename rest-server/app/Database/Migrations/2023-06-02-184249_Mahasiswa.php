<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_mhs' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_mhs' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'nim' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'angkatan' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addPrimaryKey('id_mhs');
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswa');
    }
}

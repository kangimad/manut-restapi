<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tagihan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tag' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kode_tag' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_tag' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nominal' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_tag', true);
        $this->forge->createTable('t_tagihan');
    }

    public function down()
    {
        $this->forge->dropTable('t_tagihan');
    }
}

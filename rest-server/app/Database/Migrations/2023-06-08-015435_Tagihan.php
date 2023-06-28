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
            'id_mhs' => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned' => true,
            ],
            'id_pmb' => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned' => true,
            ],
            'nama_mhs' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nim' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'nama_pmb' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jumlah' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id_tag', true);
        $this->forge->addForeignKey('id_mhs', 'mahasiswa', 'id_mhs');
        $this->forge->addForeignKey('id_pmb', 'pembayaran', 'id_pmb');
        $this->forge->createTable('tagihan');
    }

    public function down()
    {
        $this->forge->dropForeignKey('id_mhs', 'mahasiswa', 'id_mhs');
        $this->forge->dropForeignKey('id_pmb', 'pembayaran', 'id_pmb');
        $this->forge->dropTable('tagihan');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pmb' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_pmb' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'id_tag' => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned' => true,
            ],
            'vir_acc' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nominal' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'metode_pmb' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'id_mhs' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => true,
            ],
            'status' => [
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
        $this->forge->addKey('id_pmb', true);
        $this->forge->addForeignKey('id_mhs', 't_mahasiswa', 'id_mhs');
        $this->forge->addForeignKey('id_tag', 't_tagihan', 'id_tag');
        $this->forge->createTable('t_pembayaran');
    }

    public function down()
    {
        $this->forge->dropForeignKey('t_tagihan', 't_pembayaran_id_mhs_foreign');
        $this->forge->dropForeignKey('t_tagihan', 't_pembayaran_id_tag_foreign');
        $this->forge->dropTable('t_tagihan');
    }
}

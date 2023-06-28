<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PembayaranTagihan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pmbtag' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_tag' => [
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
            'jumlah_bayar' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id_pmbtag', true);
        $this->forge->addForeignKey('id_tag', 'tagihan', 'id_tag');
        $this->forge->createTable('pembayaran_tagihan');
    }

    public function down()
    {
        $this->forge->dropForeignKey('id_tag', 'tagihan', 'id_tag');
        $this->forge->dropTable('pembayaran_tagihan');
    }
}

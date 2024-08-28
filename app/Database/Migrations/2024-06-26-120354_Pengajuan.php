<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengajuan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nim' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'program_studi' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pertanyaan' => [
                'type'       => 'TEXT',
            ],
            'jenis_pengajuan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal_pengajuan' => [
                'type' => 'DATETIME',
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['Diproses', 'Disetujui', 'Ditolak'],
                'default'    => 'Diproses',
            ],
            'berkas' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('pengajuan');
    }

    public function down()
    {
        $this->forge->dropTable('pengajuan');
    }
}

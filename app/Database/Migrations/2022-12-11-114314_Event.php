<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Event extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_Event' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'NamaEvent' => [
                'type'           => 'VARCHAR',
                'constraint'     => '128',
            ],
            'JenisTour' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'Alamat' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'tglMulai' => [
                'type'           => 'DATE',
                'null'            => true,
            ],
            'tglSelesai' => [
                'type'           => 'DATE',
                'null'            => true,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'            => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'            => true,
            ]
        ]);

        $this->forge->addPrimaryKey('id_Event');

        $this->forge->createTable('Event');
    }

    public function down()
    {
        //
    }
}

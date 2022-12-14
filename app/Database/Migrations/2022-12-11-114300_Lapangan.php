<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lapangan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_Lap' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'NamaTempat' => [
                'type'           => 'VARCHAR',
                'constraint'     => '128',
            ],
            'Alamat' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'JumlahLap' => [
                'type'           => 'INT',
                'constraint'     => 2,
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

        $this->forge->addPrimaryKey('id_Lap');

        $this->forge->createTable('Lapangan');
    }

    public function down()
    {
        //
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Biodata extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'Umur' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'Prodi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'Asal' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ] 
        ]);
        $this->forge->addKey('id', true,true);
        $this->forge->createTable('biodata');
            
    }

    public function down()
    {
        $this->forge->dropTable('biodata',true);
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Animals extends Migration
{
	public function up()
    {
        $this->forge->addField([
            'id'	=> [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'animalName'	=> [
                'type'       	=> 'VARCHAR',
                'constraint' 	=> '255',
            ],
            'animalPrice'	=> [
                'type' 			=> 'INT',
                'constraint' 	=> 11,
            ],
			'animalDescription'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '255',
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('animals');
    }

    public function down()
    {
        $this->forge->dropTable('animals');
    }
}

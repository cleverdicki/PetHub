<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Supplies extends Migration
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
            'suppliesName'	=> [
                'type'       	=> 'VARCHAR',
                'constraint' 	=> '255', 
            ],
            'suppliesPrice'	=> [
                'type' 			=> 'INT',
                'constraint' 	=> 11,
            ],
			'suppliesDescription'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '255',
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('supplies');
    }

    public function down()
    {
        $this->forge->dropTable('supplies');
    }
}

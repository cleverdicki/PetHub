<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Histories extends Migration
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
            'buyerName'	=> [
                'type'       	=> 'VARCHAR',
                'constraint' 	=> '255',
            ],
            'stuffName'	=> [
                'type' 			=> 'VARCHAR',
                'constraint' 	=> '255',
            ],
            'amountStuff'	=> [
                'type' 			=> 'INT',
                'constraint' 	=> 11,
            ],
			'payingMethod'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '255',
            ],
			'totalPrice' => [
				'type'			=> 'INT',
				'constraint'	=> 11,
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('histories');
    }

    public function down()
    {
        $this->forge->dropTable('histories');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
            'firstNameUser'	=> [
                'type'       	=> 'VARCHAR',
                'constraint' 	=> '255',
            ],
            'lastNameUser'	=> [
                'type' 			=> 'VARCHAR',
                'constraint' 	=> '255',
            ],
			'emailUser'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '255',
            ],
			'passwordUser' => [
				'type'			=> 'VARCHAR',
				'constraint'	=> '255',
			],
			'dateBirthUser' => [
				'type'			=> 'DATE',
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}

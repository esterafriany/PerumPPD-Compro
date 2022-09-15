<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
			'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
			'username'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
			'fullname'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
			'phone_number'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
			'is_active'       => [
                'type'              => 'ENUM',
                'constraint'        => "'0','1'",
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users', true);
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}

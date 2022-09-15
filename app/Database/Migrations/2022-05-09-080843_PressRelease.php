<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PressRelease extends Migration
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
            'title'       => [
                'type'           => 'LONGTEXT',
            ],
			'date'       => [
                'type'           => 'DATETIME',
            ],
			'body'       => [
                'type'           => 'LONGTEXT',
            ],
            'source'       => [
                'type'           => 'varchar',
                'constraint'           => '255',
            ],
            'path_image'       => [
                'type'           => 'varchar',
                'constraint'           => '255',
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
        $this->forge->createTable('press_releases', true);
    }

    public function down()
    {
        $this->forge->dropTable('press_releases');
    }
}

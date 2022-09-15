<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Coupon extends Migration
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
			'code'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50'
			],
			'description'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
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
        $this->forge->createTable('coupons', true);
    }

	public function down()
    {
        $this->forge->dropTable('coupons');
    }
}

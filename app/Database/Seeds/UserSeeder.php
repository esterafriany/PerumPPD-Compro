<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\Users;

class UserSeeder extends Seeder
{
    public function run()
	{
		$object = new Users();

		$object->insertBatch([
			[
				"name" => "Ester Afriany",
				"email" => "ester@perumppd.co.id",
				"password" => md5("password"),
				"username" => "budiu",
				"fullname" => "Ester Afriany Simatupang",
				"phone_number" => "0000",
				"is_active" => "1"
			],
			[
				"name" => "User User",
				"email" => "pb@perumppd.co.id",
				"password" => md5("password"),
				"username" => "staff",
				"fullname" => "XXX",
				"phone_number" => "0000",
				"is_active" => "1"
			]
		]);
	}
}

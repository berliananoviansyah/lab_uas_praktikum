<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
        $model->insert([
            'username' => 'Berliana',
            'useremail'=> 'berliananoviansyah@gmail.com',
            'userpassword' => password_hash('berlin609', PASSWORD_DEFAULT),
        ]);
	}
}

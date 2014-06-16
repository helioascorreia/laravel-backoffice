<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::truncate();     //limpa as bases de dados da tabela users

        User::create([
            'username'     => 'admin',
            'password'     => Hash::make('admin')
        ]);

    }

}
<?php


class UsersTableSeeder extends Seeder {
	
	
	public function run()
	{
		
		User::truncate();
		
		User::create([
			'username' => 'Dave',
			'email' => 'davidw@solarpolar.co.uk',
			'password' => 'theshed21',
		]);
		
		User::create([
			'username' => 'Mary',
			'email' => 'mary@maltonwebdesign.co.uk',
			'password' => Hash::make('theshed21'),
		]);

	}
	
}
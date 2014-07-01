<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        User::create([
            'email' => 'test@test.nl',
            'first_name' => 'Test',
            'last_name' => 'Test',
        ]);
	}

}

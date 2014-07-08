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
            'first_name' => 'Boy',
            'last_name' => 'Hagemann',
            'image' => 'http://m.c.lnkd.licdn.com/mpr/mprx/0_gyqUotBXm23hfUEL0ZQkorFwuaqfSgsLx4hXorQnPIhOtJS5AsXBkK-ZC8NAasUdyx95LBqOHX77',
        ]);
	}

}

<?php

class AdvertisementTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        Advertisement::create([
            'title' => 'Een eerste vraag',
            'body' => 'Wie heeft er hier een opdracht voor mij?',
            'user_id' => 1,
            'type' => 'demand',
        ]);

        Advertisement::create([
            'title' => 'Een eerste aanbod',
            'body' => 'Dit is een aanbod',
            'user_id' => 1,
            'type' => 'supply',
        ]);
	}

}

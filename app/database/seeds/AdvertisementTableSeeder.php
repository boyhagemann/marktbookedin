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

        DB::table('advertisements')->delete();

        try {
            $client = new Elasticsearch\Client();
            $client->indices()->delete([
                'index' => 'marktbookedin',
            ]);
        }
        catch(Exception $e) {

        }

        Advertisement::create([
            'title' => 'Een eerste vraag',
            'body' => 'Wie heeft er hier een opdracht voor mij?',
            'user_id' => 1,
            'type' => Advertisement::TYPE_DEMAND,
        ]);

        Advertisement::create([
            'title' => 'Een eerste aanbod',
            'body' => 'Dit is een aanbod',
            'user_id' => 1,
            'type' => Advertisement::TYPE_SUPPLY,
        ]);
	}

}

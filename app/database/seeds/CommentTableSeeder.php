<?php

class CommentTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        DB::table('comments')->delete();

        Comment::create([
            'body' => 'Dit is een eerste comment',
            'user_id' => 1,
            'commentable_id' => 1,
            'commentable_type' => 'Advertisement',
        ]);

        Comment::create([
            'body' => 'Dit is een tweede comment',
            'user_id' => 1,
            'commentable_id' => 1,
            'commentable_type' => 'Advertisement',
        ]);

	}

}

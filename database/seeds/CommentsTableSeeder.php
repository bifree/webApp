<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'user_id' => '1',
            'post_id' => '2',
            'body' => 'Oh My Gosh'
            ]);
        DB::table('comments')->insert([
            'user_id' => '3',
            'post_id' => '1',
            'body' => 'Ehhh?'
            ]);
        DB::table('comments')->insert([
            'user_id' => '2',
            'post_id' => '2',
            'body' => 'Really?'
            ]);
    }
}

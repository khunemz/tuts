<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<=100; $i++):
            DB::table('articles')
                ->insert([
                    'title' => $faker->sentence,
                    'body' => $faker->paragraph,
                    'published_at' => $faker->date('Y-m-d', $max = 'now')
                ]);
        endfor;
    }
}

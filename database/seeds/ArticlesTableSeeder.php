<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert(array(
            'title' => Str::random(15),
            'text' => Str::random(150),
            'created_at' => date("Y-m-d", time()),
            'updated_at' => date("Y-m-d", time()),
        ));
    }
}

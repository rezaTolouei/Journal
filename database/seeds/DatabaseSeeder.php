<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ArticleStateTableSeeder::class);
         $this->call(RolesTableSeeder::class);
         $this->call(ArticleTypeTableSeeder::class);
    }
}

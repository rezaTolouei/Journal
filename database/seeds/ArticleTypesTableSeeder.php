<?php

use Illuminate\Database\Seeder;

class ArticleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $item){
            \App\Models\Article\Type::create($item);
        }
    }

    public function data()
    {
        return[
          ['name'=>'مروری'],
          ['name'=>'پژوهشی'],
        ];

    }
}

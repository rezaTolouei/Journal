<?php

use Illuminate\Database\Seeder;

class ArticleTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $item){
            \App\Models\Article\ArticleType::create($item);
        }
    }
    private function data(){
        return [
            ['name' => 'مقاله پژوهشی'],
            ['name' => 'مقاله مستقل'],
            ['name' => 'سایر'],
        ];
    }

}

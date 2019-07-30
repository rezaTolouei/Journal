<?php

use Illuminate\Database\Seeder;
use App\Models\Option;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $item){
            Option::create($item);
        }
    }

    public function data()
    {
        return[
            ['setting'=>'title1','value'=>'فصلنامه مدیریت نظامی'],
            ['setting'=>'title2','value'=>'Quarterly Military Management'],
            ['setting'=>'keywords','value'=>'فصلنامه مدیریت نظامی,IAMU'],
            ['setting'=>'description','value'=>'فصلنامه مدیریت نظامی (IAMU)'],
            ['setting'=>'footer_note','value'=>'Journal Management System. '],
            ['setting'=>'header1','value'=>''],
            ['setting'=>'header2','value'=>''],
            ['setting'=>'email','value'=>' '],
            ['setting'=>'tell','value'=>''],
            ['setting'=>'root','value'=>''],
        ];
    }
}

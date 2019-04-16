<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Role::truncate();
        foreach ($this->data() as $item){
            \App\Role::create($item);
        }
    }
    private function data(){
        return [
            ['name' => 'نویسنده'],
            ['name' => 'مدیر'],
            ['name' => 'سردبیر'],
            ['name' => 'داور'],
            ['name' => 'ناشر'],
        ];
    }
}

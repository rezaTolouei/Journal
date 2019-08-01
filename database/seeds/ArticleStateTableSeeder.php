<?php

use Illuminate\Database\Seeder;

class ArticleStateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $item){
            \App\Models\Article\ArticleStates::create($item);
        }
    }
    private function data(){
        return [
            ['name' => 'ارسال شده به وسیله نویسنده'],
            ['name' => 'ارسال شده به اعضای هیات تحریریه برای بررسی'],
            ['name' => 'ارسال شده به سردبیر برای بررسی'],
            ['name' => 'پذیرفته شده برای انتشار'],
            ['name' => 'مقاله غیر قابل پذیرش میباشد'],
            ['name' => 'بازنگری جزئی'],
            ['name' => 'بازنگری کلی'],
            ['name' => 'ارسال شده به اعضای هیات تحریریه برای بررسی'],
            ['name' => 'در حال داوری'],
            ['name' => 'بازگردانده شده به نویسنده برای ارسال دوباره'],
            ['name' => 'ارسال شده به نویسنده برای تایید فایل های نهایی قبل از انتشار چاپی'],
            ['name' => 'بازنگری شده به وسیله نویسنده'],
            ['name' => 'منتشر شده به صورت الکترونیکی'],
        ];
    }
}

<?php

use Illuminate\Database\Seeder;

class ArticleStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $item) {
            \App\Models\Article\State::create($item);
        }
    }

    public function data()
    {
        return [
            ['name' => 'در حال بررسی'],
            ['name' => 'در حال داوری'],
            ['name' => 'بازگردانده شده به نویسنده برای ارسال دوباره'],
            ['name' => 'بازنگری شده به وسیله نویسنده'],
            ['name' => 'ارسال شده به نویسنده برای تایید فایل های نهایی قبل از انتشار'],
            ['name' => 'منتشر شده به صورت الکترونیکی'],
        ];
    }
}

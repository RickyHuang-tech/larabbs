<?php

use Illuminate\Database\Seeder;
use App\Models\Links;

class LinksTableSeeder extends Seeder
{
    public function run()
    {
        // 生成数据集合
        $links = factory(Links::class)->times(6)->create();
    }
}

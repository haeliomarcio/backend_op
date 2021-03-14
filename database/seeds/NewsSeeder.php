<?php

use App\Model\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'journalist_id' => 1,
            'type_id' => 1,
            'title' => 'Vacina para todos.',
            'description' => '',
            'content' => '',
            'image' => ''
        ]);
    }
}

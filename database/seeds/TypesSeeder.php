<?php

use App\Model\Types;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Types::create([
            'journalist_id' => 1,
            'name' => 'Esporte',
        ]);
    }
}


<?php

use App\Model\Journalists;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class JournalistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Journalists::create([
            'name' => 'Márcio',
            'lastname' => 'Ferreira',
            'email' => 'hmarciogferreira@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}

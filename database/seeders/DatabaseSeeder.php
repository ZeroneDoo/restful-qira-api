<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB as data;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        data::table('pesans')->insert([
            'usernames' => 'ghrimxi',
            'pesan' => 'bro kenalin',
            'updated_at' => now(),
            'created_at' => now(),
        ]);
    }
}

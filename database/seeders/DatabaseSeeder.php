<?php

namespace Database\Seeders;

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
        \App\Models\User::factory()->create();
        \App\Models\Kontak::create([
            'deskripsi' => '',
            'email' => 'mail@smkn4malang.sch.id',
            'telepon' => '(0341) 353798',
        ]);
    }
}

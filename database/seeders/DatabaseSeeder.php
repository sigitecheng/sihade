<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\berkasberkas;
use App\Models\brosur;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        // brosur::create([
        //     'judul' => 'Brosur Sihade',
        //     'brosur' => '/assets/file/BROSURE_SIHADE.pdf',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        berkasberkas::create([
            'judul' => 'Brosur Sihade',
            'brosur' => '/assets/file/BROSURE_SIHADE.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
    }


}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KemendagriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql_path = base_path('database/seeds/db_mendagri.sql'); // Sesuaikan nama file SQL
        DB::unprepared(file_get_contents($sql_path));
    }
}

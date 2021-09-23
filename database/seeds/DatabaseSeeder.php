<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            "nombre" => "admin",
        ]);

        DB::table('users')->insert([
            "id" => "1",
            "usuario" => "admin",
            "password" => bcrypt('admin'),
            "condicion" => "1",
            "idrol" => "1",
        ]);
    }
}
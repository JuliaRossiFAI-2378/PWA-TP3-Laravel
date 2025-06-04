<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Mochizuki Honami',
            'email' => 'ichikakisser@example.com',
            'image' => 'https://i.pinimg.com/originals/fc/60/62/fc60622ac3c047ba90d9adaba24325bd.jpg',
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('users')->insert([
            'name' => 'Hoshino Ichika',
            'email' => 'honamikisser@example.com',
            'image' => 'https://i.pinimg.com/originals/fc/60/62/fc60622ac3c047ba90d9adaba24325bd.jpg',
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}

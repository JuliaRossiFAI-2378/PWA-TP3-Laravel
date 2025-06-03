<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'Boat goes binted!! pequeño info-dump de Honami porque es mi oshi',
            'user' => 2,
            'habilitated' => true,
            'content' => "Boat goes binted!! knock knock knock!!!!! \n Leo/need's drummer. She excels in both sports and schoolwork and has a kind and caring personality. She used to be afraid of making decisions due to not wanting to hurt others, but her time in the band has made her a little braver about it. Honami now supports Leo/need with her strong spirit.",
            'category' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}

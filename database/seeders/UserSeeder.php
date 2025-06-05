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
            [
                'name' => 'Hatsune Miku',
                'email' => 'miku@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/a/ac/Miku_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kagamine Rin',
                'email' => 'rin@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/0/02/Rin_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kagamine Len',
                'email' => 'len@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/d/d7/Len_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Megurine Luka',
                'email' => 'luka@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/3/34/Luka_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'MEIKO',
                'email' => 'meiko@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/4/42/MEIKO_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'KAITO',
                'email' => 'kaito@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/d/da/KAITO_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Leo/need
            [
                'name' => 'Hoshino Ichika',
                'email' => 'honami@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/7/72/Ichika_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Tenma Saki',
                'email' => 'saki@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/b/b3/Saki_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mochizuki Honami',
                'email' => 'ichika@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/1/1a/Honami_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Hinomori Shiho',
                'email' => 'shiho@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/f/ff/Shiho_Kizuna_Rank.png/',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],

            // MORE MORE JUMP!
            [
                'name' => 'Hanasato Minori',
                'email' => 'minori@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/d/d5/Minori_Kizuna_Rank.png/',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kiritani Haruka',
                'email' => 'haruka@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/b/bd/Haruka_Kizuna_Rank.png/',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Momoi Airi',
                'email' => 'airi@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/b/b7/Airi_Kizuna_Rank.png/',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hinomori Shizuku',
                'email' => 'shizuku@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/9/9c/Shizuku_Kizuna_Rank.png/',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Vivid BAD SQUAD
            [
                'name' => 'Azusawa Kohane',
                'email' => 'kohane@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/7/72/Kohane_Kizuna_Rank.png/',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Shiraishi An',
                'email' => 'an@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/8/8e/An_Kizuna_Rank.png/',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Shinonome Akito',
                'email' => 'akito@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/4/44/Akito_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Aoyagi Toya',
                'email' => 'toya@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/3/3e/Toya_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Wonderlands x Showtime
            [
                'name' => 'Tenma Tsukasa',
                'email' => 'tsukasa@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/a/a9/Tsukasa_Kizuna_Rank.png/',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Otori Emu',
                'email' => 'emu@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/4/4b/Emu_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kusanagi Nene',
                'email' => 'nene@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/5/50/Nene_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kamishiro Rui',
                'email' => 'rui@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/5/58/Rui_Kizuna_Rank.png/',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            // 25-ji Nightcord de
            [
                'name' => 'Yoisaki Kanade',
                'email' => 'kanade@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/e/ee/Kanade_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Asahina Mafuyu',
                'email' => 'mafuyu@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/e/eb/Mafuyu_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Shinonome Ena',
                'email' => 'ena@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/3/39/Ena_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Akiyama Mizuki',
                'email' => 'mizuki@example.com',
                'image' => 'https://static.wikia.nocookie.net/projectsekai/images/b/bc/Mizuki_Kizuna_Rank.png',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

    }
}

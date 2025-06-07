<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'VIRTUAL SINGER',
            'description' => "Los VIRTUAL SINGERS, conocidos comúnmente como Vocaloids, son un grupo compuesto exclusivamente por personajes de Piapro.
Hatsune Miku y sus amigos existen en el mundo real como VIRTUAL SINGERS: voces sintéticas utilizadas por productores de todo el mundo, y viven en mundos digitales llamados SEKAI.
Dentro de estos SEKAI, adoptan distintas formas para ayudar a los jóvenes a descubrir sus verdaderos sentimientos.",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('categories')->insert([
            'name' => 'LeoNeed',
            'description' => "Leo/need, abreviado comúnmente como L/n o Leoni (レオニ), es una banda compuesta por cuatro amigas de la infancia.
Las integrantes de Leo/need solían tocar música juntas cuando eran niñas, pero su relación se volvió tensa tras cierto incidente ocurrido durante la secundaria.
Con el regreso de Saki en la escuela secundaria, la banda se reúne nuevamente gracias al apoyo de las VIRTUAL SINGERS.

Un día, Ichika descubre en su teléfono una canción llamada “Untitled”. Al reproducirla, es transportada al School SEKAI, donde conoce a Hatsune Miku y Megurine Luka, quienes le dan la bienvenida y la invitan a tocar con ellas. Su objetivo es reunir a la antigua banda y ayudar a las chicas a reencontrarse con sus verdaderos sentimientos.",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('categories')->insert([
            'name' => 'MORE MORE JUMP!',
            'description' => "MORE MORE JUMP!, comúnmente abreviado como MMJ o Momojan (モモジャン), es un grupo idol femenino conformado por tres ex-idols que habían abandonado su carrera y una chica apasionada que sueña con convertirse en idol.

Hanasato Minori ha soñado con ser idol desde que vio a Kiritani Haruka en televisión. Tras el retiro de Haruka del mundo idol, ambas logran entablar una amistad. Poco después, Minori y las VIRTUAL SINGERS logran convencer a Haruka de volver a los escenarios, formando MORE MORE JUMP! junto a Momoi Airi y Hinomori Shizuku.

Durante una práctica, el grupo encuentra en sus teléfonos una canción llamada “Untitled”. Al reproducirla, son transportadas al Stage SEKAI, donde conocen a Hatsune Miku y Kagamine Rin, quienes actúan como idols en ese mundo.",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('categories')->insert([
            'name' => 'Vivid BAD SQUAD',
            'description' => "Vivid BAD SQUAD, comúnmente abreviado como VBS o Vivibasu (ビビバス), es una unidad de músicos callejeros reunidos con el objetivo en común de superar el legendario evento RAD WEEKEND.

Azusawa Kohane se pierde por las calles mientras intenta comprar un CD para su madre y termina encontrándose con Shiraishi An y sus compañeros, quienes estaban presentándose en el backstage del Weekend Garage. Aunque queda cautivada por su música, huye por timidez cuando An intenta hablarle. Una semana después, Kohane regresa y An, que aún la recuerda, vuelve a cantar para ella e incluso la invita a interpretar una canción. Al oírla cantar, An nota el gran potencial de Kohane y le propone formar un dúo con el sueño de superar el mítico evento RAD WEEKEND. Kohane acepta, y así nace su grupo: Vivids. Ese mismo día conocen también a BAD DOGS, conformado por Shinonome Akito y Aoyagi Toya.

Más adelante, Akito invita a Kohane y An a asistir a un evento, y ambas aceptan. Mientras armaban una lista de reproducción, Kohane encuentra en su teléfono una canción llamada “Untitled”. Al intentar descargarla, tanto ella como An son transportadas al SEKAI, donde las reciben Hatsune Miku y MEIKO. Con la ayuda de las VIRTUAL SINGERS, Vivids y BAD DOGS unen fuerzas para formar Vivid BAD SQUAD y perseguir su meta de superar RAD WEEKEND.",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('categories')->insert([
            'name' => 'Wonderlands x Showtime',
            'description' => "Wonderlands x Showtime, comúnmente abreviado como WxS o Wandasho (ワンダショ, Wondershow), es una unidad de espectáculo musical formada por cuatro actores que trabajan a medio tiempo y se presentan en el Wonder Stage dentro del parque Phoenix Wonderland.

Tras fallar en una audición, Tenma Tsukasa es reclutado por Otori Emu para devolverle al escenario de Phoenix Wonderland su antigua grandeza, a través de presentaciones increíbles. Juntos, reclutan al excéntrico director escénico y experto en robótica Kamishiro Rui, y a la tímida cantante Kusanagi Nene, quien actúa acompañada por su réplica robótica, Nene-Robo.

Mientras Emu intenta convencer a Tsukasa de unirse oficialmente a la compañía de Phoenix Wonderland, él descubre en su teléfono una canción llamada “Untitled”. Al reproducirla, ambos son transportados al SEKAI, donde conocen a Hatsune Miku, KAITO y los peluches con los que realizan sus espectáculos.",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('categories')->insert([
            'name' => '25-ji, Nightcord de.',
            'description' => "25-ji, Nightcord de., comúnmente abreviado como 25-ji, N25 o Niigo (ニーゴ), es un círculo musical en línea que crea canciones a las 25:00 (1 a. m.).

El círculo fue creado por K con la esperanza de hacer música que “salve a las personas” y les brinde esperanza. Para ello, recluta a los miembros Enanan, Amia y Yuki, comunicándose exclusivamente a través de una herramienta de chat llamada Nightcord. Ninguno de los miembros conocía el nombre real ni la apariencia de los demás (excepto Ena, quien sube selfies a internet que solo Mizuki ha visto), hasta el capítulo 6 de la historia principal del grupo.

Un día, Kanade pierde contacto con uno de los miembros del círculo. Poco después, encuentran un archivo de audio titulado “Untitled”, que es compartido con cada uno. Al reproducirlo, son transportados al SEKAI Vacío.",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}

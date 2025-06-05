<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listaComentarios = [
            "¡Muy buen post! 🔥",
            "Me encantó lo que escribiste 😊",
            "Gracias por compartir esto 🙏",
            "¡Qué interesante! 🤔",
            "Excelente aporte 💡",
            "Lo voy a tener en cuenta 👍",
            "¡Qué lindo! 🥰",
            "Muy útil, gracias 🧠",
            "Gran trabajo 👏",
            "¡Seguí así! 💪",
            "Clarísimo todo ✅",
            "Me pareció muy entretenido 😄",
            "Esto es justo lo que necesitaba 🙌",
            "¡Increíble! 😲",
            "Gracias por la info 📚",
            "Estoy cada vez más enamorad@ de vos 💘",
            "Leerte me alegra el día 💖",
            "¿Podés dejar de ser tan perfect@? 😳❤️",
            "Esto me hizo pensar en lo mucho que me gustás 💌",
            "No sabía que te podía querer más hasta ahora 🥺💕",
            "Esto es una pérdida de tiempo 😒",
            "No sé por qué alguien publicaría esto 🙄",
            "Tu contenido siempre es así de malo? 🤡",
            "Me da vergüenza ajena leer esto 😬",
            "No podés estar hablando en serio 😑",
            "Esto es un desastre total 💥",
            "Otra vez vos publicando cosas inútiles 🙃",
            "No entendés nada, claramente 🚫",
            "Sinceramente, esto da pena 😔",
            "No sé si reírme o llorar con esto 🤷"
        ];

        for($postId=1;$postId<=40;$postId++){
            $comentarios=rand(5,12);
            for($i=0;$i<$comentarios;$i++){
                DB::table('comentarios')->insert([
                'user_id' => rand(1,26),
                'post_id' => $postId,
                'content' => $listaComentarios[array_rand($listaComentarios)],
                'created_at' => now(),
                'updated_at' => now()
            ]);
            }
        }
    }
}

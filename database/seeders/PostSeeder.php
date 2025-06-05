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

        $postsVocaloid = [
            [
                'title' => '¡Un día perfecto para cantar y brillar juntos!',
                'content' => "Hoy se siente una energía increíble que se quiere compartir con todos. La música tiene ese poder mágico de conectar, elevar y llenar el alma de alegría. Cada nota, cada melodía, invita a celebrar la vida, dejar atrás las preocupaciones y disfrutar el momento presente. Es un llamado a llenar el día de canciones, risas y momentos felices que quedarán en la memoria para siempre. Que esta energía contagie a todos, que la música sea el puente que une y que nunca falte una sonrisa en cada rostro. Aunque el mundo a veces parezca complicado, la fuerza del canto y la alegría compartida pueden transformar esos días grises en fiestas de color y luz."
            ],
            [
                'title' => '¡Celebrando cada pequeño logro con una sonrisa gigante!',
                'content' => "A menudo se presta atención solo a las grandes metas y se olvidan los pequeños pasos dados día a día. Hoy es momento de celebrar esos logros que, aunque parezcan pequeños, son la base de todo crecimiento. Terminar una canción difícil, aprender un nuevo acorde o animarse a cantar en público son victorias que merecen reconocimiento y disfrute. La verdadera felicidad está en reconocer el camino recorrido, agradecer por cada experiencia y dejar que la música acompañe cada paso. Hoy se celebra estos momentos especiales, porque juntos formamos una comunidad que crece con alegría y pasión. ¡Brindemos por esos pequeños triunfos que hacen que la vida valga la pena!"
            ],
            [
                'title' => 'Risas, melodías y momentos que alegran el alma',
                'content' => "No hay nada más reconfortante que una tarde rodeada de amigos, risas y buena música. Esos instantes simples, llenos de felicidad y compañerismo, nutren y hacen sentir vivos. Al cantar juntos no solo se comparten melodías, sino emociones, recuerdos y sueños. Es un lenguaje universal que rompe barreras y fortalece vínculos. Se desea que nunca falte en los días esa alegría pura, esa sensación de libertad que solo la música brinda. Que en cada canción se encuentre un motivo para sonreír, bailar y llenar el corazón de esperanza y optimismo, incluso en los momentos más difíciles."
            ],
            [
                'title' => 'La energía positiva de una canción que transforma',
                'content' => "Algunas canciones tienen el poder de cambiar el ánimo en segundos, de convertir un día gris en uno lleno de luz y esperanza. Cuando una melodía entra en el corazón, todo parece brillar más y las preocupaciones pesan menos. Esa es la magia de la música: sanar, inspirar y motivar. Se invita a aprovechar esa energía positiva para iluminar no solo los días propios, sino también los de quienes nos rodean. Compartir canciones que hacen sentir vivos, llenan de fuerza y recuerdan que, juntos, se puede superar cualquier obstáculo. La música es un regalo maravilloso para llenar el mundo de alegría y buena vibra."
            ],
            [
                'title' => 'Un canto a la amistad, la alegría y la felicidad compartida',
                'content' => "La amistad es uno de los regalos más hermosos que la música ofrece. Compartir canciones, crear recuerdos y apoyarse mutuamente son razones para estar siempre alegres y agradecidos. Cada nota cantada juntos simboliza la conexión especial que existe, una expresión de la felicidad que brota al estar rodeados de quienes importan. Que nunca se apague la llama de alegría y camaradería, y que cada canción entonada celebre la vida, la esperanza y el amor que une. En estos tiempos, más que nunca, se necesitan esas melodías que recuerdan lo valioso que es tenernos unos a otros y lo poderosa que puede ser la música para fortalecer lazos."
            ],
        ];
        
        $postsVividBadSquad = [
            [
                'title' => 'Nada detiene este fuego 🔥',
                'content' => "En un mundo que constantemente nos pone a prueba, la clave está en no bajar la guardia ni dejar que las dudas se infiltren. Cada obstáculo que aparece no es más que un desafío, una oportunidad para demostrar que la fuerza que llevamos dentro es mucho mayor de lo que cualquiera podría imaginar. No hay espacio para rendirse ni para mirar hacia atrás; la energía que arde en nuestro interior quema más fuerte que cualquier adversidad. Esa intensidad es la que impulsa cada paso que damos, nos empuja a romper límites y a superar cualquier barrera que se cruce en el camino. Lo importante es mantener esa llama viva, porque con ella podemos transformar cualquier dificultad en un escalón para llegar más alto."
            ],
            [
                'title' => 'Rompiendo cadenas, forjando camino ⚡️',
                'content' => "No permitimos que el miedo o la presión social definan quiénes somos o hacia dónde vamos. Cada día representa una batalla diferente, y el verdadero poder nace de enfrentar lo desconocido con una determinación inquebrantable y sin temer al juicio ajeno. Esta actitud desafiante es lo que marca la diferencia y lo que transforma los sueños en realidades tangibles. No se trata solo de resistir, sino de atacar con fuerza renovada cada vez que la vida nos pone a prueba. Que cada golpe que recibamos no sea una caída, sino un motivo para levantarnos más fuertes, reforzando nuestro espíritu y reafirmando el compromiso con nuestro propio camino, sin importar lo que otros puedan pensar o decir."
            ],
            [
                'title' => 'Fuerza en cada latido del beat 🎧💥',
                'content' => "El ritmo no está solamente en la música que nos mueve, sino en el latido constante de quienes no se rinden jamás. Cuando el mundo intenta apagarnos con dudas, miedos o imposiciones, el sonido de la resistencia se vuelve más fuerte y más claro que nunca. Esa fuerza que vibra en el corazón es la que nos impulsa a seguir adelante, a crear sin miedo, a innovar y a romper con todos los moldes preestablecidos. Cada latido es un recordatorio constante de la valentía que llevamos dentro y del poder que tenemos para cambiar nuestro destino. Por eso, nunca dejamos que la quietud o la duda se adueñen de nosotros, porque sabemos que el verdadero poder está en el movimiento, en la acción y en la autenticidad."
            ],
            [
                'title' => 'Contra viento y marea, siempre en pie 🥊🔥',
                'content' => "Las caídas no definen quiénes somos, sino la capacidad real para levantarnos más fuertes y con más ganas que antes. Los golpes del destino, aunque duros, son solo parte del recorrido que fortalece, pule y moldea nuestro carácter. La verdadera batalla ocurre dentro de cada uno, y ganarla significa nunca detenerse, nunca dejar de avanzar aunque el camino esté lleno de sombras y obstáculos. Esa resiliencia que cultivamos es lo que nos permite seguir luchando día a día, mantenernos firmes cuando todo parece ir en contra y encontrar en cada dificultad una nueva razón para seguir adelante. Que esta fuerza interior sea el estandarte que llevemos con orgullo y que nos recuerde que no importa cuántas veces caigamos, siempre hay un motivo para volver a ponerse de pie."
            ],
            [
                'title' => 'Autenticidad a prueba de todo 🎤🖤',
                'content' => "No hay espacio para máscaras ni para fingir ser alguien que no somos. La verdadera fuerza reside en mostrarse tal cual se es, con todas las cicatrices, victorias, miedos y pasiones que forman parte del viaje personal. Esa brutal honestidad es lo que realmente conecta con los demás y lo que impulsa a romper con todas las expectativas y normas impuestas desde afuera. Ser auténticos no es solo una forma de vida, sino un acto de valentía constante, un compromiso diario con la verdad interior y con quienes nos rodean. Que esta esencia pura y sincera sea el faro que guíe cada decisión, cada paso y cada desafío que enfrentemos, porque solo así podremos construir un camino genuino y lleno de significado."
            ],
        ];

        $postsWonderlandsXShowtime = [
            [
                'title' => '¡El escenario es nuestro reino! 🎭✨',
                'content' => "Cada vez que subimos al escenario, se enciende una magia especial que solo nosotros podemos crear. No es solo una presentación, es un espectáculo que une sueños, colores y emociones en una sola experiencia vibrante. La emoción de sentir las luces, la música, y la energía del público es incomparable. Aquí no hay límites, solo infinitas posibilidades para brillar y mostrar lo que llevamos dentro. Nos transformamos en personajes de un cuento que todos quieren vivir, y con cada aplauso, la historia crece y se vuelve más grande, más intensa, más inolvidable. ¡Este es nuestro show, y lo damos con todo el corazón!"
            ],
            [
                'title' => 'La fantasía cobra vida en cada nota 🎶🌈',
                'content' => "En este mundo de fantasía y brillo, cada melodía que cantamos es un pincel que pinta momentos únicos llenos de alegría y esperanza. Nos encanta jugar con la imaginación y crear universos donde todo es posible, donde los sueños se mezclan con la realidad y cada acto es un viaje inolvidable. La música es nuestro puente hacia esa dimensión mágica, donde las preocupaciones se disipan y solo queda la emoción pura. Nos esforzamos para que cada función sea un espectáculo vibrante, una invitación a soñar despiertos y a celebrar la belleza de ser auténticos y valientes en cada paso que damos."
            ],
            [
                'title' => 'Detrás del telón, la verdadera magia sucede ✨🎬',
                'content' => "Aunque el público solo ve la perfección del show, sabemos que detrás del telón hay horas de esfuerzo, risas, y también desafíos. Esa preparación, esa dedicación silenciosa, es lo que hace que cada presentación sea especial y única. Cada ensayo es una oportunidad para crecer, para pulir detalles y para conectarnos aún más entre nosotros. La amistad, la pasión compartida y el deseo de crear momentos inolvidables nos mantienen firmes y motivados. No importa lo que pase, siempre estamos listos para transformar cualquier dificultad en un nuevo acto lleno de fuerza y brillo. Esa es la verdadera magia que hace que nuestro show nunca termine."
            ],
            [
                'title' => 'Cada sonrisa del público es nuestro mayor premio 🌟🎉',
                'content' => "El mayor regalo que podemos recibir es ver cómo cada persona en el público se ilumina con nuestra música y actuación. Esas sonrisas, esos aplausos y esas miradas llenas de emoción son la razón por la que damos todo de nosotros en cada show. Queremos que cada espectador se sienta parte de nuestra historia, que disfrute cada momento y que se lleve un pedazo de nuestra energía y alegría para su vida diaria. Cuando logramos eso, sabemos que nuestro trabajo vale la pena y que juntos creamos algo verdaderamente especial que trasciende el escenario."
            ],
            [
                'title' => '¡Un espectáculo que nunca se olvida! 🎪🌟',
                'content' => "Nos encanta romper con la rutina y traer a cada presentación una explosión de colores, luces y emociones que atrapan a todos desde el primer instante. No solo cantamos o bailamos, contamos historias que hacen vibrar el corazón y despiertan la imaginación. Este show es más que entretenimiento: es una celebración de la vida, de los sueños y de la magia que todos llevamos dentro. Queremos que cada función sea un recuerdo imborrable que inspire a seguir soñando y creando sin miedo, porque en nuestro mundo, lo imposible no existe y la fantasía es el motor que nos impulsa a seguir adelante."
            ],
        ];



        $postsNiigo = [
            [
                'title' => 'Ecos en la soledad 🌫️',
                'content' => "A veces el silencio se siente como un peso que oprime el pecho, y las palabras parecen perder su significado. La soledad no es solo ausencia de compañía, sino una presencia fría que atraviesa los pensamientos y deja un vacío difícil de llenar. En esos momentos, la música se convierte en un eco lejano que acompaña sin pedir nada a cambio, un refugio para las emociones que no encuentran salida. Que esta sensación, aunque dura, sirva para reconocer la necesidad de conectar, aún cuando parezca imposible."
            ],
            [
                'title' => 'Luces apagadas, corazón en pausa 🖤',
                'content' => "Hay días en que todo parece detenido, como si el mundo se hubiera apagado junto con las luces. Las emociones se vuelven pesadas, y la energía para seguir parece desvanecerse. La oscuridad no es solo ausencia de luz, sino un estado interno donde los sueños parecen lejanos y la esperanza tenue. En esa quietud, la música se siente como un susurro que recuerda que incluso en la sombra hay una pequeña chispa que puede volver a encenderse, aunque ahora parezca muy débil."
            ],
            [
                'title' => 'Susurros que nadie escucha 🌙',
                'content' => "Las palabras no dichas se acumulan en el silencio, como susurros que se pierden en la inmensidad. Es difícil encontrar un espacio donde el alma pueda expresarse sin miedo ni juicio. La soledad puede volverse un laberinto sin salida, donde cada paso es una duda y cada pensamiento una batalla. Pero incluso en ese lugar oscuro, la música crea un puente que une sentimientos dispersos y ofrece una compañía silenciosa que entiende sin necesidad de hablar. Que esa conexión sea un pequeño faro en la penumbra."
            ],
            [
                'title' => 'Cuerpos presentes, almas ausentes 🌑',
                'content' => "Estar rodeado de gente y sentir que nada llega al corazón es una experiencia que pesa más que el propio vacío. La desconexión con el entorno y consigo mismo puede volverse insoportable, como si la vida se viviera en una especie de sueño del que no se puede despertar. En esos momentos, la música es la única voz que parece sincera, la única presencia que no juzga ni abandona. Que esa realidad difícil sirva para buscar puentes hacia la autenticidad y el encuentro, aunque el camino parezca largo."
            ],
            [
                'title' => 'Sombras que abrazan sin liberar 🌒',
                'content' => "Las sombras internas se extienden como raíces invisibles que envuelven el alma sin dejar espacio para la luz. Esa sensación de estar atrapado en un lugar donde el tiempo se detiene y el dolor se vuelve rutina es una carga pesada. Sin embargo, la música ofrece una forma de expresar lo inexpresable, de dar voz a las emociones que parecen indescifrables. Que ese abrazo oscuro, aunque asfixiante, sirva para reconocer la necesidad de pedir ayuda y de encontrar caminos hacia la sanación, paso a paso."
            ],
        ];

        $postsMoreMoreJump = [
            [
                'title' => 'Brillando juntos en el escenario ✨',
                'content' => "Cada momento en el escenario es una oportunidad para mostrar lo que hemos construido con esfuerzo y pasión. Sentir la energía del público, sincronizar cada movimiento y compartir esa emoción con el equipo es lo que hace que todo valga la pena. No importa cuán difícil sea el camino, la sensación de brillar juntos ilumina incluso los días más oscuros. Que este viaje nos recuerde siempre la fuerza de la unidad y el poder de los sueños compartidos."
            ],
            [
                'title' => 'Entrenamiento y perseverancia 💪🎤',
                'content' => "Las largas horas de práctica no son solo para perfeccionar una rutina, sino para fortalecer el espíritu y aprender a confiar en uno mismo. Cada caída es una lección, cada error una oportunidad para crecer. El brillo de un idol no viene solo del talento, sino del compromiso inquebrantable y la pasión por lo que se hace. Que cada paso hacia adelante sea un reflejo del esfuerzo y la dedicación que ponemos día a día."
            ],
            [
                'title' => 'El poder de una sonrisa compartida 😊🎶',
                'content' => "En el mundo idol, una sonrisa puede cambiar el ánimo de cientos, incluso miles. Es un puente que conecta corazones y transmite alegría más allá de las palabras. Aunque a veces el cansancio quiera ganar, recordar ese poder es lo que impulsa a seguir adelante con entusiasmo. Que cada sonrisa en el escenario sea un regalo para quienes nos apoyan y para nosotros mismos, porque es allí donde reside la verdadera magia."
            ],
            [
                'title' => 'Superando los nervios antes del show 🎤❤️',
                'content' => "Los momentos previos al escenario están llenos de adrenalina y nervios, pero también de emoción y esperanza. Es normal sentir miedo, pero lo importante es convertir ese sentimiento en energía positiva para dar lo mejor. Cuando las luces se encienden y la música comienza, todo se transforma en un sueño compartido que vale la pena vivir. Que cada presentación sea una celebración del esfuerzo y la pasión que ponemos en cada paso."
            ],
            [
                'title' => 'Soñar alto, volar más lejos 🚀🌟',
                'content' => "Ser idol significa abrazar sueños grandes y creer en ellos con todo el corazón. Aunque el camino esté lleno de desafíos, la motivación nace de la ilusión de alcanzar nuevas metas y compartir ese brillo con el mundo. La dedicación y la pasión son las alas que nos permiten volar más alto, siempre acompañados por quienes creen en nosotros. Que ese deseo de crecer y superar límites inspire cada día y cada actuación."
            ],
        ];

        $postsLeoneed = [
            [
                'title' => 'La música que revela lo que llevamos dentro 🎶',
                'content' => "Cada canción es una ventana que muestra emociones y pensamientos que a veces cuesta expresar. La música invita a enfrentar esas sensaciones, a descubrir qué hay detrás del ruido cotidiano y a encontrar la fuerza para seguir adelante. No se trata solo de escuchar, sino de aceptar lo que se siente y aprender de ello. Que cada nota sea un impulso para mirar hacia adentro con valentía y para transformar lo difícil en crecimiento real."
            ],
            [
                'title' => 'Pausar para encontrar claridad en el sonido 🌌',
                'content' => "En medio de la velocidad de la vida, detenerse puede parecer un lujo, pero es necesario para reencontrar el camino. La música ofrece ese espacio para respirar, soltar lo que pesa y conectar con lo que importa. En esos momentos de pausa, se puede ordenar la mente y recuperar energía para enfrentar nuevos desafíos. Que la calma que brinda una melodía sirva para fortalecer el ánimo y encarar el día con más determinación."
            ],
            [
                'title' => 'La fuerza que nace de aceptar lo imperfecto 🎵',
                'content' => "No es necesario ser perfecto para ser auténtico. En la música, las imperfecciones, los errores y las pausas inesperadas son parte de la verdad que toca el corazón. Lo mismo ocurre con las personas: reconocer las propias fallas es un acto de valentía y crecimiento. Que esas notas imperfectas sean un ejemplo para abrazar lo real, para aprender de los tropiezos y para encontrar en ellos una fuente de energía que impulse hacia adelante."
            ],
            [
                'title' => 'El valor de los silencios en la melodía 🤫',
                'content' => "Los momentos de silencio en una canción no son vacíos, sino espacios para respirar y reflexionar. En la música, así como en la vida, esos intervalos permiten tomar distancia, ordenar las ideas y darle sentido a lo que se vive. Saber cuándo callar y escuchar es tan importante como expresarse. Que cada pausa en una melodía sea una oportunidad para encontrar equilibrio y para prepararse para el siguiente paso con más fuerza."
            ],
            [
                'title' => 'La música como apoyo en el camino personal 🌿',
                'content' => "Cada canción puede ser una compañera que sostiene en los momentos difíciles y acompaña en la búsqueda de uno mismo. La melodía ofrece un refugio para expresar emociones, para reflexionar y para recuperar el ánimo. No es solo un sonido, sino un recordatorio de que el crecimiento es un proceso constante y que siempre hay energía para seguir. Que la música inspire a enfrentar cada experiencia con decisión y a construir un camino propio con paso firme."
            ],
        ];

        $postsPopurri= [//utilizamos estos para agregar al final y tener una buena mezcla de posts nuevos
            [
                'title' => 'La emoción que no se puede ocultar 🌟',
                'content' => "Hoy el corazón late más fuerte que nunca. No importa si el cielo está nublado o si los desafíos parecen infinitos, hay algo dentro que brilla con una intensidad imposible de apagar. Cada paso, por pequeño que sea, es un avance. Cada sonrisa, una victoria. A veces, la alegría aparece en los detalles más sencillos: una canción que suena en el momento justo, una mirada cómplice, o simplemente recordar por qué se empezó este camino. 🌈✨"
            ],
            [
                'title' => 'Cuando el silencio pesa más que el ruido 🌒',
                'content' => "Hay días en los que el mundo parece distante, donde incluso rodeado de voces se siente un vacío profundo. Es difícil explicar ese tipo de soledad que no se ve, pero que habita en cada pensamiento. No es tristeza exactamente, sino una desconexión suave y constante. Pero incluso en esos momentos, hay belleza: en reconocer la fragilidad, en permitir que el silencio también tenga su espacio. Tal vez, con el tiempo, esa pausa también se transforme en canción. 🖤"
            ],
            [
                'title' => 'No hay escenario pequeño para un sueño 💫',
                'content' => "Cada paso que se da en este camino es parte de algo más grande. Aunque todavía queda mucho por aprender y por crecer, hay una certeza que impulsa: la pasión no se puede fingir. Ver una sonrisa en alguien que escucha una presentación, sentir que la energía llega al otro lado... eso es lo que da sentido a todo. Incluso si la luz es tenue ahora, basta con mantenerla viva para que un día ilumine a muchos más. 🎤💖"
            ],
            [
                'title' => 'A través del caos, la melodía sigue 🎶',
                'content' => "Los días no siempre salen como se espera. A veces, todo parece desmoronarse. Pero cuando el ruido se disipa, la música permanece. Como una línea invisible que guía, que sostiene y acompaña. No se necesita entenderlo todo ni tener respuestas para todo. Basta con dejar que la melodía fluya, que la emoción encuentre su lugar. En cada acorde, en cada silencio, hay un mensaje oculto que habla directamente al alma. 🌌"
            ],
            [
                'title' => 'Nunca se detiene quien lleva fuego en el alma 🔥',
                'content' => "Las dudas no desaparecen, las caídas duelen, y el cansancio pesa. Pero hay algo que no se rinde, algo que arde por dentro. Tal vez el camino no sea fácil, pero es real. Cada crítica se convierte en impulso, cada error en aprendizaje. No se trata de demostrar nada a nadie, sino de seguir adelante aunque tiemble el paso. Esto no es solo una meta, es una forma de vivir. 💥🎤"
            ],
            [
                'title' => 'Un mundo donde todo es posible ✨🎭',
                'content' => "¡Bienvenidos al lugar donde la imaginación toma el escenario! Aquí, cada risa es un aplauso, cada emoción una estrella fugaz. No hay límites, solo puertas abiertas a lo inesperado. Cuando se cree que ya se vio todo, aparece una nueva sorpresa, una vuelta de tuerca, un giro lleno de color. Porque en este escenario, lo único imposible es no dejarse llevar por la magia. 🎪🌟"
            ],
            [
                'title' => 'La calma que se esconde entre acordes 🌿',
                'content' => "En medio del ruido diario, hay momentos en que una simple canción puede devolver el equilibrio. Sin necesidad de palabras, sin forzar nada. Es como si la melodía supiera exactamente qué decir, cuándo decirlo y cómo acariciar el alma. Esa música que no busca impresionar, sino acompañar en silencio. Un refugio discreto que está siempre ahí, esperando ser escuchado. 🍃"
            ],
            [
                'title' => 'El reflejo de lo que se siente 🔍',
                'content' => "A veces cuesta poner en palabras todo lo que ocurre por dentro. Pero una canción, una melodía o incluso una simple nota pueden expresar lo que el alma guarda en silencio. En la música, cada emoción encuentra su lugar. Y al compartirla, algo se libera. No es solo arte, es una forma de decir: 'esto soy yo, incluso cuando no sé cómo decirlo'. 🎧🖋️"
            ],
            [
                'title' => 'El aplauso más importante es el propio 🎤💖',
                'content' => "No siempre se recibe reconocimiento. No siempre hay público ni luces. Pero eso no significa que no valga la pena. Seguir intentándolo, seguir sonriendo incluso cuando nadie lo nota, es una forma de coraje. Porque al final, el primer paso hacia el sueño es confiar en uno mismo. Y el último, agradecer el viaje que se eligió recorrer, sin importar cuántos lo vean. 🌟💪"
            ],
            [
                'title' => 'Crecer duele, pero vale 💫',
                'content' => "El proceso no siempre es suave. Las transformaciones internas traen consigo dudas, miedo, soledad. Pero también revelan partes que antes no se conocían. Crecer es dejar atrás ciertas versiones, abrazar lo nuevo, y a veces caerse en el intento. Pero si se escucha con atención, en medio del caos hay una melodía que guía, que recuerda que esto también es parte de avanzar. 🎼🌀"
            ],
        ];


        for($post=0;$post<count($postsVocaloid);$post++){
            DB::table('posts')->insert(
                ['title' => $postsVocaloid[$post]['title'],
                'user' => rand(1, 26),
                'habilitated' => true,
                'content' => $postsVocaloid[$post]['content'],
                'category' => 1,
                'created_at' => now(),
                'updated_at' => now()]
            );
        }
        for($post=0;$post<count($postsLeoneed);$post++){
            DB::table('posts')->insert(
                ['title' => $postsLeoneed[$post]['title'],
                'user' => rand(1, 26),
                'habilitated' => true,
                'content' => $postsLeoneed[$post]['content'],
                'category' => 2,
                'created_at' => now(),
                'updated_at' => now()]
            );
        }
        for($post=0;$post<count($postsMoreMoreJump);$post++){
            DB::table('posts')->insert(
                ['title' => $postsMoreMoreJump[$post]['title'],
                'user' => rand(1, 26),
                'habilitated' => true,
                'content' => $postsMoreMoreJump[$post]['content'],
                'category' => 3,
                'created_at' => now(),
                'updated_at' => now()]
            );
        }
        for($post=0;$post<count($postsVividBadSquad);$post++){
            DB::table('posts')->insert(
                ['title' => $postsVividBadSquad[$post]['title'],
                'user' => rand(1, 26),
                'habilitated' => true,
                'content' => $postsVividBadSquad[$post]['content'],
                'category' => 4,
                'created_at' => now(),
                'updated_at' => now()]
            );
        }
        for($post=0;$post<count($postsWonderlandsXShowtime);$post++){
            DB::table('posts')->insert(
                ['title' => $postsWonderlandsXShowtime[$post]['title'],
                'user' => rand(1, 26),
                'habilitated' => true,
                'content' => $postsWonderlandsXShowtime[$post]['content'],
                'category' => 5,
                'created_at' => now(),
                'updated_at' => now()]
            );
        }
        for($post=0;$post<count($postsNiigo);$post++){
            DB::table('posts')->insert(
                ['title' => $postsNiigo[$post]['title'],
                'user' => rand(1, 26),
                'habilitated' => true,
                'content' => $postsNiigo[$post]['content'],
                'category' => 6,
                'created_at' => now(),
                'updated_at' => now()]
            );
        }
        for($post=0;$post<count($postsPopurri);$post++){
            DB::table('posts')->insert(
                ['title' => $postsPopurri[$post]['title'],
                'user' => rand(1, 26),
                'habilitated' => true,
                'content' => $postsPopurri[$post]['content'],
                'category' => rand(1,6),
                'created_at' => now(),
                'updated_at' => now()]
            );
        }




    }
}

<?php

use Illuminate\Database\Seeder;
use App\Notas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('notas')->insert([
            'titulo' => 'Mi primera nota',
            'contenido' => 'Contenido de prueba',
        ]);*/

        Notas::create([
            'titulo' => '¿Para qué sirve Composer?',
            'contenido' => '<p>Con Composer podemos instalar y actualizar frameworks como Laravel o Symfony, así como componentes para generar PDF, procesar pagos con tarjetas, manipular imágenes y mucho más.</p>',
        ]);

        Notas::create([
            'titulo' => 'Instalación de Laravel',
            'contenido' => File::get(__DIR__.'/notas/install.html'),
        ]);

        Notas::create([
            'titulo' => 'Rutas y JSON',
            'contenido' => File::get(__DIR__.'/notas/rutas_json.html'),
        ]);

        Notas::create([
            'titulo' => 'Front Controller',
            'contenido' => '<p>Front Controller es un patrón de arquitectura donde un controlador maneja todas las solicitudes o peticiones a un sitio web.</p>',
        ]);

        Notas::create([
            'titulo' => 'Cambia el formato de parámetros dinámicos',
            'contenido' => File::get(__DIR__.'/notas/cambiar_formato.html'),
        ]);
    }
}

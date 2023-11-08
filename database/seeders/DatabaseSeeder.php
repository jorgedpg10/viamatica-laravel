<?php

namespace Database\Seeders;

use App\Models\Pelicula;
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

        DB::table('peliculas')->insert([
            'nombre' => 'Sonido de Libertad',
            'duracion_minutos' => 120,
            'fecha_publicacion' => now(),
            'fecha_fin' => now(),
        ]);

        DB::table('peliculas')->insert([
            'nombre' => 'Matrix',
            'duracion_minutos' => 180,
            'fecha_publicacion' => now(),
            'fecha_fin' => now(),
        ]);

        DB::table('peliculas')->insert([
            'nombre' => 'Spiderman',
            'duracion_minutos' => 150,
            'fecha_publicacion' => now(),
            'fecha_fin' => now(),
        ]);

        DB::table('peliculas')->insert([
            'nombre' => 'Batman',
            'duracion_minutos' => 180,
            'fecha_publicacion' => now(),
            'fecha_fin' => now(),
        ]);

        DB::table('peliculas')->insert([
            'nombre' => 'Naruto',
            'duracion_minutos' => 150,
            'fecha_publicacion' => now(),
            'fecha_fin' => now(),
        ]);

        DB::table('peliculas')->insert([
            'nombre' => 'Capitan America',
            'duracion_minutos' => 150,
            'fecha_publicacion' => now(),
            'fecha_fin' => now(),
        ]);

        
        DB::table('salas')->insert([
            'nombre' => '1',
            'estado' => 1,
        ]);

        DB::table('salas')->insert([
            'nombre' => '2',
            'estado' => 1,
        ]);

        DB::table('salas')->insert([
            'nombre' => '3',
            'estado' => 1,
        ]);

        DB::table('pelicula_sala')->insert([
            'pelicula_id' => 1,
            'sala_id' => 1,
        ]);

        DB::table('pelicula_sala')->insert([
            'pelicula_id' => 2,
            'sala_id' => 1,
        ]);


        DB::table('pelicula_sala')->insert([
            'pelicula_id' => 1,
            'sala_id' => 2,
        ]);

        DB::table('pelicula_sala')->insert([
            'pelicula_id' => 2,
            'sala_id' => 2,
        ]);

        DB::table('pelicula_sala')->insert([
            'pelicula_id' => 3,
            'sala_id' => 2,
        ]);

        DB::table('pelicula_sala')->insert([
            'pelicula_id' => 1,
            'sala_id' => 3,
        ]);

        DB::table('pelicula_sala')->insert([
            'pelicula_id' => 2,
            'sala_id' => 3,
        ]);

        DB::table('pelicula_sala')->insert([
            'pelicula_id' => 3,
            'sala_id' => 3,
        ]);

        DB::table('pelicula_sala')->insert([
            'pelicula_id' => 4,
            'sala_id' => 3,
        ]);

        DB::table('pelicula_sala')->insert([
            'pelicula_id' => 5,
            'sala_id' => 3,
        ]);

        DB::table('pelicula_sala')->insert([
            'pelicula_id' => 6,
            'sala_id' => 3,
        ]);

    }
}

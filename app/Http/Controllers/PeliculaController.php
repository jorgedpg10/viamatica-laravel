<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use App\Http\Requests\StorePeliculaRequest;
use App\Http\Requests\UpdatePeliculaRequest;
use Spatie\QueryBuilder\QueryBuilder;


class PeliculaController extends Controller
{
    
    public function index()
    {
        $pelicula = QueryBuilder::for(Pelicula::class)
            ->allowedIncludes(['salas'])
            ->allowedFilters(['peliculas.nombre', 'salas.nombre'])
            ->get();

        return $pelicula;
    }

    public function filtra_fecha()
    {
        $pelicula = QueryBuilder::for(Pelicula::class)
            ->allowedFilters(['fecha_publicacion'])
            ->get();

        return $pelicula;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePeliculaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeliculaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelicula $pelicula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePeliculaRequest  $request
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePeliculaRequest $request, Pelicula $pelicula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)
    {
        //
    }
}

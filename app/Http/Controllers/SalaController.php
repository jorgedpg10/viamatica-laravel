<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use App\Http\Requests\StoreSalaRequest;
use App\Http\Requests\UpdateSalaRequest;


class SalaController extends Controller
{
    
    public function estado($nombre)
    {
        $sala = Sala::where('nombre', $nombre)->first();
        $numero_peliculas = $sala->peliculas()->count();

        if ($numero_peliculas < 3 ) 
        {
            return 'Sala casi vacía';
        }else if(  $numero_peliculas >= 3 && $numero_peliculas <= 5){
            return 'Sali casi llena';
        }else{
            return 'Sala llena';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSalaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function show(Sala $sala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function edit(Sala $sala)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalaRequest  $request
     * @param  \App\Models\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalaRequest $request, Sala $sala)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sala $sala)
    {
        //
    }
}

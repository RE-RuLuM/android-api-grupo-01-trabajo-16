<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Vuelo::all());
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $vuelo = new Vuelo();

        $vuelo->FechaVuelo = $request->input('FechaVuelo');
        $vuelo->HoraVuelo = $request->input('HoraVuelo');
        $vuelo->CodigoTuristas = $request->input('OrigenVuelo');
        $vuelo->CodigoSucursal = $request->input('DestinoVuelo');
        $vuelo->CodigoEstancia = $request->input('PlazasTotales');

        $vuelo->save();

        return response()->json($vuelo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $vuelo = Vuelo::find($id);

        return response()->json($vuelo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $vuelo = Vuelo::find($id);

        $vuelo->FechaVuelo = $request->input('FechaVuelo');
        $vuelo->HoraVuelo = $request->input('HoraVuelo');
        $vuelo->CodigoTuristas = $request->input('OrigenVuelo');
        $vuelo->CodigoSucursal = $request->input('DestinoVuelo');
        $vuelo->CodigoEstancia = $request->input('PlazasTotales');

        $vuelo->save();

        return response()->json($vuelo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $vuelo = Vuelo::find($id);

        $vuelo->delete();

        return response()->json($vuelo);
    }
}

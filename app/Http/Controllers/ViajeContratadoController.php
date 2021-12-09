<?php

namespace App\Http\Controllers;

use App\Models\ViajeContratado;
use Illuminate\Http\Request;

class ViajeContratadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(ViajeContratado::all());
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
        $viajeContratado = new ViajeContratado();

        $viajeContratado->Clase = $request->input('Clase');
        $viajeContratado->NumeroVuelo = $request->input('NumeroVuelo');
        $viajeContratado->CodigoTuristas = $request->input('CodigoTuristas');
        $viajeContratado->CodigoSucursal = $request->input('CodigoSucursal');
        $viajeContratado->CodigoEstancia = $request->input('CodigoEstancia');

        $viajeContratado->save();

        return response()->json($viajeContratado);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $viajeContratado = ViajeContratado::find($id);

        return response()->json($viajeContratado);
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
        $viajeContratado = ViajeContratado::find($id);

        $viajeContratado->Clase = $request->input('Clase');
        $viajeContratado->NumeroVuelo = $request->input('NumeroVuelo');
        $viajeContratado->CodigoTuristas = $request->input('CodigoTuristas');
        $viajeContratado->CodigoSucursal = $request->input('CodigoSucursal');
        $viajeContratado->CodigoEstancia = $request->input('CodigoEstancia');

        $viajeContratado->save();

        return response()->json($viajeContratado);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $viajeContratado = ViajeContratado::find($id);

        $viajeContratado->delete();

        return response()->json($viajeContratado);
    }
}

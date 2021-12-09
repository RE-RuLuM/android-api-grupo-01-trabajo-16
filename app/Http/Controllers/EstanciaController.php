<?php

namespace App\Http\Controllers;

use App\Models\Estancia;
use Illuminate\Http\Request;

class EstanciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Estancia::all());
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estancia = new Estancia();

        $estancia->Pension = $request->input('Pension');
        $estancia->FechaEntrada = $request->input('FechaEntrada');
        $estancia->FechaSalida = $request->input('FechaSalida');
        $estancia->Codigoestancia = $request->input('CodigoHotel');

        $estancia->save();

        return response()->json($estancia);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estancia = Estancia::find($id);

        return response()->json($estancia);
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estancia = Estancia::find($id);

        $estancia->Pension = $request->input('Pension');
        $estancia->FechaEntrada = $request->input('FechaEntrada');
        $estancia->FechaSalida = $request->input('FechaSalida');
        $estancia->Codigoestancia = $request->input('CodigoHotel');

        $estancia->save();

        return response()->json($estancia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estancia = Estancia::find($id);

        $estancia->delete();

        return response()->json($estancia);
    }
}

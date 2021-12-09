<?php

namespace App\Http\Controllers;

use App\Models\Turista;
use Illuminate\Http\Request;

class TuristaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Turista::all());
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
        $turista = new Turista();

        $turista->NombresTurista = $request->input('NombresTurista');
        $turista->ApellidosTurista = $request->input('ApellidosTurista');
        $turista->DireccionTurista = $request->input('DireccionTurista');
        $turista->TelefonoTurista = $request->input('TelefonoTurista');

        $turista->save();

        return response()->json($turista);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $turista = Turista::find($id);

        return response()->json($turista);
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
        $turista = Turista::find($id);

        $turista->NombresTurista = $request->input('NombresTurista');
        $turista->ApellidosTurista = $request->input('ApellidosTurista');
        $turista->DireccionTurista = $request->input('DireccionTurista');
        $turista->TelefonoTurista = $request->input('TelefonoTurista');

        $turista->save();

        return response()->json($turista);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $turista = Turista::find($id);

        $turista->delete();

        return response()->json($turista);
    }
}

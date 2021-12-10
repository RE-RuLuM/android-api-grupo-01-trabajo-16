<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Hotel::all());
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
        $hotel = new Hotel();

        $hotel->NombreHotel = $request->input('NombreHotel');
        $hotel->DireccionHotel = $request->input('DireccionHotel');
        $hotel->CiudadHotel = $request->input('CiudadHotel');
        $hotel->TelefonoHotel = $request->input('TelefonoHotel');
        $hotel->PlazasHotel = $request->input('PlazasHotel');
        $hotel->FotoHotel = $request->input('FotoHotel');

        $hotel->save();

        return response()->json($hotel);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotel::find($id);

        return response()->json($hotel);
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
        $hotel = Hotel::find($id);

        $hotel->NombreHotel = $request->input('NombreHotel');
        $hotel->DireccionHotel = $request->input('DireccionHotel');
        $hotel->CiudadHotel = $request->input('CiudadHotel');
        $hotel->TelefonoHotel = $request->input('TelefonoHotel');
        $hotel->PlazasHotel = $request->input('PlazasHotel');
        $hotel->FotoHotel = $request->input('FotoHotel');

        $hotel->save();

        return response()->json($hotel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find($id);

        $hotel->delete();
    }
}

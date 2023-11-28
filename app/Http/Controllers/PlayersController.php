<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Players::all();
        return $players;
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
        $player = new Players();
        $player->name = $request->name;
        $player->methodpay = $request->methodpay;
        $player->phone = $request->phone;

        $player->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Players  $players
     * @return \Illuminate\Http\Response
     */
    public function show($phone)
    {

        $player = Players::where('Phone', '=', $phone)->value('id');
        if (!$player) {
        return response()->json(['error' => 'Jugador no encontrado'.$phone.'ss'], 404);
    }
        return $player;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Players  $players
     * @return \Illuminate\Http\Response
     */
    public function edit(Players $players)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Players  $players
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Players $players)
    {
        $player = Players::findOrFail($request->id);

        $player->name = $request->name;
        $player->methodpay = $request->methodpay;
        $player->phone = $request->phone;

        $player->save();

        return $task;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Players  $players
     * @return \Illuminate\Http\Response
     */
    public function destroy(Players $players)
    {
        $player = Player::destroy($request->id);
        return $player;
    }
}

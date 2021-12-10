<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use App\Models\Message;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){

        return view('party.create');

        // $name = $request->input('name');
        // $icon = $request->input('icon');
        // $game_id = $request->input('game_id');
        // Party::create([
        //     'name' => $name,
        //     'icon' => $icon,
        //     'game_id' => $game_id
        // ]);
        // return response()->json([
        //     'message' => 'Party successfully created!',
        //     // 'token' => $token
        // ], 201);
        return view('parties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $party = new Party();
        $party->name = $request->name;
        $party->icon = $request->icon;
        $party->game_id = $request->game_id;
        
        $party->save();

        // return redirect()->route('game.index')->with('success', 'Game added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // if ($request) {
        //     $games = Game::where('title', 'like', '%'.$request->search.'%')
        //     ->get ();
        //     return view('games.index', compact ('games'));
        // }
        $party = Party::find($id);
        return view('parties.show', compact('party'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $party = Party::find($id);
        return view('parties.edit', compact('party'));
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
        $party = Party::find($id);
        $party->name = $request->name;
        $party->icon = $request->icon;

        $party->update();
        $id = $party->id;
        return redirect()->route('party.show', [$id])->with('success', 'Party edited successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $party = Party::find($id);
        $party->delete();
        return redirect()->route('game.index')->with('success', 'Party deleted successfuly');
    }
}

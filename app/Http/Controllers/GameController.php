<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class GameController extends Controller
{
  public function index ()
  {
    // GET /games
    // list all games
    $games = Game::all();
    return Response::json($games);
  }

  public function create (Request $request)
  {
    // POST /games
    // create new game
    Game::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show ($id)
  {
    // GET /games/$id
    // show a single game info
  }

  public function update ($id)
  {
    // PUT /games/$id
    // update a single game
  }

  public function destroy ($id)
  {
    // DELETE /games/$id
    // remove a single game
  }
}

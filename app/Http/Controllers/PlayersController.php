<?php

namespace App\Http\Controllers;

use App\Player;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class PlayerController
 * @package App\Http\Controllers
 */
class PlayersController extends Controller
{
    protected $request;

    /**
     * Create a new controller instance.
     * @param Request $request Request object via dependency injection
     *
     */
    public function __construct(Request $request) {
        $this->request = $request;
    }

    /**
     * Returns all stored players ordered by score
     * @return mixed Player object
     */
    public function index()
    {
        return Player::orderBy('score', 'desc')->get();
    }

    /**
     * Increment the score of a player by 5
     */
    public function increment_score_by_five()
    {
        $name = $this->request->input('name');
        $player = Player::where('name', $name)->firstOrFail();
        $player->score += 5;
        return response()->json($player->save());
    }
}

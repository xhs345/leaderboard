<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
use Illuminate\Http\Request;
use App\Events\ScoreUpdated;

// API route to get a list of all players
$app->get('api/players', 'PlayersController@index');

// API route to increase the score of a player by 5
$app->post('api/increment_player_score_by_five', 'PlayersController@increment_score_by_five');

// Default route
$app->get('/', function () use ($app) {
    return view('index');
});

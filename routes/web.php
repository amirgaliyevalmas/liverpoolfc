<?php

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {

/*
    $client = new Client([
        'base_uri' => 'https://api-football-v1.p.rapidapi.com/v3/',
        'timeout'  => 2.0,
        'season' => '2020',
        'league' => '39'
    ]);
    $headers = [
        'x-rapidapi-host' => 'v3.football.api-sports.io',
        'x-rapidapi-key' => 'ee23a52d06msh9031f81fc3405cbp118efcjsnd1eed495a623',
    ];
    $request = new Request('GET','https://api-football-v1.p.rapidapi.com/v3/standings', $headers);

    $response = $client->send($request, ['timeout' => 2]);

    echo        $response->getBody();


*/

   return view('welcome');
});


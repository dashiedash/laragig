<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Dominus regit me, et nihil mihi deerit: in loco pascuae, ibi me collocavit. Super aquam refectionis educavit me; animam meam convertit. Deduxit me super semitas justitiae propter nomen suum. Nam etsi ambulavero in medio umbrae mortis, non timebo mala, quoniam tu mecum es. Virga tua, et baculus tuus, ipsa me consolata sunt. Parasti in conspectu meo mensam adversus eos qui tribulant me; impinguasti in oleo caput meum: et calix meus inebrians, quam praeclarus est! Et misericordia tua subsequetur me omnibus diebus vitae meae; et ut inhabitem in domo Domini in longitudinem dierum. '

            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Dominus regit me, et nihil mihi deerit: in loco pascuae, ibi me collocavit. Super aquam refectionis educavit me; animam meam convertit. Deduxit me super semitas justitiae propter nomen suum. Nam etsi ambulavero in medio umbrae mortis, non timebo mala, quoniam tu mecum es. Virga tua, et baculus tuus, ipsa me consolata sunt. Parasti in conspectu meo mensam adversus eos qui tribulant me; impinguasti in oleo caput meum: et calix meus inebrians, quam praeclarus est! Et misericordia tua subsequetur me omnibus diebus vitae meae; et ut inhabitem in domo Domini in longitudinem dierum. '
            ]
        ]
    ]);
});

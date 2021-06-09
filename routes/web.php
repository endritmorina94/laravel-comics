<?php

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

//ROTTA PER LA HOMEPAGE
Route::get('/', function () {

    //Creo un array dal file comics nella cartella config
    $series = config("comics");

    //Creo un array con i dati per il bottom banner
    $img_links = [
        [
            "url" => "img/buy-comics-digital-comics.png",
            "title" => "Digital Comics"
        ],
        [
            "url" => "img/buy-comics-merchandise.png",
            "title" => "DC Merchandise"
        ],
        [
            "url" => "img/buy-comics-subscriptions.png",
            "title" => "Subscription"
        ],
        [
            "url" => "img/buy-comics-shop-locator.png",
            "title" => "Comic Shop Locator"
        ],
        [
            "url" => "img/buy-dc-power-visa.svg",
            "title" => "DC Power Visa"
        ]
    ];

    //Inserisco i due array precedenti il un array associativo
    $data = [
        "series" => $series,
        "img_links" => $img_links
    ];

    return view("home", $data);
})->name("home");



//ROTTA PER I DETTAGLI DELLA SINGOLA SERIE
Route::get('details/{id}', function ($id) {

    //Creo un array dal file comics nella cartella config
    $series = config("comics");

    //Creo un array vuoto
    $serie_details = "";

    //Con il ciclo foreach vado a prendere la serie con id uguale a $id
    foreach ($series as $serie) {
        if ($serie["id"] == $id) {
            $serie_details = $serie;
        }
    }

    //Se non ne trovo nessuna e quindi l'array rimane vuoto allora stampo l'errore
    if (empty($serie_details)) {
        abort("404");
    }

    //Creo un array con i dati per il bottom banner
    $img_links = [
        [
            "url" => "img/buy-comics-digital-comics.png",
            "title" => "Digital Comics"
        ],
        [
            "url" => "img/buy-comics-subscriptions.png",
            "title" => "Shop DC"
        ],
        [
            "url" => "img/buy-comics-shop-locator.png",
            "title" => "Comic Shop Locator"
        ],
        [
            "url" => "img/buy-comics-merchandise.png",
            "title" => "Subscriptions"
        ]
    ];

    //Inserisco gli array in $data
    $data = [
        "serie_details" => $serie_details,
        "img_links" => $img_links
    ];


    return view('serie-details', $data);
})->name('serie-details');

//ROTTE CASUALI PER PROVARE LA CLASSE ACTIVE
Route::get('/characters', function () {

    return view('characters');
})->name('characters');

Route::get('/movies', function () {

    return view('movies');
})->name('movies');

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

    return view('home', $data);
})->name("home");

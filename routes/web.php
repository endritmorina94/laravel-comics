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


    $series = config("comics");

    $img_links = [
        [
            "url" => "img/buy-comics-digital-comics.png",
            "title" => "Digital Comics"
        ],
        [
            "url" => "img/buy-comics-merchandise.png",
            "title" => "DC Merchandis"
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

    $data = [
        "series" => $series,
        "img_links" => $img_links
    ];

    return view('home', $data);
})->name("home");

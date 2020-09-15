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
    return view('welcome');
})->name('home');

Route::get('/products', function () {
    return response()->json([
        'items' => [
            0 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5b8e45dce52e37165cb26542-large.jpg?cache_buster=ec74b6bff5ebeb28ba40b1fc51edbb19',
                'name' => 'Montre mécanique apparente plaquée or',
                'description' => 'Nouveau Top Qualité Hommes De Luxe Squelette À Remontage Automatique Mécanique Montres Or En Acier Inoxydable Étanche Montre-Bracelet Vente Chaude',
                'price' => '$50',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            1 => [
                'thumbnail' => 'https://canary.contestimg.wish.com/api/webimage/5f59c6ba1071710e9da8521e-normal.jpg?cache_buster=330633cfa22df5cfa0a8bc9b1ea0591f',
                'name' => 'Montre classique vintage bracelet en cuir vegan',
                'description' => 'Brand Pa nerai Watch Mens Mechanical Automatic Watches Best Gift Leather Wristwach with box',
                'price' => '$42',
                'size' => '12',
                'shipping_price' => '$3',
            ]
        ]
    ]);
});

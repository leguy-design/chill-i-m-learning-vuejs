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
            ],
            2 => [
                'thumbnail' => 'https://canary.contestimg.wish.com/api/webimage/5f59c6ba1071710e9da8521e-normal.jpg?cache_buster=330633cfa22df5cfa0a8bc9b1ea0591f',
                'name' => 'Montre classique vintage bracelet en cuir vegan',
                'description' => 'Brand Pa nerai Watch Mens Mechanical Automatic Watches Best Gift Leather Wristwach with box',
                'price' => '$42',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            3 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5f44aa261945430cc95e9127-large.jpg?cache_buster=626b9df7707d4bcb6563eb97ba356afc',
                'name' => 'Montre classique Tissot',
                'description' => 'TISSOT hommes nouveau 2020 luxe automatique Quatz montres classique bracelet en cuir montre-bracelet avec boîte-cadeau',
                'price' => '$26,07',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            4 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5f470c2b0a6cb0004bfca69d-large.jpg?cache_buster=4853677c99ab3a69383689b89c7b7364',
                'name' => 'Montre Citizen, cadran bleu',
                'description' => '2021 NEW Fashion CITIZEN Automatic Quatz Watches Blue Angels Men\'s Watch World Chronograph',
                'price' => '$14',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            5 => [
                'thumbnail' => 'https://canary.contestimg.wish.com/api/webimage/5f59c6ba1071710e9da8521e-normal.jpg?cache_buster=330633cfa22df5cfa0a8bc9b1ea0591f',
                'name' => 'Montre classique vintage bracelet en cuir vegan',
                'description' => 'Brand Pa nerai Watch Mens Mechanical Automatic Watches Best Gift Leather Wristwach with box',
                'price' => '$42',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            6 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5f59d9ac7b4ab714f960ce74-large.jpg?cache_buster=b98451d6c28167a61886c194253b5822',
                'name' => 'Montre TU\'D\'OR GENEVE CADRAN BLEU',
                'description' => 'Nouvelle montre de marque Tu\'d\'or hommes montre-bracelet étanche militaire montres automatiques mécaniques',
                'price' => '$5',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            7 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5f28ee24a0a14908e5dfa5d3-large.jpg?cache_buster=5e6acfb41934ddc296c5ea233659db80',
                'name' => 'Montre Seiko Noire',
                'description' => 'Montre pour homme de sport étanche Seiko de haute qualité 4 couleurs',
                'price' => '$23',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            8 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5ddcf58f04954c21039b6c55-large.jpg?cache_buster=eccfb4a52ccec6c947f57ee4c6d51ebd',
                'name' => 'Montre Steampunk KINYUED',
                'description' => 'KINYUED Mécanique Automatique Montre Hommes Tourbillon Montre-Bracelet Sport Horloge Mécanisme À Remontage Automatique Montres Casual Lune horloge homme montres',
                'price' => '$49',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            9 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5f34dfc735ef733cc1ab6877-large.jpg?cache_buster=e47c28ff394c2db77a7d7f822debe16b',
                'name' => 'Montre Wwoorr rectangle vintage',
                'description' => 'reloj hombre Square watch men\'s WWOOR top brand luxury black leather gold quartz men\'s automatic winding watch sports waterproof clock Relogio Masculino watch box',
                'price' => '$15',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            10 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5c4a03db46a4782712563e3c-large.jpg?cache_buster=5780f40b5d92fac0bf180b8ef02de613',
                'name' => 'Montre aquaproof noire',
                'description' => 'Sports Digital Men\'s Quartz Watch Army Alarm Watches Dual Display LED Waterproof Watches',
                'price' => '$8',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            11 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5f15302791f0c21adb3242c4-large.jpg?cache_buster=a1aafc43e60b4d3cb05015ac4819f0a3',
                'name' => 'Montre Tissot sport bracelet rouge',
                'description' => 'TISSOT hommes nouveau 2020 luxe automatique Quatz montres classique bracelet en cuir montre-bracelet',
                'price' => '$16,82',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            12 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5f5f0bd4f6f053003e4826b3-large.jpg?cache_buster=f1e5bc9c7738c7b628faf2003d1aa49a',
                'name' => 'Montre Rolex luxury & vintage noire',
                'description' => 'Ro\'lex Mens Automatic Watches Leather Strap Mechanical Wristwatch Best Gift Watch men with Box',
                'price' => '$127,74',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            13 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5f56fe165173efcba11dc868-large.jpg?cache_buster=f02d74842205ac306fcd4d4daab1e636',
                'name' => 'Montre Seiko argent',
                'description' => '2021 New Upgrade !!! SEIKO SRP599J1 Sports Automatic 100M MADE IN JAPAN Men\'s Brand New Watch',
                'price' => '$5',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            14 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5e78244172b03231c20f0d95-large.jpg?cache_buster=85e8f4562f00a0ea819a166e4f016c93',
                'name' => 'Montre Lige verte',
                'description' => '2020 Marque LIGE Vert Eau Fantôme De Luxe Hommes Montre Étanche Date Horloge Hommes Montres Hommes Quartz Montre-Bracelet Relogio Masculino',
                'price' => '$42',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            15 => [
                'thumbnail' => '',
                'name' => 'Montre classique vintage bracelet en cuir vegan',
                'description' => 'Brand Pa nerai Watch Mens Mechanical Automatic Watches Best Gift Leather Wristwach with box',
                'price' => '$42',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            16 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5f3214cb706a951d0657649a-large.jpg?cache_buster=b10df02ce5b81df63eaee642e617bbd5',
                'name' => 'Montre classique CITIZEN',
                'description' => 'Automatic Quatz Watches Male Casual Watch Fancy Watch Quatz Watches Men\'s Watch Waterproof Watches Luxurious Business Wristwatch',
                'price' => '$11,77',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            17 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5ba9fc246caa843d5b4cd396-large.jpg?cache_buster=c17b650b5b57d6225b78e84b599538d7',
                'name' => 'Montre CURREN cuir',
                'description' => 'Curren montres Sport montre hommes étanche Quartz horloge Date mâle montre en cuir hommes militaire mode marque homme montres',
                'price' => '$11',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            18 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5dca09fbb6fbf603dd1e6689-large.jpg?cache_buster=681c381d94c097e7d736435a62499b49',
                'name' => 'Montre GENEVA noire et pointes de rouges',
                'description' => 'Mode Hommes D\'affaires Minimaliste Montres De Luxe Genève Hommes Ultra Mince En Acier Inoxydable Ceinture En Maille Casual Analogique Quartz Montre pour Homme Horloge Cadeaux De Noël Relogio Masculino',
                'price' => '$24',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            19 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/592051ba9009d71e608bc43c-large.jpg?cache_buster=d839158e754323a75da94d5460f4b682',
                'name' => 'Montre S-SHOCK futuriste',
                'description' => 'Mode SMAEL marque SMAEL montre sport pour hommes Montre sport S Shock Montre à double affichage analogique numérique à DEL électronique',
                'price' => '$43',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            20 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5d53b7f5152754324b80009d-large.jpg?cache_buster=61e88ad5cb89d21b756e305f1921ef62',
                'name' => 'Montre LIGE argent et cadran bleu',
                'description' => 'LIGE Marque Montre Hommes Mode Sport Quartz Horloge En Cuir Hommes Montres De Luxe Or Étanche Montre D\'affaires Relogio Masculino',
                'price' => '$17',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            21 => [
                'thumbnail' => '',
                'name' => 'Montre classique vintage bracelet en cuir vegan',
                'description' => 'Brand Pa nerai Watch Mens Mechanical Automatic Watches Best Gift Leather Wristwach with box',
                'price' => '$42',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            22 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/597855902c6aa5073f44fe52-large.jpg?cache_buster=dc2328519f2f7722b2cb5754dcdd1381',
                'name' => 'Montre LIGE pointes de rouges argentée',
                'description' => 'Mode Hommes Accessoires Montres Hommes Montres Hommes Militaires Montres d\'affaires Hommes Full Steel Quartz-watch+Box',
                'price' => '$21',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            23 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5f51d963a04ce40bc68b6885-large.jpg?cache_buster=9fe49e7f47f33b352d12217f5b6b6a58',
                'name' => 'Montre Citizen bleu caoutchou',
                'description' => 'CITIZEN Automatic Quatz Watches Montre Blue Angels World Chronographe pour homme avec boîte-cadeau',
                'price' => '$42',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            24 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5426dba2bfcddb0a8fe7790e-large.jpg?cache_buster=55977885ed29eddde3d96c08c51c6e90',
                'name' => 'Montre Winner plaquée or',
                'description' => 'WINNER Luxury Skeleton Automatique pour Homme Montre Bracelet Acier Inoxydable avec Boîte Cadeau',
                'price' => '$56',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            25 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5f34c083b0b32700473401b5-large.jpg?cache_buster=edf86e904c61a42e614e5fa5b3b79e82',
                'name' => 'Montre Tevise argentée et cadran noir',
                'description' => 'Top Brand Men Mechanical Watch Automatic Fashion Luxury Stainless Steel Male Clock Relogio Masculino 2020',
                'price' => '$28',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            26 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5f20e464b747b427b0c84185-large.jpg?cache_buster=d65c167c33ea2fc5de08aec5cc0b5b51',
                'name' => 'Montre CURREN Chrono\' mecanique apparente',
                'description' => 'CURREN marque de luxe hommes mode en cuir sport montres hommes armée militaire montre homme grand cadran analogique Quartz horloge Relogio Masculino',
                'price' => '$49',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            27 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5f0e748960550517bdb4cf51-large.jpg?cache_buster=0b321f03ddfece14337ce2d2b2907ac4',
                'name' => 'Montre Seiko argentée et cadran bleu',
                'description' => '100% montre Seiko originale montre mécanique automatique pour hommes montre de sport de plongée calendrier anglais garantie globale lumineuse SRP747J',
                'price' => '$65,59',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            28 => [
                'thumbnail' => 'https://canary.contestimg.wish.com/api/webimage/5c7c81ced869412812d16d8a-normal.jpg?cache_buster=5465920a37a44281ca924c7f760ea2ee',
                'name' => 'Montre Soki cadran jade',
                'description' => 'Brillent dans le noir montres hauts marque de luxe militaire hommes horloge Quartz armée montre cadran noir Date luxe Sport montre-bracelet',
                'price' => '$68',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            29 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5ecf5c8851a3e010c6d75f69-large.jpg?cache_buster=2475102913e515d7e3c6ba5477791ede',
                'name' => 'Montre classique Seiko noire',
                'description' => 'Nouveaux hommes de luxe automatique Quatz montres montre-bracelet en cuir classique avec boîte de mode',
                'price' => '$25,23',
                'size' => '12',
                'shipping_price' => '$3',
            ],
            30 => [
                'thumbnail' => 'https://contestimg.wish.com/api/webimage/5f549970066adf003e8a7280-large.jpg?cache_buster=aa2211651911d3044cee897e3f29893f',
                'name' => 'Montre Seiko Aéro-edition',
                'description' => 'https://contestimg.wish.com/api/webimage/5f549970066adf003e8a7280-large.jpg?cache_buster=aa2211651911d3044cee897e3f29893f',
                'price' => '$4',
                'size' => '12',
                'shipping_price' => '$3',
            ]
        ]
    ]);
});

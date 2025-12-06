<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


Route::get('/prueba', function () {
    return view('inicio2');
});

Route::get('/', function () {
    return view('inicio');
})->name('home');

// for logged in users
Route::get('inicio2',function() {
    return view('inicio2');
})->name('inicio2');

Route::get('acercade',function() {
    return view('acercade');
})->name('acercade');

Route::get('contacto',function() {
    return view('contacto');
})->name('contacto');

Route::get('ayuda',function() {
    return view('ayuda');
})->name('ayuda');

Route::get('country',function() {
    $country = DB::table('country')
        ->select('country_id as CountryId', 'country as CountryName')
        ->paginate(5);
    return view('country',['country'=>$country]);
})->name('country');

Route::get('city', function () {
    $city = DB::table('city')
        ->select('city_id as CityId', 'city as CityName', 'country_id as CountryId')
        ->paginate(5);
    return view('city', ['city' => $city]);
})->name('city');

Route::get('category', function () {
    $category = DB::table('category')
        ->select('category_id as CategoryId', 'name as CategoryName')
        ->paginate(5);
    return view('category', ['category' => $category]);
})->name('category');

// Filtered city lists for Menu 3
Route::get('city/mexico', function () {
    $city = DB::table('city')
        ->select('city_id as CityId', 'city as CityName', 'country_id as CountryId')
        ->where('country_id', 60)
        ->paginate(5);
    return view('city', ['city' => $city]);
})->name('city.mexico');

Route::get('city/usa', function () {
    $city = DB::table('city')
        ->select('city_id as CityId', 'city as CityName', 'country_id as CountryId')
        ->where('country_id', 103)
        ->paginate(5);
    return view('city', ['city' => $city]);
})->name('city.usa');

// original
// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->name('home');

Route::get('dashboard', function () {
    return view("inicio2"); //Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
});

Route::get('clientes',function() {
    $clientes = DB::table('clientes')->paginate(5);
    return view('clientes',['clientes'=>$clientes]);
});

Route::get('ventas',function() {
    $ventas = DB::table('ventas')->paginate(5);
    return view('ventas',['ventas'=>$ventas]);
});

Route::get('categorias',function() {
    $categorias = DB::table('categorias')->paginate(5);
    return view('categorias',['categorias'=>$categorias]);
});

Route::get('productos',function() {
    $productos = DB::table('productos')->paginate(5);
    return view('productos',['productos'=>$productos]);
});

Route::get('proveedores',function() {
    $proveedores = DB::table('proveedors')->paginate(5);
    return view('proveedores',['proveedores'=>$proveedores]);
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

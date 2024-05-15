<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
})->name('home.index');

Route::get('counter', function () {
    return view('counter.counter');
})->name('counter.index');

Route::get('load-more', function () {
    return view('load_more.load_more');
})->name('loadMore.index');

Route::get('live-search', function () {
    return view('live_search.live_search');
})->name('liveSearch.index');

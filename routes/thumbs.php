<?php

use App\Http\Controllers\ThumbController;
use Illuminate\Support\Facades\Route;

/*
| Photo thumbnails (App\Support\Thumb). Outside the "web" middleware group on
| purpose: no session, no cookies, so Cloudflare and browsers can cache them.
| Not throttled: behind Cloudflare every visitor shares a few edge IPs, and
| each (photo, width) is decoded once — after that the file on disk is sent.
*/
Route::get('/img/t/{w}', [ThumbController::class, 'show'])
    ->where('w', '[0-9]{2,4}')
    ->name('thumb');

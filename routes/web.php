<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
    return view('welcome');
});

Route::get('check-queue', function () {
    Mail::to('sarthak@bitfumes.com')->send(new TestMail());
    return 'working';
});

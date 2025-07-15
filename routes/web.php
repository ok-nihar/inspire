<?php

use Illuminate\Support\Facades\Route;
use Vovance\Inspire\Quote;

Route::get('/inspire', function () {
    return Quote::get();
});
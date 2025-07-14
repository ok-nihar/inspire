<?php

use Illuminate\Support\Facades\Route;

Route::get('inspire', function(Nihar\Inspire\Inspire $inspire) {
    return $inspire->justDoIt();
});

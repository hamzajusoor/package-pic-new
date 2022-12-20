<?php


use Illuminate\Support\Facades\Route;
use Alzughbieh\HamzaPic\TestControoler;




Route::get('/welcome-test',[TestControoler::class,'show']);

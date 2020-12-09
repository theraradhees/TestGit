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
});

/*
MODULE 1 - Safety Concept and Equipment
*/

Route::get('/RS/m1t1', function () {
    return view('RampSafety.RS1.m1t1');
    
});

Route::get('/RS/m1t2', function () {
    return view('RampSafety.RS1.m1t2');
    
});

Route::get('/RS/m1t3', function () {
    return view('RampSafety.RS1.m1t3');
    
});

Route::get('/RS/m1t4', function () {
    return view('RampSafety.RS1.m1t4');
    
});

/*
MODULE  - Aerodrome and Safety Precaution
*/
Route::get('/RS/m2t1', function () {
    return view('RampSafety.RS2.m2t1');
    
});

Route::get('/RS/m2t2', function () {
    return view('RampSafety.RS2.m2t2');
    
});

Route::get('/RS/m2t3', function () {
    return view('RampSafety.RS2.m2t3');
    
});

Route::get('/RS/m2t4', function () {
    return view('RampSafety.RS2.m2t4');
    
});

Route::get('/RS/m2t5', function () {
    return view('RampSafety.RS2.m2t5');
    
});

Route::get('/RS/m2t6', function () {
    return view('RampSafety.RS2.m2t6');
    
});

/* 
Module 3 - Radio Telephony Techniques
*/

Route::get('/RS/m3t1', function () {
    return view('RampSafety.RS3.m3t1');
    
});

Route::get('/RS/m3t2', function () {
    return view('RampSafety.RS3.m3t2');
    
});

Route::get('/RS/m3t3', function () {
    return view('RampSafety.RS3.m3t3');
    
});

Route::get('/RS/m3t4', function () {
    return view('RampSafety.RS3.m3t4');
    
});

Route::get('/RS/m3t5', function () {
    return view('RampSafety.RS3.m3t5');
    
});

Route::get('/RS/m3t6', function () {
    return view('RampSafety.RS.m3t6');
    
});

/*
Module 4 - Special Handling and Abnormal Situations
*/

Route::get('/RS/m4t1', function () {
    return view('RampSafety.RS4.m4t1');
    
});

Route::get('/RS/m4t2', function () {
    return view('RampSafety.RS4.m4t2');
    
});

Route::get('/RS/m4t3', function () {
    return view('RampSafety.RS4.m4t3');
    
});

Route::get('/RS/m4t4', function () {
    return view('RampSafety.RS4.m4t4');
    
});

Route::get('/RS/m4t5', function () {
    return view('RampSafety.RS4.m4t5');
    
});

Route::get('/RS/m4t6', function () {
    return view('RampSafety.RS4.m4t6');
    
});

/*
Fifghting Foam Evaluation
Module 1 - Foam Concentrate Physical Properties Test 
*/
Route::get('/FE/m1t0', function () {
    return view('FoamEval.FE1.m1t0');
    
});

Route::get('/FE/m1t1', function () {
    return view('FoamEval.FE1.m1t1');
    
});

Route::get('/FE/m1t2', function () {
    return view('FoamEval.FE1.m1t2');
    
});

/*
Fifghting Foam Evaluation
Module 2 - Fire Test 
*/
Route::get('/FE/m2t1', function () {
    return view('FoamEval.FE2.m2t1');
    
});

Route::get('/FE/m2t2', function () {
    return view('FoamEval.FE2.m2t2');
    
});

Route::get('/FE/m2t3', function () {
    return view('FoamEval.FE2.m2t3');
    
});

/*
Fifghting Foam Evaluation
Module 3 - ARFF Vehicle Foam Production Performance Test  
*/
Route::get('/FE/m3t1', function () {
    return view('FoamEval.FE3.m3t1');
    
});

Route::get('/FE/m3t2', function () {
    return view('FoamEval.FE3.m3t2');
    
});

Route::get('/FE/m3t3', function () {
    return view('FoamEval.FE3.m3t3');
    
});

/*
AREA CONTROL SURVEILLANCE
Module 1 - AIRCRAFT IDENTIFICATION  
*/
Route::get('/ACC/m1t1', function () {
    return view('AirCons.AC1.m1t1');
    
});

Route::get('/ACC/m1t2', function () {
    return view('AirCons.AC1.m1t2');
    
});

Route::get('/ACC/m1t3', function () {
    return view('AirCons.AC1.m1t3');
    
});

/*
AREA CONTROL SURVEILLANCE
Module 2 - SURVEILLANCE SEPARATION  
*/

Route::get('/ACC/m2t1', function () {
    return view('AirCons.AC2.m2t1');
    
});

Route::get('/ACC/m2t2', function () {
    return view('AirCons.AC2.m2t2');
    
});

Route::get('/ACC/m2t3', function () {
    return view('AirCons.AC2.m2t3');
    
});

Route::get('/ACC/m2t4', function () {
    return view('AirCons.AC2.m2t4');
    
});

/*
AREA CONTROL SURVEILLANCE
Module 3 - ABNORMAL CONDITION  
*/

Route::get('/ACC/m3t1', function () {
    return view('AirCons.AC3.m3t1');
    
});


Route::get('/ACC/m3t2', function () {
    return view('AirCons.AC3.m3t2');
    
});


Route::get('/ACC/m3t3', function () {
    return view('AirCons.AC3.m3t3');
    
});


Route::get('/ACC/m3t4', function () {
    return view('AirCons.AC3.m3t4');
    
});


Route::get('/ACC/m3t5', function () {
    return view('AirCons.AC3.m3t5');
    
});


Route::get('/ACC/m3t6', function () {
    return view('AirCons.AC3.m3t6');
    
});

Route::get('/ACC/m3t7', function () {
    return view('AirCons.AC3.m3t7');
    
});


/*

THIS IS NOT A DRILL

*/ 

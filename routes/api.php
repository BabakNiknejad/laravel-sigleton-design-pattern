<?php

use App\Http\Controllers\MedicalRecordController;
use Illuminate\Support\Facades\Route;


Route::get('medical-record/{id}' , [MedicalRecordController::class ,  'showMedicalRecord'] );

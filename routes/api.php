<?php
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

Route::apiResource('api/produits', ProduitController::class);

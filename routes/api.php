<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use SaltContract\Controllers\ContractsController;
use SaltContract\Controllers\TypesController;

$version = config('app.API_VERSION', 'v1');

Route::middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: CONTRACT TYPES
    Route::get("contracts/types", [TypesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("contracts/types", [TypesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("contracts/types/trash", [TypesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("contracts/types/import", [TypesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("contracts/types/export", [TypesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("contracts/types/report", [TypesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("contracts/types/{id}/trashed", [TypesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contracts/types/{id}/restore", [TypesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contracts/types/{id}/delete", [TypesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("contracts/types/{id}", [TypesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("contracts/types/{id}", [TypesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("contracts/types/{id}", [TypesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contracts/types/{id}", [TypesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: CONTRACTS
    Route::get("contracts", [ContractsController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("contracts", [ContractsController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("contracts/trash", [ContractsController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("contracts/import", [ContractsController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("contracts/export", [ContractsController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("contracts/report", [ContractsController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("contracts/{id}/trashed", [ContractsController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("contracts/{id}/restore", [ContractsController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contracts/{id}/delete", [ContractsController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("contracts/{id}", [ContractsController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("contracts/{id}", [ContractsController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("contracts/{id}", [ContractsController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("contracts/{id}", [ContractsController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID

});

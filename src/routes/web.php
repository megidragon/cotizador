<?php

use Api\Cotizador\AddressController;
use Api\Cotizador\FormController;
use Api\Cotizador\FormStepController;
use Api\Cotizador\PlanController;
use Api\Cotizador\SalesForceController;
use Api\Cotizador\UserController;
use Api\Data\GeneralDataProviderController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Api\Cotizador\CampaignController;

// DEBUG ENDPOINT
Route::prefix('test')->group(function() {
    Route::get('/', [\App\Http\Controllers\TestController::class, 'test']);
    Route::get('csrf', [\App\Http\Controllers\TestController::class, 'getCsrfToken']);
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// API ROUTES
Route::prefix('v1')->group(function() {

    Route::prefix('cotizador')->group(function() {
        Route::get('plans', [PlanController::class, 'getPlans']);
        Route::get('plan/{code}', [PlanController::class, 'getPlanByCode']);
        Route::post('basic-information', [CampaignController::class, 'insertCampaignRequestNotContractMassConsumption']);
        Route::post('insert-address', [AddressController::class, 'insertAddress']);
        Route::post('normalize-address', [FormStepController::class, 'normalizeAddress']);

        Route::prefix('step')->group(function() {
            Route::post('1', [FormStepController::class, 'stepOne']);
            Route::post('2', [FormStepController::class, 'stepTwo']);
            Route::post('3', [FormStepController::class, 'stepThree']);
        });

    });

    Route::prefix('sales-force')->group(function() {
        Route::post('/first', [SalesForceController::class, 'sendFirstStep']);
        Route::post('/second', [SalesForceController::class, 'sendSecondStep']);
        Route::post('/third', [SalesForceController::class, 'sendThirdStep']);
        Route::post('/fourth', [SalesForceController::class, 'sendFourthStep']);
        Route::post('/fifth', [SalesForceController::class, 'sendFifthStep']);
    });


    Route::prefix('data-provider')->group(function() {
        Route::get('document-types', [GeneralDataProviderController::class, 'listDocumentType']);
        Route::get('gender', [GeneralDataProviderController::class, 'listGender']);
        Route::get('localities/{pc}', [GeneralDataProviderController::class, 'listLocalities']);
        Route::get('provinces/{pc}', [GeneralDataProviderController::class, 'listProvinces']);
        Route::get('countries', [GeneralDataProviderController::class, 'listCountries']);
    });

    Route::prefix('form-control')->group(function() {
        Route::get('/get-form-stored-data', [FormController::class, 'getFormStoredData']);
        Route::get('/can-i/{step}', [FormController::class, 'canI']);
        Route::get('/get-current-step', [FormController::class, 'getCurrentStep']);
    });
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Vue App
Route::get('/', [PagesController::class, 'index']);
Route::get('/{any}', [PagesController::class, 'index'])->where('any', '.*');

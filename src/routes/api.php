<?php

Route::prefix('api')->group(function () {
    Route::group(["prefix" => "rastreadorProyectos"],function(){
        Route::post("registrar",[
            "uses" => \Codwelt\RastreadorProyectos\App\HTTP\Controllers\API\RegistraController::class."@registrar",
            "as" =>   "registrar"
        ]);
    });
});
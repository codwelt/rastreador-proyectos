<?php

Route::prefix('api')->group(function () {
    Route::group(["prefix" => "rastreadorPackages"],function(){
        Route::post("registrar",[
            "uses" => \Codwelt\RastreadorProyectos\App\HTTP\Controllers\API\RegistraController::class."@",
            "as" =>   "registrar"
        ]);
    });
});
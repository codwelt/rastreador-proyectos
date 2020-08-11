<?php


namespace Codwelt\RastreadorProyectos\App\HTTP\Controllers\API;

use Codwelt\RastreadorProyectos\App\HTTP\Requests\API\RegistrarAPIRequests;
use Codwelt\RastreadorProyectos\App\Models\RastreadorInstancia;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/**
 * Class RegistraController
 * @package Codwelt\RastreadorPackages\App\HTTP\Controllers\API
 * @author Juan Diaz <iam@furiosojack.com>
 */
class RegistraController extends Controller
{
    public function registrar(RegistrarAPIRequests  $request)
    {
        $data = $request->json("data");
        $proyect = $request->json("proyect");
        $instancia = RastreadorInstancia::where("proyect_name",$proyect["name"])
        ->where("uuid",$proyect["uuid"])->first();

        if(is_null($instancia)){

            $colums = [
                "proyect_name" => $proyect["name"],
                "uuid" => $proyect["uuid"],
                "version" => $proyect["version"]
            ];

            if(isset($proyect["uuid_father"])){
                $instanciaF = RastreadorInstancia::where("proyect_name",$proyect["name"])
                    ->where("uuid",$proyect["uuid_father"])->first();
                $colums["id_father"] = $instanciaF->id;
            }

            $instancia = RastreadorInstancia::create($colums);
        }

        $log = $instancia->logs()->create([
            "data" => json_encode($data)
        ]);

        if($log){
            return response()->json([
                "status" => 1,
                "message" => "Ok"
            ]);
        }
        return response()->json([
            "status" => 0,
            "message" => "Fallo"
        ]);

    }

}
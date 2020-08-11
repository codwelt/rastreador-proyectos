<?php


namespace Codwelt\RastreadorProyectos\App\HTTP\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class RegistrarAPIRequests
 * @package Codwelt\RastreadorPackages\App\HTTP\Requests\API
 * @author Juan Diaz <iam@furiosojack.com>
 */
class RegistrarAPIRequests extends FormRequest
{

    public function authorize()
    {
        return true;


    }

    public function rules()
    {
        return [
          "data" => "required|is_array",
          "proyect" => "required|is_array",
          "proyect.version" => "required|string",
          "proyect.name" => "required|string",
          "proyect.uuid" => "required|string",
          "proyecto.uuid_father" => "string"
        ];
    }

}
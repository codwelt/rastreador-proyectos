<?php


namespace Codwelt\RastreadorProyectos\App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RastreadorInstanciaLog
 * @package Codwelt\RastreadorPackages\App\Models
 * @author Juan Diaz <iam@furiosojack.com>
 */
class RastreadorInstanciaLog extends Model
{
    protected $table = "rastreador_instances_logs";
    protected $fillable = ["instance_id","data"];

}
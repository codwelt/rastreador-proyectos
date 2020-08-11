<?php


namespace Codwelt\RastreadorProyectos\App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RastreadorInstancia
 * @package Codwelt\RastreadorPackages\App\Models
 * @author Juan Diaz <iam@furiosojack.com>
 */
class RastreadorInstancia extends Model
{
    protected $table = "rastreador_instances";
    protected $fillable = ["uuid","proyect_name","version","id_father"];


    public function logs()
    {
        return $this->hasMany(RastreadorInstanciaLog::class,"instance_id","id");
    }
}
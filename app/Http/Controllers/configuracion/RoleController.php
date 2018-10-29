<?php

namespace App\Http\Controllers\Configuracion;
use App\Http\Controllers\Controller;
use App\Http\Services\Configuracion\RoleService;


use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
         
        $this->servicio = new RoleService;
        $this->status='activo';//estatus de borrado logico
    }
  
  
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $result=$this->servicio->index();
          return $result;
    } 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result=$this->servicio->store();
        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result=$this->servicio->show();
        return $result;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result=$this->servicio->update();
        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result=$this->servicio->destroy();
        return $result;
    }
}

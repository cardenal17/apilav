<?php

namespace App\Http\Controllers\Pellizary;
use App\Http\Services\Pellizary\SolService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SoldaduraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
       
        $this->servicio = new SolService;
        $this->id='id';//clave pimaria de la tabla
        $this->status='activo';//estatus de borrado logico
    }


    public function getsol(Request $request){

    $soldaduras=$this->servicio->index($request, $this->status);
    return $soldaduras;
    } 

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $soldaduras=$this->servicio->store($request,$this->status);

        return $soldaduras;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $soldaduras=$this->servicio->show($id);

       return $soldaduras;
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
      
      $soldaduras=$this->servicio->update($request,$id);
      
      return $soldaduras;  

    }

    public function borrar($id){

        $soldaduras=$this->servicio->destroy($id);

        return $soldaduras;
        
            }

}

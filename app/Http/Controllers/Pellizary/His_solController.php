<?php

namespace App\Http\Controllers\Pellizary;
use App\Http\Controllers\Controller;
use App\Http\Services\Pellizary\His_solService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class His_solController extends Controller
{
    
    public function __construct(){
       
        $this->servicio = new His_solService;
        $this->status='activo';//estatus de borrado logico
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $result=$this->servicio->show($id);

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

        $result=$this->servicio->store($request);

        return $result;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result=$this->servicio->unit($id);

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
        $result=$this->servicio->update($request,$id);

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
        $result=$this->servicio->destroy($id);

        return $result;
    }
}



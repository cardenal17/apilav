<?php

namespace app\Http\Services\configuracion;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RoleService
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $result= DB::table('roles as r')->select('r.name', 'r.slug','r.description','r.estatus')
        ->where('r.estatus','=','true')
        ->get();
        return response()->json($result);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role=Role::create($request->all());
        return $role;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result= DB::table('roles as r')->select('r.name', 'r.slug','r.description','r.estatus')
        ->where('r.id','=',$id)
        ->where('r.estatus','=','true')
        ->get();
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
        $soldaduras=Role::find($id);
        $soldaduras->fill($request->all())
        ->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $update=DB::table('roles')
       ->Where('id','=',$id)
       ->update([
           "estatus"=>"false"  
       ]);
     
    return $update;
    }
}

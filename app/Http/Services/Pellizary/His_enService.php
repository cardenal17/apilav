<?php
namespace app\Http\Services\Pellizary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\His_en;
use Carbon\Carbon;
class His_enService
{
   
 public function __construct()
    {
        $this->model = new His_en();
    }



    /**
     * @return json con el listado de registros del detalle de la inspeccion de 
     * soldadura 
     */
   
    public function show($id){

        $result= DB::table('his_ens as e')
        ->join('users as a','a.id','e.usu_id')
        ->join('ensamblajes as en','en.id','e.ens_id')
        ->select('e.id','e.codigo','e.puesto','e.resultado','a.name','en.codigo','e.observacion','e.created_at','e.updated_at')
        ->where('e.ens_id','=',$id)
        ->where('e.estatus','=','true')
        ->get();
        return response()->json($result);
       // [{"id":1,"codigo":125835435,"resultado":"aceptado","inspector":"dee","observacion":"resumen","estatus":"true","created_at":null,"updated_at":null,"sol_id":1,"usu_id":1,"name":"YIL"}]
    }

     

    /**
     * @param Request $request
     *
     */
    public function store(Request $request)
    {

         //$date = $date->format('d-m-Y');
        $date1=Carbon::now();

       $id= DB::table('his_ens')
         ->insertGetId([
            'codigo'=>$request['codigo'],
            'resultado'=>$request['resultado'],
            'observacion'=>$request['observacion'],
            'puesto'=>$request['puesto'],
            'estatus'=>'true',
            'ens_id'=>$request['ens_id'],
            'usu_id'=>$request['usu_id'],
            'created_at'=>$date1,
            'updated_at'=>$date1
         ]);

         $result=$this->unit($id);

         return $result;

    }

   public function unit($id){

        $result= DB::table('his_ens as e')
        ->join('users as a','a.id','p.usu_id')
        ->join('ensamblajes as en','en.id','e.ens_id')
        ->select('e.id','e.codigo','e.puesto','e.resultado','a.name','en.codigo','e.observacion','e.created_at','e.updated_at')
        ->where('e.id','=',$id)
        ->where('e.estatus','=','true')
        ->get();
     
        return response()->json($result);

   }

    /**
     * Actualizar registros de inspaceccion de soladadura
     */
     
    public function update($request,$id){
       
        $date1=Carbon::now();
       
       $update=DB::table('his_pers')
       ->Where('id','=',$id)
       ->update([
        "codigo"=>$request->codigo,
        "resultado"=>$request->resultado,
        "puesto"=>$request->puesto,
        "usu_id"=>$request->usu_id,
        "observacion"=>$request->observacion,
        "updated_at"=>$date1
       ]);
     
    return $update;



    }
      
    /**
     * @param $g_namePrimaryKey = nombre de la llave primaria
     * @param $x_pk = valor de la llave primaria
     * @param $g_status = nombre del campo status
     * @return _destroy de tatucoService
     */
    public function destroy($id)
    {

       $update=DB::table('his_ens')
       ->Where('id','=',$id)
       ->update([
           "estatus"=>"false"  
       ]);
     
    return $update;

    }

}

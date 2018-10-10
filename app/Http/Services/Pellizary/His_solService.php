<?php
namespace app\Http\Services\Pellizary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\His_sol;
use Carbon\Carbon;


class His_solService  
{
    public $soldaduras;

    public function __construct()
    {
        $this->model = new His_sol();
    }

    /**
     * @return json con el listado de registros del detalle de la inspeccion de 
     * soldadura 
     */
   
    public function show($id){

        $result= DB::table('his_sols as h')
        ->join('users as a','a.id','h.usu_id')
        ->join('soldaduras as s','s.sol_id','h.sol_id')
        ->select('h.id','h.codigo','h.resultado','a.name','s.codigo','h.observacion','h.created_at','h.updated_at')
        ->where('h.sol_id','=',$id)
        ->where('h.estatus','=','true')
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

       $id= DB::table('his_sols')
         ->insertGetId([
            'codigo'=>$request['codigo'],
            'resultado'=>$request['resultado'],
            'observacion'=>$request['observacion'],
            'estatus'=>'true',
            'sol_id'=>$request['sol_id'],
            'usu_id'=>$request['usu_id'],
            'created_at'=>$date1
         ]);

         $result=$this->unit($id);

         return $result;

    }

   public function unit($id){
     
     $result= DB::table('his_sols as h')
        ->join('users as a','a.id','h.usu_id')
        ->join('soldaduras as s','s.sol_id','h.sol_id')
        ->select('h.id','h.codigo','h.resultado','a.name','s.codigo','h.observacion','h.created_at','h.updated_at')
        ->where('h.id','=',$id)
        ->where('h.estatus','=','true')
        ->get();
        return response()->json($result);

   }

    /**
     * Actualizar registros de inspaceccion de soladadura
     */
     
    public function update($request,$id){
       
        $date1=Carbon::now();
       
       $update=DB::table('his_sols')
       ->Where('id','=',$id)
       ->update([
        "codigo"=>$request->codigo,
        "resultado"=>$request->resultado,
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

       $update=DB::table('his_sols')
       ->Where('id','=',$id)
       ->update([
           "estatus"=>"false"  
       ]);
     
    return $update;

    }

}

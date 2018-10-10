<?php
namespace app\Http\Services\Pellizary;

//use App\Http\Services\Configuracion\PermisoService;
use App\Models\Soldadura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolService 
{
    public $soldaduras;

    public function __construct()
    {
        $this->table='soldaduras';
        $this->name = 'soldadura';
        $this->model = new Soldadura();
        $this->namePlural = 'soldaduras';

    }

    /**
     * @return json con el listado de registros
     */
    public function index(Request $request)
    {

        

        $this->soldaduras=DB::table($this->table)
       ->where('estatus','=','true')->get();   
        


        return response()->json($this->soldaduras);



    }

    public function show($id){
         $result=Soldadura::find($id);

        return $result;
    }

    /**
     * @param Request $request
     *
     */
    public function store(Request $request)
    {
       $soldaduras=Soldadura::create($request->all());
        return $soldaduras;
    }

    /**
     * Actualizar registros de inspaceccion de soladadura
     */
    public function update($request,$id){
        $soldaduras=Soldadura::find($id);

      $soldaduras->fill($request->all())
      ->save();
    }

    /**
     * @param $g_namePrimaryKey = nombre de la llave primaria
     * @param $x_pk = valor de la llave primaria
     * @param $g_status = nombre del campo status
     * @return _destroy de tatucoService
     */
    public function destroy($id)
    {

       $update=DB::table($this->table)
       ->Where('id','=',$id)
       ->update([
           "estatus"=>"false"  
       ]);
     
    return $update;

    }

}
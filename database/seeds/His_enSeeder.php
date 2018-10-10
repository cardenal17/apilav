<?php

use Illuminate\Database\Seeder;
use App\Models\His_en;

class His_enSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        His_en::create([
        	'codigo' =>'932743',
        	'resultado' =>'ensamblaje 1',
            'puesto'=>'3',
            'observacion'=>'1-2',
            'estatus'=>'true',
            'ens_id'=>'1',
            'usu_id'=>'1',
        ]);

        His_en::create([
        	'codigo' =>'932743',
        	'resultado' =>'ensamblaje 2',
            'puesto'=>'4',
            'observacion'=>'1-4',
            'estatus'=>'true',
            'ens_id'=>'1',
            'usu_id'=>'2',
        ]);

      
    }
}

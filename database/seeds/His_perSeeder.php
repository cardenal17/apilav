<?php

use Illuminate\Database\Seeder;
use App\Models\His_per;

class His_perSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        His_per::create([
        	'codigo' =>'9833422',
        	'resultado' =>'insp perforado 1',
            'puesto'=>'3',
            'observacion'=>'1-3',
            'estatus'=>'true',
            'per_id'=>'1',
            'usu_id'=>'1',
        ]);

        His_per::create([
        	'codigo' =>'932743',
        	'resultado' =>'insp perforado 2',
            'puesto'=>'4',
            'observacion'=>'1-4',
            'estatus'=>'true',
            'per_id'=>'1',
            'usu_id'=>'2',
        ]);
       
    }
}

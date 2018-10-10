<?php

use Illuminate\Database\Seeder;
use App\Models\His_sol;

class His_solSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        His_sol::create([
        	'codigo' =>'9833422',
        	'resultado' =>'insp perforado 1',
            'observacion'=>'1-3',
            'estatus'=>'true',
            'sol_id'=>'1',
            'usu_id'=>'1',
        ]);

        His_sol::create([
        	'codigo' =>'932743',
        	'resultado' =>'insp perforado 2',
            'observacion'=>'1-4',
            'estatus'=>'true',
            'sol_id'=>'1',
            'usu_id'=>'2',
        ]);
    }
}

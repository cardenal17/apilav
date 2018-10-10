<?php

use Illuminate\Database\Seeder;
use App\Models\Ensamblaje;

class EnsamblajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ensamblaje::create([
        	'codigo' =>'5466433',
        	'etiqueta' =>'ensamblaje 1',
            'cantidad'=>'3',
            'consecutivo'=>'1-2',
            'orden_pro'=>'879676',
            'estatus'=>'true',
        ]);

        Ensamblaje::create([
        	'codigo' =>'564439',
        	'etiqueta' =>'ensamblaje 2',
            'cantidad'=>'6',
            'consecutivo'=>'1-6',
            'orden_pro'=>'945483',
            'estatus'=>'true',
        ]);

        
    }
}

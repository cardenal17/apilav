<?php

use Illuminate\Database\Seeder;
use App\Models\Perforado;

class PerforadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perforado::create([
        	'codigo' =>'2378662',
        	'etiqueta' =>'perforado 1',
            'cantidad'=>'5',
            'consecutivo'=>'3-5',
            'orden_pro'=>'6585494',
            'capa'=>'8',
            'n_fab'=>'23567894',
            'estatus'=>'true',
        ]);

        Perforado::create([
        	'codigo' =>'4545362',
        	'etiqueta' =>'perforado 2',
            'cantidad'=>'20',
            'consecutivo'=>'1-5',
            'orden_pro'=>'55643',
            'capa'=>'4',
            'n_fab'=>'23455454',
            'estatus'=>'true',
        ]);
        
    }
}

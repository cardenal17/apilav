<?php

use Illuminate\Database\Seeder;
use App\Models\Soldadura;

class SoldadurasSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('soldaduras')->insert([
            'codigo' =>'2323432',
            'etiqueta' =>'prueba',
            'cantidad'=>'4',
            'consecutivo'=>'3-4',
            'orden_pro'=>'78865656',
            'estatus'=>'true',
        ]);
    }
}

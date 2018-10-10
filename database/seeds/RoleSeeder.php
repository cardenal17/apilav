<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
        	'name' =>'Administrador',
        	'slug' =>'Admin',
            'description'=>'El administrador contiene todos los permisos del sistema',
            'special'=>'all-access',
        ]);
        
    }
}

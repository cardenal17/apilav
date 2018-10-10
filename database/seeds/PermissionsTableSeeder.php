<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
        	'name' =>'Navegar usuarios',
        	'slug' =>'users.index',
        	'description'=>'lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
        	'name' =>'Ver detalle de usuario',
        	'slug' =>'users.show',
        	'description'=>'Ver detalle cada usuarios del sistema',
        ]);
        Permission::create([
        	'name' =>'Edicion de usuarios',
        	'slug' =>'users.edit',
        	'description'=>'Edita cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
        	'name' =>'Elimina usuarios',
        	'slug' =>'users.destroy',
        	'description'=>'elimina cualquier usuario del sistema',
        ]);

        //Roles
        Permission::create([
        	'name' =>'Navegar roles',
        	'slug' =>'roles.index',
        	'description'=>'lista y navega todos los roles del sistema',
        ]);
        Permission::create([
        	'name' =>'Ver detalle de rol',
        	'slug' =>'roles.show',
        	'description'=>'Ver detalle cada roles del sistema',
        ]);
        Permission::create([
        	'name' =>'Edicion de rol',
        	'slug' =>'roles.edit',
        	'description'=>'Edita cualquier dato de un usuario del sistema',
        ]);
         Permission::create([
        	'name' =>'Creacion de roles',
        	'slug' =>'roles.create',
        	'description'=>'Edita cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
        	'name' =>'Elimina roles',
        	'slug' =>'roles.destroy',
        	'description'=>'elimina cualquier roles del sistema',
        ]);

        //soldaduras
        Permission::create([
        	'name' =>'Navegar soldaduras',
        	'slug' =>'soldaduras.index',
        	'description'=>'lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
        	'name' =>'Ver detalle de soldaduras',
        	'slug' =>'soldaduras.show',
        	'description'=>'Ver detalle cada  soldaduras del sistema',
        ]);
        Permission::create([
        	'name' =>'Creacion de soldaduras',
        	'slug' =>'soldaduras.create',
        	'description'=>'Edita cualquier dato de una soldadura del sistema',
        ]);
        Permission::create([
        	'name' =>'Edicion de soldaduras',
        	'slug' =>'soldaduras.edit',
        	'description'=>'Edita cualquier dato de una soldadura del sistema',
        ]);
        Permission::create([
        	'name' =>'Elimina soldaduras',
        	'slug' =>'soldaduras.destroy',
        	'description'=>'elimina cualquier soldaduras del sistema',
		]);
		  //perforado
		  Permission::create([
        	'name' =>'Navegar perforado',
        	'slug' =>'perforados.index',
        	'description'=>'lista y navega todos los registros  del sistema',
        ]);
        Permission::create([
        	'name' =>'Ver detalle de perforados',
        	'slug' =>'perforados.show',
        	'description'=>'Ver detalle cada  inspeccion de perforado del sistema',
        ]);
        Permission::create([
        	'name' =>'Creacion de perforados',
        	'slug' =>'perforados.create',
        	'description'=>'Edita cualquier dato de una inspeccion de perforado del sistema',
        ]);
        Permission::create([
        	'name' =>'Edicion de perforados',
        	'slug' =>'perforados.edit',
        	'description'=>'Edita cualquier dato de una inspeccion del sistema',
        ]);
        Permission::create([
        	'name' =>'Elimina perforados',
        	'slug' =>'perforados.destroy',
        	'description'=>'elimina cualquier inspeccion del sistema',
        ]);
    }
}

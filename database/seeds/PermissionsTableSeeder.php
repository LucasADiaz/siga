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
        //Permisos de Usuarios
        Permission::create([
            'name'=>'Navegar usuarios',
            'slug'=>'users.index',
            'description'=>'Lista y navega todos los usuarios del sistema'
    ]);

    
        Permission::create([
            'name'=>'Ver detalles de usuario',
            'slug'=>'users.show',
            'description'=>'Ver en detalle cada usuario del sistema'
    ]);
         Permission::create([
           'name'=>'Creacion usuarios',
           'slug'=>'users.create',
           'description'=>'Crear un usuario del sistema'
    ]);
        Permission::create([
            'name'=>'Edicion usuarios',
            'slug'=>'users.edit',
            'description'=>'Editar cualquier dato de un usuario del sistema'
    ]);

        Permission::create([
            'name'=>'Eliminar usuarios',
            'slug'=>'users.destroy',
            'description'=>'Eliminar cualquier usuario del sistema'
    ]);

    //Roles

        Permission::create([
            'name'=>'Navegar roles',
            'slug'=>'roles.index',
            'description'=>'Lista y navega todos los roles del sistema'
    ]);


        Permission::create([
            'name'=>'Ver detalles de rol',
            'slug'=>'roles.show',
            'description'=>'Ver en detalle cada rol del sistema'
    ]);

        Permission::create([
            'name'=>'Creacion roles',
            'slug'=>'roles.create',
            'description'=>'crear un rol del sistema'
    ]);
        Permission::create([
            'name'=>'Edicion roles',
            'slug'=>'roles.edit',
            'description'=>'Editar cualquier dato de un rol del sistema'
    ]);

        Permission::create([
            'name'=>'Eliminar rol',
            'slug'=>'roles.destroy',
            'description'=>'Eliminar cualquier rol del sistema'
    ]);
    }
}

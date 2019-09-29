<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');


        // Creacion de  permissions

        //Usuarios
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.update']);
        Permission::create(['name' => 'users.destroy']);

        //Roles
        Permission::create(['name' => 'roles.create']);
        Permission::create(['name' => 'roles.index']);
        Permission::create(['name' => 'roles.update']);
        Permission::create(['name' => 'roles.destroy']);

        //Permisos
        Permission::create(['name' => 'permissions.create']);
        Permission::create(['name' => 'permissions.index']);
        Permission::create(['name' => 'permissions.update']);
        Permission::create(['name' => 'permissions.destroy']);

        //notas
        Permission::create(['name' => 'notas.create']);
        Permission::create(['name' => 'notas.index']);
        Permission::create(['name' => 'notas.update']);
        Permission::create(['name' => 'notas.destroy']);

        //asistencias
        Permission::create(['name' => 'asistencias.create']);
        Permission::create(['name' => 'asistencias.index']);
        Permission::create(['name' => 'asistencias.update']);
        Permission::create(['name' => 'asistencias.destroy']);



        // create roles and assign created permissions

        //Profesor
        $role = Role::create(['name' => 'Profesor']);
        $role->givePermissionTo([
                                'notas.create',
                                'notas.index',
                                'notas.update',
                                'notas.destroy'
        ]);


        //Directivos
        $role = Role::create(['name' => 'Directivos']);
        $role->givePermissionTo([
                                'users.create',
                                'users.index',
                                'users.update',
                                'users.destroy',
        ]);
     

        //Administrativos
        $role = Role::create(['name' => 'Administrativos']);
        $role->givePermissionTo([
                                'users.create',
                                'users.index',
                                'users.update',
                                'users.destroy',
                                'asistencias.create',
                                'asistencias.index',
                                'asistencias.update',
                                'asistencias.destroy',
                                'roles.create',
                                'roles.index',
                                'roles.update',
                                'roles.destroy'
        ]);


        
        $role = Role::create(['name' => 'Preceptor']);
        $role->givePermissionTo([
                                'asistencias.create',
                                'asistencias.index',
                                'asistencias.update',
                                'asistencias.destroy',
        ]);


        $role = Role::create(['name' => 'Super-admin']);

        $role->givePermissionTo([
                                'users.create',
                                'users.index',
                                'users.update',
                                'users.destroy',
                                'asistencias.create',
                                'asistencias.index',
                                'asistencias.update',
                                'asistencias.destroy',
                                'roles.create',
                                'roles.index',
                                'roles.update',
                                'roles.destroy',
                                'notas.create',
                                'notas.index',
                                'notas.update',
                                'notas.destroy'
        ]);



    }
}



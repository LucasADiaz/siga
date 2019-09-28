<?php


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Permission list
        Permission::create([
                    'name'=>'Navegar usuarios',
                    'guard_name' => 'products.index']);
        Permission::create([
                    'name'=>'Edicion usuarios',
                    'guard_name' => 'products.edit']);
        Permission::create([
                    'name'=>'Ver detalles de usuario',
                    'guard_name' => 'products.show']);
        Permission::create([
                    'name'=>'crear usuarios',
                    'guard_name' => 'products.create']);
        Permission::create([
                    'name'=>'Eliminar usuarios',
                    'guard_name' => 'products.destroy']);

        //Admin
        $admin = Role::create([
                    'name' => 'Admin',
                    'guard_name'=>'admin']);

        $admin->givePermissionTo([
            'products.index',
            'products.edit',
            'products.show',
            'products.create',
            'products.destroy'
        ]);
        //$admin->givePermissionTo('products.index');
        //$admin->givePermissionTo(Permission::all());

        //Guest
        $guest = Role::create([
                    'name' => 'Guest',
                    'guard_name'=>'guest']);

        $guest->givePermissionTo([
            'products.index',
            'products.show'
        ]);

        //User Admin
        $user = User::find(1); //Italo Morales
        $user->assignRole('Admin');


    //     //Permisos de Usuarios
    //     Permission::create([
    //         'name'=>'Navegar usuarios',
    //         'slug'=>'users.index',
    //         'description'=>'Lista y navega todos los usuarios del sistema'
    // ]);

    
    //     Permission::create([
    //         'name'=>'Ver detalles de usuario',
    //         'slug'=>'users.show',
    //         'description'=>'Ver en detalle cada usuario del sistema'
    // ]);
    //      Permission::create([
    //        'name'=>'Creacion usuarios',
    //        'slug'=>'users.create',
    //        'description'=>'Crear un usuario del sistema'
    // ]);
    //     Permission::create([
    //         'name'=>'Edicion usuarios',
    //         'slug'=>'users.edit',
    //         'description'=>'Editar cualquier dato de un usuario del sistema'
    // ]);

    //     Permission::create([
    //         'name'=>'Eliminar usuarios',
    //         'slug'=>'users.destroy',
    //         'description'=>'Eliminar cualquier usuario del sistema'
    // ]);

    // //Roles

    //     Permission::create([
    //         'name'=>'Navegar roles',
    //         'slug'=>'roles.index',
    //         'description'=>'Lista y navega todos los roles del sistema'
    // ]);


    //     Permission::create([
    //         'name'=>'Ver detalles de rol',
    //         'slug'=>'roles.show',
    //         'description'=>'Ver en detalle cada rol del sistema'
    // ]);

    //     Permission::create([
    //         'name'=>'Creacion roles',
    //         'slug'=>'roles.create',
    //         'description'=>'crear un rol del sistema'
    // ]);
    //     Permission::create([
    //         'name'=>'Edicion roles',
    //         'slug'=>'roles.edit',
    //         'description'=>'Editar cualquier dato de un rol del sistema'
    // ]);

    //     Permission::create([
    //         'name'=>'Eliminar rol',
    //         'slug'=>'roles.destroy',
    //         'description'=>'Eliminar cualquier rol del sistema'
    // ]);
     }
}
